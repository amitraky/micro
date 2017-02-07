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

        if (empty($userdata) || $userdata->t1_1_ac_type != '')
            login_page();
		 $this->load->model('Admin_model','Admin');
		 $this->load->model('User_model','User');
		 $this->load->model('Master_model','Master');
		 $this->data['active'] = uri(2);
			
		}
		
		public function file_config()
		{		
		//
		}
		
		public function file_upload()
		{		
		//
		}
		
		
		
		
		
		
		
		
		
		


		
}
