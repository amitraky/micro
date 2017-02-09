<div class="centercontent">
    
        <div class="pageheader">
            <h1 class="pagetitle">Withdrawal Amount</h1>
            <span class="pagedesc">Add Withdrawal Information</span>
            
            <ul class="hornav">
                <li class="current"><a href="#basic">User Information</a></li>
                <li><a href="#branchlist">Branch List</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        	 
        	<div id="basic" class="subcontent">
                                
                    <div class="contenttitle2">
                        <h3>Withdrawal Information</h3>
                    </div><!--contenttitle-->
                      <?php  echo get_msg('error'); get_msg('success'); ?>
                        <?php 
						
						echo form_open('Admin/add_new_user',array('class'=>"stdform stdform2",'id'=>"Add_withdrawal"));   
						      
							
                            	input('Enter Account No.<i class="note">*</i>','text','acn_no','acn_no'); 
								
								input('User Name','text','user_name','user_name');
								
								input('Available Balance','text','avl_amt','avl_amt');
								
								input('Enter Amount to Withdraw <i class="note">*</i>','text','snd_amt','snd_amt');
								
								input('Confirm Amount<i class="note">*</i>','text','cfm_amt','cfm_amt');
								
								input('Voucher No.','text','voucher_no','voucher_no');
								
								input('Payment Branch<i class="note">*</i>','text','branch_id','branch_id');
								
								 ?> 
                                
                                       
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