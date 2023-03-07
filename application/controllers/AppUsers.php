<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class AppUsers extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent:: __construct();
        // $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('form_validation');
        $this->load->model('Get_regist_form_info');
        $this->load->model('Regist_user_model');
        $this->load->model('Get_user_model');
        $this->load->model('Check_registered_user');
        $this->load->database();
	}

	public function index()
	{	
		$data = "registerForm";
		$this->load->view('RegistrationDataView', $data);

	}

	public function registerData(){

		$this->form_validation->set_rules("User_name", " User Name", "trim|required");
		$this->form_validation->set_rules("Pass_val", " Password", "trim|required");
		$this->form_validation->set_rules("Age_val", " Age", "trim|required|integer");
		$this->form_validation->set_rules("Email_val", " Email ID", "trim|required|valid_email");
		$this->form_validation->set_rules("gender_Name", " Gender", "trim|required|alpha");
		$this->form_validation->set_rules("state_Select", " State", "trim|required|integer");
		$this->form_validation->set_rules("city_Select", " City", "trim|required|integer");
		

		$data["listOfStates"] = $this->Get_regist_form_info->getStateList();

		// $data["listOfCities"] = $this->Get_regist_form_info->getCityList();
		
		if($this->form_validation->run() == FALSE){
			
			$this->load->view("RegistrationDataView",$data);

		}
		else{

			$this->Regist_user_model->insertRegistData();
			$this->load->view("RegistrationDataView", $data);
			echo "<script>alert('Registration complete')</script>";

		}

	}

	public function getSingleUserRow(){

			$data["listOfStates"] = $this->Get_regist_form_info->getStateList();
			$data["listOfCities"] = $this->Get_regist_form_info->getCityList();
		
			$rowDataArray = $this->Get_user_model->singleRowRegistData();
			 // return $rowDataArray;
			$data['singleRowArray'] = $rowDataArray;
			$this->load->view("userRowRegistDataView",$data);

	}


	public function loginVerify(){
//wip
		
			$userValidationData = $this->Check_registered_user->userValidation();
			// if($userValidationData)
	}



    public function getAjaxCity(){

    	$data["listOfCities"] = $this->Get_regist_form_info->getCityList();
        $this->load->view("CityDD");

    }    
}
