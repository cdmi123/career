<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgot_password extends CI_Controller {

	function index()
	{
		$arr = array();
		
		$this->load->library('email');

		if($this->input->post())
		{
			$email = $this->input->post('email');
	
			$this->db->where('email',$email);
			$qry = $this->db->get('user');
			//echo "<pre>";print_r($qry);
			$cnt = $qry->num_rows();

				if($cnt==1)
				{
					$data = $qry->row_array();
					$user_email = $data['email'];
					$user_password = $data['password'];

					$config['protocol'] = 'smtp';
					$config['smtp_host'] = 'ssl://smtp.gmail.com';
					$config['smtp_port'] = 465;
					$config['smtp_timeout'] = '7';
					$config['smtp_user'] = 'jobplacemart@gmail.com';
					$config['smtp_pass'] = 'miren@0113';
					$config['charset'] = 'utf-8';
					$config['newline'] = "\r\n";
					$config['mailtype'] = 'html';
					$config['wordwrap'] = TRUE;


					$this->email->initialize($config);

					$this->email->from('jobplacemart@gmail.com','Job Placemart');
					$this->email->to($user_email);

					$this->email->subject('Job placemart password');
					$this->email->message('Your password is:'.$user_password);

					if($this->email->send())
					{

						$arr['msg'] = "Your password is send in your email!!!";
					}

				}
				else
				{
					$arr['msg'] = "Your Account is not Registred !!!";
				}
		}
		$this->load->view('forgot_password',$arr);
	}
}
?>