<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login_model extends CI_Model
{
  public function insert_data($tablename, $data)
  {
    return $this->db->insert($tablename, $data);
  }

  public function auth($email)
  {
    $this->db->where('email', $email);
    return  $this->db->get('register')->row();
  }
}
