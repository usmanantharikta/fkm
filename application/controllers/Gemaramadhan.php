<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gemaramadhan extends CI_Controller{
  var $user_type;

 public function __construct(){
  parent::__construct();
  $this->load->library(array('form_validation','session'));
  $this->load->helper(array('url','html','form'));
 }

 public function index(){
   $this->load->view('header');
   $this->load->view('gemaramadhan2016');
   $this->load->view('footer');
 }

 }
