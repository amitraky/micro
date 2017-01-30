

<body class="loginpage">

	<div class="loginbox">
    	<div class="loginboxinner">
        	
            <div class="logo">
            	 <?PHP echo SITE_NAME; ?>
                <p>Forget Password</p>
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
            
            <form id="login" action="<?php echo base_url('Auth/send_reset_link');?>" method="post">
            	
                <div class="username">
                	<div class="usernameinner">
                    	<input type="text" name="emailid" id="loginid"  placeholder="Enter Email ID" />
                    </div>
                </div>
                
                <button>Send Link</button>
                
                
            
            </form>
           <br><br> 
        </div><!--loginboxinner-->
    </div><!--loginbox-->


</body>