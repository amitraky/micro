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
      <div class="contenttitle2">
        <h3>Rank Information</h3>
      </div>
      <!--contenttitle-->
      
      <?php  echo get_msg('error'); get_msg('success'); ?>
      <form id="form1" class="stdform" method="post" action="#" novalidate="novalidate">
                    	<p>
                        	<label>First Name</label>
                            <span class="field"><input type="text" name="firstname" id="firstname" class="longinput"></span>
                        </p>
                        
                        <p>
                        	<label>Last Name</label>
                            <span class="field"><input type="text" name="lastname" id="lastname" class="longinput"></span>
                        </p>
                        
                        <p>
                        	<label>Email</label>
                            <span class="field"><input type="text" name="email" id="email" class="longinput"></span>
                        </p>
                        
                        <p>
                        	<label>Location</label>
                            <span class="field"><textarea cols="80" rows="5" name="location" class="mediuminput" id="location"></textarea></span> 
                        </p>
                        
                        <p>
                        	<label>Select</label>
                            <span class="field">
                            <div class="selector" id="uniform-selection"><span>Choose One</span><select name="selection" id="selection" style="opacity: 0;">
                            	<option value="">Choose One</option>
                                <option value="1">Selection One</option>
                                <option value="2">Selection Two</option>
                                <option value="3">Selection Three</option>
                                <option value="4">Selection Four</option>
                            </select></div>
                            </span>
                        </p>
                        
                        <br>
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2">Submit Button</button>
                        </p>
                    </form>
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
            <th class="head1">Rank</th>
            <th class="head0">Level</th>
            <th class="head1">Designation</th>
            <th class="head1">Status</th>
            <th class="head0">Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th class="head0">Sr.</th>
            <th class="head1">Rank</th>
            <th class="head0">Level</th>
            <th class="head1">Designation</th>
            <th class="head1">Status</th>
            <th class="head0">Action</th>
          </tr>
        </tfoot>
        <tbody>
          <tr class="gradeX">
            <td>#</td>
            <td><input type="text" id="new_rank" /></td>
            <td><input type="text" id="new_level" /></td>
            <td><input type="text" id="new_designation" /></td>
            <td><?php 							 
              echo form_dropdown('new_status',array('1'=>'Active','2'=>'Deactive'),'','id = "new_status"');
                                ?>
              <input type="hidden" id='add_rank_url' value="<?php echo base_url('master/add_new_rank');?>" /></td>
            <td class="center"><a href="javascript:void(0)" class="anchorbutton confirmbutton" onclick="add_rank()">ADD</a> &nbsp;</td>
          </tr>
          <?php //$sr=0; foreach($ranks as $rank){$sr++;?>
          <tr class="gradeX" id="id<?php //echo $rank->m3_1_id;?>">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="center"></td>
            <td><i class="edit_icn" onclick="edite_rank('<?php //echo $rank->m3_1_id;?>')"><b id="b<?php //echo $rank->m3_1_id;?>">EDIT</b></i> <i class="del_icn" onclick="delete_rank('<?php //echo $rank->m3_1_id;?>')"><b>Delete</b></i></td>
          </tr>
          <?php //} ?>
        </tbody>
      </table>
    </div>
  </div>
  <!--contentwrapper--> 
  
</div>
