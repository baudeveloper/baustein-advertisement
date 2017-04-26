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

  $('#form_contact').validate({
    rules: {
      phone_number: {
        minlength: 12,
        maxlength: 12
      }
    },
    messages: {
      phone_number: {
        minlength: "Phone number should be exactly 10 characters, For e.g. 123-123-1234",
        maxlength: "Phone number should be exactly 10 characters, For e.g. 123-123-1234"
      }
    }
  });

  $('.filled').hide();
  $('#form_contact .fill').bind('keyup change',function() {
    var empty = $('.fill').map(function(index, el) {
      return !$(el).val().length ? el : null;
    }).get();
    var checker = $('.filled');
    !empty.length ? checker.show() : checker.hide();
  });

  if ( $("#form_contact").is( ".form-error" ) ) {
    $(this).find('.filled').show();
  }

})();
