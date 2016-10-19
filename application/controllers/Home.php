<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
  var $user_type;

 public function __construct(){
  parent::__construct();
  $this->load->library(array('form_validation','session'));
  $this->load->helper(array('url','html','form'));
  $this->load->model('home_model');
 }

 public function index(){
  $data['agenda']=$this->home_model->get_agenda();
  $this->load->view('header');
  $this->load->view('home_view',$data);
  $this->load->view('footer');
}
public function detail(){
  $data['agenda']=$this->home_model->get_agenda();
  $this->load->view('header');
  $this->load->view('detail',$data);
  $this->load->view('footer');
}

 public function gemaramadhan2016(){
   $this->load->view('header');
   $this->load->view('gemaramadhan2016');
   $this->load->view('footer');
 }
public function load_page_bph(){
    $this->load->view('bph');
}

 }
