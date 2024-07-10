<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function __construct() 
  {
    parent::__construct();
    if (!empty($this->session->userdata('login_id'))) {
      redirect('Checkout');
    }
    $this->load->library("form_validation");
    $this->load->model('Login_model');
  }

  public function index()
  {
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
    if ($this->form_validation->run() == false) {
      $this->load->view('frontend/login');
    } else {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $login = $this->Login_model->auth($email);
      if (password_verify($password, $login->password)) {
        $user_data = $login->user_id;
        $user_name = $login->name;

        $this->session->set_userdata('login_id', $user_data);
        $this->session->set_userdata('user_name', $user_name);
        $this->db->where('user_id', $this->session->userdata('user_id'))->update('cart', ['user_id' => $user_data]);
        $this->session->set_flashdata('success', "Login successfully");
        // redirect('Checkout');
        // by default
        redirect('Cart');
      } else {
        $this->session->set_flashdata('error', 'Invalid credentials');
        redirect('Login');
      }
    }
   
  }
}
