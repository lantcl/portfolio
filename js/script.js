$(document).ready(function() {
	
	console.log("connected");
	// Check for click events on the navbar burger icon
	$(".navbar-burger").click(function() {
	    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
	    $(".navbar-burger").toggleClass("is-active");
	    $(".navbar-menu").toggleClass("is-active");
	    
    });

		$(".navbar-item").click(function() {
			$(".navbar-burger").toggleClass("is-active");
	    	$(".navbar-menu").toggleClass("is-active");
	    });

	// new fullpage('#fullpage', {
	// 	anchors:['#page-resume','#page-contact']
	// });

});