<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cart_model extends CI_Model
{

  public function insert_data($tablename, $data)
  {
    return $this->db->insert($tablename, $data);
  }

  public function get_cart($tablename)
  {
    $userId = $this->session->userdata('user_id');
    return  $this->db->where('user_id', $userId)->get($tablename)->result();
  }

  public function delete_data($tablename, $productId)
  {
    $userId = $this->session->userdata('user_id');
    $this->db->where('product_id', $productId);
    $this->db->where('user_id', $userId);
    return  $this->db->delete($tablename);
  }
}
