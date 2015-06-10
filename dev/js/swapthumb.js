jQuery(document).ready(function($) {
  $('body').on('click', '.spec-text .image-row a', function(event) {
    event.preventDefault();
    var current = $(event.currentTarget);
    var imgToCopy = current.children('img').first().clone();
    //target
    $('.spec-img').html(imgToCopy);
  });
});
