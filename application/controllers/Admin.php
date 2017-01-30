<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
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
		 $this->load->model('Admin_model','Admin');
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

////////////////////////////////////////////PUBLIC////////////////////////////////////////

	
	public function profile()
	{
	  
	  $this->data['row'] = $this->Admin->user();	
	  $this->data['page'] =   'admin/Adm_profile';
	  view('index',$this->data); 
	}
	
	public function setting()
	{
	 
	  $this->data['rows'] = $this->Admin->setting();
	  $this->data['page'] =   'admin/Adm_setting';
	  view('index',$this->data); 
	}
	
	public function all_users()
	{
	   $this->data['rows'] = $this->Admin->users();
	   $this->data['page'] =   'admin/Adm_users';
	   view('index',$this->data); 
	}
	
	public function active_users()
	{
	  //
	}
	
	public function deactive_users()
	{
	  //
	}
	
	
	public function update_user_basic()
	{
	  $array = array(     't1_1_email'=>'email',
	                      't1_1_type'=>'mobile',
						  't1_1_status'=>'status',
						  't1_1_gender'=>'gender',
						  't1_1_dob'=>'dob'
					);
	  $array2 = array('t1_2_name'=>'fname');
	  $id = post('id');
	 // print_r($array2); die;
	  $data = self::get_fields_value($array);
	  $data2= self::get_fields_value($array2);
	  
	  $res =  $this->User->update('t1_1_users',$data,array('t1_1_user_id'=>$id));
	  $res =  $this->User->update('t1_2_users_detail',$data2,array('t1_1_userid'=>$id));
	  $this->send_response_status($res,'Admin/profile'); 
	}
	
	public function update_user_account()
	{
	  // if required
	}
	
	public function update_user_upload()
	{
		//for profile pic
	   $move_file =  './assets/uploads/users/';
	   $respons = $document =  array();
	   $id = post('id');
	   
	   if($_FILES['profile_pic']['name'])
	      $respons  = $this->upload_file('profile_pic','admin/profile');
		
	   if(array_filter($respons))
	   {
		   $avatar1 =$this->resize_image($respons,28,28,$move_file); //profile avatar 1
		   $avatar2 = $this->resize_image($respons,96,96,$move_file); //profile avatar 2	   
		   $this->User->update('t1_2_users_detail',array('t1_2_avatar'=>$avatar1 ,'t1_2_avatar2'=>$avatar2),array('t1_1_userid'=>$id));
		   $file_name = $respons['full_path'];
		    $this->delete_raw_file($file_name);//delete raw file
	   }
		
		  
		//for document  
	   if($_FILES['document']['name'])
	      $document = $this->upload_file('document','admin/profile',1,'documents');
	  
	   if(array_filter($document))
	   {
		 $res =   $this->User->update('t1_3_users_banks',array('t1_3_document_file'=>$document['file_name']),array('t1_1_userid'=>$id,'t1_3_status'=>1));
	   }
	   
	   $this->send_response_status($res,'admin/profile');
	  
	}
	
	
	public function update_user_location()
	{
	  $array = array(  't1_2_address'=>'address',
	                   't1_2_country'=>'country',
					   't1_2_state'=>'state',
					   't1_2_city'=>'city',
					   't1_2_pincode'=>'pin'
					 );
	  $id = post('id');
	  $data = self::get_fields_value($array);
	  $res =  $this->User->update('t1_2_users_detail',$data,array('t1_1_userid'=>$id));
	  $this->send_response_status($res,'Admin/profile'); 
	}
	
	public function update_user_security()
	{
	  $array = array(   't1_1_email'=>'email_notif',
	                    't1_1_ip_block'=>'ip_restic'
					);
	 
	  $id = post('id');
	  $data = self::get_fields_value($array);
	  $res =  $this->User->update('t1_1_users',$data,array('t1_1_user_id'=>$id));
	  $this->send_response_status($res,'Admin/profile'); 
	}
	
	public function update_user_bank()
	{
	  $array = array(      'm2_1_bankid'=>'bank_name',
						   't1_3_ac_name'=>'ac_name',
	                       't1_3_ac_num'=>'ac_number',
						   't1_3_branch_name'=>'branch_name',
						   't1_3_pan_num'=>'pan_num',
						   't1_3_ifscode'=>'ifsc_code'
						   );
	 
	  $id = post('id');
	  $data = self::get_fields_value($array);
	  $res =  $this->User->update('t1_3_users_banks',$data,array('t1_3_id'=>$id));
	  $this->send_response_status($res,'Admin/profile'); 
	}
	
	
	public function update_user_documents()
	{
	  
	  
	  //for profile pic
	   $move_file =  './assets/uploads/documents/';
	   $adhar = $voter = $pancard =  array();
	   $res = '';
	   $id = post('id');
	   
	   if($_FILES['adhar_card']['name'])
	      $files['t1_3_adhar_img']  = $this->upload_file('adhar_card','admin/profile');
		  
	   if($_FILES['pan_card']['name'])
	      $files['t1_3_pan_img']  = $this->upload_file('pan_card','admin/profile');	
		  
	  if($_FILES['voder_id']['name'])
	      $files['t1_3_voter_img']  = $this->upload_file('voder_id','admin/profile');	  
		  
		    
		
	   if(array_filter($files))
	   {
		   foreach($files as $key=>$value)
		   {
 		    $doc = $this->resize_image($value,200,200, $move_file); //profile avatar 2	   
		    $data[$key] = $doc;
		    $file_name = $files[$key]['full_path'];
		    $this->delete_raw_file($file_name);//delete raw file
		   }
		   
		   $res =  $this->User->update('t1_3_users_banks',$data,array('t1_3_id'=>$id));
	   }
	   
	  $this->send_response_status($res,'Admin/profile'); 
	}
	
	
	
	
	public function new_user()
	{
	  
	    $this->data['page'] = 'admin/Adm_new_user';
	    view('index',$this->data); 
	  
	}
	
	public function add_new_user()
	{
	   $array = array(    't1_1_agent_id'=>'agent_id',
						  't1_1_upliner_id'=>'upliner',
						  't1_2_name' => 'fname',
						  't1_2_mobile_no'=>'mobile',
						  't1_1_gender'=>'gender',
				    );
	   $user_id = $this->User->insert('t1_2_users_detail',$array);
	   $array2 = array(  
	                     't1_1_email'=> post('email'),
						 't1_1_user_id'=>$user_id,
						 't1_1_login_pwd'=>rand(1000,9999),
						 't1_1_login_id'=>rand(1000,9999),
						 't1_1_login_id'=>rand(1000,9999),
						 't1_1_status' =>'Pending',
						 't1_1_type'=>post('type')
					  );
	   $user_id = $this->User->insert('t1_1_users',$array2);
	   $this->User->insert('t1_3_users_banks',array('t1_1_userid'=>$user_id));
	   
	}
	
###FILE UPLOADS###
	
	  public function upload_file($f_name,$error_page,$f_type=null,$move_file='raw_upload') { 
	  
	      if($f_type == 1)
		  { 
		    $type = 'gif|jpg|png|pdf|doc|xml';
			//$config here
		  }
		  else
		  { 
		    $type = 'gif|jpg|png';
			//$config here
		  }
		  
		  $file_name = time().'.'.explode('.',$_FILES[$f_name]['name'])[1];
		  $config['upload_path']   = "./assets/uploads/$move_file/"; 
		  $config['allowed_types'] = $type;
		  $config['file_name'] = $file_name;
		  $config['overwrite'] = TRUE;
		  $config['max_size'] = '0';
		  $config['max_width']  = '0';
		  $config['max_height']  = '0';
		    
          $this->load->library('upload',$config);
		 
			
         if ( ! $this->upload->do_upload($f_name)) {
                $error = $this->upload->display_errors();				
		        $this->send_response_status(404,$error_page,$error);
         }
         else { 
            return $this->upload->data(); 
         } 
      }
	  
	  public function resize_image($upload_data,$width=null,$height=null,$move_file)
	  {
	 
		  $upload_data = $this->upload->data();
		  $new_file_name = rand(0,9).$upload_data['file_name'];
		  $config["image_library"] = "gd2";
		  $config["source_image"] = $upload_data["full_path"];
		  $config['create_thumb'] = FALSE;
		  $config['maintain_ratio'] = FALSE;
		  $config['new_image'] = $move_file . $new_file_name;
		  $config['quality'] = "100%";
		  $config['width'] = $width;
		  $config['height'] = $height;
		  $dim = (intval($upload_data["image_width"]) / intval($upload_data["image_height"])) - ($config['width'] / $config['height']);
		  $config['master_dim'] = ($dim > 0)? "height" : "width";
		  
		  $this->load->library('image_lib');
		  $this->image_lib->initialize($config);
		  
		  if(!$this->image_lib->resize()){ //Resize image
		    return 0;
		  }
		  else
		  {
		    return $new_file_name;
		  }
	  }
	
	
	public function delete_raw_file($path)
	{
	  $this->load->helper("file");
      delete_files($path);
	  unlink($path); 	
	  return 1;
	}
	
### END FILE ###	

	
### USER MANAGEMENT ###
   
    public function user_detail()
	{
	   $logid = post('logid');	
	   $res = $this->User->user_detail($logid);
	   if($res == falseI)
	   {
	     echo "User Not Found";
	   }
	   else
	   {
	     echo $res->t1_2_name;
	   }
	}



### USER END ###
	
	
}
