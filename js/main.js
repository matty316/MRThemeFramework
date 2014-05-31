jQuery( function ($) {



  $(window).scroll(function() {

  	var yPos = ( $(window).scrollTop()  );
  	if (yPos > 300) {
  		$('nav').addClass('transparent-background');
  	} else {
  		$('nav').removeClass('transparent-background');
  	}
  });

  $('.search-icon').click(function (event) {
    event.preventDefault();
    $(".search-input").animate({width:'toggle'},400);
  })
  var left = true;
  $('#menu-button').click(function () {
    $('#side-nav').animate({width:'toggle'},400);
    left = animate(left);


  })

  function animate(left) {
    if (left){
      $('#menu-button').animate({left:'+=300px'});
      left = false;
    } else {
      $('#menu-button').animate({left:'-=300px'});
      left = true;
    }
    return left;
  }

})
