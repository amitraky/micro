<?php
	class User_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		
		
       public function insert($table,$data)
	   {
		   
		  return $this->db->insert($table,$data);
	   
	   }
	   
	   public function where($field,$value)
	   {
		   
		  return $this->db->where($field,$value);
	   
	   }

       public function query($sql)
	   {
		   
		  return $this->db->where($sql);
	   
	   }
	   
	   public function get($table)
	   {
		   
		 return $this->db->where($table);
	   
	   }
	   
	   
	   public function get($table)
	   {
		   
		  return $this->db->where($table);
	   
	   }
	   
	   public function get_where($table,$data)
	   {
		   
		 return $this->db->get_where($table,$data);
	   
	   }
	   
	   
	   


		
		
		
		
		
		
			
}