
<div class="vernav2 iconmenu">
  <ul>
  
  <li class="<?php if($active == 'all_users'|| $active == 'active_users'||$active == 'deactive_users') echo 'current';  ?>"><a href="#Master" class="users">Master</a> <span class="arrow"></span>
      <ul id="Master">
        <li class="<?php if($active == 'account_saveing') echo 'current'; ?>"><a href="wizard.html">Plane</a></li>
        <li class="<?php if($active == 'account_withdrawal') echo 'current'; ?>"><a href="editor.html">Category</a></li>
        <li class="<?php if($active == 'account_withdrawal') echo 'current'; ?>"><a href="editor.html">Type</a></li>
      </ul>
    </li>
    
    
  
    <li class="<?php if($active == 'all_users'|| $active == 'active_users'||$active == 'deactive_users') echo 'current';  ?>"><a href="#loan" class="users">Loan</a> <span class="arrow"></span>
      <ul id="loan">
        <li class="<?php if($active == 'account_saveing') echo 'current'; ?>"><a href="wizard.html">Assign Loan</a></li>
        <li class="<?php if($active == 'account_saveing') echo 'current'; ?>"><a href="wizard.html">View Assign Loan</a></li>
        
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

