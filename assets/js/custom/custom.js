// JavaScript Document

function get_loc_name(id,go_url,keep)
{
	
    jQuery.ajax({
      type: "POST", 
      url: jQuery('#'+go_url).val(), 
      data:{'id':id},
      success: function(response){
			jQuery('#'+keep).html(response);
			
    },
    error: function(){alert('error');}
    });
}






function rename_location()
{
  jQuery('city_id').val(); 
  jquery('#btn_city').value('UPDATE nOW');

}



function add_new_city()
{
 var state  =  jQuery('#new_state').val(); 
 var city   =  jQuery('#new_city').val();
 var status =  jQuery('#city_status').val();
 var go_url = 'master/add_new_city';
 add_new_location(state,city,status);
}

function add_new_state()
{
 var new_country  =  jQuery('#new_country').val(); 
 var new_state   =  jQuery('#new_state_name').val();
 var status =  jQuery('#state_status').val();
 
 if(new_state ==''){	
   jQuery('#city_msg').html('Plz enter City Name');
   return false; 
 }
 jConfirm('Can you confirm this?', 'Confirmation Dialog', function(r) {

   
   if(r == true){
	   
		  jQuery.ajax({
		  type: "POST", 
		  url: jQuery('#new_state_url').val(), 
		  data:{'new_country':new_country,'new_state':new_state,'state_status':status},		  
		  success: function(response){
				window.location.reload();
		  },
		  error: function(){alert('error');}
		});
	}
	
	});
 
 
}



function add_new_location()
{
 var new_city  = jQuery('#new_city').val();
 if(new_city ==''){	
   jQuery('#city_msg').html('Plz enter City Name');
   return false; 
 }
 
 jConfirm('Can you confirm this?', 'Confirmation Dialog', function(r) {

   
   if(r == true){
	   
		  jQuery.ajax({
		  type: "POST", 
		  url: jQuery('#city_url').val(), 
		  data:{'new_state':jQuery('#new_state').val(),'new_city':new_city,'new_status':jQuery('#new_status').val()},		  
		  success: function(response){
				window.location.reload();
		  },
		  error: function(){alert('error');}
		});
	}
	
	});

  
	
}


function delete_location(types,id)
{
jConfirm('Can you confirm this?', 'Confirmation Dialog', function(r) {

   if(r == true){
		  jQuery.ajax({
		  type: "POST", 
		  url: jQuery('#delete_location').val(), 
		  data:{'type':types ,'location_id':id},		  
		  success: function(response){
		   window.location.reload();
		  },
		  error: function(){alert('error');}
		});
	}
	});
}

function update_location(type,id)
{     
jConfirm('Can you confirm this?', 'Confirmation Dialog', function(r) {

   if(r == true){
		  jQuery.ajax({
		  type: "POST", 
		  url: jQuery('#update_location_id').val(), 
		  data:{'type':type ,'new_name':jQuery('#'+type+'name'+id).val(),'id':id,'new_status':jQuery('#'+type+'status'+id).val()},	  
		  success: function(response){
				window.location.reload();
		  },
		  error: function(){alert('error');}
		});
	}
	});

}



function user_detail(userid,fx_name)
{     alert(userid);

   if(userid !=''){
		  jQuery.ajax({
		  type: "POST", 
		  url: window.location.origin+fx_name, 
		  data:{'userid':userid},	  
		  success: function(response){
				window.location.reload();
		  },
		  error: function(){alert('error');}
		});
	}

}




