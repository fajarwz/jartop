<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$cek_session_admin = $this->session->has_userdata('admin_logged_in');

		if($cek_session_admin) {
			return redirect(base_url("/admin"));
		}

		$this->load->view('templates_admin/header');
		$this->load->view('admin/login');
	}

	public function login_aksi() {
		$this->custom_rules();
		$this->custom_messages();

		$form_tidak_valid = $this->form_validation->run() === FALSE;

		if($form_tidak_valid) {
			$this->index();
		} else {
			$username							= $this->input->post('username');
			$password							= $this->input->post('password');

			$where = array(
				'username' => $username,
				'password' => md5($password)
			);

			$cek_akun_di_db = $this->jartop_model->get_data_where('admin', $where)->num_rows();

			$select = array(
				'id',
				'nama'
			);

			$user = $this->jartop_model->select_data_where('admin', $select, $where)->row();

			if($cek_akun_di_db > 0){
				// akun ada 
				$data_session = array(
					'id'				=> $user->id,
					'nama' 			=> $user->nama
				);
	 
				$remove_customer_session = $this->session->unset_userdata('logged_in');
				$add_admin_session = $this->session->set_userdata('admin_logged_in', $data_session);
	 
				$this->flash_success_login();
				return redirect(base_url("/admin"));
	 
			} else{
				$this->flash_failed_login();
				redirect(base_url("/admin/login"));
			}
		}
	}

	public function logout() {
		$remove_session = $this->session->unset_userdata('admin_logged_in');

		$this->flash_success_logout();
		return redirect(base_url("/admin/login"));
	}

	public function custom_rules() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}

	public function custom_messages() {
		$this->form_validation->set_message('required', '%s wajib diisi!');
	}

	public function flash_success_login() {
		$this->session->set_flashdata('pesan', 'Login berhasil!');
		$this->session->set_flashdata('tipe-pesan', 'success');
	}

	public function flash_failed_login() {
		$this->session->set_flashdata('pesan', 'Username atau password salah!');
		$this->session->set_flashdata('tipe-pesan', 'danger');
	}

	public function flash_success_logout() {
		$this->session->set_flashdata('pesan', 'Logout berhasil!');
		$this->session->set_flashdata('tipe-pesan', 'success');
	}
	
}
