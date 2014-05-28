jQuery( function ($) {

  $('#menu-button').click(slide);

  function slide() {
    $('#nav').slideToggle();
  }

})

new UISearch( document.getElementById( 'sb-search' ) );
