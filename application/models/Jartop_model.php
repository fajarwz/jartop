<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jartop_model extends CI_Model {
	 
	public function get_data($table) {
		return $this->db->get($table);
	}

	public function insert_data($table, $data) {
		return $this->db->insert($table, $data);
	}

	public function edit_data($table, $data, $id) {
		$this->db->where('id', $id);
		return $this->db->update($table, $data);
	}

	public function delete_data($table, $id) {
		$this->db->where('id', $id);
		return $this->db->delete($table);
	}

	public function get_data_with_id($table, $id) {
		$this->db->where('id', $id);
		return $this->db->get($table);
	}

	public function jadi_tidak_bertipe($table, $id_tipe) {
		$this->db->where('id_tipe', $id_tipe);

		$data = array(
			'id_tipe' => '1'
		);

		$this->db->set($data);
		return $this->db->update($table);
	}
	
}
