<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function index()
	{

		$arr = array();		

		if(@$this->session->userdata('company_id'))
		{
			redirect('company/Dashboard');
		}

		if($this->input->post())
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$qry = $this->db->get('company');
			//echo "<pre>";print_r($qry);
			$cnt = $qry->num_rows();

			if($cnt==1)
			{
				$arr = $qry->row_array();
				//echo "<pre>";print_r($arr);
				$this->session->set_userdata('company_id',$arr['company_id']);
				redirect('company/dashboard');
			}
			else
			{
				$arr['msg'] =  "invalid email and password";
			}
		}
		$this->load->view('company/login',$arr);
	}
	function Dashboard()
	{
		$this->load->view('company/Dashboard');
	}
	function logout()
	{
		 $this->session->unset_userdata('company_id');
		redirect('company/login/index');
	}
}
?>