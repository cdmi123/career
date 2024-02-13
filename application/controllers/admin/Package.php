<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {	

	public function add_package($id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}


		$this->db->where('id',$id);
		$data['info']=$this->db->get('package')->row_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$pkg_name=$this->input->post('pkg_name');
			$pkg_rate=$this->input->post('pkg_rate');

			$this->form_validation->set_rules('pkg_name', 'package name', 'required');
			$this->form_validation->set_rules('pkg_rate', 'package rate', 'required');
			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['pkg_name']=set_value('pkg_name');
                	$data['info']['pkg_rate']=set_value('pkg_rate');
                   
                	
                }
                else
                { 

					$arr=array('pkg_name'=>$pkg_name,'pkg_rate'=>$pkg_rate);

					if($id)
					{
						$this->db->where('id',$id);
						$this->db->update('package',$arr);
						redirect('admin/package/view_package');
					}
					else
					{
						$this->db->insert('package',$arr);
						redirect('admin/package/view_package');
					}
				}
		}

		$this->load->view('admin/add_package',$data);
	}
	public function view_package()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$q= $this->db->get('package');
		//echo $this->db->last_query();die;
		$res['info']= $q->result_array();
		$this->load->view('admin/view_package',$res);
	}
	function delete_package($id=0)
	{
		$this->db->where('id',$id);
		$this->db->delete('package');
		redirect('admin/package/view_package');
	}
}
?>