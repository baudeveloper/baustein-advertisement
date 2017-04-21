$(function() {

  var feature = $(".feature__box");
  feature.each(function(idx, li) {
      var featureThumb = $(this).find("img").attr('src');
      $(this).find("div").css('background-image', 'url(' + featureThumb + ')');
  });

  var project = $(".project__box");
  project.each(function(idx, li) {
      var projectThumb = $(this).find("img").attr('src');
      $(this).css('background-image', 'url(' + projectThumb + ')');
  });

  $('.feature__box > div').matchHeight();
  $('.project__box > div').matchHeight();

})();
