<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_Users extends CI_Controller {

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
        $this->load->model('Update_user_model');
        $this->load->database();
	}

	public function index()
	{	
		// $data = "registerForm";

		$this->load->view('userDataDisplayView', $data);

	}

	public function updateSingleUserRow(){

		$this->Update_user_model->userRowUpdate();

	}

	public function deleteSingleUserRow(){

		$this->Update_user_model->userRowDelete();

	}

	
}
