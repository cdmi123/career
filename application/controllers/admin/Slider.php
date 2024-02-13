<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	function add_slider($id=0)
	{
		if(!@$this->session->userdata('user_id'))
		 {
		 	redirect('admin/login');
		 }

		$this->db->where('id',$id);
		$data['info']=$this->db->get('slider')->row_array();

		$old_image=$data['info']['image'];

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());

			if($_FILES['image']['name']=='')
			{
				$image = $old_image;
			}
			else
			{		
			
				$config['upload_path']='./uploads/slider/';
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
            $arr = array('image' => $image);

			if($id)
			{
				$this->db->where('id',$id);
				$this->db->update('slider',$arr);
			}
			else
			{
				$this->db->insert('slider',$arr);
			}    
			
		}

		$this->load->view('admin/add_slider',$data);

	}
}
?>