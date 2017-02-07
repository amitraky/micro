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
                        <h3>Saving Information</h3>
                    </div><!--contenttitle-->
                      <?php  echo get_msg('error'); get_msg('success'); ?>
                        <?php 
						
						echo form_open('Admin/add_new_user',array('class'=>"stdform stdform2",'id'=>"add_Saving"));  ?>  
						      
							
                            
                                  <p>
                                <label>#Saving ID<i class="note">*</i></label>
                                <span class="field">
                                <input type="text" name="name" id="name" class="microinput" value="SAV<?php ECHO date('Ymdhms');?>" readonly>       <br /><b class="note">Note:</b><i class="note">Randmon Saving account id created</i>
                                </span>
                                </p>
              
						         <p>
                                <label>Create Date<i class="note">*</i></label>
                                <span class="field">
                                 <input type="text" id="datepickto"  name="date"/>
                                </span>
                                </p>
                                
                                
                          <div class="contenttitle2">
                        <h3>User Information</h3>
                    </div><!--contenttitle-->      
						  <p>
                                <label>User Log ID<i class="note">*</i></label>
                                <span class="field">
                                <input type="text" name="logid" id="logid" class="microinput" placeholder="Enter User Log ID">
                                
                               <i style="margin-left:20px;"> <input type="text" name="name" id="name" class="smallinput" placeholder="Auto fillup User Name" disabled="disabled"> </i>               <br />
                                </span>
                                </p>
                                
                                
                                  <p>
                                <label>Joint A/C Holder Name</label>
                                <span class="field">
                                <input type="text" name="name" id="name" class="smallinput" placeholder="Joint A/C Holder Name" >      
                                </span>
                                </p>
                                
                                
                                <div class="contenttitle2">
                        <h3>Plan Information</h3>
                    </div><!--contenttitle-->      
						  <p>
                                <label>Amount<i class="note">*</i></label>
                                <span class="field">
                                <input type="text" name="maxamount" id="maxamount" class="microinput" placeholder="Enter Amount">
                                <b class="note" style="margin-left:20px;"> Ninety Eight  Thousand  Five Hundred and  Sixty Two </b>
                                        
                                </span>
                                </p>
                             
                                
                                
                         
                            <div class="contenttitle2">
                        <h3>Agent Details</h3>
                    </div><!--contenttitle-->      
						  <p>
                                <label>Agent ID<i class="note">*</i></label>
                                <span class="field">
                                <input type="text" name="agentid" id="agentid" class="microinput" placeholder="Enter Agent ID">
                                 <i style="margin-left:20px;"><input type="text" name="name" id="name" class="smallinput" readonly="readonly"  placeholder="Auto Fillup Agent Name"></i>
                                     
                                </span>
                                </p>
                                
                                
                                  <p>
                                <label>Branch Code<i class="note">*</i></label>
                                <span class="field">
                                <input type="text" name="branchcode" id="branchcode" class="microinput"  placeholder="Enter Branch Code" >   
                                
                                <i style="margin-left:20px;"><input type="text" name="name" id="name" class="smallinput" readonly="readonly"  placeholder="Auto Fillup Branch Name"></i>   
                                </span>
                                </p>   
                              <div>  
                             <div class="contenttitle2">
                        <h3>Payment Details</h3>
                    </div><!--contenttitle-->      
						  <p>
                                <label>Branch Code + Name</label>
                                <span class="field">
                                <input type="text" name="branchocdename" id="branchocdename" class="microinput" placeholder="Enter Agent ID">
                                 <i style="margin-left:20px;"><input type="text" name="name" id="name" class="smallinput" readonly="readonly"  placeholder="Auto Fillup Agent Name"></i>
                                     
                                </span>
                                </p>
                                
                                
                                  <p>
                                <label>Payment Mode<i class="note">*</i></label>
                                <span class="field">
                                <input type="text" name="paymentmode" id="paymentmode" class="microinput"  placeholder="Enter Branch Code" >     
                                </span>
                                </p>   
                              </div>   
                                       
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