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
		
		
		
		
		
			
}