<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library("form_validation");
    $this->load->model("Setting_model");
  }
  public function pincode()
  {
    $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required');
    $this->form_validation->set_rules('charges', 'Delivery charges', 'trim|required');
    $this->form_validation->set_rules('pin_status', 'Status', 'trim|required');
    if ($this->form_validation->run() == false) {
      $this->load->view('settings');
    } else {
      $data['pincode'] = $this->input->post('pincode');
      $data['delivery_charges'] = $this->input->post('charges');
      $data['status'] = $this->input->post('pin_status');
      $this->Setting_model->insert_data('pincode', $data);
      $this->session->set_flashdata("success", "Pincode added successfully");
      redirect("Setting/pincode");
    }
  }

  public function banner()
  {
    if (empty($_FILES['image']['name'])) {
      $this->form_validation->set_rules('image', 'image', 'trim|required');
    }
    $this->form_validation->set_rules('img_status', 'Status', 'trim|required');
    if ($this->form_validation->run() == false) {
      $this->load->view('banner');
    } else {
      $config = array(
        'upload_path' => 'uploads/',
        'allowed_types' => 'jpg|jpeg|png|gif'
      );
      $this->load->library('upload', $config);
      $this->upload->do_upload('image');
      $fdata = $this->upload->data();
      $data['bann_id'] = mt_rand(11111, 99999);
      $data['image'] = $fdata['file_name'];
      $data['status'] = $this->input->post('img_status');
      $this->Setting_model->insert_data('banner', $data);
      $this->session->set_flashdata("success", "Image added successfully");
      redirect("Setting/banner");
    };
  }
}
