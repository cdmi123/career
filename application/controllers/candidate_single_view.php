<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class candidate_single_view extends CI_Controller 
	{
		function index($id=0)
		{

			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }
			if($id)
			{
				$this->db->select('skill.skill_name,education.education_name,user.*');
				$this->db->join('skill','skill.skill_id=user.skill_id');
				$this->db->join('education','education.education_id=user.education_id');
				$this->db->where('id',$id);
				$data['user'] = $this->db->get('user')->row_array();
			}

			$this->db->select('skill.skill_name,education.education_name,user.*');
			$this->db->join('skill','skill.skill_id=user.skill_id');
			$this->db->join('education','education.education_id=user.education_id');
			$data['user1'] = $this->db->get('user')->result_array();

			$this->load->view('candidate_single_view',$data);
		}
	}

?>