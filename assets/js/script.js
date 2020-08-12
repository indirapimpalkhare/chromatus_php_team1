//Header Navbar Sticky top Code
var height = $('#header').height();
$(window).scroll(function() {
	if ($(this).scrollTop() > height ) {
		$('.navbar-container').addClass('fixed-scroll');
	} else {
		// statement
		$('.navbar-container').removeClass('fixed-scroll');
	}
});


/*Header Register btn*/

$('#header-btn').html('<i class="fa fa-sign-in">&nbsp;&nbsp;</i>Register')
$(window).resize(function() {
  // This will execute whenever the window is resized
  $('#header-btn').html('<i class="fa fa-sign-in">&nbsp;&nbsp;</i>Register');
  var width = $(window).width(); // New width
  
  if (width < 992){
  	$('#header-btn').html('<i class="fa fa-sign-in"></i>');
  }
  
  else {
  	$('#header-btn').html('<i class="fa fa-sign-in">&nbsp;&nbsp;</i>Register');
  }
});
/*header register btn ends*/
//Header Ends
