<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		
		

		$this->load->view('admin/dashboard');
	}	
}
?>
