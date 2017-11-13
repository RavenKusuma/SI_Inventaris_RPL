<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function index()
	{
  		$this->load->view('Home/v_register');
	}

  public function registerdata()
	{
		$data = array('username' => $this->input->post('username') ,
									'password' => $this->input->post('password')
								 );

    // $this->load->model('Register_model');
    $this->register_m->insert_data($data);
    $this->session->set_flashdata('message', 'data tersimpan');
    redirect('Register');
	}
}
