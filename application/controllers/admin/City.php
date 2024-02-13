<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller {	

	public function add_city($city_id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$data['country'] = $this->db->get('country')->result_array();
		$data['state'] = $this->db->get('state')->result_array();

		$select_country= $this->input->post('select_country');
		$select_state= $this->input->post('select_state');

		$this->db->where('city_id',$city_id);
		$data['info']=$this->db->get('city')->row_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$city_name=$this->input->post('city_name');
			$city_status=$this->input->post('city_status');

			$this->form_validation->set_rules('select_country', 'select country', 'required');
			$this->form_validation->set_rules('select_state', 'select state', 'required');
			$this->form_validation->set_rules('city_name', 'city name', 'required|callback_city_check');
			$this->form_validation->set_rules('city_status', 'city status', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['country_id']=set_value('select_country');
               	    $data['info']['state_id']=set_value('select_state');
                	$data['info']['city_name']=set_value('city_name');
                	$data['info']['city_status']=set_value('city_status');
                }
                else
                { 

					$arr=array('country_id'=>$select_country,'state_id'=>$select_state,'city_name' =>$city_name ,'city_status'=>$city_status);

					if($city_id)
					{
						$this->db->where('city_id',$city_id);
						$this->db->update('city',$arr);
						redirect('admin/city/view_city');
					}
					else
					{
						$this->db->insert('city',$arr);
						redirect('admin/city/view_city');
					}
				}
		}

		$this->load->view('admin/add_city',$data);
	}
	public function view_city()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$this->db->select('country.country_name,state.state_name,city.*');
		$this->db->join('country','country.country_id=city.country_id');
		$this->db->join('state','state.state_id=city.state_id');

		$q= $this->db->get('city');
		$res['info']= $q->result_array();
		$this->load->view('admin/view_city',$res);
	}
	function delete_city($city_id=0)
	{
		$this->db->where('city_id',$city_id);
		$this->db->delete('city');
		redirect('admin/city/view_city');
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
	public function city_check($str)
    {
    	$city_id = $this->uri->segment(4);
    	$this->db->where('city_id !=',$city_id);
    	$this->db->where('city_name',$str);
    	$qry = $this->db->get('city')->num_rows();
    	//echo $this->db->last_query();
    	//echo $qry ;die;
    	//echo $location_id;die;	
            if ($qry >0)
            {
        		$this->form_validation->set_message('city_check', 'The {field} is must be unique.');            
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }
}
?>