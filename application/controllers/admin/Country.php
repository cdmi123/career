<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

	public function add_country($country_id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$this->db->where('country_id',$country_id);
		$data['info']=$this->db->get('country')->row_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$country_name=$this->input->post('country_name');
			$country_status=$this->input->post('country_status');

			$this->form_validation->set_rules('country_name', 'country name', 'required|callback_country_check');
			$this->form_validation->set_rules('country_status', 'country status', 'required');
			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['country_name']=set_value('country_name');
                	$data['info']['country_status']=set_value('country_status');
                }
                else
                { 

					$arr=array('country_name' =>$country_name ,'country_status'=>$country_status);

					if($country_id)
					{
						$this->db->where('country_id',$country_id);
						$this->db->update('country',$arr);
						redirect('admin/country/view_country');
					}
					else
					{
						$this->db->insert('country',$arr);
						redirect('admin/country/view_country');
					}
			}
		}

		$this->load->view('admin/add_country',$data);
	}
	public function view_country()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$q= $this->db->get('country');
		$res['info']= $q->result_array();
		$this->load->view('admin/view_country',$res);
	}
	function delete_country($country_id=0)
	{
		$this->db->where('country_id',$country_id);
		$this->db->delete('country');
		redirect('admin/country/view_country');
	}
	public function country_check($str)
    {
    	$country_id = $this->uri->segment(4);
    	$this->db->where('country_id !=',$country_id);
    	$this->db->where('country_name',$str);
    	$qry = $this->db->get('country')->num_rows();
    	//echo $this->db->last_query();
    	//echo $qry ;die;
    	//echo $location_id;die;	
            if ($qry >0)
            {
        		$this->form_validation->set_message('country_check', 'The {field} is must be unique.');            
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }
}
?>