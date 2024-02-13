<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller {
	
	
	public function add_skill($skill_id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$this->db->where('skill_id',$skill_id);
		$data['info']=$this->db->get('skill')->row_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$skill_name=$this->input->post('skill_name');

			$this->form_validation->set_rules('skill_name', 'Skill name', 'required');
			
			    if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['skill_name']=set_value('skill_name');
                }
                else
                { 
					$arr=array('skill_name' =>$skill_name);

					if($skill_id)
					{
						$this->db->where('skill_id',$skill_id);
						$this->db->update('skill',$arr);
						redirect('admin/view_skill');
					}
					else
					{
						$this->db->insert('skill',$arr);
						redirect('admin/skill/view_skill');
					}
				}
			}
		$this->load->view('admin/add_skill',$data);
	}
	public function view_skill()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		
		$q= $this->db->get('skill');
		$res['info']= $q->result_array();
		$this->load->view('admin/view_skill',$res);
	}
	function delete_data($skill_id=0)
	{
		$this->db->where('skill_id',$skill_id);
		$this->db->delete('skill');
		redirect('admin/skill/view_skill');
	}	
}
?>