<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loan extends CI_Controller {
	
	public $data=null;

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function  __construct()
	 {
		 parent::__construct();
		 $this->data['userdata'] = ($this->session->userdata('userdata'));
		 $this->data['header'] =   'Loan/Loan_header';	
	     $this->data['menu'] =   'Loan/Loan_menu';
		 $userdata = get_session('userdata');
;
        if (empty($userdata) || $userdata->t1_1_status != '1')
            login_page();
		 $this->load->model('Loan_model','Loan');
		 $this->load->model('User_model','User');
		 $this->data['active'] = uri(2);
	 }
	 
	 
	 
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	
	public function get_fields_value($inputs=array())
	{
	    foreach($inputs as $key=>$name)
		{
		   $data[$key] = post($name);
		}
		return $data;
		
	}
	
	public function send_response_status($status,$redirect,$msg=null)
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
	  //coustom error message
	  if($status == 404 && $msg !='')
	  {
	    set_msg('error',$msg);
	  }
	  if($status == 200 && $msg !='')
	  {
	    set_msg('success',$msg);
	  }
	  
	  redirect($redirect);
	
	}
	
	public function admin($fx)
	{
	  return $this->Admin->$fx();
	}
	
	public function user($fx)
	{
	  return $this->Admin->$fx();
	}
	
	// validate input fields
	public function validate($name,$rule)
	{
	 return $this->form_validation->set_rules($name, ucfirst($name),$rule);
	}
	
	//return true if form submite
	public function form()
	{
	  return  $this->form_validation->run();
	}
	

////////////////////////////////////////////PUBLIC////////////////////////////////////////



### MASTER ###		
  public function plan()
  {
	 $this->data['page'] =   'Loan/Loan_plan';
	 view('index',$this->data);   
  
  }
  
   public function category()
  {
	 $this->data['page'] =   'Loan/Loan_category';
	 view('index',$this->data);   
  
  }
  
   public function type()
  {
	 $this->data['page'] =   'Loan/Loan_type';
	 view('index',$this->data);   
  
  }
		
### END MASTER ###
	
   //dashboard page looking here
   public function dashboard()
   {
	     $this->data['page'] =   'Loan/Loan_dashboard';
	     view('index',$this->data);  
   }
  
   //assgign new loan plane to user
   public function assign()
   {
       $this->data['page'] =   'Loan/Loan_assign';
	   view('index',$this->data);  
   
   }
   
   // pay loan amount 
   public function pay_loan_amt()
   {
     $this->data['page'] =   'Loan/Loan_pay';
	 view('index',$this->data);  
   }

   
	
	
}
