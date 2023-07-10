<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function index()
	{
		$this->load->view('studentView');
	}
	function fn_form(){
		$this->load->view('form');
	}
	
}






