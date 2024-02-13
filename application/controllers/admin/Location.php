<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {	

	public function add_location($location_id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$data['country'] = $this->db->get('country')->result_array();
		$data['state'] = $this->db->get('state')->result_array();
		$data['city'] = $this->db->get('city')->result_array();

		$select_country= $this->input->post('select_country');
		$select_state= $this->input->post('select_state');
		$select_city= $this->input->post('select_city');

		$this->db->where('location_id',$location_id);
		$data['info']=$this->db->get('location')->row_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$location_name=$this->input->post('location_name');
			$location_status=$this->input->post('location_status');

			$this->form_validation->set_rules('select_country', 'select country', 'required');
			$this->form_validation->set_rules('select_state', 'select state', 'required');
			$this->form_validation->set_rules('select_city', 'select city', 'required');
			$this->form_validation->set_rules('location_name', 'location name', 'required|callback_location_check');
			$this->form_validation->set_rules('location_status', 'location status', 'required');
			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['country_id']=set_value('select_country');
                	$data['info']['state_id']=set_value('select_state');
                    $data['info']['city_id']=set_value('select_city');
                	$data['info']['location_name']=set_value('location_name');
                	$data['info']['location_status']=set_value('location_status');
                	
                }
                else
                { 

					$arr=array('country_id'=>$select_country,'state_id'=>$select_state,'city_id'=>$select_city,'location_name' =>$location_name ,'location_status'=>$location_status);

					if($location_id)
					{
						$this->db->where('location_id',$location_id);
						$this->db->update('location',$arr);
						redirect('admin/location/view_location');
					}
					else
					{
						$this->db->insert('location',$arr);
						redirect('admin/location/view_location');
					}
				}
		}

		$this->load->view('admin/add_location',$data);
	}
	public function view_location()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
			
		$this->db->select('country.country_name,state.state_name,city.city_name,location.*');
		$this->db->join('country','country.country_id=location.country_id');
		$this->db->join('state','state.state_id=location.state_id');
		$this->db->join('city','city.city_id=location.city_id');

		$q= $this->db->get('location');
		//echo $this->db->last_query();die;
		$res['info']= $q->result_array();
		$this->load->view('admin/view_location',$res);
	}
	function delete_location($location_id=0)
	{
		$this->db->where('location_id',$location_id);
		$this->db->delete('location');
		redirect('admin/location/view_location');
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
	function get_ajax_states(){
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
	public function location_check($str)
    {
    	$location_id = $this->uri->segment(4);
    	$this->db->where('location_id !=',$location_id);
    	$this->db->where('location_name',$str);
    	$qry = $this->db->get('location')->num_rows();
    	//echo $this->db->last_query();
    	//echo $qry ;die;
    	//echo $location_id;die;	
            if ($qry >0)
            {
        		$this->form_validation->set_message('location_check', 'The {field} is must be unique.');            
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }
}
?>