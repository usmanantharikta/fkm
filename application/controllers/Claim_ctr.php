<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Claim_ctr extends CI_Controller
{

  public function __construct()
  {
    parent:: __construct();
    $this->load->model('claim_model','claim_ctr');
    $this->load->model('report_model');
    $this->load->model('reward_model');
    $this->load->model('add_poin_model');
    $this->load->helper('url_helper');
  }

  public function claim_process_ctr($id_employ)
  {
    $result['poin_like_this']=$this->claim_ctr->get_poin_by_id($id_employ);
    $result['poin_blue_thumb']=$this->claim_ctr->get_poin_blue_by_id($id_employ);
    $result['reward']=$this->claim_ctr->getreward();
    $result['person']=$this->claim_ctr->get_id_employ($id_employ);
    $this->load->view('claim_process',$result);
  }

  public function control_select_reward($id)
  {
    $data['reward']=$this->claim_ctr->get_reward_by_id($id);
  //  echo json_encode($dataa);
    //echo json_encode($list);
    $this->load->view('select_reward',$data);
  }

  //update poin like This
  public function use_poin_like_this(){
    $newqty=$this->input->post('selectpoin');
    $oldqty=$this->input->post('quantity');
    $oldqty=$oldqty-$newqty;
    $data= array(
      'employ_id'=>$this->input->post('employ_id'),
      'name'=> $this->input->post('name'),
      'date'=>$this->input->post('date'),
      'quantity'=>$oldqty,
      'status'=>$this->input->post('status'),
      'remarks'=>$this->input->post('remarks'),
      'remarks_note'=>$this->input->post('remarks_note'),
    );

    $dataa= array(
      'employ_id'=>$this->input->post('employ_id'),
      'name'=> $this->input->post('name'),
      'date'=>date("Y-m-d"),
      'quantity'=>$newqty,
      'status'=>"Redeemed",
      'remarks'=>$this->input->post('remarks'),
      'remarks_note'=>$this->input->post('remarks_note'),
    );
    $this->report_model->update_like_this(array('id'=>$this->input->post('id')),$data);
    $this->add_poin_model->save_like_this($dataa);
    echo json_encode(array("status"=>TRUE));
  }

  //update poin like This
  public function use_point_blue_thumb(){
    $newqty=$this->input->post('selectpoin');
    $oldqty=$this->input->post('quantity');
    $oldqty=$oldqty-$newqty;
    $data= array(
      'employ_id'=>$this->input->post('employ_id'),
      'name'=> $this->input->post('name'),
      'date'=>$this->input->post('date'),
      'quantity'=>$oldqty,
      'status'=>$this->input->post('status'),
      'remarks'=>$this->input->post('remarks'),
      'remarks_note'=>$this->input->post('remarks_note'),
    );

    $dataa= array(
      'employ_id'=>$this->input->post('employ_id'),
      'name'=> $this->input->post('name'),
      'date'=>date("Y-m-d"),
      'quantity'=>$newqty,
      'status'=>"Redeemed",
      'remarks'=>$this->input->post('remarks'),
      'remarks_note'=>$this->input->post('remarks_note'),
    );
    $this->report_model->update_blue_thumb(array('id'=>$this->input->post('id')),$data);
    $this->add_poin_model->save_blue_thumb($dataa);
    echo json_encode(array("status"=>TRUE));
  }

  public function save_calim_process()
  {
    $data=array(
      'reward_id'=>$this->input->post('id_reward'),
      'employ_id'=>$this->input->post('id_employ'),
      'date_claim'=>$this->input->post('date_claim'),
      'poin_used'=>"",
      'note'=>$this->input->post('note'),
    );
    $insert=$this->reward_model->ajax_save_claim($data);
    echo json_encode(array("status"=>TRUE));
  }


}
