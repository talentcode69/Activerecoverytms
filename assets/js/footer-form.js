function footer_professional_form_select_value(){
	if(jQuery("#footer-professional-form-select").val() === "Other"){
		return jQuery("#footer-professional-form-textarea").val();
	} else {
		return jQuery("#footer-professional-form-select").val();
	}
}



jQuery(document).ready(function(){
	try {
		jQuery("#footer-professional-form-form-gacid").val(document.cookie.match(/_ga=(.+?);/)[1].split('.').slice(-2).join("."));
	} catch(err) {
	   console.log(err);
	}

	// shows/hides textarea when "other" is selected
	jQuery("#footer-professional-form-select").change(function(){
			if(jQuery("#footer-professional-form-select").val() == "Other"){
				jQuery("#footer-professional-form-textarea").removeClass(" footer-professional-form-textarea-display");
			} else {
				jQuery("#footer-professional-form-textarea").addClass(" footer-professional-form-textarea-display");
			}
		});

		function check_inputs_prevent_enter_footer(event){
		var name = jQuery("[name=footer-professional-form-your-name]").val();
		var phone = jQuery("[name=footer-professional-form-your-phone]").val();

		if(name === "" && event.screenX === 0){
			dataLayer.push({
				'event': 'formSubmission',
				'formSubmissionID': 'front-page-form',
				'validation': false
			});

			return false;
		} else if(phone === "" && event.screenX === 0){
			dataLayer.push({
				'event': 'formSubmission',
				'formSubmissionID': 'front-page-form',
				'validation': false
			});

			return false;
		} else if(phone !== "" && name !== "") {
			return true;
		}
	}

	if (jQuery('#footer-professional-form-submission').length > 0) {
		document.getElementById("footer-professional-form-submission").addEventListener("click", function(e){
			e.preventDefault();
			jQuery(".footer-professional-form-button").attr("disabled", true);
			if(!check_inputs_prevent_enter_footer(e)){
				return false;
			}
			// spam filter
			if (jQuery("[name=footer-professional-contact_me_by_fax_only]").val() != "" ){
				dataLayer.push({
					'event': 'formSubmission',
					'formSubmissionID': 'footer-professional-form',
					'validation': false
				});
				jQuery("#footer-professional-form-submission").html("Please try again!");
			}
			// check required fields are filled out
			else if( jQuery("[name=footer-professional-form-your-name]").val() === "" || jQuery("[name=footer-professional-form-your-phone]").val() === ""){
				dataLayer.push({
					'event': 'formSubmission',
					'formSubmissionID': 'footer-professional-form',
					'validation': false
				});
				jQuery("#footer-professional-form-submission").html("Please try again!");
			}

			// ensure required fields have proper data
			else if(
				jQuery("[name=footer-professional-form-your-phone]").val().match(/\d/g).join("").length > 9 &&
				jQuery("[name=footer-professional-form-your-name]").val() !== ""
			) {

					if(jQuery("[name=footer-professional-form-your-name]").val().trim() === ""){
						dataLayer.push({
							'event': 'formSubmission',
							'formSubmissionID': 'footer-professional-form',
							'validation': false
						});
						jQuery("#footer-professional-form-submission").html("Please try again!");
						return;
					}


				if(jQuery("[name=footer-professional-form-your-email]").val() !== "" && !jQuery("[name=footer-professional-form-your-email]").val().includes("@")){
					jQuery("#footer-professional-form-submission").html("Please try again!");
					dataLayer.push({
						'event': 'formSubmission',
						'formSubmissionID': 'footer-professional-form',
						'validation': false
					});
					return;
				}

				var generate_date = new Date()
				var month = "";

				if((generate_date.getMonth() + 1) < 10){
					month = generate_date.getFullYear().toString() + "0" + (generate_date.getMonth() + 1)
				} else {
					month = generate_date.getFullYear().toString() + (generate_date.getMonth() + 1)
				}

				var data = {
					Name: jQuery("[name=footer-professional-form-your-name]").val(),
					Email: jQuery("[name=footer-professional-form-your-email]").val(),
					Phone: jQuery("[name=footer-professional-form-your-phone]").val(),
					Month: month,
					Psychiatrist : jQuery("[name=footer-seeing-psychiatrist]:checked").val(),
					Medication : jQuery("[name=footer-medication]:checked").val(),
					Time: generate_date.toLocaleTimeString(),
					Location: document.URL,
					"UTM Source" : grab_utm_value_by_parameter("utm_source"),
					"UTM Medium" : grab_utm_value_by_parameter("utm_medium"),
					"UTM Campaign" : grab_utm_value_by_parameter("utm_campaign"),
					"UTM Term" : grab_utm_value_by_parameter("utm_term"),
					"UTM Content" : grab_utm_value_by_parameter("utm_content"),
					"Google Analytics": jQuery("#footer-professional-form-form-gacid").val(),
					"Form Name": "FOOTER",
					Method: "FOOTER",
					Topic: jQuery("#footer-professional-form-select").val().trim(),
					"Additional Information": jQuery("#footer-professional-form-textarea").val(),
					Disposition: "",
					Group: "",
					Status: "0 RECEIVED",
					action: "footer_professional_form"
				}

				jQuery.post(window.location.origin + "/wp-admin/admin-ajax.php", data, function(response){
					if(response === "sent"){
						jQuery("#footer-professional-form-submission").html("Success!");
						jQuery("#footer-professional-form-submission").attr("disabled", "disabled");
						jQuery("#footer-professional-form-submission").addClass("disabled-button-coloring");
						jQuery("#formSent").show(100);
						jQuery("[name=footer-professional-form-your-name]").val('');
						jQuery("[name=footer-professional-form-your-email]").val('');
						jQuery("[name=footer-professional-form-your-phone]").val('');

						dataLayer.push({
							'event': 'formSubmission',
							'formSubmissionID': 'footer-professional-form',
							'validation': true
						});

						var google_url = "https://script.google.com/macros/s/AKfycbybaIWGWqobIdE0swHzCxFLACUJ2ONdXpl_dhTUkdxwRCdsh1I/exec";

						jQuery.post(google_url, data, function(response){

						})
					} else {
						jQuery("#footer-professional-form-submission").html("Please try again!");
						dataLayer.push({
							'event': 'formSubmission',
							'formSubmissionID': 'footer-professional-form',
							'validation': false
						});
					}
				});
			} else {
				dataLayer.push({
					'event': 'formSubmission',
					'formSubmissionID': 'footer-professional-form',
					'validation': false
				});
				jQuery("#footer-professional-form-submission").html("Please try again!");
			}
		})
	}
	jQuery(".close-popup").click(function(){
		jQuery("#formSent").hide(100);
	})
});
