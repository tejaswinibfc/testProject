<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!empty($this->session->userdata('login_id'))) {
      // redirect('checkout');
    } else {
      redirect('login');
    }
  }
  public function index()
  {
    echo "wewe";
  //  $this->load->view('frontend/login');
  }
}
