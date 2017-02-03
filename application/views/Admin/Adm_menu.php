
<div class="vernav2 iconmenu">
  <ul>
  
  <li class="<?php if($active == 'location'|| $active == 'rank'|| $active == 'pin'|| $active == 'branch' ) echo 'current';  ?>"><a href="#Master" class="elements">Master</a> <span class="arrow"></span>
      <ul id="Master">
       
        <li class="<?php if($active == 'location') echo 'current'; ?>"><a href="<?php echo base_url('Master/location')?>">Location</a></li>
        <li class="<?php if($active == 'rank') echo 'current'; ?>"><a href="<?php echo base_url('Master/rank')?>">Rank</a></li>
        <li class="<?php if($active == 'pin') echo 'current'; ?>"><a href="<?php echo base_url('Master/pin')?>">Pin</a></li>
        <li class="<?php if($active == 'branch') echo 'current'; ?>"><a href="<?php echo base_url('Master/branch')?>">Branch</a></li>
        
        <li class="<?php if($active == 'assets') echo 'current'; ?>"><a href="editor.html">Assets</a></li>
        <li class="<?php if($active == 'biabilies') echo 'current'; ?>"><a href="editor.html">Liabilies</a></li>
        
      </ul>
    </li>
  
   <li class="<?php if($active == 'profile'|| $active == 'setting' ) echo 'current';?>"><a href="#Setting" class="drafts ">Setting</a> <span class="arrow"></span>
      <ul id="Setting">
      
        
        
        <li class="<?php if($active == 'profile') echo 'current'; ?>"><a href="<?php echo base_url('Admin/profile')?>">Profile</a></li>
        <li class="<?php if($active == 'setting') echo 'current'; ?>"><a href="<?php echo base_url('Admin/setting')?>">Setting</a></li>
        
      </ul>
    </li>
    
    
  
    <li class="<?php if($active == 'all_users' || $active == 'new_user' || $active == 'agents' || $active == 'customers' || $active == 'branchs' ) echo 'current';  ?>"><a href="#Users" class="users">Users</a> <span class="arrow"></span>
      <ul id="Users">
      <li class="<?php if($active == 'new_user') echo 'current'; ?>"><a href="<?php echo base_url('Admin/new_user')?>">New User</a></li>
          <li class="<?php if($active == 'branchs') echo 'current'; ?>"><a href="<?php echo base_url('admin/branchs')?>">Branch</a></li>
          
           <li class="<?php if($active == 'agents') echo 'current'; ?>"><a href="<?php echo base_url('admin/agents')?>">Agent</a></li>
           
            <li class="<?php if($active == 'customers') echo 'current'; ?>"><a href="<?php echo base_url('admin/customers')?>">Customer</a></li>
            
             <li class="<?php if($active == 'all_users') echo 'current'; ?>"><a href="<?php echo base_url('admin/all_users')?>">All Users</a></li>
      </ul>
    </li>
    
     <li class="<?php if($active == 'all_users'|| $active == 'active_users'||$active == 'deactive_users') echo 'current';  ?>"><a href="#Agents" class="users">Agents</a> <span class="arrow"></span>
      <ul id="Agents">
        <li class="<?php if($active == 'all_users') echo 'current'; ?>"><a href="<?php echo base_url('admin/all_users')?>">All Users</a></li>
        <li class="<?php if($active == 'activ_users') echo 'current'; ?>"><a href="wizard.html">Active Users</a></li>
        <li class="<?php if($active == 'deactiv_users') echo 'current'; ?>"><a href="editor.html">Deactive Users</a></li>
      </ul>
    </li>
    
    <li class="<?php if($active == 'all_users'|| $active == 'active_users'||$active == 'deactive_users') echo 'current';  ?>"><a href="#Customers" class="users">Customers</a> <span class="arrow"></span>
      <ul id="Customers">
        <li class="<?php if($active == 'all_users') echo 'current'; ?>"><a href="<?php echo base_url('admin/all_users')?>">All Users</a></li>
        <li class="<?php if($active == 'activ_users') echo 'current'; ?>"><a href="wizard.html">Active Users</a></li>
        <li class="<?php if($active == 'deactiv_users') echo 'current'; ?>"><a href="editor.html">Deactive Users</a></li>
      </ul>
    </li>
    
    
    <li class="<?php if($active == 'all_users'|| $active == 'active_users'||$active == 'deactive_users') echo 'current';  ?>"><a href="#Transactions" class="users">Transactions</a> <span class="arrow"></span>
      <ul id="Transactions">
       
        <li class="<?php if($active == 'account_saveing') echo 'current'; ?>"><a href="wizard.html">Saveing</a></li>
        <li class="<?php if($active == 'account_withdrawal') echo 'current'; ?>"><a href="editor.html">Withdrawal</a></li>
      </ul>
    </li>
    
     
    <li class="<?php if($active == 'all_users'|| $active == 'active_users'||$active == 'deactive_users') echo 'current';  ?>"><a href="#loan" class="users">Loan</a> <span class="arrow"></span>
      <ul id="loan">
        <li class="<?php if($active == 'account_saveing') echo 'current'; ?>"><a href="wizard.html">Add Loan</a></li>
        <li class="<?php if($active == 'account_saveing') echo 'current'; ?>"><a href="wizard.html">Loan</a></li>
        <li class="<?php if($active == 'account_withdrawal') echo 'current'; ?>"><a href="editor.html">Category</a></li>
        <li class="<?php if($active == 'account_withdrawal') echo 'current'; ?>"><a href="editor.html">Type</a></li>
        <li class="<?php if($active == 'account_withdrawal') echo 'current'; ?>"><a href="editor.html">Pay Amount</a></li>
      </ul>
    </li>
    
    
    
    
    
     <li class="<?php if($active == 'city'|| $active == 'state'||$active == 'deactive_users') echo 'current';  ?>"><a href="#Ledger" class="users">Ledger</a> <span class="arrow"></span>
      <ul id="Ledger">
       
        <li class="<?php if($active == 'city') echo 'current'; ?>"><a href="wizard.html">Daily</a></li>
        <li class="<?php if($active == 'state') echo 'current'; ?>"><a href="editor.html">Account</a></li>
        <li class="<?php if($active == 'rank') echo 'current'; ?>"><a href="editor.html">Transactions</a></li>
      </ul>
    </li>
    
    <li class="<?php if($active == 'city'|| $active == 'state'||$active == 'deactive_users') echo 'current';  ?>"><a href="#Voucher" class="users">Voucher</a> <span class="arrow"></span>
      <ul id="Voucher">
       
        <li class="<?php if($active == 'city') echo 'current'; ?>"><a href="wizard.html">Voucher Payment</a></li>
        <li class="<?php if($active == 'state') echo 'current'; ?>"><a href="editor.html">Reports </a></li>
        
      </ul>
    </li>
    
     <li class="<?php if($active == 'city'|| $active == 'state'||$active == 'deactive_users') echo 'current';  ?>"><a href="#Daybook" class="users">Daybook</a> <span class="arrow"></span>
      <ul id="Daybook">
       
        <li class="<?php if($active == 'city') echo 'current'; ?>"><a href="wizard.html">Branch Wise</a></li>
        
      </ul>
    </li>
    
     <li class="<?php if($active == 'city'|| $active == 'state'||$active == 'deactive_users') echo 'current';  ?>"><a href="#Accounts" class="users">Accounts</a> <span class="arrow"></span>
      <ul id="Accounts">
        <li class="<?php if($active == 'city') echo 'current'; ?>"><a href="wizard.html">Assets</a></li>
        <li class="<?php if($active == 'city') echo 'current'; ?>"><a href="wizard.html">Liabilities</a></li>
        <li class="<?php if($active == 'city') echo 'current'; ?>"><a href="wizard.html">Capital</a></li>
        <li class="<?php if($active == 'city') echo 'current'; ?>"><a href="wizard.html">Revenue</a></li>  
        <li class="<?php if($active == 'city') echo 'current'; ?>"><a href="wizard.html">Expenses</a></li>   
      </ul>
    </li>
   
   
   
   
  </ul>
  <a class="togglemenu"></a> <br />
  <br />
</div>
<!--leftmenu--> 

     