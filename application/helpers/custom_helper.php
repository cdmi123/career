<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('send_email'))
{
	function send_email($to_email="",$subject="",$message="")
	{
		$CI =& get_instance();
		$CI->load->library('email');
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = 465;
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'paresh.pampim@gmail.com';
		$config['smtp_pass'] = 'paresh@gmail';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';
		$config['wordwrap'] = TRUE;
		$CI->email->initialize($config);
		$CI->email->from('jobplacemart@gmail.com','Job PlaceMart');
		$CI->email->to($to_email);
		$CI->email->subject($subject);
		$CI->email->message($message);
		if($CI->email->send())
		{
			return true;
		}else{
			echo $CI->email->print_debugger();
		}
	}
}