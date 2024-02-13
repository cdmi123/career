<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class company_list extends CI_Controller 
	{
		function index()
		{
			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }
			
			$this->load->view('company_list');
		}
	}

?>