<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_branch extends CI_Controller {
	
	
	function add_branch($branch_id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('company_id'))
		{
			redirect('company/login');
		}

		//$data['company'] = $this->db->get('company')->result_array();
		$data['country'] = $this->db->get('country')->result_array();
		$data['state'] = $this->db->get('state')->result_array();
		$data['city'] = $this->db->get('city')->result_array();
		$data['location'] = $this->db->get('location')->result_array();

		//$select_company= $this->input->post('select_company');
		$select_country= $this->input->post('select_country');
		$select_state= $this->input->post('select_state');
		$select_city= $this->input->post('select_city');
		$select_location= $this->input->post('select_location');

		$this->db->where('branch_id',$branch_id);
		$data['info']=$this->db->get('company_branch')->row_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$branch_name=$this->input->post('branch_name');
			
			$company_id = $this->session->userdata('company_id');
			//$company_id=$this->input->post('company_id');
			$country_id=$this->input->post('country_id');
			$state_id=$this->input->post('state_id');
			$city_id=$this->input->post('city_id');
			$location_id=$this->input->post('location_id');
			$address=$this->input->post('address');

			$this->form_validation->set_rules('branch_name', 'Branch name', 'required');
			$this->form_validation->set_rules('select_country', 'select country', 'required');
			$this->form_validation->set_rules('select_state', 'select state', 'required');
			$this->form_validation->set_rules('select_city', 'select city', 'required');
			$this->form_validation->set_rules('select_location', 'select location', 'required');
			$this->form_validation->set_rules('address', 'address', 'required');
			
			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['branch_name']=set_value('branch_name');
                	$data['info']['country_id']=set_value('select_country');
                	$data['info']['state_id']=set_value('select_state');
                	$data['info']['city_id']=set_value('select_city');
                	$data['info']['location_id']=set_value('select_location');
                	$data['info']['address']=set_value('address');
                }
                else
                { 

					$arr=array('branch_name'=>$branch_name,'company_id' =>$company_id ,'country_id'=>$select_country,'state_id'=>$select_state,'city_id'=>$select_city,'location_id'=>$select_location ,'address' =>$address);

					if($branch_id)
					{
						$this->db->where('branch_id',$branch_id);
						$this->db->update('company_branch',$arr);
						redirect('company/view_branch');
					}
					else
					{
						$this->db->insert('company_branch',$arr);
						redirect('company/company_branch/view_branch');
					}
				}
			}
		$this->load->view('company/add_branch',$data);
	}
	 function view_branch()
	{
		if(!@$this->session->userdata('company_id'))
		{
			redirect('company/login');
		}
		
		$this->db->select('company.company_name,country.country_name,state.state_name,city.city_name,location.location_name,company_branch.*');
		$this->db->join('company','company.company_id=company_branch.company_id');
		$this->db->join('country','country.country_id=company_branch.country_id');
		$this->db->join('state','state.state_id=company_branch.state_id');
		$this->db->join('city','city.city_id=company_branch.city_id');
		$this->db->join('location','location.location_id=company_branch.location_id');

		$q= $this->db->get('company_branch');
		$res['info']= $q->result_array();
		$this->load->view('company/view_branch',$res);
	}
	function delete_data($branch_id=0)
	{
		$this->db->where('branch_id',$branch_id);
		$this->db->delete('company_branch');
		redirect('company/company_branch/view_branch');
	}
	function get_ajax_countrys(){
		$country_id = $this->input->post('country_id');
		$this->db->where('country_id',$country_id);
		$qry = $this->db->get('state');
		$states = $qry->result_array();
		echo '<option value="">Select State</option>';
		foreach($states as $state)
		{
			echo '<option value="'.$state['state_id'].'">'.$state['state_name'].'</option>';
		}	
	}
	function get_ajax_states()
	{
		$state_id = $this->input->post('state_id');
		$this->db->where('state_id',$state_id);
		$qry = $this->db->get('city');
		$cities = $qry->result_array();
		echo '<option value="">Select City </option>';
		foreach($cities as $city)
		{
			echo '<option value="'.$city['city_id'].'">'.$city['city_name'].'</option>';
		}	
	}
	function get_ajax_cities()
	{
		$city_id = $this->input->post('city_id');
		$this->db->where('city_id',$city_id);
		$qry = $this->db->get('location');
		$locations = $qry->result_array();
		echo '<option value="">Select Location </option>';
		foreach($locations as $location)
		{
			echo '<option value="'.$location['location_id'].'">'.$location['location_name'].'</option>';
		}	
	}
}
?>