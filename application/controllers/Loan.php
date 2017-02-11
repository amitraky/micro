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



   public function dashboard()
	{
	     $this->data['page'] =   'Loan/Loan_dashboard';
	     view('index',$this->data);  
	}
	
	
	
	

	


	
	
	
###FILE UPLOADS###
	
	  public function upload_file($f_name,$error_page,$f_type=null,$move_file='raw_upload') 
	  { 
	  
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

	

	
	
}
