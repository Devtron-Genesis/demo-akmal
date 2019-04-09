(function($){
  $(document).ready(function() {
    // $('.topnav').find('.container').removeClass('container');
    $('.menu-button-style').parents('.menu-item').css('background-color', 'white');
    // custom tabs
    // $('.view-display-id-block_1').find('views-row').addClass('custom-parent-style');
    //   $('#block-views-block-category-by-text-block-1').attr('id', 'example');
    //   $('#example').addClass('tabs-container');
    //   $('#example > div').prepend('<p class="tabs">' +
    //       '<a href="#Tab1" id="TabTitle1">Tab one</a>' +
    //       '<a href="#Tab2" id="TabTitle12">Tab one</a>' +
    //       '<a href="#Tab3" id="TabTitle13">Tab one</a>' +
    //       '</p>' +
    //       '<ul class="tabs-content">' +
    //           '<li id="Tab1" class="tab-content"><p></p></li>' +
    //           '<li id="Tab2" class="tab-content"><p>Content of 2nd tab.</p></li>' +
    //           '<li id="Tab3" class="tab-content"><p>Content of 3rd tab.</p></li>' +
    //       '</ul>'
    //   );
    //   $('.views-field-field-category-new').find('.field-content').each(function(){
    //     if($(this).text() == 'The Basics (1)') {
    //         // $(this).parents('.custom-parent-style').hide();
    //       var tab1 = $(this).closest('.abc').children(':first');
    //       $('#Tab1 p').html(tab1);
    //     }
    //     });
    // $("#example").minimalTabs();
    $('.view-filters').addClass('col-md-12');
    $('.form-radios .form-radios div:nth-child(2) label').prepend('<i class="fa fa-tv"></i><br><br>');
    $('.form-radios .form-radios div:nth-child(3) label').prepend('<i class="fa fa-map"></i><br><br>');
    $('.form-radios .form-radios div:nth-child(4) label').prepend('<i class="fa fa-newspaper-o"></i><br><br>');
    $('.form-radios .form-radios div:nth-child(5) label').prepend('<i class="fa fa-dropbox"></i><br><br>');
    $('.form-radios .form-radios div:nth-child(6) label').prepend('<i class="fa fa-users"></i><br><br>');
    // menu icon
    $('.menu-base-theme li a').find('.sub-arrow').remove();
    $('.add-chevrown-down-icon .has-submenu').append('<i class="fa fa-chevron-down"></i>');
    // menu scroll
    $(document).on('scroll', function(){
      var scrollDistance= $(this).scrollTop();
      if (scrollDistance > 1) {
        $('#block-topmenu').hide();
        $('.navbar.topnav').removeClass('scrollUpHeight');
        $('.navbar.topnav').addClass('scrollDownHeight');
      } else if (scrollDistance < 1) {
        $('#block-topmenu').show();
        $('.navbar.topnav').removeClass('scrollDownHeight');
        $('.navbar.topnav').addClass('scrollUpHeight');
      }
    });
 }); /* End of the document.ready */
//  ajax completing
$( document ).ajaxComplete(function() {
  $('.view-filters').addClass('col-md-12');
  $('.form-radios .form-radios div:nth-child(2) label').prepend('<i class="fa fa-tv"></i><br><br>');
  $('.form-radios .form-radios div:nth-child(3) label').prepend('<i class="fa fa-map"></i><br><br>');
  $('.form-radios .form-radios div:nth-child(4) label').prepend('<i class="fa fa-newspaper-o"></i><br><br>');
  $('.form-radios .form-radios div:nth-child(5) label').prepend('<i class="fa fa-dropbox"></i><br><br>');
  $('.form-radios .form-radios div:nth-child(6) label').prepend('<i class="fa fa-users"></i><br><br>');
});
})(jQuery);
