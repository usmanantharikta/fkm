<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reward_model extends CI_Model {

  var $clm_redeem=array('id_reward','name','date_create','date_exp','available_qty','value','like_this','blue_thumb','like','blue','description');

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  private function _get_redeem()
  {
    $this->db->from('reward');

    $i = 0;

    foreach ($this->clm_redeem as $item)
    {
      if($_POST['search']['value'])
        ($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
        $clm_redeem[$i] = $item;
        $i++;
    }

    if(isset($_POST['order']))
    {
      $this->db->order_by($clm_redeem[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    }
    else if(isset($this->order))
    {
      $order = $this->order;
      $this->db->order_by(key($order), $order[key($order)]);
    }
  }

  function get_redeem()
  {
    $this->_get_redeem();
    if($_POST['length'] !=-1)
      $this->db->limit($_POST['length'],$_POST['start']);
      $query=$this->db->get();
      return $query->result();
  }

  function count_filtered_redeem()
  {
    $this->_get_redeem();
    $query=$this->db->get();
    return $query->num_rows();
  }


  function count_all_redeem()
  {
    $this->db->from('reward');
    return $this->db->count_all_results();
  }

  //save
  public function ajax_save_reward($data)
  {
    $this->db->insert('reward',$data);
    return $this->db->insert_id();
  }

  //delete
  public function model_delete_reward($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('reward');
  }
//Edit

  public function get_by_id_reward($id,$idtab)
  {
    $this->db->from('reward');
    $this->db->where($idtab,$id);
    $query=$this->db->get();
    return $query->row();
  }
//update
  public function model_update_reward($where, $data)
  {
    $this->db->update('reward',$data,$where);
    return $this->db->affected_rows();
  }
  public function get_employ(){
    $this->db->order_by('name','ASC');
    $query = $this->db->get('person');
    return $query->result();
  }
  public function get_poin_will_use($id,$table)
  {
    $this->db->from($table);
    $this->db->where('employ_id',$id);
    $this->db->where('status','Available');
    $this->db->order_by('status','ASC');
    $query=$this->db->get();
    return $query->result();

  }

  public function ajax_save_claim($data)
  {
    $this->db->insert('claim',$data);
    return $this->db->insert_id();
  }
  public function get_list_claim_model()
  {
    $this->db->select('claim.id, person.id_employ, person.name as name_employ, reward.name as name_reward, claim.date_claim, claim.poin_used, claim.note');
    $this->db->from('person');
    $this->db->join('claim', 'person.id_employ=claim.employ_id');
    $this->db->join('reward', 'reward.id_reward=claim.reward_id');
    $this->db->order_by('claim.id', 'DESC');
    $query=$this->db->get();
    return $query->result();

  }
  public function delete_claim_model($id){
    $this->db->where('id',$id);
    $this->db->delete('claim');
  }

}
