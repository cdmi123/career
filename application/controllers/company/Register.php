<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller 
{
	 public function company_register()
	{
		$this->load->library('form_validation');

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$company_name = $this->input->post('company_name');
			$contact = $this->input->post('contact');
			$image = $this->input->post('image');
			
			$config['upload_path'] ='./uploads/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload',$config);

			if($this->upload->do_upload('image'))
			{
				$arr1  = $this->upload->data();
				$image = $arr1['file_name'];
			}
			else
			{
				//echo $this->upload->display_errors();
			}

			$email = $this->input->post('email');
			$password = $this->input->post('password');
			

			$this->form_validation->set_rules('company_name', 'company name', 'required|alpha');
			$this->form_validation->set_rules('contact', 'contact num', 'required|numeric|max_length[12]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[8]');

			  if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['company_name']=set_value('company_name');
                	$data['info']['contact']=set_value('contact');
                	$data['info']['image']=set_value('image');
                	$data['info']['email']=set_value('email');
                	$data['info']['password']=set_value('password');
                }
                else
                {
			
					$arr = array('company_name'=>$company_name,'contact'=>$contact, 'image'=>$image,'email'=>$email,'password'=>$password);
					
					 if($company_id)
					 {
					 	$this->db->where('company_id',$company_id);
						$this->db->update('company',$arr);
					 }
					 else
					 {

						$this->db->insert('company',$arr);
						redirect('company/login/index');
					 }
				}
			}	

		$this->load->view('company/company_register');
	}
	
}
?>