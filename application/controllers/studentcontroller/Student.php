<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
		parent::__construct();

		// load model
		$this->load->model('Student_Model');
    }
    
    public function index()
    {
        $data['page_title'] = 'Daskboard Page';
        $data['left_side'] = $this->load->view('student/left_side', '', TRUE);
        $data['badges'] = $this->load->view('student/badges', '', TRUE);
        
        $data['data']=$this->Student_Model->displayrecords();

        $this->load->view("student/studentview", $data);

    }
    public function add()
    {
        $this->load->view("student/add");

    }
}


