<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{


		$company_id = $this->session->userdata('company_id');
		$this->db->where('company_id',$company_id);
		$qry = $this->db->get('company')->row_array();
	

		$amount = $this->input->post('amount');
		$package_name = $this->input->post('select_package');
		$company_name = $qry['company_name'];
		$contact = $qry['contact'];
		$email = $qry['email'];
		$address = $qry['address'];

		$data['arr'] = array('company_id'=>$company_id,'amount'=>$amount,'package_name'=>$package_name,'company_name'=>$company_name,'contact'=>$contact,'email'=>$email,'address'=>$address);

		$this->load->view('company/product_form',$data);		
	}

	public function check()
	{
		$amount =  $this->input->post('payble_amount');
	    $product_info = $this->input->post('product_info');
	    $customer_name = $this->input->post('customer_name');
	    $customer_emial = $this->input->post('customer_email');
	    $customer_mobile = $this->input->post('mobile_number');
	    $customer_address = $this->input->post('customer_address');
	    $company_id = $this->input->post('company_id');
	    	//payumoney details
	    
	    
	        $MERCHANT_KEY = "lFSOEJC3"; //change  merchant with yours
	        $SALT = "crwrLdldu7";  //change salt with yours 

	        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	        //optional udf values 
	        $udf1 = $company_id;
	        $udf2 = '';
	        $udf3 = '';
	        $udf4 = '';
	        $udf5 = '';
	        
	         $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
	         $hash = strtolower(hash('sha512', $hashstring));
	         
	       $success = site_url() . '/company/Status';  
	        $fail = site_url() . '/company/Status';
	        $cancel = site_url() . '/company/Status';
	        
	        
	         $data = array(
	            'mkey' => $MERCHANT_KEY,
	            'tid' => $txnid,
	            'hash' => $hash,
	            'amount' => $amount,           
	            'name' => $customer_name,
	            'productinfo' => $product_info,
	            'mailid' => $customer_emial,
	            'phoneno' => $customer_mobile,
	            'address' => $customer_address,
	            'action' => "https://sandboxsecure.payu.in", //for live change action  https://secure.payu.in
	            'sucess' => $success,
	            'failure' => $fail,
	            'cancel' => $cancel,
	            'udf1' => $udf1           
	        );
	        $this->load->view('company/confirmation', $data);   
     
	}

	public function help()
	{
		$this->load->view('company/help');
	}
}
