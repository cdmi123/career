<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function index()
	{

	//	echo '<pre>';print_r($this->session->all_userdata());die;
		$arr = array();

		$this->load->library('form_validation');

		if(@$this->session->userdata('user_id'))
		{
			redirect('admin/Dashboard');
		}

		if($this->input->post())
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$qry = $this->db->get('admin');
			//echo "<pre>";print_r($qry);
			$cnt = $qry->num_rows();

			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[8]');

			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['email']=set_value('email');
                	$data['info']['password']=set_value('password');
                }
                else
                { 

					if($cnt==1)
					{
						$arr = $qry->row_array();
						//echo "<pre>";print_r($arr);
						$this->session->set_userdata('user_id',$arr['id']);
						$this->session->set_userdata('user_role',$arr['role']);
						redirect('admin/dashboard');
					}
					else
					{
						$arr['msg'] =  "invalid email and password";
					}
				}
		}
		$this->load->view('admin/login',$arr);
	}
	function Dashboard()
	{
		$this->load->view('admin/Dashboard');
	}

	function logout()
	{
		//session_destroy();
		 $this->session->unset_userdata('user_id');
		redirect('admin/login/index');
	}
	
}
?>