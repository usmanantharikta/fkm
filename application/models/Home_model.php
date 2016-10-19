<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {


    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    //get data from database
    private function _get_datatables_query()
    {
      $this->db->from($this->table_person);

      $i = 0;

      foreach ($this->column as $item)
      {
        if($_POST['search']['value'])
          ($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
          $column[$i] = $item;
          $i++;
      }

      if(isset($_POST['order']))
      {
        $this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
      }
      else if(isset($this->order))
      {
        $order = $this->order;
        $this->db->order_by(key($order), $order[key($order)]);
      }
    }
    //parent function untuk get data from data bases
    function get_datatables()
    {
      $this->_get_datatables_query();
      if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    //pengelompokan dalam datatable
    function count_filtered()
    {
      $this->_get_datatables_query();
      $query = $this->db->get();
      return $query->num_rows();
    }

    //Menghitung jumlah row data
    public function count_all()
    {
      $this->db->from($this->table_person);
      return $this->db->count_all_results();
    }

    //save new Employ
    public  function save_employ($data)
    {
      $this->db->insert($this->table_person, $data);
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
    //update employ
    public function update_employ($where,$data)
    {
      $this->db->update($this->table_person,$data,$where);
      return $this->db->affected_rows();
    }
    public  function delete_employ_by_id($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table_person);
      }

    public function get_agenda(){
      $this->db->from('agenda');
      $query=$this->db->get();
      return $query->result_array();
    }


}
