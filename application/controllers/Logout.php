<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->session->sess_destroy('login_id');
    $this->session->sess_destroy('user_name');
    redirect('Home');
  }
}
