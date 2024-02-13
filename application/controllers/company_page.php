<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class company_page extends CI_Controller 
	{
		function index($company_id=0)
		{

			if($company_id)
			{
				

				
				$this->db->where('company_id',$company_id);
				$data['company'] = $this->db->get('company')->row_array();

				$this->db->select('company.company_name,job_post.*');
				 $this->db->join('company','company.company_id=job_post.company_id');
				$data['tot_job'] = $this->db->count_all('job_post');
				$data['tot_emp'] = $this->db->count_all('job_applications');
				$data['jobpost'] = $this->db->get('job_post')->row_array();
				//echo '<pre>';print_r($data);die;
			}

			$this->load->view('company_page',$data);
		}
	}

?>