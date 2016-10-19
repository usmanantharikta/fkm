<?php
if (!defined('BASEPATH'))
 exit('No direct script access allowed');

class Add_poin_model extends CI_Model
{
  var $table_person = 'person';
  var $table_like_this='like_this';
  var $table_blue_thumb='blue_thumbs';

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public  function save_employ($data)
  {
    $this->db->insert($this->table_person, $data);
    return $this->db->insert_id();
  }

  public function save_like_this($data)
  {
    $this->db->insert($this->table_like_this,$data);
    return $this->db->insert_id();
  }
  public function save_like_this_al($data)
  {
    $this->db->insert($this->table_like_this,$data);
    return $this->db->insert_id();
  }

  public function save_blue_thumb($data)
  {
    $this->db->insert($this->table_blue_thumb,$data);
    return $this->db->insert_id();
  }
  //Select sesui id tertentu
	public function get_by_id($id)
	{
		$this->db->from($this->table_person);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

  public function save_dislike($data)
  {
    $this->db->insert('dislike',$data);
    return $this->db->insert_id();
  }

}
