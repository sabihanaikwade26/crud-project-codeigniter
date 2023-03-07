<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('form_validation');
	}

	public function index()
	{	
		$data = "Upload";
		$this->load->view('uploadDataView', $data);

	}

	public function uploadData(){
		$this->form_validation->set_rules("file_name"," The File Name", "trim|required");
		$this->form_validation->set_rules("table_name"," The Table Name", "trim|required");
		
		if($this->form_validation->run() == FALSE){
			$data = "Upload";
			$this->load->view("uploadDataView",$data);
		}
		else{
			$data = "Upload";
			// $this->dataUploadModel->uploadXlsxData();
			// $data['status'] = "Upload Complete";
			$this->load->view("uploadDataView", $data);
		}



	}
}
