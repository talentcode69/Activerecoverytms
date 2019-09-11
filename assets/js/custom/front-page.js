function front_page_form_select_value(){
	if(jQuery("#front-page-form-select").val() === "Other"){
		return jQuery("#front-page-form-textarea").val();
	} else {
		return jQuery("#front-page-form-select").val();
	}
}

jQuery(document).ready(function(){
	if(jQuery('#video-page .video-thumbnail iframe').length > 0) {
		var makeVideoSize = function () {
			var video = jQuery('#video-page .video-thumbnail iframe')
			var rate = 315 / 560
			var width = video.width()
			var height = width * rate

			video.css('height', height + 'px')
		}

		makeVideoSize()
		jQuery(window).resize(function(){
			makeVideoSize()
		})
	}

	if(jQuery('#doctor-page .journal-video iframe').length > 0) {
		var makeJournalVideoSize = function () {
			var video = jQuery('#doctor-page .journal-video iframe')
			var rate = 315 / 560
			var width = video.width()
			var height = width * rate

			video.css('height', height + 'px')
		}

		makeJournalVideoSize()
		jQuery(window).resize(function(){
			makeJournalVideoSize()
		})
	}

	try {
	   jQuery("#front-page-form-gacid").val(document.cookie.match(/_ga=(.+?);/)[1].split('.').slice(-2).join("."));
	} catch(err) {
	   console.log(err);
	}

	function check_inputs_prevent_enter(event){
		var name = jQuery("[name=front-page-form-your-name]").val();
		var phone = jQuery("[name=front-page-form-your-phone]").val();
		var email = jQuery("[name=front-page-form-your-email]").val();

		if((name === "" && event.screenX === 0) || (phone === "" && event.screenX === 0)){
			dataLayer.push({
				'event': 'formSubmission',
				'formSubmissionID': 'front-page-form',
				'validation': false
			});

			return false;
		} else if((phone !== "" || name !== "") && email) {
			return true;
		}
	}

	if (jQuery('#front-page-form-submission').length > 0) {
		document.getElementById("front-page-form-submission").addEventListener("click", function(e){
			e.preventDefault();
			if(!check_inputs_prevent_enter(e)){
				return false;
			}

			if (jQuery("[name=front-page-contact_me_by_fax_only]").val() != ""){
				jQuery("#front-page-form-submission").html("Please try again!");

				dataLayer.push({
					'event': 'formSubmission',
					'formSubmissionID': 'front-page-form',
					'validation': false
				});
			}
			// ensure required parameters exist
			else if(jQuery("[name=front-page-form-your-email]").val().trim() !== "" && jQuery("[name=front-page-form-your-email]").val().includes("@") ) {

				var generate_date = new Date();
				var month = "";

				if((generate_date.getMonth() + 1) < 10){
					month = generate_date.getFullYear().toString() + "0" + (generate_date.getMonth() + 1)
				} else {
					month = generate_date.getFullYear().toString() + (generate_date.getMonth() + 1)
				}

				var data = {
					Name: jQuery("[name=front-page-form-your-name]").val(),
					Email: jQuery("[name=front-page-form-your-email]").val(),
					Phone: jQuery("[name=front-page-form-your-phone]").val(),
					Month: month,
					Time: generate_date.toLocaleTimeString(),
					Location: document.URL,
					"Google Analytics": jQuery("#front-page-form-gacid").val(),
					"UTM Source" : grab_utm_value_by_parameter("utm_source"),
					"UTM Medium" : grab_utm_value_by_parameter("utm_medium"),
					"UTM Campaign" : grab_utm_value_by_parameter("utm_campaign"),
					"UTM Term" : grab_utm_value_by_parameter("utm_term"),
					"UTM Content" : grab_utm_value_by_parameter("utm_content"),
					"Form Name": "Front Page",
					Method: "HEADER",
					Medication: jQuery("#front-page-form-prescription").val(),
					"Additional Information": jQuery("#front-page-form-textarea").val(),
					Disposition: "",
					Group: "",
					Status: "0 RECEIVED",
					action: "front_page_form"
				}

				jQuery.post(window.location.origin + "/wp-admin/admin-ajax.php", data, function(response){
					if(response.slice(0,4) === "sent"){
						jQuery(".front-page-form-button").attr("disabled", false);
						jQuery("#front-page-form-submission").html("Success!");
						jQuery("#front-page-form-submission").attr("disabled", "disabled");
						jQuery("#front-page-form-submission").addClass("disabled-button-coloring");
						jQuery("#formSent").show(100);

						dataLayer.push({
							'event': 'formSubmission',
							'formSubmissionID': 'front-page-form',
							'validation': true
						});

						jQuery("[name=front-page-form-your-name]").val('');
						jQuery("[name=front-page-form-your-email]").val('');
						jQuery("[name=front-page-form-your-phone]").val('');

						var google_url = "https://script.google.com/macros/s/AKfycbybaIWGWqobIdE0swHzCxFLACUJ2ONdXpl_dhTUkdxwRCdsh1I/exec";

						jQuery.post(google_url, data, function(response){

						})
					} else {
						jQuery("#front-page-form-submission").html("Please try again!");
						dataLayer.push({
							'event': 'formSubmission',
							'formSubmissionID': 'front-page-form',
							'validation': false
						});
					}
				});
			} else {
				jQuery(".front-page-form-button").attr("disabled", false);
				jQuery("#front-page-form-submission").html("Please try again!");
				dataLayer.push({
					'event': 'formSubmission',
					'formSubmissionID': 'front-page-form',
					'validation': false
				});
			}
		})
	}
	jQuery(".close-popup").click(function(){
		jQuery("#formSent").hide(100);
	})
});


jQuery(function($) {
$('.navbar .dropdown').hover(function() {
$(this).find('.dropdown-menu').first().stop(true, true).slideDown();

}, function() {
$(this).find('.dropdown-menu').first().stop(true, true).slideUp();

});

$('.navbar .dropdown > a').click(function(){
location.href = this.href;
});

});
