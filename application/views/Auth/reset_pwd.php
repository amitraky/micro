

<body class="loginpage">

	<div class="loginbox">
    	<div class="loginboxinner">
        	
            <div class="logo">
            	 <?PHP echo SITE_NAME; ?>
                <p>Reset Password</p>
            </div><!--logo-->
            
           
           <?php  echo get_msg('error'); get_msg('warning'); ?>
            
            <div class="nopassword">
				<div class="loginmsg">The password you entered is incorrect.</div>
                <div class="loginf">
                    <div class="thumb"><img alt="" src="<?php echo base_url('assets/images/thumbs/avatar1.png')?>" /></div>
                    <div class="userlogged">
                        <h4></h4>
                        <a href="index.html">Not <span></span>?</a> 
                    </div>
                </div><!--loginf-->
            </div><!--nopassword-->
            
            <form id="login" action="Auth/user_login" method="post">
            	
                <div class="password">
                	<div class="passwordinner">
                    	<input type="password" name="form[loginpwd]" id="loginpwd"  placeholder="New Password" />
                    </div>
                </div>
                
                <div class="password">
                	<div class="passwordinner">
                    	<input type="password" name="form[loginpwd]" id="loginpwd"  placeholder="Confirm Password" />
                    </div>
                </div>
                
                <button>Reset Now</button>
                
               
            <br><br>
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->


