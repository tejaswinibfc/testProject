<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('user_id')) {
    } else {
      $this->session->set_userdata('user_id', mt_rand(11111, 99999));
    }
    $this->load->library("form_validation");
    $this->load->model("Cart_model");
  }
  public function index()
  {
    $data['cart'] = $this->Cart_model->get_cart('cart');
    $this->load->view('frontend/cart', $data);
  }
  public function add_to_cart()
  {
    $productId = $this->input->post('pro_id');
    $userId = $this->session->userdata('user_id');
    $exits_user = $this->db->where(['product_id' => $productId, 'user_id' => $userId])->get('cart');
    if ($exits_user->num_rows()) {
      $this->session->set_flashdata('error', "Product already added to cart");
    } else {
      //get product id from product table
      $product_data = $this->db->where('product_id', $productId)->get('product')->row();
      $data = array(
        'user_id' => $userId,
        'cart_id' => mt_rand(11111, 99999),
        'product_qty' => $this->input->post('cart_qty'),
        'product_id' => $product_data->product_id,
        'product_name' => $product_data->product_name,
        'product_price' => $product_data->mrp,
        'product_image' => $product_data->prod_main_image,
        'slug' => $product_data->slug,
      );
      $this->Cart_model->insert_data('cart', $data);
      $this->session->set_flashdata('success', 'Product  added to cart');
    }
    redirect("Cart");
  }

  public function update_cart()
  {
    $userId = $this->session->userdata('user_id');
    $product = $this->input->post('product_id');
    $cart = $this->input->post('cart_qty');
    foreach ($product as $key => $cart_data) {
      $data = [
        'product_id' => $cart_data,
        // 'product_id' => $product[$key],
        'product_qty' => $cart[$key],
      ];
      $this->db->where(['user_id' => $userId, 'product_id' => $product[$key]])->update('cart', $data);
    }
    $this->session->set_flashdata('success', 'Product  updated to cart');
    redirect("Cart");
  }

  public function delete_cart($product_id)
  {
    $this->Cart_model->delete_data('cart',$product_id);
    $this->session->set_flashdata('success', 'Product  deleted to cart');
    redirect("Cart");
  }
}
