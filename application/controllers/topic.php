<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class topic extends CI_Controller {

	public function index()
	{
		$this->load->view("head");
		$this->load->view("topic");
		$this->load->view("footer");
	}

	function get($id){
		$this->load->view("head");
		$data = array('id'=>$id);
		$this->load->view("get",$data );
		$this->load->view("footer");
	}


}
