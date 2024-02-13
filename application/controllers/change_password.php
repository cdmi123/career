<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class change_password extends CI_Controller 
{
	public function index()
	{
		// $this->load->library('form_validation');

		// if(!@$this->session->userdata('client_id'))
		// {
		// 	redirect('');
		// }
		$this->load->library('form_validation');
		
		$data = array();
		if($this->input->post())
		{
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password');
			$confirm_password = $this->input->post('confirm_password');

			$client_id = $this->session->userdata('client_id');

			$this->db->where('id',$client_id);
			$arr = $this->db->get('user')->row_array();

			$this->form_validation->set_rules('current_password', 'Current Password', 'required|min_length[4]|max_length[8]');
			$this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[4]|max_length[8]');
			
                if ($this->form_validation->run() == FALSE)
                {
                }
                else
                { 

					if($current_password == $arr['password'])
					{
						if($new_password == $confirm_password)
						{
							$pass = array('password'=>$new_password);
							$this->db->where('id',$client_id);
							$this->db->update('user',$pass);

							$data['msg'] = "Password Change !";

							redirect('login/logout');
						}
						else
						{
							$data['msg'] = "Enter valid new password and confirm password  !";

						}

					}
					else
					{
						$data['msg'] = "Enter valid current Password !";
					}
				}

		}
		$this->load->view('change_password',$data);
	}
}

?>