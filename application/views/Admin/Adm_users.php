<div class="centercontent tables">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">All Users</h1>
            <span class="pagedesc">View All Users</span>
            
            
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
            
                	
                
             
          <div class="contenttitle2">
                	<h3>View users list</h3>
                </div><!--contenttitle-->
                <div class="tableoptions">
                	<button class="deletebutton radius3" title="table2">Delete Selected</button> &nbsp;
                    <select class="radius3">
                    	<option value="All">All</option>
                        <option value="Active">Active</option>
                        <option value="Deactive">Deactive</option>
                        <option value="Reject">Reject</option>
                    </select> &nbsp;
                    <button class="radius3">Apply Filter</button>
                </div>
                
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
                      <?php foreach($rows as $row){?>	
                        <tr class="gradeX">
                          <td align="center"><span class="center">
                            <input type="checkbox" />
                          </span></td>
                            <td><?php echo $row->t1_1_login_id ?></td>
                            <td><?php echo $row->t1_2_name ?></td>
                            <td><?php echo $row->t1_1_email ?></td>
                            <td><?php echo $row->t1_2_mobile_no ?></td>
                            <td class="center"><?php  txt_status($row->t1_1_status) ?></td>
                            <td class="center"> <?php  action(baseurl('Admin/profile/'.$row->t1_1_userid),'search')?></td>
                        </tr>
                          <?php } ?> 
                      
                        
                    </tbody>
                </table>
        
        </div><!--contentwrapper-->
        
	</div>