<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Update_user_model extends CI_Model{

    function __construct()
    {
        parent::__construct();

    }

    public function userRowUpdate()
    {

		$dataArrayFind = array(
							'registered_user_id' => $this->input->post('search_user_ID') //,
                            // 'password_value' => $this->input->post('search_user_ID')
						);    	

        $dataArrayUpdate = array('registered_user_name' => $this->input->post('NameVal'),
                                'password_value' => $this->input->post('PassVal'),
                                'email_id_val' => $this->input->post('EmailVal'),
                                'state_id' => $this->input->post('StateVal'),
                                'city_id' => $this->input->post('CityVal')
                        
                        );

/*		$query = $this->db->get_where('registered_user_data',$dataArray);*/		

                        if (isset($dataArrayFind) && !empty($dataArrayFind)){

                            $this->db->where($dataArrayFind);
                            $this->db->update("registered_user_data", $dataArrayUpdate);    
                            echo "<script>alert(Record Updated);</script>";
                        }



/*        if($query->num_rows() > 0){
	        return $query->row_array();
        }*/
		

    }

    public function userRowDelete()
    {

        $dataArrayFind = array(
                            'registered_user_id' => $this->input->post('DeleteRecord_ID') //,
                            // 'password_value' => $this->input->post('search_user_ID')
                        );      

/*        $dataArrayUpdate = array('registered_user_name' => $this->input->post('NameVal'),
                                'password_value' => $this->input->post('PassVal'),
                                'email_id_val' => $this->input->post('EmailVal'),
                                'state_id' => $this->input->post('StateVal'),
                                'city_id' => $this->input->post('CityVal')
                        
                        );*/

/*      $query = $this->db->get_where('registered_user_data',$dataArray);*/     

                        if (isset($dataArrayFind) && !empty($dataArrayFind)){

                            $this->db->where($dataArrayFind);
                            $this->db->delete("registered_user_data"/*, $dataArrayUpdate*/);    
                            echo "<script>alert(Record Deleted);</script>";
                        }



/*        if($query->num_rows() > 0){
            return $query->row_array();
        }*/
        

    }

	
}
?>