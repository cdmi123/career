<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class job_list_view extends CI_Controller 
	{
		function index()
		{

			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }

			$this->load->view('job_list_view');
		}
	}

?>