<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	
class Master extends CI_Controller 
{ 
	 
		public function __construct()
		{
			parent::__construct();
		 $this->data['userdata'] = ($this->session->userdata('userdata'));
		 $this->data['header'] =   'admin/Adm_header';	
	     $this->data['menu'] =   'admin/Adm_menu';
		 
		 $userdata = get_session('userdata');

        if (empty($userdata) || $userdata->t1_1_type == '')
            login_page();
			
		 $this->load->model('Admin_model','Admin');
		 $this->load->model('User_model','User');
		 $this->load->model('Master_model','Master');
		 $this->data['active'] = uri(2);
			
		}
		
		
		 
		 
	  //get field value 
	  private function post($name)
	  {
	   return ($this->input->post($name));  
	  }
	  
	  
	   private function get_fields_value($inputs=array())
	{
	    foreach($inputs as $key=>$name)
		{
		   $data[$key] = post($name);
		}
		return $data;
		
	} 
	
	
	private function send_response_status($status,$redirect=null)
	{
	 
	  if($status == 1)
	  {		  
	      set_msg('success','Action Performed success !'); 
	  }
	  
	  if($status == 2)
	  {
	     set_msg('warning','warning !'); 
	  }
	  
	  if($status == 0 || $status == '' || $status == NULL)
	  {
		  set_msg('error','Try Again ? ');
	  }
	  
	  if($redirect){
	    redirect($redirect);
	  }
	}
	
	  
########################################### PUBLIC FUNCTIONS ###########################################	  
	  
	   public function index()
	   {
	     
		 echo 'Directory access is forbidden.'; 
		 return;
	   }
	  
	  
	 
###  LOCATION MANAGEMENT ###

    
	public function location()
	{
		 $this->data['page'] = 'master/Mst_location'; 
		 $this->data['countries'] = $this->Master->country();
		 $this->data['states'] = $this->Master->states();
		 $this->data['cities'] = $this->Master->cities();
		 view('index',$this->data); 
	}
		
	public function add_new_city()
	{
		  $fields =  array('m1_2_state_id' =>'new_state','m1_3_name'=>'new_city','m1_3_status'=>'new_status'); 
		  $data = $this->get_fields_value( $fields);
		  $res = $this->Master->insert('m1_3_cities',$data);
		  $this->send_response_status($res);
		   echo 'Bla';// Blan is nothing
		   
	}
	public function add_new_state()
	{
		  $fields =  array('m1_1_country_id' =>'new_country','m1_2_name'=>'new_state','m1_2_status'=>'state_status'); 
		
		  $data = $this->get_fields_value( $fields);
		  $res = $this->Master->insert('m1_2_states',$data);
		  $this->send_response_status($res);
		   echo 'Bla';// Blan is nothing
		   
	}
	
	
	
	public function ajax_state()
	{
		echo  form_dropdown('state',states(post('id')) );
		    	  
	}
	
	public function ajax_city()
    {
	   echo  form_dropdown('city', cities(post('id')));
	}
	
	
	public function delete_location()
	{
	  $res = $this->Master->delete_location(post('type'),post('location_id')); 
	  $this->send_response_status($res);
	   echo 'Bla';// Blan is nothing
	 
	}
	   
	 public function update_location()
	{
	  if(post('type')==1)
	  {	
	    $data = array('m1_3_name'=>post('new_name'),'m1_3_status'=>post('new_status'));	
	  }
	  else
	  {
	    $data = array('m1_2_name'=>post('new_name'),'m1_2_status'=>post('new_status'));	  
	  }
	  $res = $this->Master->update_location(post('type'),$data,post('id')); 
	  $this->send_response_status($res);
	   echo 'Bla';// Blan is nothing
	 
	}  
	
### END LOCATION ###


### RANK ###

public function rank()
{
  
   
}


### END RANK ###




	}
?>