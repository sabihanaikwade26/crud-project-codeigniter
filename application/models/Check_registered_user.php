<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Check_registered_user extends CI_Model{

    function __construct()
    {
        parent::__construct();

    }

    public function userValidation()
    {   

		$dataArray = array(
							'registered_user_name' => $this->input->post('NameVal_user'),
                            'password_value' => $this->input->post('PassVal_user')
						);    	

		$query = $this->db->get_where('registered_user_data',$dataArray);		

        if($query->num_rows() > 0){
	        echo "Registered1001001User";
        }
        else{
            echo "Invalid";
        }
		

    }

	
}
?>