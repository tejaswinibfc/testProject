<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library("form_validation");
    $this->load->model("Category_model");
  }
  public function index()
  {
    $data['category'] = $this->Category_model->all_category('category');
    $this->load->view('product', $data);
  }

  public function get_category()
  {
    echo "1";
    // $cate_id=$this->input->post('id');
    // print_r($cate_id);
  }
}
