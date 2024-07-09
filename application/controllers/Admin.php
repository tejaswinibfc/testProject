<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->load->view('login');
  }

  public function user_login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $get_data = $this->db->where('email', $email)->get('users')->row();
    if (password_verify($password, $get_data->password)) {
      $data = array(
        "user_id" => $get_data->id,
        "user_email" => $get_data->email,
        "logged_in" => true,
      );
      $this->session->set_userdata("User", $data);
      $this->load->view('index');
    } else {
      $this->session->set_flashdata('error', "Invalid Credentails");
      redirect('Login');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('User');
    redirect('Login');
  }
}
