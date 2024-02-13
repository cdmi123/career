<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class jobs_detail extends CI_Controller 
	{
		function index($job_id=0)
		{

			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }

			if($job_id)
			{
				

				$this->db->select('location.location_name,skill.skill_name,post.post_name,education.education_name,job_post.*');
				$this->db->join('location','location.location_id=job_post.location_id');
				$this->db->join('skill','skill.skill_id=job_post.skill_id');
				$this->db->join('post','post.post_id=job_post.post_id');
				$this->db->join('education','education.education_id=job_post.education_id');
				$this->db->where('job_id',$job_id);
				$data['jobdetail'] = $this->db->get('job_post')->row_array();
				//echo '<pre>';print_r($data);die;
			}
			
				$this->db->select('location.location_name,skill.skill_name,post.post_name,education.education_name,company.company_name,job_post.*');
				$this->db->join('location','location.location_id=job_post.location_id');
				$this->db->join('skill','skill.skill_id=job_post.skill_id');
				$this->db->join('post','post.post_id=job_post.post_id');
				$this->db->join('company','company.company_id=job_post.company_id');
				$this->db->join('education','education.education_id=job_post.education_id');
				
				$data['jobpost'] = $this->db->get('job_post')->result_array();

			$this->load->view('jobs_detail',$data);
		}
	}

?>