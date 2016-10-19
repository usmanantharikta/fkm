<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_ctr extends CI_Controller
{
  public function __construct()
  {
    parent:: __construct();
    $this->load->model('report_model');
     $this->load->helper('url_helper');
     $this->load->library('csvimport');
       $this->load->model('add_poin_model');
  }

//get blance like this
  public function get_balance_like_this()
  {
    $kondisi='Available';
      $result=$this->report_model->get_balance($kondisi);
    $data=array();
    foreach ($result as $key) {
      array_push($data, array(
        $key['id_employ'],
        $key['name'],
        $key['location'],
        $key['available'],
      ));
    }
    echo json_encode(array('data'=>$data));
  }

  //get balance like this redeem
  public function get_balance_like_this_redeem()
  {
    $kondisi='Redeemed';
    $result=$this->report_model->get_balance($kondisi);
    $data=array();
    foreach ($result as $key) {
      array_push($data, array(
        $key['id_employ'],
        $key['name'],
        $key['location'],
        $key['available'],
      ));
    }
    echo json_encode(array('data'=>$data));
  }

    // view like this
  	public function list_like_this()
  	{
  		$list=$this->report_model->get_data_like_this();
  		$data= array();
  		$no=$_POST['start'];
  		foreach ($list as $poin)
  		{
  			$no++;
  			$row=array();
  			$row[]=$poin->employ_id;
  			$row[]=$poin->name;
  			$row[]=$poin->date;
  			$row[]=$poin->quantity;
  			$row[]=$poin->status;
  			$row[]=$poin->remarks;
  			$row[]=$poin->remarks_note;
  			$row[] = '<a class="btn btn-sm btn-default" href="javascript:void()" title="Edit" onclick="edit_poin_like_this('."'".$poin->id."'".')"><i class="glyphicon glyphicon-pencil"></i> </a>
  								<a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_poin_like('."'".$poin->id."'".')"><i class="glyphicon glyphicon-trash"></i> </a>';
  			$data[]=$row;

  		}
  		$output=array(
  			"draw"=>$_POST['draw'],
  			"recordsTotal"=>$this->report_model->count_all_like(),
  			"recordsFiltered"=>$this->report_model->count_filtered_like(),
  			"data"=>$data,
  		);
  		echo json_encode($output);
  	}

    //get id point like This
    public function edit_poin_like_this_control($id){
      $data=$this->report_model->get_id_like_this($id);
      echo json_encode($data);
    }

    //update poin like This
    public function update_poin_like_this(){
      $data= array(
        'employ_id'=>$this->input->post('employ_id'),
        'name'=> $this->input->post('name'),
        'date'=>$this->input->post('date'),
        'quantity'=>$this->input->post('quantity'),
        'status'=>$this->input->post('status'),
        'remarks'=>$this->input->post('remarks'),
        'remarks_note'=>$this->input->post('remarks_note'),
      );
      $this->report_model->update_like_this(array('id'=>$this->input->post('id')),$data);
      echo json_encode(array("status"=>TRUE));
    }

    //delete poin like this by id
    public function delete_poin_like_this($id)
    {
      $this->report_model->delete_point_like_this_by_id($id);
      echo json_encode(array("status"=>TRUE));

    }

    //delete poin like this by id
    public function delete_point_blue_thumb($id)
    {
      $this->report_model->delete_point_blue_thumb_by_id($id);
      echo json_encode(array("status"=>TRUE));

    }

    //blue______________________________________________________________________

    	//view blue Thumbs
    	public function list_blue_thums()
    	{
    		$list=$this->report_model->get_data_blue_thumbs();
    		$data= array();
    		$no=$_POST['start'];
    		foreach ($list as $poin)
    		{
    			$no++;
    			$row=array();
    			$row[]=$poin->employ_id;
    			$row[]=$poin->name;
    			$row[]=$poin->date;
    			$row[]=$poin->quantity;
    			$row[]=$poin->status;
    			$row[]=$poin->remarks;
    			$row[]=$poin->remarks_note;



    			$row[] = '<a class="btn btn-sm btn-default" href="javascript:void()" title="Edit" onclick="edit_point_blue_thumb('."'".$poin->id."'".')"><i class="glyphicon glyphicon-pencil"></i> </a>
    								<a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_point_blue('."'".$poin->id."'".')"><i class="glyphicon glyphicon-trash"></i> </a>';
    			$data[]=$row;
    		}
    		$output=array(
    			"draw"=>$_POST['draw'],
    			"recordsTotal"=>$this->report_model->count_all_blue(),
    			"recordsFiltered"=>$this->report_model->count_filtered_blue(),
    			"data"=>$data,
    		);
    		echo json_encode($output);
    	}

      //get balance blue
        public function get_balance_blue_thumb()
        {
          $kondisi='Available';
          $result=$this->report_model->get_balance_blue($kondisi);
          $data=array();
          foreach ($result as $key) {
            array_push($data, array(
              $key['id_employ'],
              $key['name'],
              $key['location'],
              $key['available'],
            ));
          }
          echo json_encode(array('data'=>$data));
        }

        //get balance blue redeemed
        public function get_balance_blue_thumb_redeemed(){
          $kondisi='Redeemed';
          $result=$this->report_model->get_balance_blue($kondisi);
          $data=array();
          foreach ($result as $key) {
            array_push($data, array(
              $key['id_employ'],
              $key['name'],
              $key['location'],
              $key['available'],
            ));
          }
          echo json_encode(array('data'=>$data));
        }

        //get id point blue thumbs
        public function edit_poin_blue_thumb_control($id)
        {
          $data=$this->report_model->get_id_blue_thumbs($id);
          echo json_encode($data);
        }

        //update poin blue thumbs
        public function update_point_blue_thumb(){
          $data= array(
            'employ_id'=>$this->input->post('employ_id'),
            'name'=> $this->input->post('name'),
            'date'=>$this->input->post('date'),
            'quantity'=>$this->input->post('quantity'),
            'status'=>$this->input->post('status'),
            'remarks'=>$this->input->post('remarks'),
            'remarks_note'=>$this->input->post('remarks_note'),
          );
          $this->report_model->update_blue_thumb(array('id'=>$this->input->post('id')),$data);
          echo json_encode(array("status"=>TRUE));
        }

//__________________________________________________________________________________________________//
//list Dislike
public function list_dislike()
{
	$list=$this->report_model->get_data_dislike();
	$data= array();
	$no=$_POST['start'];
	foreach ($list as $poin)
	{
		$no++;
		$row=array();
		$row[]=$poin->employ_id;
		$row[]=$poin->name;
		$row[]=$poin->date;
		$row[]=$poin->qty;
		$row[]=$poin->status;
		$row[]=$poin->remarks;
		$row[] = '<a class="btn btn-sm btn-default" href="javascript:void()" title="Edit" onclick="edit_dislike('."'".$poin->id."'".')"><i class="glyphicon glyphicon-pencil"></i> </a>
							<a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_dislike('."'".$poin->id."'".')"><i class="glyphicon glyphicon-trash"></i> </a>';
		$data[]=$row;
	}
	$output=array(
		"draw"=>$_POST['draw'],
		"recordsTotal"=>$this->report_model->count_all_dislike(),
		"recordsFiltered"=>$this->report_model->count_filtered_dislike(),
		"data"=>$data,
	);
	echo json_encode($output);
}

//get balance delete_dislike
public function get_saldo_dislike_ctr(){
  $kondisi='Available';
  $result=$this->report_model->get_saldo_dislike($kondisi);
  $data=array();
  foreach ($result as $key) {
    array_push($data, array(
      $key['id_employ'],
      $key['name'],
      $key['location'],
      $key['available'],
    ));
  }
  echo json_encode(array('data'=>$data));
}

//balance Redeemed
public function get_saldo_dislike_expire_ctr(){
  $kondisi='Expire';
  $result=$this->report_model->get_saldo_dislike($kondisi);
  $data=array();
  foreach ($result as $key) {
    array_push($data, array(
      $key['id_employ'],
      $key['name'],
      $key['location'],
      $key['available'],
    ));
  }
  echo json_encode(array('data'=>$data));
}
//control for delete
function control_delete_dislike($id)
{
  $this->report_model->model_delete_dislike($id);
  echo json_encode(array("status"=>TRUE));
}

//control for edit
function edit_dislike($id){
  $data=$this->report_model->model_edit_dislike($id);
  echo json_encode($data);
}

//control for udpate Dislike
public function control_update_dislike()
{
  $data=array(
    'employ_id'=>$this->input->post('employ_id'),
    'name'=>$this->input->post('name'),
    'date'=>$this->input->post('date'),
    'qty'=>$this->input->post('quantity'),
    'status'=>$this->input->post('status'),
    'remarks'=>$this->input->post('remarks'),
  );
  $this->report_model->model_update_dislike(array('id'=>$this->input->post('id')),$data);
  echo json_encode(array("status"=>TRUE));

}



function importcsv() {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('csvindex', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];

            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
              //  echo "<pre>";
                //print_r($csv_array);
              //  echo '</pre>';
                foreach ($csv_array as $row) {
                   $insert_data = array(
                  'employ_id'=>$row['employ_id'],
            			'name' =>$row['name'],
            			'date'=>$row[	'date'],
            			'quantity' =>$row['quantity'],
            			'status' =>$row['status'],
            			'remarks' => $row['remarks'],
            			'remarks_note' => $row['remarks_note'],
                );
                	$this->add_poin_model->save_like_this_al($insert_data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                //redirect('ajax_load_pages');
                  //$this->load->view('csvindex');
                //echo "<pre>"; print_r($insert_data);
                /*
                $this->load->view('header');
                $this->load->view('csvindex');
                $this->load->view('footer');*/
            } else
                $this->load->view('header');
                $this->load->view('csvindex');
                $this->load->view('footer');
            }
 }


 function importcsv_blue() {

         $config['upload_path'] = './uploads/';
         $config['allowed_types'] = 'csv';
         $config['max_size'] = '1000';

         $this->load->library('upload', $config);


         // If upload failed, display error
         if (!$this->upload->do_upload()) {
             $data['error'] = $this->upload->display_errors();

             $this->load->view('csvindex', $data);
         } else {
             $file_data = $this->upload->data();
             $file_path =  './uploads/'.$file_data['file_name'];

             if ($this->csvimport->get_array($file_path)) {
                 $csv_array = $this->csvimport->get_array($file_path);
               //  echo "<pre>";
                 //print_r($csv_array);
               //  echo '</pre>';
                 foreach ($csv_array as $row) {
                    $insert_data = array(
                   'employ_id'=>$row['employ_id'],
             			'name' =>$row['name'],
             			'date'=>$row[	'date'],
             			'quantity' =>$row['quantity'],
             			'status' =>$row['status'],
             			'remarks' => $row['remarks'],
             			'remarks_note' => $row['remarks_note'],
                 );
                 	$this->add_poin_model->save_like_this_al($insert_data);
                 }
                 $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                 //redirect('ajax_load_pages');
                   //$this->load->view('csvindex');
                 //echo "<pre>"; print_r($insert_data);
                 /*
                 $this->load->view('header');
                 $this->load->view('csvindex');
                 $this->load->view('footer');*/
             } else
                 $this->load->view('header');
                 $this->load->view('csvindex');
                 $this->load->view('footer');
             }
  }







}
