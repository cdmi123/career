<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class jobs extends CI_Controller 
	{
		function index($id=0)
		{

		

			$data['info'] = $this->db->get('category')->result_array();

			$data['info1']=$this->db->get('location')->result_array();

			$this->db->select('skill.skill_name,user.*');
			$this->db->join('skill','skill.skill_id=user.id');
			$data['user']=$this->db->get('user')->result_array();

			if($id)
			{

				$this->db->select('location.location_name,post.post_name,job_post.*');
				$this->db->join('location','location.location_id=job_post.location_id');
				$this->db->join('post','post.post_id=job_post.post_id');
				$this->db->where('job_post.category_id',$id);
				$data['jobpost'] = $this->db->get('job_post')->result_array();
			}
			else
			{

				$this->db->select('location.location_name,post.post_name,job_post.*');
				$this->db->join('location','location.location_id=job_post.location_id');
				$this->db->join('post','post.post_id=job_post.post_id');
				$data['jobpost'] = $this->db->get('job_post')->result_array();
			}
			$this->load->view('jobs',$data);
		}

		function search()
		{

			$data['info'] = $this->db->get('category')->result_array();
			$location = $this->input->post('location');
			$category = $this->input->post('category');
			$search_txt = $this->input->post('search_txt');
			
			$this->db->select('location.location_name,post.post_name,job_post.*');
			$this->db->join('location','location.location_id=job_post.location_id','left');
			$this->db->join('post','post.post_id=job_post.post_id','left');
			if($location != 0){
				$this->db->where('job_post.location_id',$location);
			}
			if($category != 0){
				$this->db->where('job_post.category_id',$category);
			}
			if($search_txt != ""){
				$this->db->where('job_title',$search_txt);
			}
			$data['jobpost'] = $this->db->get('job_post')->result_array();

			$this->db->select('skill.skill_name,user.*');
			$this->db->join('skill','skill.skill_id=user.id');
			$data['user']=$this->db->get('user')->result_array();

			
			$this->load->view('jobs',$data);
		}
	}

?>