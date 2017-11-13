<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function index()
  {
    // $this->load->view('home/v_login');
    $data = array('username' => $this->session->userdata('username') ,
                  'password' => $this->session->userdata('password'),
                  'rule'     => $this->session->userdata('rule')
                 );

    $this->load->view('v_header',$data);
    $this->load->view('User/v_dashboard',$data);
    $this->load->view('v_footer');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('Login');
  }
}