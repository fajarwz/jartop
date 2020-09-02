<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function data($id) {
		$data['laptop']	= $this->jartop_model->get_data_with_id('laptop', $id)->row();
		$this->load->view('templates_customer/header');
		$this->load->view('customer/detail', $data);
		$this->load->view('templates_customer/footer');
	}

	public function rental($id) {
		
	}
	
}
