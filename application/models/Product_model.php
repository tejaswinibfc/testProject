<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product_model extends CI_Model
{
  public function insert_data($tablename, $data)
  {
    return $this->db->insert($tablename, $data);
  }

  public function all_pincode($tablename)
  {
    return $this->db->where('status', 1)->get($tablename)->result();
  }
}
