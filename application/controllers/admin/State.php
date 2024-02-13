<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {	

	public function add_state($state_id=0)
	{

		$this->load->library('form_validation');
		
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$data['country'] = $this->db->get('country')->result_array();

		$this->db->where('state_id',$state_id);
		$data['info']=$this->db->get('state')->row_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$select_country= $this->input->post('select_country');

			$state_name=$this->input->post('state_name');
			$state_status=$this->input->post('state_status');

			$this->form_validation->set_rules('select_country', 'select country', 'required');
			$this->form_validation->set_rules('state_name', 'state name', 'required|callback_state_check');
			$this->form_validation->set_rules('state_status', 'state status', 'required');
			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['country_id']=set_value('select_country');
                	$data['info']['state_name']=set_value('state_name');
                	$data['info']['state_status']=set_value('state_status');
                }
                else
                { 

					$arr=array('country_id' =>$select_country,'state_name' =>$state_name ,'state_status'=>$state_status);

					if($state_id)
					{
						$this->db->where('state_id',$state_id);
						$this->db->update('state',$arr);
						redirect('admin/state/view_state');
					}
					else
					{
						$this->db->insert('state',$arr);
						redirect('admin/state/view_state');
					}
				}
		}

		$this->load->view('admin/add_state',$data);
	}
	public function view_state()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		
		$this->db->select('country.country_name,state.*');
		$this->db->join('country','country.country_id=state.country_id');

		$q= $this->db->get('state');
		$res['info']= $q->result_array();
		$this->load->view('admin/view_state',$res);
	}
	function delete_state($state_id=0)
	{
		$this->db->where('state_id',$state_id);
		$this->db->delete('state');
		redirect('admin/state/view_state');
	}
	
	public function state_check($str)
    {
    	$location_id = $this->uri->segment(4);
    	$this->db->where('state_id !=',$state_id);
    	$this->db->where('state_name',$str);
    	$qry = $this->db->get('state')->num_rows();
    	//echo $this->db->last_query();
    	//echo $qry ;die;
    	//echo $location_id;die;	
            if ($qry >0)
            {
        		$this->form_validation->set_message('state_check', 'The {field} is not unique.');            
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }
}
?>