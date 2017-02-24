//	Handling Error
// defining T/F here is no bueno for some reason. Let it set it down below
var errors = []; 

 // using .focus here gives an error at first, until you refocus. Use blur instead.
jQuery("input[name='name']").blur(function () {   // NOTE: we can prob use jQ.each input here
	validatetext("input[name='name']", 0, 0);
});

jQuery("input[name='company-title']").blur(function () {
	validatetext("input[name='company-title']", 0, 1);
});

jQuery("input[name='company-name']").blur(function () {
	validatetext("input[name='company-name']", 0, 2);
});

jQuery("input[name='address']").blur(function () {
	validatetext("input[name='address']", 0, 4);
});

jQuery("input[name='city']").blur(function () {
	validatetext("input[name='city']", 0, 5);
});

jQuery("input[name='state']").blur(function () {
	validatetext("input[name='state']", 0, 6);
});

jQuery("input[name='zip']").blur(function () {
	validatetext("input[name='zip']", 1, 7);
});

jQuery("input[name='tel']").blur(function () {
	validatetext("input[name='tel']", 0, 8);
});

jQuery("input[name='your-email']").blur(function () {
	validatetext("input[name='your-email']", 0, 9);
});

jQuery("select[name='interest']").change(function () { 
	validatetext("select[name='interest']", 0, 10);
});

jQuery("input[type='checkbox']").click(function () {
	if(jQuery("input:checkbox:checked").length > 1){
		if(jQuery(this).prop("checked")){
			errors[1] = false;
			var boxes = jQuery("input:checkbox:checked");
			for (var i = 0; i < jQuery("input:checkbox:checked").length; i++) {
				checkInput("input[name='hear[]'][value='"+boxes[i].value+"']",errors[1]);
			}
		}else{
			checkInput(this, true);
		}
	}else{
		errors[1] = true;
		var boxes = jQuery("input:checkbox");
		for (var i = 0; i < boxes.length; i++) {
			checkInput("input[name='hear[]'][value='"+boxes[i].value+"']",errors[1]);
		}
	}
});

jQuery("input[type='checkbox'][value='Other']").click(function () {
	if (jQuery("input[type='checkbox'][value='Other']").prop('checked')) {
		jQuery("input[name='otherHear']").prop('disabled', false);
		jQuery("input[name='otherHear']").addClass("invalid_input");
		//validatetext("input[name='otherHear']", 4, 13, "input[type='checkbox'][value='Other']");
 	} else {
  		//errors[2] = true;
		jQuery("input[name='otherHear']").removeClass("invalid_input");
		jQuery("input[name='otherHear']").val("");
		jQuery("input[name='otherHear']").prop('disabled', true);
 	}
});

// Submit the form.

jQuery("form.contactform").submit(function (event) {
	event.preventDefault();
	jQuery("#outputDisplay").html('<img alt="Sending ..." src="http://www.ititropicals.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" class="ajax_loading">');
	checkEveryFormInput();
	var trueError = true;
	for (var i = 0; i < errors.length; i++) {
		if (errors[i] === false) {
			console.log("Validation failed at index: " + i);
			checkEveryFormInput();
			trueError = false;
			jQuery("#outputDisplay").html('<div role="alert" style="display: block;" class="wpcf7-response-output wpcf7-display-none wpcf7-validation-errors">Validation errors occurred. Please confirm the fields and submit it again.</div>');
			console.log("List of errors: " + errors);
			if(i < 11){
				jQuery('body,html').animate({
							scrollTop: (jQuery("input[name='name']").offset().top - 150)
				}, 800);
			}else{
				jQuery('body,html').animate({ 
							scrollTop: (jQuery("input[name='otherHear']").offset().top - 150)
				}, 800);
			}
			break;
		}else{
			trueError = true;
		}
	}
	if (trueError){
		console.log('Submitting from line 106');
		var checkboxValues = jQuery("input[name='hear[]']:checked").map(function(_, el) {
	    return jQuery(el).val();
		}).get();
		var checkValues = "";
		if (checkboxValues.length > 2){
			checkValues = checkboxValues.toString();
		}else{
			checkValues = checkboxValues[0];
		}
		var formData = {
			"name"				: jQuery("input[name='name']").val(),
			"comptitle"			: jQuery("input[name='company-title']").val(),
			"compname"			: jQuery("input[name='company-name']").val(),
			"website"			: jQuery("input[name='company-website']").val(),
			"address1"			: jQuery("input[name='address']").val(),
			"address2"			: jQuery("input[name='address-two']").val(),
			"city"				: jQuery("input[name='city']").val(),
			"state"				: jQuery("input[name='state']").val(),
			"zip"				: jQuery("input[name='zip']").val(),
			"state"				: jQuery("input[name='state']").val(),
			"telephon"			: jQuery("input[name='tel']").val(),
			"email"				: jQuery("input[name='your-email']").val(),
			"heardfrom"			: checkValues,
			"interest"				: jQuery("select[name='interest']").val(),
			"application"				: jQuery("textarea[name='application']").val(),  
			"headfrom_other"				: jQuery("input[name='otherHear']").val(),
			"form_name"		:jQuery("form#theContactForm").data('formname')
        };
		console.log("List of errors: " + errors);
	  	console.log("Sent Form Data: ");
		console.log(formData);
        // process the form
	    	jQuery("#outputDisplay").html('<img alt="Sending ..." src="http://www.ititropicals.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" class="ajax_loading">');
        jQuery.ajax({
            type        : 'POST',
            url         : 'http://www.ititropicals.com/wp-content/themes/iTiTropicals-TBS/includes/form_submission_vco.php',
            data        : formData,
            dataType    : 'json'
        })
            .done(function(data) {
			jQuery("#outputDisplay").html('<div role="alert" style="display: block;" class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-ok">Your contact information was submitted!</div>');
			jQuery('#theContactForm').clearFormData();
            });
	}
});

//	Support Functions

function checkEveryFormInput(){
	validatetext("input[name='name']", 0, 0);
	validatetext("input[name='company-title']", 0, 1);
	validatetext("input[name='company-name']", 0, 2);
	//validatetext("input[name='company-website']", 0, 3);
	validatetext("input[name='address']", 0, 4);
	validatetext("input[name='city']", 0, 5);
	validatetext("input[name='state']", 0, 6);
	validatetext("input[name='zip']", 0, 7);
	validatetext("input[name='tel']", 0, 8);
	validatetext("input[name='your-email']", 0, 9);
	validatetext("select[name='interest']", 5, 10);

	if(jQuery("input:checkbox:checked").length < 1){
		console.log("less than 1");
		errors[1] = false;
		var boxes = jQuery("input:checkbox:checked");
		for (var i = 0; i < jQuery("input:checkbox:checked").length; i++) {
			checkInput("input[name='hear[]'][value='"+boxes[i].value+"']",errors[1]);
		}
	}else{
		errors[1] = true;
		var boxes = jQuery("input:checkbox");
		for (var i = 0; i < boxes.length; i++) { 
			checkInput("input[name='hear[]'][value='"+boxes[i].value+"']",errors[1]);
		}
	}

	if (jQuery("input[type='checkbox'][value='Other']").prop('checked'))
	{
		validatetext("input[name='otherHear']", 4, 13, "input[type='checkbox'][value='Other']");
	}

	errors[14] = checkCaptcha(); // doesnt matter which array index value its at I guess.
}

function validatetext(input, type, index, checkbox, textarea){
	var text = jQuery(input).val();
	if (typeof text == 'undefined' || text == ""){
		errors[index] = false;
		checkInput(input,errors[index]);
	} else {
		moreValidation(input, type, index, checkbox, textarea);
	}
}

function moreValidation(input, type, index, checkbox){
	jQuery("#outputDisplay").html('');
	if(type === 0){ // Check for Regular Text
		if (typeof jQuery(input).val() == 'undefined' || jQuery(input).val().length < 1 || /^\s+$/.test(jQuery(input).val())){
			errors[index] = false;
			checkInput(input,errors[index]);
		}else{
			errors[index] = true;
			checkInput(input,errors[index]);
		}
	}else if(type === 1){ // Check for Number
		var phone = /^\d{10}$/;
		if (typeof jQuery(input).val() == 'undefined' || !jQuery(input).val().match(/^[0-9]+$/)){
			errors[index] = false;
			checkInput(input,errors[index]);
		}else{
			errors[index] = true;
			checkInput(input,errors[index]);
		}
	} else if(type === 4){ // Check for Checkbox
			if (typeof jQuery(input).val() == 'undefined' || jQuery(input).val().length < 1 && jQuery(checkbox).prop('checked')){
			errors[index] = false;
			console.log(errors[index]);
			checkInput(input,errors[index]);
		}else{
			errors[index] = true;
			checkInput(input,errors[index]);
		}
	}
}

function checkInput(id, error){
	if (!error){
		jQuery(id).addClass("invalid_input");
		if(jQuery(id).parent().prev().prev().hasClass("nameAlert")){
			jQuery(id).parent().prev().prev().show();
		}
	}else{
		jQuery(id).removeClass("invalid_input");
		if(jQuery(id).parent().prev().prev().hasClass("nameAlert")){
			jQuery(id).parent().prev().prev().hide();
		}
	}
}

jQuery.fn.clearFormData = function() {
	return this.each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase();
		if (tag == 'form'){
			return jQuery(':input',this).clearFormData();
		}
		if (type == 'text' || type == 'password' || tag == 'textarea' && this.id != "g-recaptcha-response") {
			this.value = '';
			if (this.name === "otherHear" ){
				this.disabled = true;
			}
		} else if (type == 'checkbox' || type == 'radio') {
			this.checked = false;
		} else if (tag == 'select') {
			this.selectedIndex = 0;
		}
	});
};


//	Captcha Handling

var iTiCaptcha;

function prepCaptcha(){
 	iTiCaptcha = grecaptcha.render('captcha_goes_here', {
    'sitekey' : '6Lfl6RgTAAAAAPZGYnwvGOdvyzHy789-toLpbS-i',
    'theme' : 'light'
  });
	jQuery("#captcha_goes_here").click(function(){
		checkInput("#captcha_goes_here", true);
	});
}

function checkCaptcha(){
	var token = grecaptcha.getResponse(iTiCaptcha);
	if(token === "" || typeof token === "undefined"){
		checkInput("#captcha_goes_here", false);
		return false;
	}else{
		checkInput("#captcha_goes_here", true);
		return true;
	}
}