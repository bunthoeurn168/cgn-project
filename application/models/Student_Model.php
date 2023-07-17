<?php

class Student_Model extends CI_Model
{
    public function displayrecords()
	{
		//$query=$this->db->query("select * from student");
		$query=$this->db->get('student');
		return $query->result();
	}

	public function save_record($data)
	{
		$this->db->insert('student', $data);
	}

}