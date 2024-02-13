<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class apply_job_form extends CI_Controller 
	{
		function index($job_id=0,$application_id=0)
		{

			$this->load->library('form_validation');

			if(!@$this->session->userdata('client_id'))
			{
				redirect('login/index');
			}

				

			if($job_id)
			{
				

				$this->db->select('location.location_name,skill.skill_name,job_post.*');
				$this->db->join('location','location.location_id=job_post.location_id');
				$this->db->join('skill','skill.skill_id=job_post.skill_id');
				$this->db->where('job_id',$job_id);
				$data['jobdetail'] = $this->db->get('job_post')->row_array();
				//echo '<pre>';print_r($data);die;
			}
			
			$this->db->select('location.location_name,post.post_name,job_post.*');
			$this->db->join('location','location.location_id=job_post.location_id');
			$this->db->join('post','post.post_id=job_post.post_id');
			$data['jobpost']=$this->db->get('job_post')->result_array();
			//echo '<pre>';print_r($data);die;

			$user_id = $this->session->userdata('client_id');
			
			// $this->db->where('job_id',$job_id);
			// $data['info']=$this->db->get('job_applications')->row_array();
			if($this->input->post())
			{
				//$resume=$this->input->post('resume');

				if($_FILES['file']['name']=='')
				{
					//$image = $old_image;
				}
				else
				{

					$config['upload_path']='./uploads/resume/';
					$config['allowed_types']='pdf|doc|docx|rtf';

					$this->load->library('upload',$config);

					if($this->upload->do_upload('file'))
					{
						$ar1=$this->upload->data();
					//	echo '<pre>';print_r($ar1);
						$resume=$ar1['file_name'];
					}
					else
					{
						echo $this->upload->display_errors();
					}
				}

				//  if ($this->form_validation->run() == FALSE)
    //             {
    //             	$data['info']['file']=set_value('resume');
				// }
				// else
				//{
					$arr = array('resume'=>$resume,'job_id'=>$job_id,'user_id'=>$user_id);
				//}
				//  $this->db->select('user.name,job_post.job_title,job_applications.*');
				//  $this->db->join('user','user.id=job_applications.user_id');
				// $this->db->join('job_post','job_post.job_id=job_applications.job_id');
				//  $qry = $this->db->get('job_applications')->row_array();
				
				if($application_id)
					{
						$this->db->where('application_id',$application_id);
						$this->db->update('job_applications',$arr);
						$message = "Your Job is submitted Successfully";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
					else
					{


						if($this->db->insert('job_applications',$arr))
						{$message = "Your Job is submitted Successfully";
						echo "<script type='text/javascript'>alert('$message');</script>";
							$admins = $this->db->get('admin')->result_array();
							$emails = array();
							foreach($admins as $admin){
								$emails[] = $admin['email'];
						}
							$applied_date = date("Y-m-d");
							if(!empty($emails))
							{
								$emails_str = implode(',',$emails);
								//$to_email = 'foramtrada231@gmail.com';

								$subject = 'Apllied Job To:';
								$message = "<table>
									
									<tr>
										<td>Employee Id</td>
										<td>".$user_id."</td>
									</tr>
									<tr>
										<td>Resume</td>
										<td>".$resume."</td>
									</tr>
									<tr>
										<td>Applied Date</td>
										<td>".$applied_date."</td>
									</tr>
								</table>";

								send_email($emails_str,$subject,$message);
							}
								
						}
						//redirect('jobs/index');
			}
			}
			
	         $this->db->where('id',$user_id);
			$data['info']=$this->db->get('user')->row_array();



			$this->db->select('location.location_name,post.post_name,job_post.*');
			$this->db->join('location','location.location_id=job_post.location_id');
			$this->db->join('post','post.post_id=job_post.post_id');
			$this->db->order_by('job_id','desc')->limit(4);
			$data['jobpost_latest']=$this->db->get('job_post')->result_array();
		

			$this->load->view('apply_job_form',$data);
		}
	}
?>