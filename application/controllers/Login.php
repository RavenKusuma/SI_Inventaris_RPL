<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index()
  {
    $this->load->view('Home/v_login');
  }

  public function lxogin()
	{
    //return "hehe";
		$data = array('username' => $this->input->post('uname'),
									'password' => $this->input->post('psw'),
	 								);
    $this->load->model('Cek');
    $x=$this->Cek->check_data($data);
    //print_r($cek);
    //print_r($data);
    echo $x=0;
    return "h";
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