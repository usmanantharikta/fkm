<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin_controller extends CI_Controller
{

  public function __construct()
	{
		parent:: __construct();
		//$this->load->model('employ_model','admin_controller');
     $this->load->model('super_admin_mdl','super_admin_controller');
		 $this->load->helper('url_helper');
	}

  //load admin_view as index
  public function index()
  {
    $this->load->view('header_super');
    $this->load->view('admin_view');
    $this->load->view('footer');
  }

  //redeem
  public function user_list()
  {
    $list=$this->super_admin_controller->get_list_user();
    $data=array();
    $no=$_POST['start'];
    foreach ($list as $key )
    {
      $no++;
      $row=array();
      $row[]=$key->USER_ID;
      $row[]=$key->USER_NAME;
      $row[]=sha1($key->PASSWORD);
      $row[]=$key->FIRST_NAME;
      $row[]=$key->LAST_NAME;
      $row[]=$key->user_type;
      $row[] = '<a class="btn btn-sm btn-default" href="javascript:void()" title="Edit" onclick="edit_user('."'".$key->id."'".')"><i class="glyphicon glyphicon-pencil"></i> </a>
                <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_user('."'".$key->id."'".')"><i class="glyphicon glyphicon-trash"></i> </a>';
      $data[]=$row;
    }
    $output=array(
        "draw"=>$_POST['draw'],
        "recordsTotal" => $this->super_admin_controller->count_all(),
        "recordsFiltered" => $this->super_admin_controller->count_filtered(),
        "data" => $data,
    );
    //print_r($outpu)
    echo json_encode($output);
    //return $data;
  }

  public function control_delete_user($id)
  {
    $this->super_admin_controller->delete_user_model($id);
    echo json_encode(array("status"=>TRUE));
  }

  //Edit
  public function control_edit_user($id)
  {
    $data=$this->super_admin_controller->get_by_id_user($id);
    echo json_encode($data);
  }

  public function  ajax_add_user(){
    $data=array(
      'USER_ID'=>$this->input->post('id_user'),
      'USER_NAME'=>$this->input->post('user_name'),
      'PASSWORD'=>$this->input->post('password'),
      'FIRST_NAME'=>$this->input->post('first_name'),
      'LAST_NAME'=>$this->input->post('last_name'),
      'user_type'=>$this->input->post('user_type'),
    );

    $insert=$this->super_admin_controller->save_user($data);
    echo json_encode(array("status"=>TRUE));
  }

  public function  ajax_update_user(){
    $data=array(
      'USER_ID'=>$this->input->post('user_id'),
      'USER_NAME'=>$this->input->post('user_name'),
      'PASSWORD'=>$this->input->post('password'),
      'FIRST_NAME'=>$this->input->post('first_name'),
      'LAST_NAME'=>$this->input->post('last_name'),
      'user_type'=>$this->input->post('user_type'),
    );
    $this->super_admin_controller->update_user(array('id'=>$this->input->post('id')),$data);
    echo json_encode(array("status"=>TRUE));
  }




}
