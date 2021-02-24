<?php

class Kalaweit_model extends CI_Model
{
  public function get_admin()
  {
    return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
  }

  public function get_misi()
  {
    return $this->db->get('misi')->result_array();
  }

  public function get_program()
  {
    return $this->db->get('program')->result_array();
  }

  public function get_misi_detail($id)
  {
    return $this->db->get_where('misi', ['id' => $id])->row_array();
  }

  public function get_program_detail($id)
  {
    return $this->db->get_where('program', ['id' => $id])->row_array();
  }
}