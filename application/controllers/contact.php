<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class contact extends CI_Controller 
	{
		function index($id=0)
		{
			$this->load->library('form_validation');

			// if(!@$this->session->userdata('client_id'))
			// {
			// 	redirect('login/index');
			// }
			
			$this->session->userdata('client_id');
			$this->db->where('id',$id);
			$data['info']=$this->db->get('contact_us')->row_array();
			if($this->input->post())
			{
				//echo '<pre>';print_r($this->input->post());
				$name = $this->input->post('name'); 
				$email = $this->input->post('email');
				$subject = $this->input->post('subject');
				$message = $this->input->post('message');

				$this->form_validation->set_rules('name', 'User name', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('subject', 'subject', 'required');
				$this->form_validation->set_rules('message', 'message', 'required');
				

				if ($this->form_validation->run() == FALSE)
                {

                }
                else
                {
	            	$arr = array('name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message);
				
					//echo '<pre>';print_r($arr);die;
		            if($id)
		            {    	
						$this->db->where('id',$id);
						$this->db->update('contact_us',$arr);
						//redirect('home/index');
						//echo $this->db->last_query();die;
					}
					else
					{

						$this->db->insert('contact_us',$arr);
						redirect('home/index');
					}
				}		
			}
			$this->load->view('contact',$data);
		}
	}

?>