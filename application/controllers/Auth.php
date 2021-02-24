<?php
defined("BASEPATH") or exit ("No direct script access allowed");

class Auth extends CI_Controller {
  public function index() {
    if ($this->session->userdata('email')) {
      redirect('admin');
    }

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Page';

      $this->load->view('templates/header', $data);
      $this->load->view('auth/index');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

    // if there are admin
    if ($admin) {  
      // cek password
      if (password_verify($password, $admin['password'])) {
        $data = ['email' => $admin['email']];

        $this->session->set_userdata($data);
        redirect('admin');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password wrong</div>');
        redirect('auth');
      }    
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email has not been registered</div>');
      redirect('auth');
    }
  }

  public function logout() {
    $this->session->unset_userdata('email');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out</div>');
    redirect('auth');
  }
}