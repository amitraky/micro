<body class="withvernav">

<div class="bodywrapper">

    <div class="topheader">
        <div class="left">
           <?PHP echo SITE_NAME; ?>
            <span class="slogan">admin template</span>
            
            <div class="search">
            	<form action="#" method="post">
                	<input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />
                    <button class="submitbutton"></button>
                </form>
            </div><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	<div class="notification">
                <a class="count" href="ajax/notifications.html"><span>9</span></a>
        	</div>
            <div class="userinfo">
            	<img src="<?php echo base_url('assets/uploads/users/'.$userdata->t1_2_avatar)?>" alt="" />
                <span><?php echo $userdata->t1_2_name?></span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">
            	<div class="avatar">
                	<a href="#"><img src="<?php echo base_url('assets/uploads/users/'.$userdata->t1_2_avatar2)?>" alt="" /></a>
                    <div class="changetheme">
                    	Change theme: <br />
                    	<a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
                <div class="userdata">
                	<h4><?php echo $userdata->t1_2_name?></h4>
                    <span class="email"><?php echo $userdata->t1_1_email?></span>
                    <ul>
                    	<li><a href="<?php echo base_url('Admin/profile')?>">Edit Profile</a></li>
                        <li><a href="accountsettings.html">Account Settings</a></li>
                        <li><a href="help.html">Help</a></li>
                        <li><a href="<?php echo base_url('Auth/log_out');?>">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
        	<li class="current"><a href="<?php echo baseurl('admin/dashboard')?>"><span class="icon icon-flatscreen"></span>Dashboard</a></li>
            <li><a href="manageblog.html"><span class="icon icon-chart"></span>Manage Loan</a></li>
            <li><a href="messages.html"><span class="icon icon-message"></span>Messages</a></li>
        </ul>
        
        <div class="headerwidget">
        	<div class="earnings">
            	<div class="one_half">
                	<h4>Today's Earnings</h4>
                    <h2>$640.01</h2>
                </div><!--one_half-->
                <div class="one_half last alignright">
                	<h4>Current Rate</h4>
                    <h2>53%</h2>
                </div><!--one_half last-->
            </div><!--earnings-->
        </div><!--headerwidget-->
        
        
    </div><!--header-->
    
    