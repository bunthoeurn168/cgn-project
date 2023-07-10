<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{
    
    public function index()
    {
        $data['page_title'] = 'Daskboard Page';
        $data['left_side'] = $this->load->view('student/left_side', '', TRUE);
        $data['badges'] = $this->load->view('student/badges', '', TRUE);
        $this->load->view("student/studentview", $data);

    }
    public function add()
    {
        
    }
}


