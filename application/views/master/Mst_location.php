<div class="centercontent">
    
        <div class="pageheader">
            <h1 class="pagetitle">Location</h1>
            <span class="pagedesc">Update Location Information</span>
            
            <ul class="hornav">
                <li class="current" ><a href="#city">Add City</a></li>
                <li><a href="#state" onclick="add_table_id('state')">Add State</a></li>
                <li><a href="#country" onclick="add_table_id('country')">Add Country</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        	 
        	<div id="city" class="subcontent">
                            
                    <div class="contenttitle2">
                        <h3>Basic Information</h3>
                    </div><!--contenttitle-->
                     
                      <?php  echo get_msg('error'); get_msg('success'); ?>
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="head0">Sr.</th>
                            <th class="head1">State</th>
                                <th class="head0">City</th>
                            <th class="head1">State</th>
                            <th class="head0">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th class="head0">Sr.</th>
                          
                            <th class="head1">State</th>   
                               <th class="head0">City</th>                       
                            <th class="head1">State</th>
                            <th class="head0">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <tr class="gradeX">
                            <td>#</td>
                              <td><?php  echo form_dropdown('state', states(), "",'id = "new_state"');?></td>
                             <td><input type="text" id="new_city" /><Br /><span id="city_msg" style="color:red"></span></td>
                          
                           
                            <td class="center"><?php 							 
                                    echo form_dropdown('city_status',array('1'=>'Active','2'=>'Deactive'),'','id = "new_status"');
                                ?>
                                <input type="hidden" id='city_url' value="<?php echo base_url('master/add_new_city');?>" /></td>
                            <td class="center"> <a href="javascript:void(0)" class="anchorbutton confirmbutton" onclick="add_new_city()">ADD</a> &nbsp;</td>
                        </tr>
                        
                        
                        <?php $sr=0; foreach($cities as $citiy){$sr++;?>
                        <tr class="gradeX" id="id<?php echo $citiy->m1_3_id;?>">
                            <td><?php echo $sr;?></td>
                              <td><?php echo $citiy->m1_2_name;?></td>
                             <td><input type="text" id="1name<?php echo $citiy->m1_3_id;?>" value="<?php echo $citiy->m1_3_name;?>" /></td>
                          
                           
                            <td class="center"><?php 							 
                                    echo form_dropdown('status'.$citiy->m1_3_id,array('1'=>'Active','2'=>'Deactive'),$citiy->m1_3_status,'id=1status'.$citiy->m1_3_id);
                                ?></td>
                                
                            <td class="center">
                            <!-- <a href="#" class="btn btn4 btn_yellow btn_search radius50"></a> &nbsp; <a href="#" class="btn btn4 btn_yellow btn_trash" onclick="delete_location('1','<?php echo $citiy->m1_3_id;?>')"></a>-->
                            
                             <i class="edit_icn" onclick="update_location('1','<?php echo $citiy->m1_3_id;?>')"><b>EDIT</b></i>
                             <i class="del_icn" onclick="delete_location('1','<?php echo $citiy->m1_3_id;?>')"><b>Delete</b></i>
                             
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
            <input type="hidden" id="delete_location" value="<?php echo base_url('master/delete_location')?>" />
            <input type="hidden" id="update_location_id" value="<?php echo base_url('master/update_location')?>" />
            <div id="state" class="subcontent" style="display:none">
                                
                    <div class="contenttitle2">
                        <h3>State Information</h3>
                    </div><!--contenttitle-->
                   
                        <?php 
						
						echo form_open('#',array('class'=>"stdform",'id'=>"frmbasic"));
						      
							  
						    ?>          
                        
                            
                        
                      <table style="margin-top: 50px" cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable1">
                        <colgroup>
                            <col class="con0" style="width: 4%" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                            <col class="con0" />
                        </colgroup>
                    <thead>
                        <tr>
                            <th class="head0">Sr.</th>
                            <th class="head1">Country</th>
                                <th class="head0">State</th>
                            <th class="head1">Status</th>
                            <th class="head0">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="head0">Sr.</th>
                            <th class="head1">Country</th>
                                <th class="head0">State</th>
                            <th class="head1">Status</th>
                            <th class="head0">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <tr class="gradeX">
                            <td>#</td>
                              <td><?php  echo form_dropdown('country', countries(), "",'id = "new_country"');?></td>
                             <td><input type="text" id="new_state_name" /><Br /><span id="city_msg" style="color:red"></span></td>
                          
                           
                            <td class="center"><?php 							 
                                    echo form_dropdown('state_status',array('1'=>'Active','2'=>'Deactive'),'','id = "state_status"');
                                ?>
                                <input type="hidden" id='state_update' value="<?php echo base_url('master/update_location');?>" /></td>
                            <td class="center"> <a href="javascript:void(0)" class="anchorbutton confirmbutton" onclick="add_new_state()">ADD</a> &nbsp;</td>
                        </tr>
                        <input type="hidden" id="new_state_url"  value="<?php echo base_url('Master/add_new_state')?>" />
                        
                        <?php $sr=0; foreach($states as $state){$sr++;?>
                        <tr class="gradeX" id="id<?php echo $state->m1_2_id;?>">
                            <td><?php echo $sr;?></td>
                              <td><?php echo $state->m1_1_name;?></td>
                              <td><input type="text" id="2name<?php echo $state->m1_2_id;?>" value="<?php echo $state->m1_2_name;?>" /></td>
                          
                           
                            <td class="center"><?php 							 
                                    echo form_dropdown('status',array('1'=>'Active','2'=>'Deactive'),$state->m1_2_status,'id = 2status'.$state->m1_2_id);
                                ?></td>
                                
                            <td class="center"> 
                            <i class="edit_icn" onclick="update_location('2','<?php echo $state->m1_2_id;?>')"><b>Edit</b></i>
                             <i class="del_icn" onclick="delete_location('2','<?php echo $state->m1_2_id;?>')"><b>Delete</b></i>
                            
                           </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                    </form>
                    
                    <br />
            </div>
            
            
            
            <div id="country" class="subcontent" style="display:none">
                                
                    <div class="contenttitle2">
                        <h3>Country Information</h3>
                    </div><!--contenttitle-->
                     
                        <?php 
						  echo form_open('Admin/update_user_basic',array('class'=>"stdform",'id'=>"country"));
						    ?>          
                          <p>
                                <label>countries</label>
                                <span class="field"><?php 							 
                                    echo form_dropdown('country', countries(),"onChange= get_loc_name(this.value,'state_url','States') disabled=disabled;");
                                ?></span>
                                
                       
                             </p>
                          
                             
                          
                                  
                       <?php      submit('UPDATE NOW') ; ?>
                        
                    </form>
                    
                    <br />                  
                       
            </div>
        
        </div><!--contentwrapper-->
        
	</div>