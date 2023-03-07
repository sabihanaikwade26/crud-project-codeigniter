<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Regist_user_model extends CI_Model{

    function __construct()
    {
        parent::__construct();

    }

    public function insertRegistData()
    {

		$dataArray = array(
							'registered_user_name' => $this->input->post('User_name'),
							'password_value' => $this->input->post('Pass_val'),
							'age_val' => $this->input->post('Age_val'),
							'email_id_val' => $this->input->post('Email_val'),
							'gender_data' => $this->input->post('gender_Name'),
							'state_id' => $this->input->post('state_Select'),
							'city_id' => $this->input->post('city_Select')
						);    	

		return $this->db->insert('registered_user_data',$dataArray);		

    }

	
}
?>