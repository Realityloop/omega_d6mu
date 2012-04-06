Drupal.behaviors.nav_drupal = function(context) {  
  
  $('.block-menu ul li .more').click(function() {
    if ($(this).text() == 'More') {
      $(this).text('Less');
    }
    else {
      $(this).text('More');
    }
    $(this).parent('li').find('ul').each(function() {
      $(this).toggle();
      $(this).find('ul').toggle();
    });
  });
  
  if ($('.block-menu ul li .more').parent('li').hasClass('active-trail')) {
    $('.block-menu ul li .more').text('Less');
  }
}
