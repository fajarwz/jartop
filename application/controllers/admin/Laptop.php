<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptop extends CI_Controller {
	 
	public function index() {
		$data['laptop'] 	= $this->jartop_model->get_data('laptop')->result();
		$data['no'] 			= 1;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/laptop/index', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/footer');
	}
	
	public function tambah() {
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/laptop/tambah');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi() {
		$this->custom_rules();
		$this->custom_messages();

		if($this->form_validation->run() === FALSE) {
			$this->tambah();
		} else {
			$merk									= $this->input->post('merk');
			$processor						= $this->input->post('processor');
			$storage							= $this->input->post('storage');
			$ram									= $this->input->post('ram');
			$vga									= $this->input->post('vga');
			$ukuran_layar					= $this->input->post('ukuran_layar');
			$os										= $this->input->post('os');
			$port_usb							= $this->input->post('port_usb');
			$is_cd_rom						= $this->input->post('is_cd_rom');
			$daya_tahan_baterai		= $this->input->post('daya_tahan_baterai');
			$harga_sewa						= $this->input->post('harga_sewa');
			$status								= $this->input->post('status');
			$gambar								= $_FILES['gambar']['name'];

			$data = array (
				'merk'								=> $merk,
				'processor'						=> $processor,
				'storage'							=> $storage,
				'ram'									=> $ram,
				'vga'									=> $vga,
				'ukuran_layar'				=> $ukuran_layar,
				'os'									=> $os,
				'port_usb'						=> $port_usb,
				'is_cd_rom'						=> $is_cd_rom,
				'daya_tahan_baterai'	=> $daya_tahan_baterai,
				'harga_sewa'					=> $harga_sewa,
				'status'							=> $status
			);

			if($gambar !== '') {
				$config['upload_path']		= './assets/upload/';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('gambar')) {
					echo "Gambar gagal diupload";
				} else {
					$gambar = $this->upload->data('file_name');
				}

				$data['gambar'] = $gambar;
			}

			if($this->jartop_model->insert_data('laptop', $data)){
				$this->flash_success_tambah();
				redirect('admin/laptop/index');
			}
		}
	}

	public function edit($id) {
		$data['laptop']	= $this->jartop_model->get_data_with_id('laptop', $id)->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/laptop/edit', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/footer');
	}

	public function edit_aksi() {
		$this->custom_rules();
		$this->custom_messages();

		if($this->form_validation->run() == FALSE) {
			$this->edit();
		} else {
			$merk									= $this->input->post('merk');
			$processor						= $this->input->post('processor');
			$storage							= $this->input->post('storage');
			$ram									= $this->input->post('ram');
			$vga									= $this->input->post('vga');
			$ukuran_layar					= $this->input->post('ukuran_layar');
			$os										= $this->input->post('os');
			$port_usb							= $this->input->post('port_usb');
			$is_cd_rom						= $this->input->post('is_cd_rom');
			$daya_tahan_baterai		= $this->input->post('daya_tahan_baterai');
			$harga_sewa						= $this->input->post('harga_sewa');
			$status								= $this->input->post('status');
			$gambar								= $_FILES['gambar']['name'];

			$data = array (
				'merk'								=> $merk,
				'processor'						=> $processor,
				'storage'							=> $storage,
				'ram'									=> $ram,
				'vga'									=> $vga,
				'ukuran_layar'				=> $ukuran_layar,
				'os'									=> $os,
				'port_usb'						=> $port_usb,
				'is_cd_rom'						=> $is_cd_rom,
				'daya_tahan_baterai'	=> $daya_tahan_baterai,
				'harga_sewa'					=> $harga_sewa,
				'status'							=> $status
			);

			if($gambar !== '') {
				$config['upload_path']		= './assets/upload/';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('gambar')) {
					echo "Gambar gagal diupload";
				} else {
					$gambar = $this->upload->data('file_name');
				}

				$data['gambar']	= $gambar;
			}

			if($this->jartop_model->edit_data('laptop', $data, $id)){
				$this->flash_success_edit();
				redirect('admin/laptop/index');
			}
		}
	}

	public function hapus($id) {
		if($this->jartop_model->delete_data('laptop', $id)){
			$this->flash_success_hapus();
			redirect('admin/laptop/index');
		}
	}

	public function detail($id) {
		$data['laptop']	= $this->jartop_model->get_data_with_id('laptop', $id)->row();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/laptop/detail', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/footer');
	}

	public function custom_rules() {
		$this->form_validation->set_rules('merk', 'Merk', 'required');
		$this->form_validation->set_rules('processor', 'Processor', 'required');
		$this->form_validation->set_rules('storage', 'Storage', 'required');
		$this->form_validation->set_rules('ram', 'RAM', 'required');
		$this->form_validation->set_rules('vga', 'VGA', 'required');
		$this->form_validation->set_rules('ukuran_layar', 'Ukuran Layar', 'required');
		$this->form_validation->set_rules('os', 'OS', 'required');
		$this->form_validation->set_rules('port_usb', 'Port USB', 'required');
		$this->form_validation->set_rules('is_cd_rom', 'CD-ROM', 'required');
		$this->form_validation->set_rules('daya_tahan_baterai', 'Daya Tahan Baterai', 'required');
		$this->form_validation->set_rules('harga_sewa', 'Harga Sewa', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
	}

	public function custom_messages() {
		$this->form_validation->set_message('required', '%s wajib diisi!');
	}

	public function flash_success_tambah() {
		$this->session->set_flashdata('pesan', 'Data berhasil ditambahkan!');
	}

	public function flash_success_edit() {
		$this->session->set_flashdata('pesan', 'Data berhasil diedit!');
	}

	public function flash_success_hapus() {
		$this->session->set_flashdata('pesan', 'Data berhasil dihapus!');
	}
	
}
