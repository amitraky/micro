<div class="centercontent">
  <div class="pageheader">
    <h1 class="pagetitle">Rank Managment</h1>
    <span class="pagedesc">Update Location Information</span>
    <ul class="hornav">
      <li class="current" ><a href="#rank_add">Add Rank</a></li>
      
    </ul>
  </div>
  <!--pageheader-->
  
  <div id="contentwrapper" class="contentwrapper">
    <div id="rank_add" class="subcontent">
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
          <?php $sr=0; foreach($ranks as $rank){$sr++;?>
          <tr class="gradeX" id="id<?php echo $rank->m3_1_id;?>">
            <td><?php echo $sr;?></td>
            <td><?php echo $rank->m3_1_rank;?></td>
            <td><?php echo $rank->m3_1_level;?></td>
            <td><?php echo $rank->m3_1_designation;?></td>
            <td class="center"><?php 							 
                                    echo form_dropdown('status',array('1'=>'Active','2'=>'Deactive'),$rank->m3_1_status);
                                ?></td>
            <td><i class="edit_icn" onclick="edite_rank('<?php echo $rank->m3_1_id;?>')"><b id="b<?php echo $rank->m3_1_id;?>">EDIT</b></i> <i class="del_icn" onclick="delete_rank('<?php echo $rank->m3_1_id;?>')"><b>Delete</b></i></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <input type="hidden" id="delete_rank" value="<?php echo base_url('master/delete_rank')?>" />
    <input type="hidden" id="update_rank" value="<?php echo base_url('master/update_location')?>" />
  </div>
  <!--contentwrapper--> 
  
</div>
