$(function() {

  AOS.init();

  var feature = $('.feature-item');
  feature.each(function(idx, li) {
      var featureThumb = $(this).find('.thumb').attr('src');
      $(this).find('.panel').css('background-image', 'url(' + featureThumb + ')');
  });

  var project = $('.portfolio-item');
  project.each(function(idx, li) {
      var projectThumb = $(this).find("img").attr('src');
      $(this).find("a").css('background-image', 'url(' + projectThumb + ')');
  });

  $('.close').on('click', function(e) {
    e.preventDefault();
    $(this).parent().removeClass('active');
    $(this).closest('.tab-content').siblings('#portfolio_tab').find('li.active').removeClass('active');
  });

  $('.form_contact').validate();

})();
