<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_post extends CI_Controller {
	
	
	public function add_jobpost($job_id=0)
	{
		$client_id = $this->session->userdata('client_id');
		$this->db->where('id',$client_id);
		$client_data = $this->db->get('user')->row_array(); 




		$this->load->library('form_validation');
		
		if(!@$this->session->userdata('company_id'))
		{
			redirect('company/login');
		}

		//$data['company'] = $this->db->get('company')->result_array();
		$data['location'] = $this->db->get('location')->result_array();
		$data['company_branch'] = $this->db->get('company_branch')->result_array();
		$data['post'] = $this->db->get('post')->result_array();
		$data['category'] = $this->db->get('category')->result_array();
		$data['skill'] = $this->db->get('skill')->result_array();
		$data['education'] = $this->db->get('education')->result_array();
	
		
		
		//$select_company= $this->input->post('select_company');
		$select_location= $this->input->post('select_location');
		$select_branch= $this->input->post('select_branch');
		$select_post= $this->input->post('select_post');
		$select_category= $this->input->post('select_category');
		$select_skill= $this->input->post('select_skill');
		$select_education= $this->input->post('select_education');
		
		$this->db->where('job_id',$job_id);
		$data['info']=$this->db->get('job_post')->row_array();

		$old_image=$data['info']['image'];
		if($this->input->post())
		{
			//echo '<pre>';print_r($this->input->post());die;
			//$company_name=$this->input->post('company_name');
			$company_id = $this->session->userdata('company_id');

			$job_title=$this->input->post('job_title');

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


			$location_id=$this->input->post('location_id');
			$branch_id=$this->input->post('branch_id');
			$post_id=$this->input->post('post_id');
			$category_id=$this->input->post('category_id');
			$num_vacancy=$this->input->post('num_vacancy');
			$start_date=$this->input->post('start_date');
			$end_date=$this->input->post('end_date');
			$exper_req=$this->input->post('exper_req');
			$skill_id=$this->input->post('skill_id');
			$basic_req=$this->input->post('basic_req');
			$salary_given=$this->input->post('salary_given');
			$status=$this->input->post('jobpost_status');
			$education_id=$this->input->post('education_id');

			$this->form_validation->set_rules('job_title', 'Job Title', 'required');
			$this->form_validation->set_rules('select_location', 'Select Location', 'required');
			$this->form_validation->set_rules('select_branch', 'Select Branch', 'required');
			$this->form_validation->set_rules('select_post', 'Select Post ', 'required');
			$this->form_validation->set_rules('select_category', 'Select category', 'required');
			$this->form_validation->set_rules('num_vacancy', 'Number Of Vacancy', 'required|min_length[1]|max_length[100]');
			$this->form_validation->set_rules('start_date', 'Starting Date', 'required');
			$this->form_validation->set_rules('end_date', 'Ending Date', 'required');
			$this->form_validation->set_rules('exper_req', 'experince Requirement', 'required');
			$this->form_validation->set_rules('select_skill', 'Select Skills', 'required');
			$this->form_validation->set_rules('basic_req', 'Basic Requirement', 'required');
			$this->form_validation->set_rules('salary_given', 'Salary given', 'required|numeric');
			$this->form_validation->set_rules('jobpost_status', 'Jobpost status', 'required');
			$this->form_validation->set_rules('select_education', 'Select Education', 'required');
			
                if ($this->form_validation->run() == FALSE)
                {
                	$data['info']['job_title']=set_value('job_title');
                	$data['info']['image']=set_value('image');
                	$data['info']['location_id']=set_value('select_location');
                	$data['info']['branch_id']=set_value('select_branch');
                	$data['info']['post_id']=set_value('select_post');
                	$data['info']['category_id']=set_value('select_category');
                	$data['info']['num_vacancy']=set_value('num_vacancy');
                	$data['info']['start_date']=set_value('start_date');
                	$data['info']['end_date']=set_value('end_date');
                	$data['info']['exper_req']=set_value('exper_req');
                	$data['info']['skill_id']=set_value('select_skill');
                	$data['info']['basic_req']=set_value('basic_req');
                	$data['info']['salary_given']=set_value('salary_given');
                	$data['info']['jobpost_status']=set_value('status');
                	$data['info']['education_id']=set_value('select_education');
                }
                else
                { 

					$arr=array('company_id' =>$company_id,'job_title'=>$job_title,'image'=>$image,'location_id'=>$select_location,'branch_id'=>$select_branch,'post_id'=>$select_post,'category_id'=>$select_category,'num_vacancy'=>$num_vacancy,'start_date'=>$start_date,'end_date'=>$end_date,'exper_req'=>$exper_req,'skill_id'=>$select_skill,'basic_req'=>$basic_req,'salary_given'=>$salary_given,'status'=>$status,'education_id'=>$select_education);

					if($job_id)
					{
						$this->db->where('job_id',$job_id);
						$this->db->update('job_post',$arr);
						redirect('company/job_post/view_jobpost');
					}
					else
					{


						if($this->db->insert('job_post',$arr)){
							$this->db->where('education_id',$education_id);
							$users = $this->db->get('user')->result_array();
							$emails = array();
							foreach($users as $user){
								$emails[] = $user['email'];
							}
							if(!empty($emails)){
								$emails_str = implode(',',$emails);
								//$to_email = 'foramtrada231@gmail.com';

								$subject = 'Job placemart - New Job Posted';
								$message = "<table>
									<tr>
										<td>Job Title</td>
										<td>".$job_title."</td>
									</tr>
									<tr>
										<td>Number Of Vacancy</td>
										<td>".$num_vacancy."</td>
									</tr>
									<tr>
										<td>End Date</td>
										<td>".$end_date."</td>
									</tr>
									<tr>
										<td>experience Req.</td>
										<td>".$exper_req."</td>
									</tr>
									<tr>
										<td>education Req.</td>
										<td>".$select_education."</td>
									</tr>
								</table>";
//echo $emails_str;die;
								send_email($emails_str,$subject,$message);
							}
								
						}
						

						redirect('company/job_post/view_jobpost');
					}
				}
			}
		$this->load->view('company/add_jobpost',$data);
	}
	public function view_jobpost()
	{
		if(!@$this->session->userdata('company_id'))
		{
			redirect('company/login');
		}

				
		$this->db->select('company.company_name,location.location_name,company_branch.branch_name,post.post_name,category.category_name,skill.skill_name,education.education_name,job_post.*');
		$this->db->join('company','company.company_id=job_post.company_id');
		$this->db->join('location','location.location_id=job_post.location_id');
		$this->db->join('company_branch','company_branch.branch_id=job_post.branch_id');
		$this->db->join('post','post.post_id=job_post.post_id');
		$this->db->join('category','category.category_id=job_post.category_id');
		$this->db->join('skill','skill.skill_id=job_post.skill_id');
		$this->db->join('education','education.education_id=job_post.education_id');
		

		$q= $this->db->get('job_post');
		$res['info']= $q->result_array();
		$this->load->view('company/view_jobpost',$res);
	}
	function delete_data($job_id=0)
	{
		$this->db->where('job_id',$job_id);
		$this->db->delete('job_post');
		redirect('company/job_post/view_jobpost');
	}
	function get_ajax_cities()
	{
		$city_id = $this->input->post('city_id');
		$this->db->where('city_id',$city_id);
		$qry = $this->db->get('location');
		$locations = $qry->result_array();
		echo '<option value="">Select Location </option>';
		foreach($locations as $location)
		{
			echo '<option value="'.$location['location_id'].'">'.$location['location_name'].'</option>';
		}	
	}	
}
?>