<?php
	class Master_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function insert($table ,$data)
	    {
	       $res = $this->db->insert($table,$data);
	       return $res;
	    }
		
		public function insert_batch($table ,$data)
	    {
	       $res = $this->db->insert_batch($table,$data);
	       return 1;
	    }
		
		
		 //cnd is array
	  public function delete($table,$cnd)
	  {
	     return $this->db->delete($table,$cnd);
	  }
	  
	 public function get_where($table,$cnd)
	 {
	  return $this->db->get_where($table,$cnd)->row(); 
	 }
	 
	
	 
		
		
		public function country()
		{
		  return $this->db->order_by('m1_1_id','DESC')->get('m1_1_countries')->result();
		}
		
		public function states()
		{
		  return $this->db->order_by('m1_2_id','DESC')->get('view_states')->result();
		}
		
		public function cities()
		{
		  return $this->db->order_by('m1_3_id','DESC')->get('view_cities')->result();
		}
		
		public function delete_location($type,$id)
		{
		    $locaton_type = explode('/',$this->location_type($type));
		    return $this->db->where($locaton_type[1],$id)->delete($locaton_type[0]);
		}
		
		
		public function update_location($type,$data,$id)
		{
		  $locaton_type = explode('/',$this->location_type($type));
		  return $this->db->where($locaton_type[1],$id)->update($locaton_type[0],$data); 
		  
		}
		
		
		
		private function location_type($type)
		{
		  if($type == 1)
		  {
		     $table='m1_3_cities/';
			 $field = 'm1_3_id';
			 return $table.$field;
		  }
		  else if($type == 2)
		  {
		    $table = 'm1_2_states/';
			$field = 'm1_2_id';
			return $table.$field;
		  }
		  else if($type == 3)
		  {
		    $table = 'm1_1_countries/';
			$field = 'm1_1_id';
			return $table.$field;
			
		  }
		  else
		   {
		     return 0;
		   }
		   
		   
		}
		
		
	public function ranks()
	{
	  return $this->db->order_by('m3_1_id','DESC')->get('m3_1_ranks')->result();
	}
	
	 
	public function pin_type()
	{
	  return $this->db->order_by('m4_1_id','ASC')->get('m4_1_pin_type')->result();
	} 
	
	 public function pins()
	 {
	 return  $this->db->order_by('m4_2_id','DESC')->get('view_pins')->result();
	 }
	  
	 
		
		
		
		
			
}