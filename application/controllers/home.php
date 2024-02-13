<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class home extends CI_Controller 
	{
		function index()
		{

			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }

			$data['info']=$this->db->get('category')->result_array();

			$data['info1']=$this->db->get('location')->result_array();
			
			$data['slider']=$this->db->get('slider')->result_array();

			$data['test']=$this->db->get('testimonial')->result_array();

			$this->db->select('location.location_name,job_post.*');
			$this->db->join('location','location.location_id=job_post.location_id');
			$this->db->limit(8);
			$data['jobpost']=$this->db->get('job_post')->result_array();
			

			$this->load->view('home',$data);
		}
	}

?>
