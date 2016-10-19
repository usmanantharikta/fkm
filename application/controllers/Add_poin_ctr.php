<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_poin_ctr extends CI_Controller
{
  public function __construct()
  {
    parent:: __construct();
    $this->load->model('add_poin_model','add_poin_ctr');
    $this->load->helper('url_helper');
  }

  	//add point like this
  	public function ajax_add_like_this()
  	{
  		$data = array(
  			'employ_id'=> $this->input->post('employ_id'),
  			'name' => $this->input->post('name'),
  			'date'=>$this->input->post('date'),
  			'quantity' => $this->input->post('quantity'),
  			'status' =>$this->input->post('status'),
  			'remarks' => $this->input->post('remarks'),
  			'remarks_note' => $this->input->post('remarks_note'),

  		);
  		$insert = $this->add_poin_ctr->save_like_this($data);
  		echo json_encode(array("status"=>TRUE));
  	}
  	//add point blue thumbs
  	public function ajax_add_blue_thumb()
  	{
  		$data = array(
  			'employ_id'=> $this->input->post('employ_id'),
  			'name' => $this->input->post('name'),
  			'date'=>$this->input->post('date'),
  			'quantity' => $this->input->post('quantity'),
  			'status' =>$this->input->post('status'),
  			'remarks' => $this->input->post('remarks'),
  			'remarks_note' => $this->input->post('remarks_note'),

  		);
  		$insert = $this->add_poin_ctr->save_blue_thumb($data);
  		echo json_encode(array("status"=>TRUE));
  	}

    //ajax add dislike

  public function add_poin_dislike()
  {
  	$data=array(
  		'employ_id'=>$this->input->post('employ_id'),
  		'name'=>$this->input->post('name'),
  		'date'=>$this->input->post('date'),
  		'qty'=>$this->input->post('quantity'),
  		'status'=>$this->input->post('status'),
  		'remarks'=>$this->input->post('remarks'),
  	);
  $insert=$this->add_poin_ctr->save_dislike($data);
  //print_r($data);
  	echo json_encode(array("status"=>TRUE));

  }

  public function ajax_like_this($id)
  {
    $data=$this->add_poin_ctr->get_by_id($id);
    echo json_encode($data);
  }
  //for add dislike by get id and name
  public function control_dislike($id)
  {
      $data=$this->add_poin_ctr->get_by_id($id);
      echo json_encode($data);
  }

  public function index(){
    //$this->load->view('header');
    $this->load->view('csvindex_blue');
    //$this->load->view('footer');
  }




}
