<?php
	class User_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		
		
        // get user by id
		public function user_details($reg)
		{
		  $res =  $this->db->where('t1_1_user_id',$reg)->get('view_users');
		  if($res->num_rows()>0)
		     $user = $res->row();
		  else 
		    $user = '';
		  return $user;
		}
		
		
		public function get_user_downline($log_id)
		{
		  $user = get_user_field('t1_1_user_id',"t1_1_login_id = '$log_id'");	
		  if($user != '0')
		  { 
		    $reg =  $user->t1_1_user_id;
		    $users = $this->db->query("CALL get_user_downline($reg)")->result();
			return $users;
			
		  }
		  else
		  {
			return 0;  
			  
		  }
		}
		
		
		public function get_direct_referral($log_id)
		{
		  
		   $res = @get_user_field('t1_1_user_id',"t1_1_login_id = '$log_id'")->t1_1_user_id;
		   if($res>0)
		   {
			   $reg = $res; 			 
			   $users = $this->db->query("select * from view_users where t1_1_agent_id = '$reg' ");
			 
			  if($users->num_rows()>0)
			  { 
				$users =  $users->result();
				return $users;
				
			  }
			  else
			  {
				return 0;  
				  
			  }
		   }
		}
		
		public function get_sent_mail($id)
		{
		  $sents =  $this->db->order_by('id','DESC')->get_where('vw_inbox',array('user_id'=>$id))->result();
		  return $sents;
		  
		}
		//cnds is an array where condition
		public function update($table,$fields,$where)
		{		  
		  foreach($where as $key=>$value)
		       $this->db->where($key,$value);
		  return $this->db->update($table,$fields);
		}	 
	 
	 public function insert($table ,$data)
	 {
	   $this->db->insert($table,$data);
	   return $this->db->insert_id();
	 }
                      

     public function user_detail()
	 {
	  $res =   $this->db->get('view_users');
	  if($res->num >0)
	  {
		return $res->row();
	  }
	  else
	  {
	    return false;
	  }
	 }

		
		
		
		
		
		
			
}