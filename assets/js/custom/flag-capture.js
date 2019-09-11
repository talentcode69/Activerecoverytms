// grab utm elements, and set cookie
if(document.URL.includes("?")){
		var utm_el = document.URL.split("?")[1].split("&");

	for(var loop_url_el = 0; loop_url_el < utm_el.length; loop_url_el++){
		var check_utm = utm_el[loop_url_el].split("=");

	  if(check_utm[0].includes("utm_")){
	    var set_utm_cookie = check_utm.join("=");
	    document.cookie = set_utm_cookie + ";path=/";
	  }

	}
}

// grab utm cookie, and pass cookie
function grab_utm_value_by_parameter(utm_parameter){
  var cookies = document.cookie.split(";");

  for(var loop_cookies = 0; loop_cookies < cookies.length; loop_cookies++){

    if(cookies[loop_cookies].split("=")[0].trim() == utm_parameter){
      return cookies[loop_cookies].split("=")[1];
    }

  }
}
