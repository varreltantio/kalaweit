<?php
defined("BASEPATH") or exit ("No direct script access allowed");

class Admin extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kalaweit_model');
		$this->load->library('upload');

    if (!$this->session->userdata('email')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $data['title'] = 'Misi Kalaweit';
    $data['navbar'] = 'misi';

    $data['admin'] = $this->Kalaweit_model->get_admin();
    $data['missions'] = $this->Kalaweit_model->get_misi();

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_navbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/admin_footer');
  }

  public function program()
  {
    $data['title'] = 'Program Kalaweit';
    $data['navbar'] = 'program';

    $data['admin'] = $this->Kalaweit_model->get_admin();
    $data['programs'] = $this->Kalaweit_model->get_program();

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_navbar', $data);
    $this->load->view('admin/program', $data);
    $this->load->view('templates/admin_footer');
  }

  public function edit()
  {
    $id = $this->input->get('id');
    $nama = $this->input->get('name');

    $data['title'] = 'Edit';

    if ($nama == 'program') {
      $data['navbar'] = 'program';
      $data['content'] = $this->Kalaweit_model->get_program_detail($id);
    } else {
      $data['navbar'] = 'misi';
      $data['content'] = $this->Kalaweit_model->get_misi_detail($id);
    }

    $data['admin'] = $this->Kalaweit_model->get_admin();

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_navbar', $data);
    $this->load->view('admin/edit', $data);
    $this->load->view('templates/admin_footer'); 
  }

  public function save(){
		$id = $this->input->post('id',TRUE);
		$name = $this->input->post('name',TRUE);
		$title = $this->input->post('title',TRUE);
		$description = $this->input->post('contents',TRUE);

		// jika ada gambar yang diupload
    $upload_image = $_FILES['image']['name'];

    if ($upload_image) {
      $newFileName = strtolower(random_string('alnum', 4)) . time();

      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']     = '2048';
      $config['upload_path'] = './assets/img/' . $name . "/";
      $config['file_name'] = $newFileName;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ($this->upload->do_upload('image')) {   
        $new_image = $this->upload->data('file_name');
        $this->db->set('thumbnail', $new_image);
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
        if ($name == 'misi') {
          redirect('admin');
        } else {
          redirect('admin/' . $name);
        }
      }
    }

    $this->db->set('title', $title);
    $this->db->set('description', $description);
    $this->db->where('id', $id);
    $this->db->update($name);

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $name  . ' telah diperbarui</div>');
    if ($name == 'misi') {
      redirect('admin');
    } else {
      redirect('admin/' . $name);
    }
	}

	//Upload image summernote
	public function upload_image(){
		if(isset($_FILES["image"]["name"])){
			$config['upload_path'] = './assets/img/desc/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('image')){
				$this->upload->display_errors();
				return FALSE;
			} else {
				$data = $this->upload->data();
        //Compress Image
        $config['image_library']='gd2';
        $config['source_image']='./assets/img/desc/'. $data['file_name'];
        $config['create_thumb']= FALSE;
        $config['maintain_ratio']= TRUE;
        $config['quality']= '60%';
        $config['width']= 800;
        $config['height']= 800;
        $config['new_image']= './assets/img/desc/' . $data['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
				echo base_url().'assets/img/desc/'.$data['file_name'];
			}
		}
	}

	//Delete image summernote
	public function delete_image(){
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if(unlink($file_name)){
	    echo 'File Delete Successfully';
	  }
	}
}