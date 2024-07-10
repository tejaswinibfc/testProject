<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library("form_validation");
    $this->load->model('Register_model');
  }
  public function index()
  {
    $this->form_validation->set_rules('name', 'name', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[register.email]', ['is_unique' => 'This email already exist']);
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
    if ($this->form_validation->run() == false) {
      $this->load->view('frontend/register');
    } else {
      $data['user_id'] = mt_rand(11111, 99999);
      $data['name'] = $this->input->post('name');
      $data['email'] = $this->input->post('email');
      $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
      $data['status'] = 1;
      $this->Register_model->insert_data('register', $data);
      redirect('Home');
    }
  }
}
