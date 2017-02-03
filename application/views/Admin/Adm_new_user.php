<div class="centercontent">
    
        <div class="pageheader">
            <h1 class="pagetitle">Registration</h1>
            <span class="pagedesc">Add New User Information</span>
            
            <ul class="hornav">
                <li class="current"><a href="#basic">Basic Information</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        	 
        	<div id="basic" class="subcontent">
                                
                    <div class="contenttitle2">
                        <h3>Basic Information</h3>
                    </div><!--contenttitle-->
                      <?php  echo get_msg('error'); get_msg('success'); ?>
                        <?php 
						
						echo form_open('Admin/add_new_user',array('class'=>"stdform",'id'=>"frmbasic"));
						      
							input('Agent ID','text','agent_id','agent_id');?>
							   
							
							<?php
							
							input('Agent Name','text','agent_name','agent_name'); 
							
							input('Upline ID','text','upliner','upliner'); 
							
							input('Upline Name','text','upliner','upliner'); 
							
							
							input('Full Name','text','fname','fname');
							
							
							input('Email','text','email','email');
							
							
							input('Mobile','text','mobile','mobile');
						   
						
						   
						    ?>          
                        <p>
                        	<label>Account Type</label>
                            <span class="field"><?php 
							 $type = array( '1'=>'Admin','2'=>'Branch','3'=>'Agent','4'=>'Customer');
echo form_dropdown('type', $type,'');
							
							?></span>
                        </p>           
                        
                        
                                                 
                        <p>
                        	<label>Gender</label>
                            <span class="field"><?php 
							 $status = array('Male'=>'male', 'Female'=>'femal','Other'=>'Other');
echo form_dropdown('gender', $status);
							
							?></span>
                        </p>           
                        
                        
                          
                        
                     
                        
                        
                       <?php      submit('SUBMIT') ; ?>
                        
                    </form>
                    
                    <br />
                   

            </div><!--subcontent-->
            
          
            
            
            
            
            
            
            
            
        
        </div><!--contentwrapper-->
        
	</div>