<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function data($id) {
		$data['mobil']	= $this->jartop_model->get_data_with_id('mobil', $id)->result();
		$data['tipe']		= $this->jartop_model->get_data('tipe')->result();
		$this->load->view('templates_customer/header');
		$this->load->view('customer/detail', $data);
		$this->load->view('templates_customer/footer');
	}
	
}
