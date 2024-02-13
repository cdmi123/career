<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class candidate_list_view extends CI_Controller 
	{
		function index()
		{

			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }

			$data['info'] = $this->db->get('category')->result_array();
			$data['info1']=$this->db->get('location')->result_array();

			$this->db->select('location.location_name,post.post_name,job_post.*');
			$this->db->join('location','location.location_id=job_post.location_id');
			$this->db->join('post','post.post_id=job_post.post_id');
			$data['jobpost'] = $this->db->get('job_post')->result_array();

			$this->db->select('skill.skill_name,education.education_name,user.*');
			$this->db->join('skill','skill.skill_id=user.skill_id');
			$this->db->join('education','education.education_id=user.education_id');
			$data['user'] = $this->db->get('user')->result_array();

			$this->load->view('candidate_list_view',$data);
		}
	}

?>