<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	
	public function add_admin($id=0)
	{
		$this->load->library('form_validation');

		if($this->session->userdata('user_id')=='')
		 {
		 	redirect('admin/login');
		 }
		$this->db->where('id',$id);
		$data['info']=$this->db->get('admin')->row_array();

		$old_image=$data['info']['image'];

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			
			if($_FILES['image']['name']=='')
			{
				$image = $old_image;
			}
			else
			{

				$config['upload_path']='./uploads/admin/';
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

			$this->form_validation->set_rules('name', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[8]');

			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['name']=set_value('name');
                	$data['info']['email']=set_value('email');
                	$data['info']['password']=set_value('password');
                	$data['info']['image']=set_value('image');
                }
                else
                { 
                   $arr=array('name' =>$name ,'email'=>$email,'password' =>$password ,'image' =>$image);

					if($id)
					{
						$this->db->where('id',$id);
						$this->db->update('admin',$arr);
						redirect('admin/admin/view_admin');
					}
					else
					{
						$this->db->insert('admin',$arr);
						redirect('admin/admin/view_admin');
					}    
                }

			
		}

		$this->load->view('admin/add_admin',$data);
	}

	public function view_admin()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

	 	$id= $this->session->userdata('user_id');         
        
        if($this->session->userdata('user_role')==1)
        {
		 	$info =$this->db->get('admin')->result_array();
		}
	    else
		{
			$this->db->where('id',$id);
			$info=$this->db->get('admin')->result_array(); 	
		}
        
        $res['info'] =$info;
		
		$this->load->view('admin/view_admin',$res);
	
	}
	function delete_data($id=0)
	{
		$this->db->where('id',$id);
		$this->db->delete('admin');
		redirect('admin/login/index');
	}	
	public function email_check($str)
    {
    	$id = $this->uri->segment(4);
    	$this->db->where('id !=',$id);
    	$this->db->where('email',$str);
    	$qry = $this->db->get('admin')->num_rows();
    	//echo $this->db->last_query();
    	//echo $qry ;die;
    	//echo $location_id;die;	
            if ($qry >0)
            {
        		$this->form_validation->set_message('email_check', 'The {field} is must be unique.');            
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }
}
?>