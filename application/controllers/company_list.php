<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class company_list extends CI_Controller 
	{
		function index()
		{
		
			$data['company']=$this->db->get('company')->result_array();

			$this->db->select('company.company_id,job_post.*');
			$this->db->join('company','company.company_id=job_post.company_id');
			$data['jobpost']=$this->db->get('job_post')->result_array();
			
			$this->db->select('location.location_name,post.post_name,job_post.*');
			$this->db->join('location','location.location_id=job_post.location_id');
			$this->db->join('post','post.post_id=job_post.post_id');
			$data['jobpost1'] = $this->db->get('job_post')->result_array();

			$this->db->select('skill.skill_name,education.education_name,user.*');
			$this->db->join('skill','skill.skill_id=user.skill_id');
			$this->db->join('education','education.education_id=user.education_id');
			$data['user'] = $this->db->get('user')->result_array();

			$this->load->view('company_list',$data);
		}
	}

?>