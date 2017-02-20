
<div class="vernav2 iconmenu">
  <ul>
  
  <li class="<?php if($active == 'plan'|| $active == 'category'||$active == 'type') echo 'current';  ?>"><a href="#Master" class="users">Master</a> <span class="arrow"></span>
      <ul id="Master">
        <li class="<?php if($active == 'plan') echo 'current'; ?>"><a href="<?php echo baseurl('loan/plan')?>">Plane</a></li>
        <li class="<?php if($active == 'category') echo 'current'; ?>"><a href="<?php echo baseurl('loan/category')?>">Category</a></li>
        <li class="<?php if($active == 'type') echo 'current'; ?>"><a href="<?php echo baseurl('loan/type')?>">Type</a></li>
      </ul>
    </li>
    
    
  
    <li class="<?php if($active == 'assign'|| $active == 'pay_loan_amt') echo 'current';  ?>"><a href="#loan" class="users">Loan</a> <span class="arrow"></span>
      <ul id="loan">
        <li class="<?php if($active == 'assign') echo 'current'; ?>"><a href="<?php echo baseurl('loan/assign')?>">Assign Loan</a></li>
        <li class="<?php if($active == 'loan_amt_credit') echo 'current'; ?>"><a href="<?php echo baseurl('loan/pay_loan_amt')?>">View Assign Loan</a></li>
        
      </ul>
    </li>
    <li class="<?php if($active == 'city'|| $active == 'state'||$active == 'deactive_users') echo 'current';  ?>"><a href="#Amount" class="users">Amount</a> <span class="arrow"></span>
      <ul id="Amount">
        <li class="<?php if($active == 'city') echo 'current'; ?>"><a href="wizard.html">Credite Loan Amount</a></li>
        <li class="<?php if($active == 'state') echo 'current'; ?>"><a href="editor.html">Debit Loan Amount</a></li>
        <li class="<?php if($active == 'rank') echo 'current'; ?>"><a href="editor.html">View Loan Details</a></li>
      </ul>
    </li>
    
    <li class="<?php if($active == 'city'|| $active == 'state'||$active == 'deactive_users') echo 'current';  ?>"><a href="#Voucher" class="users">Voucher</a> <span class="arrow"></span>
      <ul id="Voucher">
        <li class="<?php if($active == 'city') echo 'current'; ?>"><a href="wizard.html">Voucher Payment</a></li>
        <li class="<?php if($active == 'state') echo 'current'; ?>"><a href="editor.html">Reports </a></li>
      </ul>
    </li>
  </ul>
  <a class="togglemenu"></a> <br />
  <br />
</div>
<!--leftmenu--> 

