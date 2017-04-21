$(function() {

  var feature = $('.feature-item');
  feature.each(function(idx, li) {
      var featureThumb = $(this).find('img').attr('src');
      $(this).find('.panel').css('background-image', 'url(' + featureThumb + ')');
  });

  var project = $('.portfolio-item');
  project.each(function(idx, li) {
      var projectThumb = $(this).find("img").attr('src');
      $(this).css('background-image', 'url(' + projectThumb + ')');
  });

  // $('.feature-item > div').matchHeight();
  $('.portfolio-item > div').matchHeight();

})();
