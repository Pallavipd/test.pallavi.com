<?php
define('BASEPATH') OR EXIT ('NO direct script access allowed')
class Form extends CI_Controller{
	function _construct(){
	parent :: _construct();
	$this->load->database();
	}

	public function index(){
		$this->input->post('')
	} 
}