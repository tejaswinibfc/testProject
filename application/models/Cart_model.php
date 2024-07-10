<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cart_model extends CI_Model
{

  public function get_user_id()
  {
    if (!empty($this->session->userdata('login_id'))) {
      return $this->session->userdata('login_id');
    } else {
      return $this->session->userdata('user_id');
    }
  }
  public function insert_data($tablename, $data)
  {
    return $this->db->insert($tablename, $data);
  }

  public function get_cart($tablename)
  {
    // $userId = $this->session->userdata('user_id');
    return  $this->db->where('user_id', $this->get_user_id())->get($tablename)->result();
  }

  public function delete_data($tablename, $productId)
  {
    // $userId = $this->session->userdata('user_id');
    $this->db->where('product_id', $productId);
    $this->db->where('user_id', $this->get_user_id());
    return  $this->db->delete($tablename);
  }
  public function total_cart($tablename)
  {
    // $userId = $this->session->userdata('user_id');
    $cart = $this->db->select('sum(product_price) as total_price')->where('user_id', $this->get_user_id())->get($tablename)->row();
    $total = $cart->total_price;
    if ($total > 499) {
      return  array('subTotal' => $total, 'grandTotal' => $total, 'delivery' => 0);
    } else {
      return  array('subTotal' => $total, 'grandTotal' => $total + 40, 'delivery' => 40);
    }
  }
}
