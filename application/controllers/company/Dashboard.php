<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		//echo '<pre>';print_r($this->session->all_userdata());die;
		if(!@$this->session->userdata('company_id'))
		{
			redirect('company/login');
		}

		$this->load->view('company/dashboard');
	}	
}
?>
