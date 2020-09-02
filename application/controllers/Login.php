<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		if($this->session->has_userdata('logged_in')) {
			return redirect(base_url("/"));
		}
		$this->load->view('templates_customer/header');
		$this->load->view('customer/login');
		$this->load->view('templates_customer/footer');
	}

	public function login_aksi() {
		$this->custom_rules();
		$this->custom_messages();

		$form_tidak_valid = $this->form_validation->run() === FALSE;

		if($form_tidak_valid) {
			$this->login();
		} else {
			$username							= $this->input->post('username');
			$password							= $this->input->post('password');

			$where = array(
				'username' => $username,
				'password' => md5($password)
			);

			$cek_akun_di_db = $this->jartop_model->get_data_where('customer', $where)->num_rows();

			$select = array(
				'id',
				'nama'
			);

			$user = $this->jartop_model->select_data_where('customer', $select, $where)->row();

			// $this->jartop_model->get_data_with_id('customer', $where)->num_rows();
			// $data['laptop']	= $this->jartop_model->get_data_with_id('laptop', $id)->result();
			
			if($cek_akun_di_db > 0){
				// akun ada 
				$data_session = array(
					'id'				=> $user->id,
					'nama' 			=> $user->nama
				);
	 
				$add_session = $this->session->set_userdata('logged_in', $data_session);
	 
				redirect(base_url("/"));
	 
			} else{
				echo "Username atau password salah!";
			}
		}
	}

	public function logout() {
		$remove_session = $this->session->unset_userdata('logged_in');
		redirect(base_url("/"));
	}

	public function custom_rules() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}

	public function custom_messages() {
		$this->form_validation->set_message('required', '%s wajib diisi!');
	}

	public function flash_success() {
		$this->session->set_flashdata('pesan', 'Login berhasil!');
	}
	
}
