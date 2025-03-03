<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library("form_validation");
    $this->load->model("Category_model");
  }
  public function index()
  {
    $this->form_validation->set_rules('cate_name', 'Name', 'trim|required');
    $this->form_validation->set_rules('cate_status', 'Status', 'trim|required');
    if (empty($_FILES['cate_image']['name'])) {
      $this->form_validation->set_rules('cate_image', 'image', 'trim|required');
    }
    if ($this->form_validation->run() == false) {
      $data['category'] = $this->Category_model->all_category('category');
      $this->load->view('category', $data);
    } else {
      $config = array(
        'upload_path' => 'uploads/',
        'allowed_types' => 'jpg|jpeg|png|gif'
      );
      $this->load->library('upload', $config);
      $this->upload->do_upload('cate_image');
      $fdata = $this->upload->data();
      $data['cate_image'] = $fdata['file_name'];
      $data['cate_id'] = mt_rand(11111, 99999);
      $data['cate_name'] = $this->input->post('cate_name');
      $data['parent_id'] = $this->input->post('parent_cate');
      $data['slug'] = $this->slug($data['cate_name']);
      $data['status'] = $this->input->post('cate_status');
      $this->Category_model->insert_data('category', $data);
      $this->session->set_flashdata("success", "Category added successfully");
      redirect("Category");
    }
  }

  function slug($text)
  {
    return strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $text));
  }
}
