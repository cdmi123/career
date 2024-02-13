<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_profile extends CI_Controller 
{
	 public function index($id=0)
	{

		$id = $this->session->userdata('client_id');
		$this->db->where('id',$id);
		$data['info'] = $this->db->get('user')->row_array();
		$data['skill'] = $this->db->get('skill')->result_array();
		$data['education'] = $this->db->get('education')->result_array();


		 $old_image = $data['info']['image'];
		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$name = $this->input->post('name'); 
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$image = $this->input->post('image');
			$contact_no = $this->input->post('contact_no');
			$address = $this->input->post('address');

			if($_FILES['image']['name']=='')
			{
				$image = $old_image;
			
			}
			else
			{
				$config['upload_path'] ='./uploads/user';
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload',$config);

				if($this->upload->do_upload('image'))
				{

					$arr1  = $this->upload->data();
					//echo '<pre>';print_r($arr1);	
			 		$image = $arr1['file_name'];
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}

            $arr = array('name'=>$name,'email'=>$email,'password'=>$password,'image'=>$image,'contact_no'=>$contact_no,'address'=>$address);
			
			//echo '<pre>';print_r($arr);die;
                	
			$this->db->where('id',$id);
			$this->db->update('user',$arr);
			redirect('home/index');
			//echo $this->db->last_query();die;
					
		}
		$this->load->view('edit_profile',$data);
	}
	
}	
	
?>		