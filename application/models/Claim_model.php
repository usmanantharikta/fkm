<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Claim_model extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_poin_by_id($id_employ){
    $this->db->from('like_this');
    $this->db->where('employ_id',$id_employ);
    $query=$this->db->get();
    return $query->result();
  }
  public function get_poin_blue_by_id($id_employ){
    $this->db->from('blue_thumbs');
    $this->db->where('employ_id',$id_employ);
    $query=$this->db->get();
    return $query->result();
  }
public function getreward(){
  $this->db->from('reward');
  $query=$this->db->get();
  return $query->result();
}
  public function get_reward_by_id($id)
  {
    $this->db->from('reward');
    $this->db->where('id_reward',$id);
    $query=$this->db->get();
    return $query->row();
  }
  public function get_id_employ($id){
    $this->db->from('person');
    $this->db->where('id_employ',$id);
    $query=$this->db->get();
    return $query->row();
  }

}
