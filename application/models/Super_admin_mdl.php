<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class super_admin_mdl extends CI_Model {

  var $user_tab=array('USER_ID','USER_NAME','PASSWORD','FIRST_NAME','LAST_NAME','user_type');

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  private function _get_list_user()
  {
    $this->db->from('trn_user');

    $i = 0;

    foreach ($this->user_tab as $item)
    {
      if($_POST['search']['value'])
        ($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
        $user_tab[$i] = $item;
        $i++;
    }

    if(isset($_POST['order']))
    {
      $this->db->order_by($user_tab[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    }
    else if(isset($this->order))
    {
      $order = $this->order;
      $this->db->order_by(key($order), $order[key($order)]);
    }
  }

  function get_list_user()
  {
    $this->_get_list_user();
    if($_POST['length'] !=-1)
      $this->db->limit($_POST['length'],$_POST['start']);
      $query=$this->db->get();
      return $query->result();
  }

  function count_filtered()
  {
    $this->_get_list_user();
    $query=$this->db->get();
    return $query->num_rows();
  }


  function count_all()
  {
    $this->db->from('trn_user');
    return $this->db->count_all_results();
  }

  public function delete_user_model($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('trn_user');
  }

  public function get_by_id_user($id)
  {
    $this->db->from('trn_user');
    $this->db->where('id',$id);
    $query=$this->db->get();
    return $query->row();
  }
  public function save_user($data)
  {
    $this->db->insert('trn_user',$data);
    return $this->db->insert_id();
  }
  public function update_user($where,$data){
    $this->db->update('trn_user',$data,$where);
    return $this->db->affected_rows();
  }



}
