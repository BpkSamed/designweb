<?php

namespace App\Controllers;

class login extends BaseController
{
    public function index()
    {
    $this->load->helper('form');
    $this->load->view('form_login');
    }
	 public function submit() {
		 
  $this->load->library('form_validation');
  $this->form_validation->set_rules('username', 'Username', 'required');
  $this->form_validation->set_rules('password', 'Password', 'required');

  if ($this->form_validation->run() == FALSE) {
    //error
    $this->load->helper('form');
    $this->load->view('form_login');
  } else {
    //berhasil
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    

    if ($username == "aku" && $password == "123") {
      
	  $this->load->view('form_login');
    } else {
      // Jika login gagal, tampilkan kembali halaman form login beserta pesan error
      $data['error'] = 'Username atau password salah';
      $this->load->helper('form');
      $this->load->view('form_login', $data);
    }
  }
  }
}