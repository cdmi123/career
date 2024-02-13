<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');      
    }

	public function index() {
       $status = $this->input->post('status');
      if (empty($status)) {
            redirect('Welcome');
        }
       
         $firstname = $this->input->post('firstname');
        $amount = $this->input->post('amount');
        $txnid = $this->input->post('txnid');
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
        $productinfo = $this->input->post('productinfo');
        $email = $this->input->post('email');
        $salt = "crwrLdldu7"; //  Your salt
        $add = $this->input->post('additionalCharges');
        If (isset($add)) {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {

            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
         $data['hash'] = hash("sha512", $retHashSeq);
          $data['amount'] = $amount;
          $data['txnid'] = $txnid;
          $data['posted_hash'] = $posted_hash;
          $data['status'] = $status;
          if($status == 'success'){


              $company_id = $this->input->post('udf1');
              $txnid = $this->input->post('txnid');
              $amount = $this->input->post('amount');
              $email = $this->input->post('email');
              $phone = $this->input->post('phone');
              $hash = $this->input->post('hash');
              $addedon = $this->input->post('addedon');

              $arr = array('company_id'=>$company_id,'txnid'=>$txnid,'amount'=>$amount,'email'=>$email,'phone'=>$phone,'hash'=>$hash,'addedon'=>$addedon);

              //echo '<pre>';print_r($arr);die;
              $this->db->insert('payment',$arr);

              $arr = array('payment_status'=>1);
              $this->db->where('company_id',$company_id);
              $this->db->update('company',$arr);

              $this->load->view('company/success', $data); 

              redirect('company/buy_package/package');  
         }
         else{
              $this->load->view('company/failure', $data); 
         }
     
    }
 
    
   }
