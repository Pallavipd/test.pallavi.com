<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller {
	function __construct() {
		parent :: __construct();
		$this->load->database();
	}
	
	public function index() {
		$this->load->view('example');
	}

	public function show() {
		$data=array(
			'email'    => $this->input->post('email'),
			'password' => $this->input->post('password'),
		);
		$this->db->insert('details', $data);
		$data['rows'] = $this->db->query("SELECT * FROM details")->result();
		$this->load->view('try_table',$data);
	}
}
