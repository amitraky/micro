

<body class="loginpage">

	<div class="loginbox">
    	<div class="loginboxinner">
        	
            <div class="logo">
            	 <?PHP echo SITE_NAME; ?>
                <p>Login Panel</p>
            </div><!--logo-->
            
            <br clear="all" /><br />
            
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
            	
                <div class="username">
                	<div class="usernameinner">
                    	<input type="text" name="loginid" id="loginid" value="admin" placeholder="Login id" />
                    </div>
                </div>
                
                <div class="password">
                	<div class="passwordinner">
                    	<input type="password" name="loginpwd" id="loginpwd" value="123" placeholder="Login Password" />
                    </div>
                </div>
                
                <button>Sign In</button>
                
                <div class="keep"><input type="checkbox" /> Keep me logged in <a href="<?php echo base_url('Auth/forget_password')?>" style="float:right;color:#f1892d;">Forget Password</a></div>
                <div class="keep"></div>
            
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->


</body>