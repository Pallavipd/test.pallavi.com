<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{
	//public function construct(){
	//parent :: _construct();
	//$this->load->database();
	//}
	function index(){
	$this ->load-> view("form");
	}
}