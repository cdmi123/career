<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class login extends CI_Controller 
	{
		function index()
		{
			$arr=array();

			$this->load->library('form_validation');

			// if(@$this->session->userdata('client_id'))
			// {
			// 	redirect('home/index');
			// }

			if($this->input->post())
			{
				//echo '<pre>';print_r($this->input->post());
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				
				$this->db->where('email',$email);
				$this->db->where('password',$password);

				$qry = $this->db->get('user');
				$cnt = $qry->num_rows();

				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[8]');

			
                if ($this->form_validation->run() == FALSE)
                {

                }
                else
                { 
					if($cnt==1)
					{
						$arr = $qry->row_array();
						$this->session->set_userdata('client_id',$arr['id']);
						redirect('home/index');
					}
					else
					{
						$arr['msg'] = "please enter valid email and password";
					}
				}
			}


			$this->load->view('login',$arr);
		}
		function home()
		{
			$this->load->view('home/index');
		}

		function logout()
		{
			$this->session->unset_userdata('client_id');
			redirect('login/index');
		}
	}

?>