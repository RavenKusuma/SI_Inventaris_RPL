<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function index()
	{
  		$this->load->view('Home/v_register');
	}

  public function registerdata()
	{
		$this->load->library('form_validation');
		$config = array(
	        array(
	                'field' => 'nrp',
	                'label' => 'NRP',
	                'rules' => 'required|is_unique[user.nrp]|numeric'
	        ),
	        array(
	                'field' => 'nama',
	                'label' => 'NAMA',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'no_tlp',
	                'label' => 'tlp',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'alamat',
	                'label' => 'ALAMAT',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'psw',
	                'label' => 'password',
	                'rules' => 'required'
	        )
    	);
		$this->form_validation->set_rules($config);
		if($this->form_validation->run() == FALSE)
		{
			echo validation_errors();
			echo "nrp sama";
		}
		else
		{
			$data = array('nama' => $this->input->post('nama') ,
					  'nrp' => $this->input->post('nrp'),
					  'no_telp' =>  $this->input->post('no_tlp'),
					  'alamat' => $this->input->post('alamat'),
					  'password' => password_hash( $this->input->post('psw'),PASSWORD_BCRYPT),
					  'status'=>2);
			echo "cek";
			print_r($data);
			/*if(password_verify ($this->input->post('psw'), $data['password'] ))
			{
				echo "benar";
			}*/
			$this->load->model('Cek');
			$x=$this->Cek->insert_data($data);
		}
		return "0";
		// //password_verify(passwordnya yang dimasukkan apa, password yang di database apa)
  //   // $this->load->model('Register_model');
  //   $this->register_m->insert_data($data);
  //   $this->session->set_flashdata('message', 'data tersimpan');
  //   redirect('Register');
	}
}
