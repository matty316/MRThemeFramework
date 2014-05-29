jQuery( function ($) {

  

  $(window).scroll(function() {

  	var yPos = ( $(window).scrollTop()  );
  	if (yPos > 200) {
  		$('nav').slideDown();
  	} else {
  		$('nav').slideUp();
  	}
  });

  $('.search-icon').click(function (event) {
    event.preventDefault();
    $(".search-input").animate({width:'toggle'},400);
  })


})
