<?php
	class Auth_model extends CI_Model
	{
		
		
		public function __construct()
		{
			parent::__construct();
		}
		
		// check user are exists or not 
		public function user_login($login_data=array())
		{
		  $respons = $this->db->get_where('t1_1_users',$login_data);	   
		  return $respons;		  
	    }
		
		public function loging_update($reg_id)
		{
		 $ip = $this->input->ip_address();
		 $this->db->where('t1_1_userid',$reg_id)->update('t1_1_users',array('t1_1_lst_log_ip'=> $ip,'t1_1_lst_log_date'=>date('Y-m-d h:m:s'),'t1_1_log_status'=>'Online'));
		}
		
		public function logout_update($reg_id)
		{
		 $ip = $this->input->ip_address();
		 $this->db->where('t1_1_userid',$reg_id)->update('t1_1_users',array('t1_1_lst_log_ip'=> $ip,'t1_1_lst_log_date'=>date('Y-m-d h:m:s'),'t1_1_log_status'=>'Offline'));
		}
		
		public function send_otp($reg_id)
		{
		   $mobile = $this->db->get_where('t1_2_users_detail',array('t1_2_id'=>$reg_id))->row()->t1_2_mobile_no;
		   $otp = rand(1000,9999); 
		   $msg = "Your login otp code : $otp"; 
		   $res = $this->send_sms($mobile,$msg);
		   if($res == true)
		   {
			 set_session('system_otp',$otp);   
		     return true;
		   }
		   else
		   {
		     return $res;;
		   }
		   
		}
		
		public function send_sms($mobile,$msg)
		{
		   //
		   return true;
		}



			
}