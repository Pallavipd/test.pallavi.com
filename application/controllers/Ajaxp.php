<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxp extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
	}	

	function index() {
		$this->load->view('ajaxp');
	}

	function fetch_text() {
		echo 'This is a text line';
	}
	
	function fetch_html() {
		echo '<h1>Hello in Header</h1>';
	}

	function fetch_json() {
		$id = $this->input->get('id');
		if ($id > 0)
			$rows = $this->db->query("SELECT * FROM users WHERE id = ?", array($id))->result_array();
		else
			$rows = $this->db->query("SELECT * FROM users")->result_array();
		
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($rows); //, JSON_UNESCAPED_UNICODE);
	}
}