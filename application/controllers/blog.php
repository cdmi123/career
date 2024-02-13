<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class blog extends CI_Controller 
	{
		function index()
		{

			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }

			$this->db->select('location.location_name,post.post_name,job_post.*');
			$this->db->join('location','location.location_id=job_post.location_id');
			$this->db->join('post','post.post_id=job_post.post_id');
			$data['jobpost'] = $this->db->get('job_post')->result_array();

			$this->load->view('blog',$data);
		}
	}

?>