<div class="centercontent">
  <div class="pageheader">
    <h1 class="pagetitle">Pin Managment</h1>
    <span class="pagedesc">Update Pin Information</span>
    <ul class="hornav">
      <li class="current" ><a href="#add_pin">Add Pin</a></li>
      <li class="" ><a href="#detail_pin">Detail Pin</a></li>
      
    </ul>
  </div>
  <!--pageheader-->
  
  <div id="contentwrapper" class="contentwrapper">
    <div id="add_pin" class="subcontent">
    <div class="stdform stdform2">
      <div class="contenttitle2">
        <h3>Rank Information</h3>
      </div>
      <!--contenttitle-->
      
      <?php   get_msg('error'); get_msg('success'); ?>
      <?php echo form_open('master/add_new_pin', 'id="pintadd" class="stdform"');?>
                    	<?php
                         
							 
							 input('Login ID','text','loginid','loginid');
							 
							 
						 ?>
                          <p>
                        	<label>User Name</label>
                            <span class="field"><input type="text" disabled="disabled" name="username" id="username" class="smallinput"></span>
                         </p>
                        
                         <p>
                                <label>Pin Type</label>
                                <span class="field" id="Cities"><?php 							 
                                    echo form_dropdown('pin_type', $pin_type,'','id="pin_type"' );
                                ?></span>
                             </p>
                             
                             
                        <p>
                        	<label>Pin Amount</label>
                            <span class="field"><input type="text" name="pin_amount" id="pin_amount" class="smallinput" placeholder=""></span>
                        </p>
                        
                        
                       
                        <p>
                        	<label>Pin Number</label>
                            <span class="field"><input type="text" name="pin_number" id="pin_number" class="smallinput"></span>
                        </p>
                        
                        
                        <br>
                        
                        <?php echo submit('Submit')?>
                    </form>
                    </div>
    </div>
    
    <div id="detail_pin" class="subcontent" style="display:none">
      <div class="contenttitle2">
        <h3>Rank Information</h3>
      </div>
      <!--contenttitle-->
      
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
            <th class="head1">Pin</th>
            <th class="head0">Login Id</th>
            <th class="head1">Amount</th>
            <th class="head1">Status</th>
            <th class="head0">Action</th>>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th class="head0">Sr.</th>
            <th class="head1">Pin</th>
            <th class="head0">Login Id</th>
            <th class="head1">Amount</th>
            <th class="head1">Status</th>
            <th class="head0">Action</th>
          </tr>
        </tfoot>
        <tbody>
          
          <?php $sr=0; foreach($pins as $pin){$sr++;?>
          <tr class="gradeX" id="id<?php //echo $rank->m3_1_id;?>">
            <td><?php echo $sr;?></td>
            <td><?php echo $pin->m4_2_name;?></td>
            <td><?php echo $pin->m4_2_date;?></td>
            <td><?php echo $pin->m4_2_date;?></td>
            <td class="center"></td>
            <td><i class="del_icn" onclick="delete_pin('<?php //echo $rank->m3_1_id;?>')"><b>Delete</b></i></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!--contentwrapper--> 
  
</div>
