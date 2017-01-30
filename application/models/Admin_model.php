<?php
	class Admin_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		
		// get all users list
		public function get_users()
		{
		  $this->db->order_by('or_lid','DESC');
		 return  $this->db->get('view_users')->result();
		
		}
		
		
		// get all users list
		public function user()
		{
		 $reg = 1;
		 
		 if(uri(3))
		   $reg= uri(3);
		 
		 return  $this->db->where('t1_1_user_id',$reg)->get('view_users')->row();
		
		}
		
		public function setting()
		{
		return $this->db->get('m00_setconfig')->result();
		}
		
		public function users()
		{
		  return $this->db->get('view_users')->result();
		}
		
		
		
		
		
			
}