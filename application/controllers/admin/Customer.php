<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$cek_session_admin = $this->session->has_userdata('admin_logged_in');

		if(!$cek_session_admin) {
			return redirect(base_url("/admin/login"));
		}
	}
	 
	public function index() {
		$data['customer'] 	= $this->jartop_model->get_data('customer')->result();
		$data['no'] 			= 1;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/customer/index', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/footer');
	}
	
}
