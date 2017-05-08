<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
	      
	function __construct()
	{ 
		parent::__construct(); 
		$this->load->model('admin_model');		  
	}       
 
public function manage_load_posts()
{
      $mlp['load_posts'] = $this->admin_model->get_loaded_posts();  
      $this->load->view('dataTableServerside',$mlp);
}      
    
public function ajax_load_posts()
{  
 $data = $this->admin_model->get_loaded_posts($_POST['length'],$_POST['start']);
 $recordsTotal =  $this->admin_model->get_total_loaded_posts();
 $recordsFiltered = $this->admin_model->filtered_records_loaded_posts($_POST['length'],$_POST['start']); 
 //$recordsFiltered = $this->admin_model->total_records_count_loaded_posts();    
                     
		$output = array("draw" => $_POST['draw'],"recordsTotal" => $recordsTotal,"recordsFiltered" => $recordsFiltered ,"data" => $data);
		//output to json format  
		echo json_encode($output);		 
}    

}
?>