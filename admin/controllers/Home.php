<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {


	 	public function __construct()
	{
		parent::__construct();
       	    $this->load->model('Categoryes_model');
	}
	public function index()
	{

	$this->load->library('calendar');
	
    	   $data=array(
	         'categoryes'=>$this->Categoryes_model->get_categoryes()
	          );
	$this->load->view('home',$data);
	}
	
	public function add()
	{
		echo "test";
	}
}
