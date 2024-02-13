<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class about extends CI_Controller 
	{
		function index()
		{
			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }
			$data['info'] = $this->db->get('admin')->result_array();


			$this->load->view('about',$data);
		}
	}

?>