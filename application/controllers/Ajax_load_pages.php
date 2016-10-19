<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajax_load_pages extends CI_Controller
{
  public function __construct()
  {
    parent:: __construct();
    $this->load->model('report_model');
    $this->load->helper('url_helper');
  }

  public function ajax_load_like_this()
  {
    $data['sum_status']=$this->report_model->get_sum_by(array("like_this.status", "sum(quantity) as sum" ),'like_this.status');
    $data['sum_gender']=$this->report_model->get_sum_by(array("person.gender", "like_this.status", "sum(like_this.quantity) as sum" ), array("person.gender" , "like_this.status"));
    $data['sum_location']=$this->report_model->get_sum_by(array("person.location", "like_this.status", "sum(like_this.quantity) as sum" ),array("person.location" , "like_this.status"));
    $data['sum_location_gender']=$this->report_model->get_sum_by(array("person.location","person.gender", "like_this.status", "sum(like_this.quantity) as sum" ),array("person.location" , "person.gender", "like_this.status"));
    $this->load->view('table_like',$data);
  }
  public function ajax_load_blue_thumb()
  {
    $data['sum_status']=$this->report_model->get_sum_by_blue(array("blue_thumbs.status", "sum(quantity) as sum" ),'blue_thumbs.status');
    $data['sum_gender']=$this->report_model->get_sum_by_blue(array("person.gender", "blue_thumbs.status", "sum(blue_thumbs.quantity) as sum" ), array("person.gender" , "blue_thumbs.status"));
    $data['sum_location']=$this->report_model->get_sum_by_blue(array("person.location", "blue_thumbs.status", "sum(blue_thumbs.quantity) as sum" ),array("person.location" , "blue_thumbs.status"));
    $data['sum_location_gender']=$this->report_model->get_sum_by_blue(array("person.location","person.gender", "blue_thumbs.status", "sum(blue_thumbs.quantity) as sum" ),array("person.location" , "person.gender", "blue_thumbs.status"));
    $this->load->view('table_blue_thumb',$data);
  }
  public function ajax_load_dislike()
  {
    $this->load->view('table_dislike');
  }
  public function ajax_load_saldo()
  {
    $data['sum_redeem']=$this->report_model->get_sum_red();
    $this->load->view('table_saldo',$data);
  }
  public function ajax_load_employee()
  {
    //$this->load->view('header');
    $this->load->view('employee_view');
  //  $this->load->view('footer');

  }
  public function ajax_load_report()
  {
    //$this->load->view('header');
    $this->load->view('report_view');
    //$this->load->view('footer');
  }
  //load saldo
  public function ajax_load_test()
  {
    $this->load->view('table_saldo');
  }
  public function ajax_load_reward()
  {
    $this->load->view('reward_view');
  }
  public function ajax_load_claim()
  {
    $this->load->view('claim_view');
  }
  public function ajax_claim()
  {
    $this->load->view('claim');
  }
  public function ajax_load_user(){
    $this->load->view('user_mng_view');
  }
  public function index(){
    //$this->load->view('header');
    $this->load->view('csvindex');
    //$this->load->view('footer');
  }

}
