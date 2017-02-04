<div class="centercontent">
    
        <div class="pageheader">
            <h1 class="pagetitle">Saving</h1>
            <span class="pagedesc">Add Saving Information</span>
            
            <ul class="hornav">
                <li class="current"><a href="#basic">Basic Information</a></li>
                <li><a href="#branchlist">Branch List</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        	 
        	<div id="basic" class="subcontent">
                                
                    <div class="contenttitle2">
                        <h3>Branch Information</h3>
                    </div><!--contenttitle-->
                      <?php  echo get_msg('error'); get_msg('success'); ?>
                        <?php 
						
						echo form_open('Admin/add_new_user',array('class'=>"stdform stdform2",'id'=>"add_branch"));
						      
							
							input('Name','text','name','name');
							
							
							input('Email','text','email','email');
							
							
							input('Mobile','text','mobile','mobile');
							
							input('Pin Code','text','pincode','pincode');
						   
						
						    ?>  
                                   
                         <p>
                                <label>State</label>
                                <span class="field" id="States"><?php 							 
                                    echo form_dropdown('state', states(),'id=sta'," onChange= get_loc_name(this.value,'city_url','Cities');");
                                ?></span>
                             </p>
                             <input type="hidden" id="city_url" value="<?php echo baseurl('master/ajax_city');?>" />
                             <p>
                                <label>City</label>
                                <span class="field" id="Cities"><?php 							 
                                    echo form_dropdown('city', cities());
                                ?></span>
                             </p>
                             <p>
                        	<label>Address</label>
                            <span class="field">
                                <textarea cols="20" rows="2" name="address" id="textarea2" class="smallinput textarea100"></textarea>
                            </span> 
                        </p>
                             
                            <p>
                        	<label>Address2</label>
                            <span class="field">
                                <textarea cols="20" rows="2" name="address" id="textarea2" class="smallinput textarea100"></textarea>
                            </span> 
                        </p> 
                        
                           <p>
                        	<label>Landmark</label>
                            <span class="field">
                                 <input type="text" id="landmark" name="landmark"  class="smallinput" />
                            </span> 
                        </p>
                                              
                       <?php      submit('SUBMIT') ; ?>
                        
                    </form>
                    
                    <br />
                   

            </div><!--subcontent-->
            
            
            <div id="branchlist" class="subcontent" style="display:none">
                                
                    <div class="contenttitle2">
                        <h3>Branch Information</h3>
                    </div><!--contenttitle-->
                     <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable2">
                    <colgroup>
                        <col class="con0" style="width: 4%" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                          <th class="head0 nosort"><input type="checkbox" /></th>
                            <th class="head0">Login ID</th>
                            <th class="head1">Name</th>
                            <th class="head0">Email</th>
                              <th class="head0">Mobile</th>
                            <th class="head1">Status</th>
                            <th class="head0">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                          <th class="head0"><span class="center">
                            <input type="checkbox" />
                          </span></th>
                            <th class="head0">Login ID</th>
                            <th class="head1">Name</th>
                            <th class="head0">Email</th>
                              <th class="head0">Mobile</th>
                            <th class="head1">Status</th>
                            <th class="head0">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                      <?php //foreach($rows as $row)
					  {?>	
                        <tr class="gradeX">
                          <td align="center"><span class="center">
                            <input type="checkbox" />
                          </span></td>
                            <td><?php //echo $row->t1_1_login_id ?></td>
                            <td><?php //echo $row->t1_2_name ?></td>
                            <td><?php //echo $row->t1_1_email ?></td>
                            <td><?php //echo $row->t1_2_mobile_no ?></td>
                            <td class="center"><?php  //status($row->t1_1_status) ?></td>
                            <td class="center"> <?php  //action(baseurl('Admin/profile/'.$row->t1_1_userid),'search')?></td>
                        </tr>
                          <?php } ?> 
                      
                        
                    </tbody>
                </table>
                    
                    <br />
                   

            </div>
            
        </div><!--contentwrapper-->
        
	</div>