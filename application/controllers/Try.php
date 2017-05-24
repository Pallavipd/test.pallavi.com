<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Try extends CI_Controller {
	function __construct() {
		parent :: __construct();
		$this->load->database();
	}
	public function index($id=0){
		$data=array(
			'email'=>$this->input->post('email'
			'password'=>$this->input->post('password'),

			);
		$this->db->insert('details', $data);
		$this->load->view('try',$data);
	}

	public function show(){
		$data['rows'] = $this->db->query("SELECT * FROM details")->result();
		$this->load->view('try_table',$data);
	}

}
