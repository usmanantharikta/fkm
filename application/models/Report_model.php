<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Report_model extends CI_Model {

  //declar variable
    var $column_like=array('employ_id','name','date','quantity','status','remarks','remarks_note');
    var $table_like_this='like_this';
    var $table_blue_thumb='blue_thumbs';
    var $column_saldo=array('employ_id','name','available','redeemed');
    var $dislike='dislike';
    var $column_dislike=array('employ_id','name','date','quantity','status','remarks');




    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    //get balance like
    function get_balance($where)
    {

      $this->db->select('id_employ, name,location');
      $sub = $this->subquery->start_subquery('select');
      $sub->select('sum(quantity) as available')->from('like_this');
      $sub->where('person.id_employ = like_this.employ_id');
      $sub->where('like_this.status',$where);
      $this->subquery->end_subquery('available');
      $this->db->from('person');
      $query=$this->db->get();
      return $query->result_array();
    }


    //get data like this point

    private function _get_data_like_this()
    {
      $this->db->from($this->table_like_this);
      $i=0;
      foreach ($this->column_like as $item) {
        if($_POST['search']['value'])
          ($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
          $column_like[$i] = $item;
          $i++;
      }
      if(isset($_POST['order']))
      {
        $this->db->order_by($column_like[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
      }
      else if(isset($this->order))
      {
        $order = $this->order;
        $this->db->order_by(key($order), $order[key($order)]);
      }

      }

      function get_data_like_this()
      {
        $this->_get_data_like_this();
        if($_POST['length'] != -1)
          $this->db->limit($_POST['length'], $_POST['start']);
          $query = $this->db->get();
          return $query->result();
      }

      function count_filtered_like()
      {
        $this->_get_data_like_this();
        $query = $this->db->get();
        return $query->num_rows();
      }

      public function count_all_like()
      {
        $this->db->from($this->table_like_this);
        return $this->db->count_all_results();
      }

      //get data poin like this by id
      public function get_id_like_this($id)
      {
          $this->db->from('like_this');
          $this->db->where('id',$id);
          $query=$this->db->get();
          return $query->row();
      }

      //update poin like this to database
      public function update_like_this($where,$data)
      {
        $this->db->update('like_this',$data,$where);
        return $this->db->affected_rows();
      }
      //delete poin like this by id in data base
      public function delete_point_like_this_by_id($id)
      {
        $this->db->where('id',$id);
        $this->db->delete('like_this');
      }

      // data blue Thumbs_____________________________________________________________

        private function _get_data_blue_thumbs()
        {
          $this->db->from($this->table_blue_thumb);
          $i=0;
          foreach ($this->column_like as $item) {
            if($_POST['search']['value'])
              ($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
              $column_like[$i] = $item;
              $i++;
          }
          if(isset($_POST['order']))
          {
            $this->db->order_by($column_like[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
          }
          else if(isset($this->order))
          {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
          }

        }

        function get_data_blue_thumbs()
        {
          $this->_get_data_blue_thumbs();
          if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
            $query = $this->db->get();
            return $query->result();
        }

        function count_filtered_blue()
        {
          $this->_get_data_blue_thumbs();
          $query = $this->db->get();
          return $query->num_rows();
        }

        public function count_all_blue()
        {
          $this->db->from($this->table_blue_thumb);
          return $this->db->count_all_results();
        }

        //get balace blue
        public function get_balance_blue($where)
        {
          $this->db->select('id_employ, name,location');
          $sub = $this->subquery->start_subquery('select');
          $sub->select('sum(quantity) as available')->from('blue_thumbs');
          $sub->where('person.id_employ = blue_thumbs.employ_id');
          $sub->where('blue_thumbs.status',$where);
          $this->subquery->end_subquery('available');
          $this->db->from('person');
          $query=$this->db->get();
          return $query->result_array();
        }

        // get data poin blue thumbs by id
        public function get_id_blue_thumbs($id)
        {
          $this->db->from('blue_thumbs');
          $this->db->where('id',$id);
          $query=$this->db->get();
          return $query->row();
        }

        //update poin blue thumbs to database
        public function update_blue_thumb($where,$data)
        {
          $this->db->update('blue_thumbs',$data,$where);
          return $this->db->affected_rows();
        }

        public function delete_point_blue_thumb_by_id($id)
        {
          $this->db->where('id',$id);
          $this->db->delete('blue_thumbs');
        }

//_____________________________________________________________________________________________________//

    //get data dislike
    private function _get_data_dislike()
    {
      $this->db->from($this->dislike);
      $i=0;
      foreach ($this->column_dislike as $item) {
        if($_POST['search']['value'])
          ($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
          $column_dislike[$i] = $item;
          $i++;
      }
      if(isset($_POST['order']))
      {
        $this->db->order_by($column_dislike[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
      }
      else if(isset($this->order))
      {
        $order = $this->order;
        $this->db->order_by(key($order), $order[key($order)]);
      }

    }

    function get_data_dislike()
    {
      $this->_get_data_dislike();
      if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered_dislike()
    {
      $this->_get_data_dislike();
      $query=$this->db->get();
      return $query->num_rows();
    }

    public function count_all_dislike()
    {
      $this->db->from('dislike');
      return $this->db->count_all_results();
    }

    //get balance
    public function get_saldo_dislike($where)
    {
      $this->db->select('id_employ, name,location');
      $sub = $this->subquery->start_subquery('select');
      $sub->select('sum(qty)')->from('dislike');
      $sub->where('person.id_employ = dislike.employ_id');
      $sub->where('dislike.status',$where);
      $this->subquery->end_subquery('available');
      $this->db->from('person');
      $query=$this->db->get();
      return $query->result_array();
    }

    //delete Dislike
    public function model_delete_dislike($id)
    {
      $this->db->where('id',$id);
      $this->db->delete('dislike');
    }

    //update Dislike
    public function model_update_dislike($where,$data)
    {
      $this->db->update('dislike',$data,$where);
      return $this->db->affected_rows();
    }
    //edit Dislike
    public function model_edit_dislike($id)
    {
      $this->db->from('dislike');
      $this->db->where('id',$id);
      $query=$this->db->get();
      return $query->row();
    }


    var $clm_redeem=array('id_reward','name','date_create','date_exp','available_qty','value','like_this','blue_thumb','like','blue','description');


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
      {
        $this->db->limit($_POST['length'],$_POST['start']);
        $query=$this->db->get();
        return $query->result();
      }
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

    function get_sum_red($tabel,$kondisi){
      $this->db->select('sum(quantity) as sum');
      $this->db->from($tabel);
      $this->db->where('status',$kondisi);
      $query=$this->db->get();
      return $query->row_array();
    }
    function get_sum_redemeed(){
      $this->db->select('sum(quantity) as sum_red');
      $this->db->from('like_this');
      $this->db->where('status','Redeemed');
      $query=$this->db->get();
      return $query->row_array();
    }

    function get_sum_by($sel,$where){
      $this->db->select($sel);
      $this->db->from('person');
      $this->db->join('like_this', 'person.id_employ = like_this.employ_id');
      $this->db->group_by($where);
      $query = $this->db->get();
      return $query->result();
    }

    function get_sum_by_blue($sel,$where){
      $this->db->select($sel);
      $this->db->from('person');
      $this->db->join('blue_thumbs', 'person.id_employ = blue_thumbs.employ_id');
      $this->db->group_by($where);
      $query = $this->db->get();
      return $query->result();
    }
    /*

    select l.status, sum(l.quantity) as sum
        from person p
        join like_this l
        on p.id_employ=l.employ_id
        GROUP by l.status

    select p.gender, l.status, sum(l.quantity) as sum
            from person p
            join like_this l
            on p.id_employ=l.employ_id
            GROUP by l.status, p.gender


        select p.location, l.status, sum(l.quantity) as sum
        from person p
        join like_this l
        on p.id_employ=l.employ_id
        GROUP by l.status, p.location

    select p.location, l.status,p.gender, sum(l.quantity) as sum
    from person p
    join like_this l
    on p.id_employ=l.employ_id
    GROUP by l.status, p.location,p.gender
    */







}
