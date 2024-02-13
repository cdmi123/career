<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buy_package extends CI_Controller {

	public function package($id=0)
	{
		$this->load->library('form_validation');

		if(!@$this->session->userdata('company_id'))
		{
			redirect('company/login');
		}

		$data['package'] = $this->db->get('package')->result_array();
		

		$select_package= $this->input->post('select_package');
		$select_rate= $this->input->post('select_rate');

		$this->db->where('id',$id);
		$data['info']=$this->db->get('package')->result_array();

		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());
			$pkg_name=$this->input->post('pkg_name');
			$pkg_rate=$this->input->post('pkg_rate');
			
			
			$this->form_validation->set_rules('select_package', 'select package', 'required');
			$this->form_validation->set_rules('select_rate', 'select rate', 'required');
			
			
                if ($this->form_validation->run() == FALSE)
                {
                	
                	$data['info']['pkg_name']=set_value('select_package');
                	$data['info']['pkg_rate']=set_value('select_rate');
                }
                else
                { 

					$arr=array('pkg_name'=>$select_package,'pkg_rate'=>$select_rate);

					if($id)
					{
						$this->db->where('id',$id);
						$this->db->update('package',$arr);
						//redirect('company/package/view_company');
					}
					else
					{
						$this->db->insert('package',$arr);
						//redirect('company/company/view_company');
					}
				}
		}

		$this->load->view('company/package',$data);
	}
	
	
	function get_ajax_package(){
		$pkg_name = $this->input->post('pkg_name');
		$this->db->where('id',$pkg_name);
		$qry = $this->db->get('package');
		//echo $this->db->last_query();die;
		$pkgs = $qry->row_array();
		echo $pkgs['pkg_rate'];
		
	}	
}
?>