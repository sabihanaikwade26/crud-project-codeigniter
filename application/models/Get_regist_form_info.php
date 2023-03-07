<?php
// if(!defined('BASEPATH')) exit('No direct script access allowed');

class Get_regist_form_info extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public function getStateList()
    {
        $query = $this->db->get('list_states');

        if($query->num_rows() > 0){
	        return $query->result_array();
        }

    }

        public function getCityList()
    {
        $query = $this->db->get('list_cities');

        if($query->num_rows() > 0){
	        return $query->result_array();
        }

    }  //tested for display all cities   
/*
        public function getAjaxCity()
    {
        $this->loa

    }    */
}