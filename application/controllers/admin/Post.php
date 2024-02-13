<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	
	
	public function add_post($post_id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$data['category'] = $this->db->get('category')->result_array();
		
		$select_category= $this->input->post('select_category');
		
		$this->db->where('post_id',$post_id);
		$data['info']=$this->db->get('post')->row_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$post_name=$this->input->post('post_name');
			$category_id=$this->input->post('category_id');

			$this->form_validation->set_rules('post_name', 'Post name', 'required');
			$this->form_validation->set_rules('select_category', 'Select category', 'required');
			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['post_name']=set_value('post_name');
                	$data['info']['category_id']=set_value('select_category');
                }
                else
                { 

					$arr=array('post_name' =>$post_name ,'category_id'=>$select_category);

					if($post_id)
					{
						$this->db->where('post_id',$post_id);
						$this->db->update('post',$arr);
						redirect('admin/view_post');
					}
					else
					{
						$this->db->insert('post',$arr);
						redirect('admin/post/view_post');
					}
				}
			}

		$this->load->view('admin/add_post',$data);
	}
	public function view_post()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		
		$this->db->select('category.category_name,post.*');
		$this->db->join('category','category.category_id=post.category_id');
		
		$q= $this->db->get('post');
		$res['info']= $q->result_array();
		$this->load->view('admin/view_post',$res);
	}
	function delete_data($post_id=0)
	{
		$this->db->where('post_id',$post_id);
		$this->db->delete('post');
		redirect('admin/post/view_post');
	}	
}
?>