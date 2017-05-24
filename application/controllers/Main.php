<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->database();
	}

	public function index() {
		if ($this->input->post('email')) {
			$data = array(
				'email'    => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'repeate'  => $this->input->post('repeate'),
				
				);
			$this->db->insert('users', $data);
		}
		
		$data['rows'] = $this->db->query("SELECT * FROM users")->result();
		$this->load->view('main', $data);
	}
}	