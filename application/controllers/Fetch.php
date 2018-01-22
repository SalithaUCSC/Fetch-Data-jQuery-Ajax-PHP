<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// load model for each function. Don't need to load in in every function.can SKIP that step.
		$this->load->model('Fetch_model');
		
	}
	public function index()
	{
		// assign the data of all phones to an array
		$data['allphones'] = $this->Fetch_model->get_phones();
		// load the view - mobile_phones.php
		$this->load->view('mobile_phones',$data);
	}
	public function phone($phone_id)
	{
		// assign the data fetched according to an ID to an array
		$data['row'] = $this->Fetch_model->get_a_phone($phone_id);
		// load the view - phone.php
		$this->load->view('phone',$data);
	}

	public function compare_phones($phone_id)
	{
		// assign the data fetched according to an ID to an array
		$data['phone'] = $this->Fetch_model->get_a_phone($phone_id);	
		// assign the data of all phones to an array
		$data['allphones'] = $this->Fetch_model->get_phones();
		// load the view - compare_phones.php
		$this->load->view('compare_phones',$data);
	}

	public function get_com_phone()
	{
		// get the entered input through POST method
        $com = $this->input->post('phone2');
        // check the selected input is not empty OR it is available on page
        if(isset($com) and !empty($com)){
        	// assign the data of a phone to an array that is selected using it's name in DB 
            $records = $this->Fetch_model->get_com_phone($com);
            // begin the printing the fetched phone data for comparing. output is an array
            $output = '';
            // start a foreach loop to print the rows for a phone in DB
            foreach($records->result_array() as $row){
            	// concatenate the result to empty output variable
            	$output .= '<div class="card" style="width: 25rem;border: 1px solid; border-color: black;"><br>	
            		<center><div style="width:60%;height:80%;"><img style="width:40%;height:60%;" src="'.base_url().'assets/images/phones/'.$row['image1'].'"></div></center>
					 <div class="card-body">
					    <h5 class="card-title text-center">'.$row["name"].'</h5><br>
					    	<ul class="list-group">
						    	<li class="list-group-item"><b>RAM</b> : '.$row["ram"].'</li>
						    	<li class="list-group-item"><b>Internal Memory</b> : '.$row['internal'].'</li>
						    	<li class="list-group-item"><b>Back Camera</b> : '.$row['cam_primary'].'</li>
						    	<li class="list-group-item"><b>Front Camera</b> : '.$row['cam_secondary'].'</li>
						    	<li class="list-group-item"><b>Display Size</b> : '.$row['display_size'].'</li>';
            }
            	$output .= '</ul"></div></div>';
            	// finally print the output to the view
            	echo $output;
        } 
	}
}
