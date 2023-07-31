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

	// display
	public function display_records_By_Id($d)
	{
		$query=$this->db->select('*')
						->from('student')
						->join('image','student.id=image.student_id','inner')
						->where('student.id',$d['id'])
						->get();         
		return $query->result();
	}



}