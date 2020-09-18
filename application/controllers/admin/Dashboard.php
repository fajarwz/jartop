<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$cek_session_admin = $this->session->has_userdata('admin_logged_in');

		if(!$cek_session_admin) {
			return redirect(base_url("/admin/login"));
		}
	}
	 
	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/footer');
	}
	
}
