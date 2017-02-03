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
	
	
	
	public function insert($fields,$table)
	{
	      $data = $this->get_fields_value( $fields);
		  $res = $this->Master->insert($table,$data);
		  $this->send_response_status($res);
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
		  $this->insert($fields,'m1_3_cities');
		   echo 'Go';// Go as keyword 
		   
	}
	public function add_new_state()
	{
		  $fields =  array('m1_1_country_id' =>'new_country','m1_2_name'=>'new_state','m1_2_status'=>'state_status'); 
		  $this->insert($fields,'m1_2_states');
		   echo 'Go';// Go as keyword 
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
	    echo 'Go';// Go as keyword 
	 
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
	   echo 'Go';// Go as keyword 
	 
	}  
	
### END LOCATION ###


### RANK ###

public function rank()
{
  $res = $this->Master->ranks(); 
  $this->data['ranks'] = $res; 	
  $this->data['page'] = 'Master/Mst_rank';
  view('index',$this->data);
   
}

public function add_new_rank()
{
      $fields = array(    'm3_1_rank'=>'new_rank',
						  'm3_1_level'=>'new_level',
						  'm3_1_designation'=>'new_designation',
						  'm3_1_description'=>'new_description',
						  'm3_1_status'=>'new_status'
					 );
	  $this->insert($fields,'m3_1_ranks');
	   echo 'Go';// Go as keyword 
}


public function delete_rank()
{
  $this->Master->delete('m3_1_ranks',array('m3_1_id'=>post('id')));
  echo 'GO';
}

### END RANK ###


### PIN ###

  public function pin()
  {
    $res = $this->Master->pin_type();
	
    
	$i=1;
	foreach($res as $key=>$value)
	{
	 if($i==1)	
	 $data[null] = 'Select Type';
	 $i++;
	 $data[$value->m4_1_id] = $value->m4_1_name;
	 
	}
	 
	$this->data['pin_type'] = $data; 
	$this->data['pins'] = $this->Master->pins(); 
	
		
    $this->data['page'] = 'Master/Mst_pin';
    view('index',$this->data);
  }

  public function add_new_pin()
  {
	$logid = post('loginid');
	$pin_type = post('pin_type'); 
	$pin_numb = post('pin_number');
	$pin_amt = $this->Master->get_where('m4_1_pin_type',array('m4_1_id'=>$pin_type))->m4_1_amount;
	
	for($i=0;$i<= $pin_numb;$i++)
	{
	  $data[] = array(
	                  'm4_1_pintype_id'=>$pin_type,
					  'm4_2_name'=>$pin_amt.date('Ymdhms', strtotime(" +$i day")),
					  't1_1_userid'=>$logid,
					  'm4_2_status'=>'1',
					  'm4_2_date'=>date('Y-m-d')
					  
	      ) ;  
	}
	$res = $this->Master->insert_batch('m4_2_pins',$data);
	$this->send_response_status($res,'Master/pin');
   
  }

  
  public function delete_pin()
  {
   //
  }
  
 
  
### END PIN ###


### BRANCH ### 
 
  public function branch()
  {
	 // $res = $this->Master->ranks(); 
	  //$this->data['ranks'] = $res; 	
	  $this->data['page'] = 'Master/Mst_branch';
	  view('index',$this->data);
  }
  
  public function add_new_branch()
  {
	  //
  }
  
  public function delete_branch()
  {
    //
  }
  
### END BRANCH ###


	}
?>