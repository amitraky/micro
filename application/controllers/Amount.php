<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amount extends CI_Controller {
	
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
		 $this->data['header'] =   'admin/Adm_header';	
	     $this->data['menu'] =   'admin/Adm_menu';
		 $userdata = get_session('userdata');

        if (empty($userdata) || $userdata->t1_1_status != '1')
            login_page();
		 $this->load->model('Amount_model','Amount');
		 $this->load->model('User_model','User');
		 $this->data['active'] = uri(2);
	 }
	 
	 
	 
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function dashboard()
	{
	  
	     $this->data['page'] =   'admin/Adm_dashboard';
	     view('index',$this->data);  
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

	
### WITHDRAWAL MANAGEMENT ###
   
    public function withdrawal()
	{
	  $this->data['page'] = 'Admin/Adm_withdrawal';
	  view('index',$this->data); 
	}
	
	 public function add_withdrawal()
	{
	  //
	}
	
	 public function delete_withdrawal()
	{
	 //
	}
       
	

### USER END ###
	
	
}
