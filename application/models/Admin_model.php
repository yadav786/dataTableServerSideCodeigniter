<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
  
/* Edited BY Azmi Kaizen Yadav  
 Purpose: For DataTable with Server Side in codeigniter 
 End changes 
*/ 
 
	public function filtered_records_loaded_posts($length=null,$start=null){
     
		$this->db->select('*');
		$this->db->from('users');
				        /* if($length!=null && $start!=null) 
						$this->db->limit($length, $start); 
						*/  
 				if($this->input->post('user_name')){
				$this->db->like('user_name ', $this->input->post('user_name'));
				}
                $this->db->order_by('id', 'DESC');
                $query = $this->db->get();   
				return $query->num_rows(); 
	}  

	public function get_loaded_posts($length=null,$start=null)
	{
  
				$this->db->select('*');
                $this->db->from('users');       
                  if($length!=null && $start!=null) 
				  $this->db->limit($length, $start); 
					if($this->input->post('user_name')){
					$this->db->like('user_name ', $this->input->post('user_name'));
					}   
					$this->db->order_by('id', 'DESC');
					$query = $this->db->get();  
					return $query->result_array();
	} 

	public function get_total_loaded_posts()
	{    
  
				$this->db->select('*');
                $this->db->from('users');
                $this->db->order_by('id', 'DESC');
                $query = $this->db->get();   
				return $query->num_rows(); 
	}
 
}

?>