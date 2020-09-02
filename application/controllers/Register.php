<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index() {
		$this->load->view('templates_customer/header');
		$this->load->view('customer/register');
		$this->load->view('templates_customer/footer');
	}

	public function register_aksi() {
		$this->custom_rules();
		$this->custom_messages();

		$form_tidak_valid = $this->form_validation->run() === FALSE;

		if($form_tidak_valid) {
			$this->register();
		} else {
			$username							= $this->input->post('username');
			$password							= $this->input->post('password');
			$nama									= $this->input->post('nama');
			$gender								= $this->input->post('gender');
			$alamat								= $this->input->post('alamat');
			$no_telp							= $this->input->post('no_telp');
			$no_ktp								= $this->input->post('no_ktp');

			$data = array (
				'username'						=> $username,
				'password'						=> md5($password),
				'nama'								=> $nama,
				'gender'							=> $gender,
				'alamat'							=> $alamat,
				'no_telp'							=> $no_telp,
				'no_ktp'							=> $no_ktp
			);

			if($this->jartop_model->insert_data('customer', $data)){
				$this->flash_success();
				redirect('login');
			}
		}
	}

	public function custom_rules() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_telp', 'No. Telepon', 'required');
		$this->form_validation->set_rules('no_ktp', 'No. KTP', 'required');
	}

	public function custom_messages() {
		$this->form_validation->set_message('required', '%s wajib diisi!');
	}

	// private function hash_password($password){
	// 	return password_hash($password, PASSWORD_BCRYPT);
 	// }

	public function flash_success() {
		$this->session->set_flashdata('pesan', 'Register berhasil!');
	}
	
}
