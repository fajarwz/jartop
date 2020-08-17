<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	 
	public function index() {
		$data['mobil'] 	= $this->jartop_model->get_data('mobil')->result();
		$data['tipe'] 	= $this->jartop_model->get_data('tipe')->result();
		$this->load->view('templates_customer/header');
		$this->load->view('customer/dashboard', $data);
		$this->load->view('templates_customer/footer');
	}
	
}
