<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	
class Auth extends CI_Controller 
{ 
	 
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Auth_model','Auth');
			$this->load->library('form_validation');
			$this->load->helper(array('form', 'url'));
			
		}
		 
	  //get field value 
	  private function post($name)
	  {
	   return ($this->input->post($name));  
	  }
	  
	  
	  
/****************************************************PUBLIC FUNCTION***************************************************/	  
	  
	   public function index()
	   {
	     
		 echo 'Directory access is forbidden.'; 
		 return;
	   }
	  
	  
	 
	  
	    public function login()
		{		 
		 $data['news'] = array(4,4);
		 $data['page'] = 'Auth/login';  
		 view('index',$data); 
		  
		}
	
	
		public function user_login()
		{
		   
		   $param['loginid'] = ($this->post('loginid'));
		   $param['loginpwd'] = ($this->post('loginpwd'));
		   
		   $data = array_filters($param);
		   //login with login id and pwd
           
		   if ($data['loginid'] != null && $data['loginpwd'] != null )
		   { 
		       $array = array(   
		                     't1_1_login_id'=>$data['loginid'],
		                     't1_1_login_pwd'=>$data['loginpwd']
						 );
			   $res = $this->Auth->user_login($array);
			    
			   $nums = $res->num_rows();
			   //check user exists  or not 
			   if($nums>0)
			   {
			    //set all user data here
				$reg = $res->row()->t1_1_user_id;
				$raw = get_userdata($reg);
								
				$u_type = ($raw->t1_1_type);// user type
				$ac_status = ($raw->t1_1_status);// user status
				
				$user_type = $this->user_type($u_type);
				
				
				$data['header'] =  $user_type.'/Adm_header';
				$data['menu'] = $user_type.'/Adm_menu';
				$status = array('Pending','reject','Deactive');
				$log_st = in_array($raw->t1_1_status,$status);
				if($log_st === true)
				{
				   set_msg('warning',' Login id is <b style="color:red">'.$raw->t1_1_status.'</b> Plz contact to site admin ');	
				   login_page();
				}
				
				switch($user_type)
				{
				    case 'Admin':
				         $this->validate_otp($reg);
				         $this->Auth->loging_update($reg);
				         $data['page'] =    'admin/Adm_dashboard';
			         break;
					 
				     case 'Customer':
				         $this->validate_otp(OTP);
				         $this->Auth->loging_update($reg);
				         $data['page'] =   'User/dashboard';	
					 break;
					 
					 case 'Agent':
					   $this->validate_otp(OTP);
					   $this->Auth->loging_update($reg);
					   $data['page'] =   'Agent/dashboard';	
					 break;
					
					 default: 
					  $this->log_out(); 
					}
					
				set_session('userdata',$raw); //set all user information 
				$data['userdata'] = $raw;
				$data['active'] = uri(2);
				view('index',$data);     
			   }
			   else
			   {
			    set_msg('error','Please check you login details');
			    login_page();
			   }
		   }
		   else
		   {  
		     login_page();
		   }
		}
		// View forget password 
		public function forget_password()
		{
			// $data['news'] = array(4,4);
		     $data['page'] = 'Auth/forget_pwd';  
		     view('index',$data); 
		}
		//send reset link on user
		public function send_reset_link()
		{
		  $email = $this->post('emailid');
		  $this->form_validation->set_rules('emailid', 'Emailid', 'required');
		  if ($this->form_validation->run() == TRUE)
		  {
			$this->send_mail('amitraky@gmail.com','Password Reset Link','click for password links');
		 }
		 else
		 {
		    set_msg('error','Please Enter Valid Email ID');
			redirect('Auth/forget_password');
		 }
		}
		
		
		public function reset_password()
		{
		     $data['page'] = 'Auth/forget_password';  
		     view('index',$data); 
		}
		
		
		
		
		public function log_out()
		{
		  $reg_id = ($this->session->userdata('userdata')->t1_1_user_id);	
	      $this->Auth->logout_update($reg_id);		
		  $this->session->sess_destroy();
		  login_page();
		}
		
		public function validate_otp($reg_id)
		{
			if(OTP == false)
			{
			  return true; 			 	
			}			
			else
			{
			  $res = $this->Auth->send_otp($reg_id);	
			  if($res = true)
			  {
			   set_msg('success','OTP has send on your phone');	  
			   redirect('Auth/view_otp');
			  }
			  else
			  {
			    set_msg('error','Technical error occured . Plz login next Time');
			    login_page(); 
			  }

			}
		}
		
		
		public function view_otp()
		{
		       $data['header']='';
			   $data['menu'] = '';
		       $data['page'] = 'Auth/login_otp'; 
			   view('index',$data); 
		}
		
		
		public function mail_initializ()
		{
		    $config = Array(
			'protocol' =>  'smtp',
			'smtp_host' => MAIL_URL,
			'smtp_port' => 25,
			'smtp_user' => MAIL_EMAIL,
			'smtp_pass' => MAIL_PWD,
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1',
			'wordwrap' => TRUE
				);
         return $config;   
		}
		
	   public function send_mail($to,$subject,$message)
	   {
		    $config = $this->mail_initializ();
		    $this->load->library('email', $config);
			$this->email->from(MAIL_EMAIL, 'myname');//your mail address and name
			$this->email->to($to); //receiver mail
			
			$this->email->subject($subject);
			$this->email->message($message);
			
			$this->email->send(); //sending mail
			print_r($this->email->print_debugger()); 
	   }
	
	
	   public function user_type($type)
	   {
		  
				
				switch($type)
				{
				    case 1: return 'Admin';
				  
				   
				    case 2: return 'Agent';
				   
				   
				    case 3: return 'Customer';			   
				   
				    default: 					
					  set_msg('error','Invalid User Login');
			          login_page(); 
				   
				}
		   
	   }
		
		
		
		
	}
?>