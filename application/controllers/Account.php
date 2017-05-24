<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function index()
	{
		$this->load->view('register');
	}
	public function register()
	{
		$this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username','required|min_length[5]|max_length[12]|is_unique[users.username]',
        	array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                ));
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('register');
        }
        else
        {
            $this->load->view('success');
        }
		//echo $username = $this->input->post('username');
    }
}