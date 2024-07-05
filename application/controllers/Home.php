<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library("form_validation");
    $this->load->model("Home_model");
  }
  public function index()
  {
    $data['category'] = $this->Home_model->all_category("category");
    $data['product'] = $this->Home_model->all_product("product");
    $this->load->view('frontend/home', $data);
  }
  public function product_details($slug)
  {
    $data['get_product'] = $this->Home_model->get_product($slug);
    $this->load->view('frontend/profile_details', $data);
  }
}
