<div class="centercontent">
    
        <div class="pageheader">
            <h1 class="pagetitle">Profile</h1>
            <span class="pagedesc">Update Profile Information</span>
            
            <ul class="hornav">
                <li class="current"><a href="#basic">Basic Information</a></li>
                <li><a href="#account">Account Information</a></li>
                <li><a href="#photoids">Upload</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#security">Login Security</a></li>
                <li><a href="#bank_info">Bank Information</a></li>
                <li><a href="#documents">Documents</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        	 
        	<div id="basic" class="subcontent">
                                
                    <div class="contenttitle2">
                        <h3>Basic Information</h3>
                    </div><!--contenttitle-->
                      <?php  echo get_msg('error'); get_msg('success'); ?>
                        <?php 
						
						echo form_open('Admin/update_user_basic',array('class'=>"stdform",'id'=>"frmbasic"));
						      
							   input('Login ID','text','loginid','loginid',$row->t1_1_login_id);
                        
                               input('Full Name','text','fname','fname',$row->t1_2_name);
						   
						   
						       input('Email','text','email','email',$row->t1_1_email);
							   
							   input('Mobile','text','mobile','mobile',$row->t1_2_mobile_no);
						   
						       input('Date Of Birth','text','dob','datepickfrom',$row->t1_1_dob);
						   
						    ?>          
                        
                                                 
                        <p>
                        	<label>Gender</label>
                            <span class="field"><?php 
							 $status = array('Male'=>'male', 'Female'=>'femal','Other'=>'Other');
echo form_dropdown('gender', $status, $row->t1_1_gender);
							
							?></span>
                        </p>           
                        
                        
                          
                        
                        
                        <p>
                        	<label>Status</label>
                            <span class="field"><?php 
							 $status = array('Active'=>'Active', 'Deactive'=>'Deactive','Reject'=>'Reject','Pending'=>'Pending');
echo form_dropdown('status', $status, $row->t1_1_status);
							
							?></span>
                        </p>
                        
                                   
                        
                        
                        
                       <?php      submit('UPDATE NOW') ; ?>
                        
                     <input type="hidden" name="id" value="<?php echo $row->t1_1_userid; ?>">   
                    </form>
                    
                    <br />
                   

            </div><!--subcontent-->
            
            <div id="account" class="subcontent" style="display: none">
            	
                  <div class="contenttitle2">
                        <h3>Account Information</h3>
                    </div><!--contenttitle-->
                    <?php 
					$upliner = upliner($row->t1_1_upliner_id);
					$agent = upliner($row->t1_1_agent_id);
					
                    echo form_open('Admin/update_user_account',array('class'=>"stdform",'id'=>"frmaccount"));
					  
                                   input('Agent ID','text','agent_id','agent_id',$agent['loginid']);
                      
                                   input('Agent Name','text','agent_name','agent_name',$agent['name']); 
								   
								   input('Upline ID','text','upliner','upliner',$upliner['loginid']); 
								   
								   input('Upline Name','text','upliner','upliner',$upliner['name']); 
								   
								 submit('UPDATE NOW') ;
						   
						   ?>
                    <input type="hidden" name="id" value="<?php echo $row->t1_1_userid; ?>">   
                    </form>

            </div><!--subcontent-->
            
            
            <div id="photoids" class="subcontent" style="display: none">
            	
                 <div class="contenttitle2">
                        <h3>Upload Information</h3>
                    </div><!--contenttitle-->
                
                   <?php echo form_open_multipart('Admin/update_user_upload',array('class'=>"stdform",'id'=>"frmupload")); ?>
                         <div class="photo">
                         <p align="center" style="margin-right:450px;"> <a href="javascript:void(0)" class="cboxElement"><img src="<?php echo base_url('assets/uploads/users/'.$row->t1_2_avatar2)?>" alt="No Image" /></a>
                          <a href="javascript:void(0)" class="cboxElement"><img src="<?php echo base_url('assets/uploads/users/'.$row->t1_2_avatar)?>" alt="No Image" /></a></p>
                         </div>
                         <?php  input('Profile Pic','file','profile_pic','profile_pic',$row->t1_1_agent_id);  ?>
                       
                        <?php if($row->t1_3_document_file !=0){ ?> 
                        <p align="center" style="margin-right:450px;" >
                        <a href="<?php echo base_url('assets/uploads/users/'.$row->t1_3_document_file)?>" title="Click to Download" class="btn btn4 btn_book"></a> 
                        </p>
                        <?php } ?>
                        
                        
                        <?php  input('Document','file','document','document');  ?>
                       
                        
                        
                        <br />
                        <input type="hidden" name="id" value="<?php echo $row->t1_1_userid; ?>">
                        <?php submit('UPDATE NOW') ;?>
                    </form>

            </div>
            
            
            <div id="location" class="subcontent" style="display: none">
            	
                   <div class="contenttitle2">
                        <h3>Location Information</h3>
                    </div><!--contenttitle-->
                       <?php 
                    
                     echo form_open('Admin/update_user_location',array('class'=>"stdform",'id'=>"frmlocation"));
						
						     input('Address','text','address','address',$row->t1_2_address);
                        
                         ?>
                             
                             <p>
                                <label>country</label>
                                <span class="field"><?php 							 
                                    echo form_dropdown('country', countries(),$row->t1_2_country,"onChange= get_loc_name(this.value,'state_url','States') disabled=disabled;");
                                ?></span>
                                
                       
                             </p>
                          
                             
                            <p>
                                <label>State</label>
                                <span class="field" id="States"><?php 							 
                                    echo form_dropdown('state', states(), $row->t1_2_state, "onChange= get_loc_name(this.value,'city_url','Cities');");
                                ?></span>
                             </p>
                             
                             <p>
                                <label>City</label>
                                <span class="field" id="Cities"><?php 							 
                                    echo form_dropdown('city', cities(),$row->t1_2_city);
                                ?></span>
                             </p>
                             
                        	<?php
                         
							 
							 input('Pin Code','text','pin','pin',$row->t1_2_pincode);
							 
							 
						     submit('UPDATE NOW') ;
						 
						 
						 ?>
                        
                      <input type="hidden" id="state_url" value="<?php echo baseurl('master/ajax_state');?>" />
                      <input type="hidden" id="city_url" value="<?php echo baseurl('master/ajax_city');?>" />   
                      <input type="hidden" name="id" value="<?php echo $row->t1_1_userid; ?>">    
                    </form>

            </div>
            
            <div id="security" class="subcontent" style="display: none">
            	<div class="contenttitle2">
                        <h3>Login Security Information</h3>
                    </div><!--contenttitle-->
                     <?php 
                    echo form_open('Admin/update_user_security',array('class'=>"stdform",'id'=>"frmbasic"));
                      input('IP Address','text','ip_address','ip_address',$row->t1_1_lst_log_ip);?>
                        
                        
                        <p>
                        	<label>&nbsp;</label>
                            <span class="formwrapper">
                            	<div class="checker" id="uniform-undefined"><span>
                                <input type="checkbox" name="email_notif" style="opacity: 0;" value="1" <?php if($row->t1_1_email == 1)echo 'checked';?>></span></div> Email checked for  Notification<br>
                                
                         
                            	
                            </span>
                        </p>
                       
                        
                         <p>
                        	<label>&nbsp;</label>
                                <div class="checker" id="uniform-undefined"><span><input type="checkbox" name="ip_restic" value="1" style="opacity: 0;" <?php if($row->t1_1_ip_block==1)echo 'checked';?>></span></div> IP Restriction checked for Active<br>
                            	
                            </span>
                        </p>
                        <input type="hidden" name="id" value="<?php echo $row->t1_1_userid; ?>">
                        <?php  submit('UPDATE NOW') ;?>
                    </form>

            </div>
            
            <div id="bank_info" class="subcontent" style="display: none">
                                
                    <div class="contenttitle2">
                        <h3>Bank Information</h3>
                    </div><!--contenttitle-->
                      <?php  echo get_msg('error'); get_msg('success'); ?>
                        <?php 
						
						echo form_open('Admin/update_user_bank',array('class'=>"stdform",'id'=>"frmbasic"));
						      
							  ?>
                              
                               <p>
                        	<label>Banks</label>
                            <span class="field"><?php 
                                 echo form_dropdown('bank_name', banks(), $row->m2_1_bankid);
							
							?></span>
                       
                        
                        <?php
							   input('Account Number','text','ac_number','ac_number',$row->t1_3_ac_num);
                        
                               input('A/c Name','text','ac_name','ac_name',$row->t1_3_ac_name);
						   
						   
						      
							   
							   input('Branch Name','text','branch_name','branch_name',$row->t1_3_branch_name);
						   
						       input('Pan Number','text','pan_num','pan_num',$row->t1_3_pan_num);
							   
							   input('Ifsc Code','text','ifsc_code','ifsc_code',$row->t1_3_ifscode);
						   
						    ?>          
                        
                                                 
                       
                        
                      
                        
                                   
                        
                        
                        
                       <?php      submit('UPDATE NOW') ; ?>
                        
                     <input type="hidden" name="id" value="<?php echo $row->t1_1_userid; ?>">   
                    </form>
                    
                    <br />
                   

            </div>
            
            <div id="documents" class="subcontent" style="display: none">
            	<div class="stdform stdform2">
                 <div class="contenttitle2">
                        <h3>Upload Documents</h3>
                    </div><!--contenttitle-->
                
                   <?php echo form_open_multipart('Admin/update_user_documents',array('class'=>"stdform",'id'=>"frmupload")); ?>
                       
                                                
                        <div class="par">
                        	<label>Upload Adhar</label>
                            <div class="field">
                            	<input type="file" name="adhar_card" id="adhar_card" /> 
                                
                                  <a href="<?php echo base_url('assets/uploads/documents/'.$row->t1_3_adhar_img)?>" class="cboxElement" target="_blank">
                                  <img src="<?php echo base_url('assets/uploads/documents/'.$row->t1_3_adhar_img)?>" width="30" alt="No Image" /></a>
                                             		
                            </div><!--field-->
                        </div><!--par-->
                        
                            <div class="par">
                        	<label>Upload Pan Card</label>
                            <div class="field">
                            	<input type="file" name="pan_card" id="pan_card" />
                        		<a href="<?php echo base_url('assets/uploads/documents/'.$row->t1_3_pan_img)?>" class="cboxElement" target="_blank">
                                <img src="<?php echo base_url('assets/uploads/documents/'.$row->t1_3_pan_img)?>" width="30" alt="No Image" /></a>
                            </div><!--field-->
                        </div><!--par-->
                        
                         <div class="par">
                        	<label>Upload Voter ID</label>
                            <div class="field">
                            	<input type="file" name="voder_id" id="voder_id" />
                                <a href="<?php echo base_url('assets/uploads/documents/'.$row->t1_3_voter_img)?>" class="cboxElement" target="_blank">  
                                <img src="<?php echo base_url('assets/uploads/documents/'.$row->t1_3_voter_img)?>" width="30" alt="No Image" />                </a>      		
                            </div><!--field-->
                            
                        
                        <input type="hidden" name="id" value="<?php echo $row->t1_1_userid; ?>">
                        
						<?php submit('UPDATE NOW') ;?>
                    </form>
                        
                         
                  
        
        </div><!--contentwrapper-->
        
	           </div><!-- centercontent -->
                        

            </div>
        
        </div><!--contentwrapper-->
        
	</div>