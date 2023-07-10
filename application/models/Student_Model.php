<?php

class Student_Model extends CI_Model
{
    public function displayrecords()
	{
		$query=$this->db->query("select * 
					            from student");
		return $query->result();
	}
}