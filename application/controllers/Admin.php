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

  public function save() {
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

        if ($name == 'misi') {
          $data['content'] = $this->Kalaweit_model->get_misi_detail($id);
        } else {
          $data['content'] = $this->Kalaweit_model->get_program_detail($id);
        }

        unlink(FCPATH . 'assets/img/' . $name . '/' . $data['content']['thumbnail']);   

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
	public function upload_image() {
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
	public function delete_image() {
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if(unlink($file_name)){
	    echo 'File Delete Successfully';
	  }
	}

  public function profile() {
    $data['title'] = 'Profile';
    $data['navbar'] = 'profile';

    $data['admin'] = $this->Kalaweit_model->get_admin();
    $data['missions'] = $this->Kalaweit_model->get_misi();

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_navbar', $data);
    $this->load->view('admin/profile', $data);
    $this->load->view('templates/admin_footer');
  }

  public function changepassword()
  {
    $data['title'] = 'Change Password';
    $data['navbar'] = 'profile';

    $data['admin'] = $this->Kalaweit_model->get_admin();

    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'New Password', 'required|trim|min_length[6]|matches[new_password1]');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_navbar', $data);
      $this->load->view('admin/changepassword', $data);
      $this->load->view('templates/admin_footer');
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');

      if (!password_verify($current_password, $data['admin']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password</div>');
        redirect('admin/changepassword');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password</div>');
          redirect('admin/changepassword');
        } else {
          //  if password correct
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          // change password
          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('admin');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed</div>');
          redirect('admin/changepassword');
        }
      }
    }
  }

  public function youtube() {
    $data['title'] = 'Youtube';
    $data['navbar'] = 'youtube';

    $data['admin'] = $this->Kalaweit_model->get_admin();
    $data['youtubes'] = $this->Kalaweit_model->get_youtube();

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_navbar', $data);
    $this->load->view('admin/youtube', $data);
    $this->load->view('templates/admin_footer');
  }

  public function upload() {
		$title = $this->input->post('title',TRUE);
		$link = $this->input->post('link',TRUE);

		// jika ada gambar yang diupload
    $upload_image = $_FILES['image']['name'];

    if ($upload_image) {
      $newFileName = strtolower(random_string('alnum', 4)) . time();

      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']     = '2048';
      $config['upload_path'] = './assets/img/youtube/';
      $config['file_name'] = $newFileName;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ($this->upload->do_upload('image')) {   
        $thumbnail = $this->upload->data('file_name');

        $dataYoutube = [
          'title' => $title,
          'link' => $link,
          'thumbnail' => $thumbnail,
        ];

        $this->db->insert('youtube', $dataYoutube);

        $totalYT = $this->db->get('youtube')->num_rows();

        if ($totalYT > 5) {
          $youtube = $this->db->get('youtube')->row_array();
  
          unlink(FCPATH . 'assets/img/youtube/' . $youtube['thumbnail']);
  
          $this->db->where('id', $youtube['id']);
          $this->db->delete('youtube');
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Video telah ditambah</div>');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
        redirect('admin/youtube');
      }
    }

    redirect('admin/youtube');
	}
}