<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testimonial extends CI_Controller {
	
	
	function add_testimonial($id=0)
	{
		$this->load->library('form_validation');

		// if(!@$this->session->userdata('company_id'))
		// {
		// 	redirect('company/login');
		// }

		//$data['company'] = $this->db->get('company')->result_array();
		
		$data['company'] = $this->db->get('company')->result_array();

		$select_company= $this->input->post('select_company');
		
		

		$this->db->where('id',$id);
		$data['info']=$this->db->get('testimonial')->row_array();
		$old_image=$data['info']['image'];

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			
			
			//$company_id = $this->session->userdata('company_id');
			//
			$company_id=$this->input->post('company_id');
			$image=$this->input->post('image');
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
			
			$review=$this->input->post('review');
			
			$this->form_validation->set_rules('select_company', 'select company', 'required');
			$this->form_validation->set_rules('review', 'Enter Review', 'required');
			
                if ($this->form_validation->run() == FALSE)
                {
                	
                	$data['info']['company_id']=set_value('select_company');
                	$data['info']['image']=set_value('image');
                	$data['info']['review']=set_value('review');
                	
                }
                else
                { 

					$arr=array('company_id'=>$select_company,'image'=>$image,'review'=>$review);

					if($id)
					{
						$this->db->where('id',$id);
						$this->db->update('testimonial',$arr);
						redirect('company/testimonial/view_testimonial');
					}
					else
					{
						$this->db->insert('testimonial',$arr);
						redirect('company/testimonial/view_testimonial');
					}
				}
			}
		$this->load->view('company/add_testimonial',$data);
	}
	 function view_testimonial()
	{
		if(!@$this->session->userdata('company_id'))
		{
			redirect('company/login');
		}
		
		$this->db->select('company.company_name,testimonial.*');
		$this->db->join('company','company.company_id=testimonial.company_id');
		
		$q= $this->db->get('testimonial');
		$res['info']= $q->result_array();
		$this->load->view('company/view_testimonial',$res);
	}
	function delete_data($id=0)
	{
		$this->db->where('id',$id);
		$this->db->delete('testimonial');
		redirect('company/testimonial/view_testimonial');
	}
	
}
?>