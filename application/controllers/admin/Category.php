<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function add_category($category_id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}

		$this->db->where('category_id',$category_id);
		$data['info']=$this->db->get('category')->row_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$category_name=$this->input->post('category_name');
			$description=$this->input->post('description');

			$this->form_validation->set_rules('category_name', 'category name', 'required|callback_category_check');
			$this->form_validation->set_rules('description', 'category description', 'required');
			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['category_name']=set_value('category_name');
                	$data['info']['description']=set_value('description');
                }
                else
                { 

					$arr=array('category_name' =>$category_name ,'description'=>$description);

					if($category_id)
					{
						$this->db->where('category_id',$category_id);
						$this->db->update('category',$arr);
						redirect('admin/category/view_category');
					}
					else
					{
						$this->db->insert('category',$arr);
						redirect('admin/category/view_category');
					}
				}
		}

		$this->load->view('admin/add_category',$data);
	}
	public function view_category()
	{
		if(!@$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
		
		$q= $this->db->get('category');
		$res['info']= $q->result_array();
		$this->load->view('admin/view_category',$res);
	}
	function delete_category($category_id=0)
	{
		$this->db->where('category_id',$category_id);
		$this->db->delete('category');
		redirect('admin/category/view_category');
	}
	public function category_check($str)
    {
    	$category_id = $this->uri->segment(4);
    	$this->db->where('category_id !=',$category_id);
    	$this->db->where('category_name',$str);
    	$qry = $this->db->get('category')->num_rows();
    	//echo $this->db->last_query();
    	//echo $qry ;die;
    	//echo $location_id;die;	
            if ($qry >0)
            {
        		$this->form_validation->set_message('category_check', 'The {field} is not unique.');            
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }	
}
?>