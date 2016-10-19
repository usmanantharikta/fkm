<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reward_ctr extends CI_Controller
{

  public function __construct()
  {
    parent:: __construct();
    $this->load->model('reward_model','reward_ctr');
    $this->load->helper('url_helper');
  }

  //redeem
	public function redeem_list_view()
	{
		$list=$this->reward_ctr->get_redeem();
		$data=array();
		$no=$_POST['start'];
		foreach ($list as $key )
		{
			$no++;
			$row=array();
			$row[]=$key->id_reward;
			$row[]=$key->name;
			$row[]=$key->date_create;
			$row[]=$key->date_exp;
			$row[]=$key->available_qty;
			$row[]=$key->value;
			$row[]=$key->like_this;
			$row[]=$key->blue_thumb;
			$row[]=$key->description;
			$row[] = '<a class="btn btn-sm btn-default" href="javascript:void()" title="Edit" onclick="edit_reward('."'".$key->id."'".')"><i class="glyphicon glyphicon-pencil"></i> </a>
								<a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_reward('."'".$key->id."'".')"><i class="glyphicon glyphicon-trash"></i> </a>
                <a class="btn btn-sm btn-default" href="javascript:void()" title="Claim" onclick="claim_reward('."'".$key->id_reward."'".')"><i class="glyphicon glyphicon-shopping-cart"></i> </a>';
			$data[]=$row;
		}
		$output=array(
				"draw"=>$_POST['draw'],
				"recordsTotal" => $this->reward_ctr->count_all_redeem(),
				"recordsFiltered" => $this->reward_ctr->count_filtered_redeem(),
				"data" => $data,
		);
		//print_r($outpu)
		echo json_encode($output);
		//return $data;
	}
//add reward
public function add_reward(){
  $data=array(
    'id_reward'=>$this->input->post('id_reward'),
    'name'=>$this->input->post('name'),
    'date_create'=>$this->input->post('date_create'),
    'date_exp'=>$this->input->post('date_exp'),
    'available_qty'=>$this->input->post('available_qty'),
    'value'=>$this->input->post('value'),
    'like_this'=>$this->input->post('like_this'),
    'blue_thumb'=>$this->input->post('blue_thumb'),
    'like'=>$this->input->post('like'),
    'blue'=>$this->input->post('blue'),
    'description'=>$this->input->post('description'),
  );
  $insert=$this->reward_ctr->ajax_save_reward($data);
  echo json_encode(array("status"=>TRUE));
}

//update
public function update_reward()
{
  $data=array(
    'id_reward'=>$this->input->post('id_reward'),
    'name'=>$this->input->post('name'),
    'date_create'=>$this->input->post('date_create'),
    'date_exp'=>$this->input->post('date_exp'),
    'available_qty'=>$this->input->post('available_qty'),
    'value'=>$this->input->post('value'),
    'like_this'=>$this->input->post('like_this'),
    'blue_thumb'=>$this->input->post('blue_thumb'),
    'like'=>$this->input->post('like'),
    'blue'=>$this->input->post('blue'),
    'description'=>$this->input->post('description'),
  );

  $this->reward_ctr->model_update_reward(array('id'=>$this->input->post('id')),$data);
  echo json_encode(array("status"=>TRUE));
}

//delete

	function control_delete_reward($id)
	{
		$this->reward_ctr->model_delete_reward($id);
		echo json_encode(array("status"=>TRUE));
	}

//Edit
public function control_edit_reward($id)
{
  $idtab='id';
  $data=$this->reward_ctr->get_by_id_reward($id,$idtab);
  echo json_encode($data);
}
public function control_claim_reward($id)
{
  $idtab='id_reward';
  $data['reward']=$this->reward_ctr->get_by_id_reward($id,$idtab);
  $data['list']=$this->reward_ctr->get_employ();
//  echo json_encode($dataa);
  //echo json_encode($list);
  $this->load->view('claim',$data);
}

public function show_poin($id,$table)
{
  $varlike="like_this";
  $varblue="blue_thumbs";

  if($table==$varlike)
  {
    $result=$this->reward_ctr->get_poin_will_use($id,$table);
    $data=array();
    foreach ($result as $poin)
    {
      $row=array();
      $row[]=$poin->employ_id;
      $row[]=$poin->name;
      $row[]=$poin->date;
      $row[]=$poin->quantity;
      $row[]=$poin->status;
      $row[]=$poin->remarks;
      $row[]=$poin->remarks_note;
      $row[] = '<a class="btn btn-sm btn-default" href="javascript:void()" title="Edit" onclick="use_like_this('."'".$poin->id."'".')"><i class="glyphicon glyphicon-pencil"></i> </a>';
      $data[]=$row;

    }
    $output=array(
      "data"=>$data,
    );
    echo json_encode($output);
  }

  else  if($table==$varblue){
    $list=$this->reward_ctr->get_poin_will_use($id,$table);
    $data= array();
    foreach ($list as $poin)
    {
      $row=array();
      $row[]=$poin->employ_id;
      $row[]=$poin->name;
      $row[]=$poin->date;
      $row[]=$poin->quantity;
      $row[]=$poin->status;
      $row[]=$poin->remarks;
      $row[]=$poin->remarks_note;



      $row[] = '<a class="btn btn-sm btn-default" href="javascript:void()" title="Edit" onclick="use_blue_thumb('."'".$poin->id."'".')"><i class="glyphicon glyphicon-pencil"></i> </a>';
      $data[]=$row;
    }
    $output=array(
      "data"=>$data,
    );
    echo json_encode($output);
  }


}

public function save_claim_ctr()
{
  $data=array(
    'reward_id'=>$this->input->post('id_reward'),
    'employ_id'=>$this->input->post('id_employ'),
    'date_claim'=>$this->input->post('date_claim'),
    'poin_used'=>$this->input->post('poin'),
    'note'=>$this->input->post('note'),
  );
  $insert=$this->reward_ctr->ajax_save_claim($data);
  echo json_encode(array("status"=>TRUE));
}

public function get_list_claim()
{
  $result=$this->reward_ctr->get_list_claim_model();
  $data=array();
  foreach ($result as $poin) {
    $row=array();
    $row[]=$poin->id;
    $row[]=$poin->id_employ;
    $row[]=$poin->name_employ;
    $row[]=$poin->name_reward;
    $row[]=$poin->date_claim;
  //  $row[]=$poin->poin_used;
    $row[]=$poin->note;
    $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void()" title="delete" onclick="delete_claim('."'".$poin->id."'".')"><i class="glyphicon glyphicon-trash"></i> </a>';
    $data[]=$row;

  }
  $output=array(
    "data"=>$data,
  );
  echo json_encode($output);

/*
  $data=array();
  foreach ($result as $key) {
    array_push($data, array(
      $key['id_employ'],
      $key['name_employ'],
      $key['date_claim'],
      $key['poin_used'],
      $key['note'],
    ));
  }
  echo json_encode(array('data'=>$data));

*/
}
public function control_delete_claim($id)
{
  $this->reward_ctr->delete_claim_model($id);
  echo json_encode(array("status"=>TRUE));
}








}
