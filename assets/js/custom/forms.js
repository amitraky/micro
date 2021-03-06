/*
 * 	Additional function for forms.html
 *	Written by ThemePixels	
 *	http://themepixels.com/
 *
 *	Copyright (c) 2012 ThemePixels (http://themepixels.com)
 *	
 *	Built for Amanda Premium Responsive Admin Template
 *  http://themeforest.net/category/site-templates/admin-templates
 */

jQuery(document).ready(function(){
	
	///// FORM TRANSFORMATION /////
	jQuery('input:checkbox, input:radio, select, input:file').uniform();


	///// DUAL BOX /////
	var db = jQuery('#dualselect').find('.ds_arrow .arrow');	//get arrows of dual select
	var sel1 = jQuery('#dualselect select:first-child');		//get first select element
	var sel2 = jQuery('#dualselect select:last-child');			//get second select element
	
	sel2.empty(); //empty it first from dom.
	
	db.click(function(){
		var t = (jQuery(this).hasClass('ds_prev'))? 0 : 1;	// 0 if arrow prev otherwise arrow next
		if(t) {
			sel1.find('option').each(function(){
				if(jQuery(this).is(':selected')) {
					jQuery(this).attr('selected',false);
					var op = sel2.find('option:first-child');
					sel2.append(jQuery(this));
				}
			});	
		} else {
			sel2.find('option').each(function(){
				if(jQuery(this).is(':selected')) {
					jQuery(this).attr('selected',false);
					sel1.append(jQuery(this));
				}
			});		
		}
	});
	
	
	
	///// BASIC VALIDATION /////
	jQuery("#frmbasic").validate({
		rules: {
			fname: "required",
			lname: "required",
			email: {
				required: true,
				email: true,
			},
			mobile: "required"
		},
		messages: {
			fname: "Please enter your first name",
			lname: "Please enter your last name",
			email: "Please enter a valid email address",
			mobile: "Please enter your mobile"
		}
	});
	
	
	///// BASIC VALIDATION /////
	jQuery("#login").validate({
		rules: {
			loginid: "required",
			loginpwd: "required"
			
		},
		messages: {
			loginid: "Please enter your first name",
			loginpwd: "Please enter your last name"
		}
	});
	
	
	
	
	///// BASIC OTP LOGIN /////
	jQuery("#otp_login").validate({
		rules: {
			user_otp: "required"
			
		},
		messages: {
			user_otp: "Please enter OTP",
		}
	});
	
	
	///// Add new Pin validation /////
	jQuery("#pintadd").validate({
		rules: {
			loginid: "required",
			pin_number: "required",
			pin_amount: "required",
			pin_type: "required",
			
		},
		messages: {
			loginid: "Please enter Login id",
			pin_amount: "Please Select First Pin Type",
			pin_number: "Please enter Number of Pins",
			pin_type : "Please Select Pin type",
		}
	});
	
	
	///// Add new Pin validation /////
	jQuery("#add_branch").validate({
		rules: {
			name: "required",
			email: "required",
			mobile: "required",
			pincode: "required",
			address: "required",
			landmark: "required",
			
		},
		messages: {
			name: "Please enter Branch Name",
			email: "Please end email",
			mobile: "Please MObile Number",
			pincode : "Please enter Pin code",
			address : "Please enter address",
			landmark : "Landmark is required",
		}
	});
	
	
	///// Add new Saving Account validation /////
	jQuery("#add_Saving").validate({
		rules: {
			datepickto: "required",
			logid: "required",
			maxamount: "required",
			agentid: "required",
			branchcode: "required",
			branchocdename: "required",
			paymentmode: "required",
			
		},
		messages: {
			datepickto: "Please Select Date",
			logid: "Please Enter  login id",
			maxamount: "Please Enter amount",
			agentid : "Please enter agent id",
			branchcode : "Please enter branch code",
			branchocdename : "Please Select this",
			paymentmode : "Please select payment Mode",
		}
	});
	
	
	
	
	
	///// withdrawal  validation /////
	jQuery("#Add_withdrawal").validate({
		rules: {
			acn_no: "required",
			snd_amt: { required: true,
                       digits: true,
				       min: 1
					 },
			cfm_amt:{ required: true,
                       digits: true,
				       min: 1
					 },
			
		},
		messages: {
			acn_no: "Please enter account number",
			
		}
	});
	
	///// Add new Saving Account validation /////
	jQuery("#add_new_loan").validate({
		rules: {
			loan_type: "required",
			min_amt: {required:true,min:1,number: true},
			max_amt: {required:true,min:1,number: true},
			duretion: "required",
			pay_mode: "required",
			interest_rate: "required",
			install_cal: "required",
		},
		messages: {
			loan_type: "Please Enter loan Type",
			//min_amt: "Please Enter minimum 1 Amount",
			//max_amt: "Please Enter max Amount",
			duretion : "Please Enter Duretion",
			pay_mode : "Please enter pay mode",
			interest_rate : "Please Enter intrest rat",
			install_cal : "Please Enter Instalment Cal. Method",
		}
	});
	
	
	
	///// Add new Saving Account validation /////
	jQuery("#add_new_category").validate({
		rules: {
			name: "required",
		},
		messages: {
			name : "Please Enter category Name",
		}
	});
	
	///// Add new Saving Account validation /////
	jQuery("#add_new_type").validate({
		rules: {
			name: "required",
		},
		messages: {
			name : "Please Enter category Name",
		}
	});
	
	///// Add new Saving Account validation /////
	jQuery("#assign_loan").validate({
		rules: {
			name: "required",
		},
		messages: {
			name : "Please Enter category Name",
		}
	});
	
	
	
	
	
	
	
	///// TAG INPUT /////
	
	jQuery('#tags').tagsInput();

	
	///// SPINNER /////
	
	jQuery("#spinner").spinner({min: 0, max: 100, increment: 2});
	
	
	///// CHARACTER COUNTER /////
	
	jQuery(".textarea100").charCount({
		allowed: 100,		
		warning: 20,
		counterText: '<i style="color:red">Characters left</i>: '	
	});
	
	
	
});