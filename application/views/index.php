<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title><?PHP echo SITE_TITLE; ?></title>

<script>
var timer = 0;
function set_interval() {
  // the interval 'timer' is set as soon as the page loads
  timer = setInterval("auto_logout()", 3000);
  // the figure '10000' above indicates how many milliseconds the timer be set to.
  // Eg: to set it to 5 mins, calculate 5min = 5x60 = 300 sec = 300,000 millisec.
  // So set it to 300000
}

function reset_interval() {
  //resets the timer. The timer is reset on each of the below events:
  // 1. mousemove   2. mouseclick   3. key press 4. scroliing
  //first step: clear the existing timer

  if (timer != 0) {
    clearInterval(timer);
    timer = 0;
    // second step: implement the timer again
	
    timer = setInterval("auto_logout()", 3000);
    // completed the reset of the timer
  }
}

function auto_logout() {
  // this function will redirect the user to the logout script
  //window.location = "<?php echo base_url('Auth/user_out')?>";
}

// Add the following attributes into your BODY tag


</script>
    <!-- Bootstrap core CSS -->
    <?php 
	 
 /* header links here */

	// store all css links in one array
	$css = array(
				  'css/style.default.css',
				  'css/custom.css',
	);
	//removed all blank links and dumplicacy
	$hrefs = array_uniques(array_filters($css));
	
	
	
    foreach($hrefs as $href) 
       echo "<link href=".base_url().'assets/'.$href." rel='stylesheet'>";
	   
	   
	 /*end here */  
   ?>
   
   
</head>
<body onload="set_interval()" onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()" onscroll="reset_interval()">

 <!-- page contents here show -->   
    <?php if(!empty($header))$this->load->view($header); ?>    
    <?php if(!empty($menu))$this->load->view($menu); ?>  
   
	<?php 
	$this->load->view($page); ?>
     
	
 <!-- end paeg contents  -->   	
	
    
 <?php 
 
 
 /* footer part here */
 
	// store all css links in one array
	$src = array(
				  'plugins/jquery-1.7.min.js',
				  'plugins/jquery-ui-1.8.16.custom.min.js',
				  'plugins/jquery.cookie.js',
				    
				  
				  'plugins/jquery.dataTables.min.js',
				  'plugins/jquery.uniform.min.js',
				  'plugins/jquery.tagsinput.min.js',
				  
				   
				  'custom/general.js',
				  'custom/index.js',
				   
				  'plugins/jquery.slimscroll.js',
				  'plugins/ui.spinner.min.js',
				  'plugins/charCount.js',
				  'plugins/jquery.validate.min.js',	
				  	'plugins/colorpicker.js',
				  'custom/forms.js',
				    'plugins/jquery.alerts.js',
				
				  'custom/elements.js',
				  'custom/tables.js',
				  'custom/custom.js',
				  
				  'custom/dashboard.js',
				  'plugins/jquery.flot.min.js',
				  'plugins/jquery.flot.resize.min.js',
				  
				  
				  
	);



	
	//removed all blank src vale and dumplicacy
	$srcs = array_uniques(array_filters($src));
	
    foreach($srcs as $src) 
       echo '<script src='.base_url().'assets/js/'.$src.' type="text/javascript"></script>';
	/* end footer */   
   ?>    
   

   
  <br>
   <footer class="site-footer" align="center">
          <div class="text-center">
             <?PHP echo COPY?> <?PHP echo YEAR;?>
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

