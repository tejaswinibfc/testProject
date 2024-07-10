<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library("form_validation");
    $this->load->model("Category_model");
    $this->load->model("Product_model");
  }
  public function index()
  {
    $this->form_validation->set_rules('category', 'category', 'trim|required');
    $this->form_validation->set_rules('sub_category', 'sub_category', 'trim|required');
    $this->form_validation->set_rules('product_name', 'Name', 'trim|required');
    $this->form_validation->set_rules('brand', 'brand', 'trim|required');
    $this->form_validation->set_rules('feature', 'feature', 'trim|required');
    $this->form_validation->set_rules('highlight', 'highlight', 'trim|required');
    $this->form_validation->set_rules('description', 'description', 'trim|required');
    $this->form_validation->set_rules('product_stock', 'product_stock', 'trim|required');
    $this->form_validation->set_rules('product_mrp', 'product_mrp', 'trim|required');
    $this->form_validation->set_rules('selling_price', 'selling_price', 'trim|required');
    $this->form_validation->set_rules('prod_status', 'Status', 'trim|required');
    if (empty($_FILES['prod_image']['name'])) {
      $this->form_validation->set_rules('prod_image', 'image', 'trim|required');
    }

    if ($this->form_validation->run() == false) {
      if ($this->session->userdata("product_id") != '') {
        $prod_id = $this->session->userdata("product_id");
      } else {
        $prod_id = $this->session->set_userdata("product_id", mt_rand(11111, 99999));
      }
      $data['prod_id'] = $prod_id;
      $data['category'] = $this->Category_model->all_category('category');
      $this->load->view('product', $data);
    } else {
      $config = array(
        'upload_path' => 'uploads/',
        'allowed_types' => 'jpg|jpeg|png|gif'
      );
      $this->load->library('upload', $config);
      $this->upload->do_upload('prod_image');
      $fdata = $this->upload->data();
      $data['prod_main_image'] = $fdata['file_name'];
      $data['product_id'] = $this->input->post('product_id');
      $data['category'] = $this->input->post('category');
      $data['sub_category'] = $this->input->post('sub_category');
      $data['product_name'] = $this->input->post('product_name');
      $data['brand'] = $this->input->post('brand');
      $data['feature'] = $this->input->post('feature');
      $data['highlights'] = $this->input->post('highlight');
      $data['description'] = $this->input->post('description');
      $data['meta_title'] = $this->input->post('meta_title');
      $data['meta_keyword'] = $this->input->post('meta_keyword');
      $data['meta_description'] = $this->input->post('meta_description');
      $data['stock'] = $this->input->post('product_stock');
      $data['mrp'] = $this->input->post('product_mrp');
      $data['selling_price'] = $this->input->post('selling_price');
      $data['slug'] = $this->slug($data['product_name']);
      $data['status'] = $this->input->post('prod_status');
      $this->session->unset_userdata("product_id");
      $this->Product_model->insert_data('product', $data);
      $this->session->set_flashdata("success", "Product added successfully");
      $this->session->set_userdata("product_id", mt_rand(11111, 99999));
      redirect("Product");
    }
  }

  function slug($text)
  {
    return strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $text));
  }

  public function get_category()
  {
    $cate_id = $this->input->post('id');
    $data['category'] = $this->Category_model->all_subcategory('category', $cate_id);
    echo json_encode($data);
  }

  
  
}
