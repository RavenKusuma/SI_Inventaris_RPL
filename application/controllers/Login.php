<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index()
  {
    $this->load->view('Home/v_login');
  }

  public function logindata()
	{
		$data = array('username' => $this->input->post('username'),
									'password' => $this->input->post('password'),
	 								);
    $cek = $this->login_m->check_data($data);

    if ($cek->num_rows() == 0) {
        $this->session->set_flashdata('message', 'data tidak ditemukan, silahkan coba lagi');
        redirect('Login');
    }

    else {

        $cek2 = $cek->result_array();
        $userdata = array('username' => $cek2[0]['username'],
                          'password' => $cek2[0]['password'],
                          'rule'     => "user"
                         );
        $this->session->set_userdata($userdata);
        redirect('User');
    }
	}
}