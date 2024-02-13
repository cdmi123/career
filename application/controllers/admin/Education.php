<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {
	
	
	public function add_education($education_id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$this->db->where('education_id',$education_id);
		$data['info']=$this->db->get('education')->row_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$education_name=$this->input->post('education_name');

			$this->form_validation->set_rules('education_name', 'Education name', 'required|callback_education_check');
			
			    if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['education_name']=set_value('education_name');
                }
                else
                { 


					$arr=array('education_name' =>$education_name);

					if($education_id)
					{
						$this->db->where('education_id',$education_id);
						$this->db->update('education',$arr);
						redirect('admin/education/view_education');
					}
					else
					{
						$this->db->insert('education',$arr);
						redirect('admin/education/view_education');
					}
				}
			}
		$this->load->view('admin/add_education',$data);
	}
	public function view_education()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		
		$q= $this->db->get('education');
		$res['info']= $q->result_array();
		$this->load->view('admin/view_education',$res);
	}
	function delete_data($education_id=0)
	{
		$this->db->where('education_id',$education_id);
		$this->db->delete('education');
		redirect('admin/education/view_education');
	}	
	public function education_check($str)
    {
    	$education_id = $this->uri->segment(4);
    	$this->db->where('education_id !=',$education_id);
    	$this->db->where('education_name',$str);
    	$qry = $this->db->get('education')->num_rows();
    	//echo $this->db->last_query();
    	//echo $qry ;die;
    	//echo $location_id;die;	
            if ($qry >0)
            {
        		$this->form_validation->set_message('education_check', 'The {field} is must be unique.');            
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }
}
?>