<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class employer_detail extends CI_Controller 
	{
		function index()
		{

			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }

			$this->load->view('employer_detail');
		}
	}

?>p