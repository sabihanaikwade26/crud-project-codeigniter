<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Get_user_model extends CI_Model{

    function __construct()
    {
        parent::__construct();

    }

    public function singleRowRegistData()
    {

		$dataArray = array(
							'registered_user_id' => $this->input->post('registrationIdSingle')
						);    	

		$query = $this->db->get_where('registered_user_data',$dataArray);		

        if($query->num_rows() > 0){
	        return $query->row_array();
        }
		

    }

	
}
?>