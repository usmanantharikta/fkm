<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller
{

  public function __construct()
	{
		parent:: __construct();
		//$this->load->model('employ_model','admin_controller');
		 $this->load->helper('url_helper');
	}

  //load admin_view as index
  public function index()
  {
    $this->load->view('header');
    $this->load->view('admin_view');
    $this->load->view('footer');
  }


}
