<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class search_page extends CI_Controller 
	{
		function index()
		{
			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }
			
			$this->load->view('search_page');
		}
	}

?>