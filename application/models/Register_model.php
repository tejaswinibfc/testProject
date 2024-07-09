<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Register_model extends CI_Model
{
  public function insert_data($tablename, $data)
  {
    return $this->db->insert($tablename, $data);
  }
}
