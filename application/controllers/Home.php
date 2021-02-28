<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct () {
    parent::__construct();
    $this->load->model('Kalaweit_model');
  }

  public function index() {
    $data['title'] = 'Kalaweit';
    $data['missions'] = $this->Kalaweit_model->get_misi();
    $data['programs'] = $this->Kalaweit_model->get_program();
    $data['youtubes'] = $this->Kalaweit_model->get_youtube();
    
    $this->load->view('templates/header', $data);
    $this->load->view('home/index');
    $this->load->view('templates/footerHome');
  }

  public function misi() {
    $id = $this->input->get('id');

    $data['title'] = 'Misi Kalaweit';
    $data['misi'] = $this->Kalaweit_model->get_misi_detail($id);
    $data['missions'] = $this->Kalaweit_model->get_misi();

    $this->load->view('templates/header', $data);
    $this->load->view('home/misi', $data);
    $this->load->view('templates/footerDefault');
  }

  public function program() {
    $id = $this->input->get('id');

    $data['title'] = 'Program Kalaweit';
    $data['program'] = $this->Kalaweit_model->get_program_detail($id);
    $data['programs'] = $this->Kalaweit_model->get_program();
    
    $this->load->view('templates/header', $data);
    $this->load->view('home/program', $data);
    $this->load->view('templates/footerDefault');
  }

  public function butik() {
    $data['title'] = 'Butik Kalaweit';
    
    $this->load->view('templates/header', $data);
    $this->load->view('home/butik');
    $this->load->view('templates/footerDefault');
  }
}