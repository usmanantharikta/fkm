<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_ctr extends CI_Controller
{
  public function __construct()
  {
    parent:: __construct();
    $this->load->model('employee_model');
     $this->load->helper('url_helper');
  }

  //get data employ from data bases
  	public function ajax_employ_list()
  	{
  		$list = $this->employee_model->get_datatables();
  		$data = array();
  		$no = $_POST['start'];
  		foreach ($list as $person)
  		{
  			$no++;
  			$row = array();
  			$row[] = $person->id_employ;
  			$row[] = $person->name;
  			$row[] = $person->gender;
  			$row[] = $person->departement;
  			$row[] = $person->division;
  			$row[] = $person->location;
  			//add html for action
  			$row[] = '<a class="btn btn-sm btn-default" href="javascript:void()" title="Edit" onclick="edit_employ('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> </a>
  				  <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_employ('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> </a>';
  			$row[]='<a class="btn btn-sm btn-success" href="javascript:void()" title="Like This!" onclick="like_this('."'".$person->id."'".')"><i class="glyphicon glyphicon-thumbs-up"></i> </a>
  								<a class="btn btn-sm btn-primary" href="javascript:void()" title="Blue Thumbs" onclick="add_blue_thumbs('."'".$person->id."'".')"><i class="glyphicon glyphicon-thumbs-up"></i> </a>
  								<a class="btn btn-sm btn-primary" href="javascript:void()" title="Dislike" onclick="add_dislike('."'".$person->id."'".')"><i class="glyphicon glyphicon-thumbs-down"></i> </a>
                  <a class="btn btn-sm btn-default" href="javascript:void()" title="Claim" onclick="claim_proses('."'".$person->id_employ."'".')"><i class="glyphicon glyphicon-shopping-cart"></i> </a>';
  			$data[] = $row;
  		}

  			$output = array(
  				"draw" => $_POST['draw'],
  				"recordsTotal" => $this->employee_model->count_all(),
  				"recordsFiltered" => $this->employee_model->count_filtered(),
  				"data" => $data,
  				);
  		//output to json format
  			echo json_encode($output);
  	}

    //ajax add employ
    public function ajax_add_employ()
    {
      $data = array(
        'id_employ'=> $this->input->post('id_employ'),
        'name' => $this->input->post('name'),
        'gender' => $this->input->post('gender'),
        'departement' => $this->input->post('departement'),
        'division' => $this->input->post('division'),
        'location' => $this->input->post('location'),
        );
      $insert = $this->employee_model->save_employ($data);
      echo json_encode(array("status"=>TRUE));
    }

    // ajax for edit data employ
  	public function ajax_edit_employ($id)
  	{
  		$data = $this->employee_model->get_by_id($id);
  		echo json_encode($data);
  	}

    	//update data employ
    	public function ajax_update_employ()
    	{
    		$data = array(
    			'id_employ'=> $this->input->post('id_employ'),
    			'name' => $this->input->post('name'),
    			'gender' => $this->input->post('gender'),
    			'departement' => $this->input->post('departement'),
    			'division' => $this->input->post('division'),
    			'location' => $this->input->post('location'),
    		);
    		$this->employee_model->update_employ(array('id'=>$this->input->post('id')),$data);
    		echo json_encode(array("status"=>TRUE));
    	}

      //for delete data employ

    public function ajax_delete_employ($id)
      {
        $this->employee_model->delete_employ_by_id($id);
        echo json_encode(array("status"=>TRUE));
      }



}
