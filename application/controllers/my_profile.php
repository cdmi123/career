<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class my_profile extends CI_Controller 
	{
		function index()
		{
			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }
			
			$this->db->select('location.location_name,skill.skill_name,education.education_name,job_post.*');
			$this->db->join('skill','skill.skill_id=job_post.skill_id');
			$this->db->join('education','education.education_id=job_post.education_id');
			$this->db->join('location','location.location_id=job_post.location_id');
			$data['jobpost']=$this->db->get('job_post')->result_array();

			$this->load->view('my_profile',$data);
		}
}
?>