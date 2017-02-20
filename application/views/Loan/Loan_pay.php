<div class="centercontent">
  <div class="pageheader">
    <h1 class="pagetitle">Pay Loan</h1>
    <span class="pagedesc">Add Loan Information</span>
    <ul class="hornav">
      <li class="current"><a href="#basic">Basic Information</a></li>
      <li><a href="#branchlist">Plan List</a></li>
    </ul>
  </div>
  <!--pageheader-->
  
  <div id="contentwrapper" class="contentwrapper">
    <div id="basic" class="subcontent">
      <div class="contenttitle2">
        <h3>Loan Information</h3>
      </div>
      <!--contenttitle-->
      <?php  echo get_msg('error'); get_msg('success'); ?>
      <?php echo form_open('Admin/add_new_loan',array('class'=>"stdform stdform2",'id'=>"pay_loan"));?>
      <p>
        <label>Loan ID .<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="logid" id="logid" class="microinput">
        </span> </p>
      
      <p>
        <label>User ID<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="loan_type" id="loan_type" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>User Name</label>
        <span class="field">
        <input type="text" name="min_loan" id="min_loan" class="smallinput" value="" placeholder="auto fill" >
        </span> </p>
    
      <p>
        <label>Loan Amount</label>
        <span class="field">
        <input type="text" name="max_loan" id="max_loan" class="smallinput" value="" placeholder="auto fill">
        </span> </p>
      <p>
        <label>Remaining Amount <i class="note">*</i></label>
        <span class="field">
        <input type="text" name="req_amt" id="req_amt" class="smallinput" value="" >
        </span> </p>
        
        
        
     
      <div class="contenttitle2" >
        <h3>Pay Amount</h3>
      </div>
      <p style="border-top: 1px solid #ccc;">
        <label>Customer Key-Documents</label>
        <span class="field">
        <input type="text" name="loan_cyc" id="loan_cyc" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Customer Document No </label>
        <span class="field">
        <input type="text" name="penalty_day" id="penalty_day" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Guarantor Login Id<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="penalty_weak" id="penalty_weak" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Guarantor  Name</label>
        <span class="field">
        <input type="text" name="penalty_month" id="penalty_month" class="smallinput" value="" placeholder="Auto fill" readonly >
        </span> </p>
      <p>
        <label>Guarantor Key-Documents</label>
        <span class="field">
        <input type="text" name="min_age" id="min_age" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Guarantor Document No</label>
        <span class="field">
        <input type="text" name="loan_proc" id="loan_proc" class="smallinput" value="" >
        </span> </p>
      <div class="contenttitle2">
        <h3>Agent Detail</h3>
      </div>
      <p style="border-top: 1px solid #ccc;">
        <label>Agent Code</label>
        <span class="field">
        <input type="text" name="agent_code" id="agent_code" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Agent Name</label>
        <span class="field">
        <input type="text" name="agent_name" id="agent_name" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Description</label>
        <span class="field">
        <textarea class="smallinput" name="description"></textarea>
        </span> </p>
      <?php      submit('SUBMIT') ; ?>
      </form>
      <br />
    </div>
    <!--subcontent-->
    
    <div id="branchlist" class="subcontent" style="display:none">
      <div class="contenttitle2">
        <h3>Branch Information</h3>
      </div>
      <!--contenttitle-->
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
            <td class="center"><?php  //action(baseurl('Admin/profile/'.$row->t1_1_userid),'search')?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <br />
    </div>
  </div>
  <!--contentwrapper--> 
  
</div>
