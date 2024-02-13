<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class register extends CI_Controller 
	{
		function index($id=0)
		{
			$this->load->library('form_validation');

			#if(@$this->session->userdata('client_id'))
			#{
				#redirect('login/index');
			#}
			
			#$old_image= $data['info']['image'];
			$data['skill'] = $this->db->get('skill')->result_array();
			$data['education'] = $this->db->get('education')->result_array();
		
			$select_skill= $this->input->post('select_skill');
			$select_education= $this->input->post('select_education');
			
			$this->db->where('id',$id);
			$data['info']=$this->db->get('user')->row_array();


			if($this->input->post())
			{
				//echo '<pre>';print_r($this->input->post());
				$name=$this->input->post('name');
				$email=$this->input->post('email');
				$password=$this->input->post('password');
				#$image=$this->input->post('image');

				if($_FILES['image']['name']=='')
				{
					#$image = $old_image;
				}
				else
				{

					$config['upload_path']='./uploads/user/';
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

				$contact_no=$this->input->post('contact_no');
				$gender=$this->input->post('gender');
				$address=$this->input->post('address');
				
				$skill_id=$this->input->post('skill_id');
				$education_id=$this->input->post('education_id');
				$exper_req=$this->input->post('exper_req');
		

				$this->form_validation->set_rules('name', 'User name', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[8]');
				$this->form_validation->set_rules('contact_no', 'contact num', 'required|numeric|max_length[12]');
				$this->form_validation->set_rules('exper_req', 'experince Requirement', 'required');
				$this->form_validation->set_rules('select_skill', 'Select Skill', 'required');
				$this->form_validation->set_rules('select_education', 'Select Education', 'required');
			
				$this->db->select('skill.skill_name,education.education_name,user.*');
				$this->db->join('skill','skill.skill_id=user.skill_id');
				$this->db->join('education','education.education_id=user.education_id');
				
		
			  	if ($this->form_validation->run() == FALSE)
                {
                }
                else
                {
					$arr=array('name' =>$name ,'email'=>$email,'password' =>$password ,'image'=>$image,'contact_no' =>$contact_no ,'gender' => $gender ,'address' => $address,'skill_id'=>$select_skill,'education_id'=>$select_education,'exper_req'=>$exper_req);

					
					if($id)
					 {
					 	$this->db->where('id',$id);
						$this->db->update('user',$arr);
					 }
					 else
					 {

						$this->db->insert('user',$arr);
						redirect('login/index');
					 }
				}

			}
			
			$this->load->view('register',$data);
		}
	}

?>