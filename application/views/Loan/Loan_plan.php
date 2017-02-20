<div class="centercontent">
  <div class="pageheader">
    <h1 class="pagetitle">Plan</h1>
    <span class="pagedesc">Add Plan Information</span>
    <ul class="hornav">
      <li class="current"><a href="#basic">Basic Information</a></li>
      <li><a href="#branchlist">Plan List</a></li>
    </ul>
  </div>
  <!--pageheader-->
  
  <div id="contentwrapper" class="contentwrapper">
    <div id="basic" class="subcontent">
      <div class="contenttitle2">
        <h3>Enter Plan Information</h3>
      </div>
      <!--contenttitle-->
      <?php  echo get_msg('error'); get_msg('success'); ?>
      <?php echo form_open('Admin/add_new_loan',array('class'=>"stdform stdform2",'id'=>"add_new_loan"));?>
							
      <p>
        <label>Loan Type .<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="loan_type" id="loan_type" class="smallinput" value="" >
        
        </span> </p>
      <p>
        <label>Min Limit<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="min_amt" id="min_amt" class="smallinput" value="" >
        <i class="note"><b>Note: </b> Enter Max Amount</i> 
        </span> </p>
      <p>
        <label>Max Limit<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="max_amt" id="max_amt" class="smallinput" value="" >
         <i class="note"><b>Note: </b> Enter Max Amount</i> 
        </span> </p>
      <p>
        <label>Loan Duration <i class="note">*</i></label>
        <span class="field">
        <input type="text" name="duretion" id="duretion" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Payment Mode<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="pay_mode" id="pay_mode" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Interest Rate <i class="note">*</i></label>
        <span class="field">
        <input type="text" name="interest_rate" id="interest_rate" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Instalment Cal. Method<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="install_cal" id="install_cal" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Loan Processing Fee<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="loan_proc" id="loan_proc" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Loan Security<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="branch_id" id="loan_secure" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Loan Insurance<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="loan_insure" id="loan_insure" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Service Tax<i class="note">*</i></label>
        <span class="field">
        <input type="text" name="service_tax" id="service_tax" class="smallinput" value="" >
         <i class="note"><b>Note:</b>What`s Service Charge</i> 
        </span> </p>
      <p>
        <label>Grace Period (Days)</label>
        <span class="field">
        <input type="text" name="grace_per" id="grace_per" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Loan Cycle</label>
        <span class="field">
        <input type="text" name="loan_cyc" id="loan_cyc" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Penalty Per Day </label>
        <span class="field">
        <input type="text" name="penalty_day" id="penalty_day" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Penalty Per Weak</label>
        <span class="field">
        <input type="text" name="penalty_weak" id="penalty_weak" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Penalty Per Month</label>
        <span class="field">
        <input type="text" name="penalty_month" id="penalty_month" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Minimum Age</label>
        <span class="field">
        <input type="text" name="min_age" id="min_age" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Loan Processing Fee (Amount)</label>
        <span class="field">
        <input type="text" name="loan_proc" id="loan_proc" class="smallinput" value="" >
        </span> </p>
      <p>
        <label>Other Charges</label>
        <span class="field">
        <input type="text" name="other_charge" id="other_charge" class="smallinput" value="" >
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
