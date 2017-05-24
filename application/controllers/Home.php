<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->database();
}

public function index() {
	$this->load->view('home_view');
	
}
public function count($id = 0) {

		if ($this->input->post('name')) {
			$row = array(
				'name' => $this->input->post('name'),
				'contact' => $this->input->post('contact'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
				'remarks' => $this->input->post('remarks'),
			);
			if ($id > 0)
				$this->db->update('informations', $row, array('id' => $id));
			else
				$this->db->insert('informations', $row);

			$data['row'] = $row;
		}

		if ($id > 0) {
			$data['row'] = $this->db->query("SELECT * FROM informations WHERE id = ?", array($id))->row_array();
		}
		
		$data['rows'] = $this->db->query("SELECT * FROM informations")->result();
		$this->load->view('home', $data);
	}
}
