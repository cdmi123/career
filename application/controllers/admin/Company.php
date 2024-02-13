<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	
	
	public function add_company($company_id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$data['country'] = $this->db->get('country')->result_array();
		$data['state'] = $this->db->get('state')->result_array();
		$data['city'] = $this->db->get('city')->result_array();
		$data['location'] = $this->db->get('location')->result_array();

		$select_country= $this->input->post('select_country');
		$select_state= $this->input->post('select_state');
		$select_city= $this->input->post('select_city');
		$select_location= $this->input->post('select_location');

		$this->db->where('company_id',$company_id);
		$data['info']=$this->db->get('company')->row_array();

		$old_image=$data['info']['image'];

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$company_name=$this->input->post('company_name');
			$contact=$this->input->post('contact');
			$contact_person=$this->input->post('contact_person');
			
			if($_FILES['image']['name']=='')
			{
				$image = $old_image;
			}
			else
			{

				$config['upload_path']='./uploads/company/';
				$config['allowed_types']='gif|jpg|png';

				$this->load->library('upload',$config);

				if($this->upload->do_upload('image'))
				{
					$ar1=$this->upload->data();
				//	echo '<pre>';print_r($ar1);
					$image=$ar1['file_name'];
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$country_id=$this->input->post('country_id');
			$state_id=$this->input->post('state_id');
			$city_id=$this->input->post('city_id');
			$location_id=$this->input->post('location_id');
			$address=$this->input->post('address');
			$company_details=$this->input->post('company_details');
			$company_status=$this->input->post('company_status');
			
			
			$this->form_validation->set_rules('company_name', 'company name', 'required');
			$this->form_validation->set_rules('contact', 'contact num', 'required|numeric|max_length[12]');
			$this->form_validation->set_rules('contact_person', 'contact person num', 'required|numeric|max_length[12]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[8]');
			$this->form_validation->set_rules('select_country', 'select country', 'required');
			$this->form_validation->set_rules('select_state', 'select state', 'required');
			$this->form_validation->set_rules('select_city', 'select city', 'required');
			$this->form_validation->set_rules('select_location', 'select location', 'required');
			$this->form_validation->set_rules('address', 'address', 'required');
			$this->form_validation->set_rules('company_details', 'company details', 'required');
			$this->form_validation->set_rules('company_status', 'company status', 'required');
			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['company_name']=set_value('company_name');
                	$data['info']['contact']=set_value('contact');
                	$data['info']['contact_person']=set_value('contact_person');
                	$data['info']['image']=set_value('image');
                	$data['info']['email']=set_value('email');
                	$data['info']['password']=set_value('password');
                	$data['info']['country_id']=set_value('select_country');
                	$data['info']['state_id']=set_value('select_state');
                	$data['info']['city_id']=set_value('select_city');
                	$data['info']['location_id']=set_value('select_location');
                	$data['info']['address']=set_value('address');
                	$data['info']['company_details']=set_value('company_details');
                	$data['info']['company_status']=set_value('company_status');
                }
                else
                { 

					$arr=array('company_name' =>$company_name ,'contact'=>$contact,'contact_person' =>$contact_person ,'image' =>$image , 'email'=>$email,'password' =>$password ,'country_id'=>$select_country,'state_id'=>$select_state,'city_id'=>$select_city,'location_id'=>$select_location ,'address' =>$address , 'company_details' =>$company_details , 'company_status' =>$company_status);

					if($company_id)
					{
						$this->db->where('company_id',$company_id);
						$this->db->update('company',$arr);
						redirect('admin/company/view_company');
					}
					else
					{
						$this->db->insert('company',$arr);
						redirect('admin/company/view_company');
					}
				}
		}

		$this->load->view('admin/add_company',$data);
	}
	function view_company()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		
		$this->db->select('country.country_name,state.state_name,city.city_name,location.location_name,company.*');
		$this->db->join('country','country.country_id=company.country_id');
		$this->db->join('state','state.state_id=company.state_id');
		$this->db->join('city','city.city_id=company.city_id');
		$this->db->join('location','location.location_id=company.location_id');

		$qry= $this->db->get('company');
		$res['info']= $qry->result_array();
		$this->load->view('admin/view_company',$res);
	}
	function delete_data($company_id=0)
	{
		$this->db->where('company_id',$company_id);
		$this->db->delete('company');
		redirect('admin/company/view_company');
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
	function get_ajax_cities(){
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
	public function email_check($str)
    {
    	$company_id = $this->session->userdata('company_id');
    	$location_id = $this->uri->segment(4);
    	$this->db->where('company_id !=',$company_id);
    	$this->db->where('email',$str);
    	$qry = $this->db->get('company')->num_rows();
    	//echo $this->db->last_query();
    	//echo $qry ;die;
    	//echo $location_id;die;	
            if ($qry >0)
            {
        		$this->form_validation->set_message('email_check', 'The {field} is not unique.');            
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }	
}
?>