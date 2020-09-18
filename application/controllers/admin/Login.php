<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	if($this->session->has_userdata('admin_logged_in')) {
	// 		return redirect(base_url("/admin"));
	// 	}
	// }

	public function index() {
		$cek_session_admin = $this->session->has_userdata('admin_logged_in');

		if($cek_session_admin) {
			return redirect(base_url("/admin"));
		}
		$this->load->view('templates_admin/header');
		$this->load->view('admin/login');
		// $this->load->view('templates_admin/footer');
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

			$cek_akun_di_db = $this->jartop_model->get_data_where('admin', $where)->num_rows();

			$select = array(
				'id',
				'nama'
			);

			$user = $this->jartop_model->select_data_where('admin', $select, $where)->row();

			// $this->jartop_model->get_data_with_id('customer', $where)->num_rows();
			// $data['laptop']	= $this->jartop_model->get_data_with_id('laptop', $id)->result();
			
			if($cek_akun_di_db > 0){
				// akun ada 
				$data_session = array(
					'id'				=> $user->id,
					'nama' 			=> $user->nama
				);
	 
				$add_session = $this->session->set_userdata('admin_logged_in', $data_session);
	 
				$this->flash_success_login();
				return redirect(base_url("/admin"));
	 
			} else{
				echo "Username atau password salah!";
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
	}

	public function flash_success_logout() {
		$this->session->set_flashdata('pesan', 'Logout berhasil!');
	}
	
}
