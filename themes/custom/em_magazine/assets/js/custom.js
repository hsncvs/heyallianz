(function ($) {
  var selector = $('.teaser__channel');
  
  selector.each(function(index, value) {
    var color = $(this).attr('data-color');

    if (color){
	  $(this).attr('style', 'background-color: ' + color.trim());
    }
  });

  var selector2 = $('.teaser--compact');

  selector2.each(function(index, value) {
    var image = $(this).attr('data-src');

    if (image){
          $(this).attr('style', 'background-image: url(' + image.trim() + '); background-size: cover; background-position: center center;');
    }
  });

  var selector3 = $(".field--name-field-channel a[href='/allianzda-hey']");

  selector3.each(function(index, value) {
    $(this).html("ALLIANZ'DA HEY!");
  });
  
  var detail = $('.layout-region--article-header .field--name-field-color').html();
  if (detail){
   	$('.layout-region--article-header .field--name-field-channel').attr('style', 'background-color: ' + detail);
	$('.teaser--compact .teaser__channel').attr('style', 'background-color: ' + detail);
  }
  
  var term = $('.page-heading-wrapper .field--name-field-color').html();
  if (term){
    	$('.page-heading-wrapper').attr('style', 'background-color: ' + term + '!important');
	$('.teaser--compact .teaser__channel').attr('style', 'background-color: ' + term);
  }
  
  $('.sidebar-close').click(function() {
	$('.offcanvas-sidebar-overlay').removeClass('active');
    $.sidr('close', 'offcanvas-sidebar');
  });
  
  if ($('.lang-tr .reading-time').length){
	$(document).ready(function(){
		new ReadingTime(225, '<i class="fa fa-clock"></i>', 'Dakika', 'Kelime', '1 Dakikadan Az');
 	});
  }

  if ($('.lang-en .reading-time').length){
        $(document).ready(function(){
                new ReadingTime(225, '<i class="fa fa-clock"></i>', 'Minute(s)', 'Kelime', 'Less than 1 minute');
        });
  }

  
  setTimeout(function(){
     if ($('.messages.messages--status').length){
	var message = $('.messages.messages--status').html();
	$('.messages.messages--status:first').remove();
	$('.article-content-wrapper > .container').prepend('<div class="messages messages--status" style="display: block!important;">' + message + '</div>');
     }
  }, 300);

  $('.user-image.text-center').html('<img src="/themes/custom/em_magazine/assets/images/default-avatar.png" width="50" alt="" />');  

  if ($(location).attr('pathname') != '/' && $(location).attr('pathname') != 'index.php'){
	$('.header .logo-dark').hide();
	$('.header .logo-light').show();
  }

  if (!$('.view.view-em-channels-and-tags.view-id-em_channels_and_tags.view-display-id-block_3').has('.view-content').length){
	$('.view.view-em-channels-and-tags.view-id-em_channels_and_tags.view-display-id-block_3').html('<center><img src="/themes/custom/em_magazine/assets/images/coming-soon.png" alt="" style="max-width: 100%;" /></center>');
  }
  
  $('.block-entity-fieldnodecomment h2.block-title').html('Yorumlar');
  $('.comment-turkce-yorum-form #edit-name').attr('value', '').attr('placeholder', 'İsim');
  $('.comment-turkce-yorum-form #edit-subject-0-value').attr('placeholder', 'Konu');
  $('.comment-turkce-yorum-form #edit-field-comment-body-0-value').attr('placeholder', 'Yorumunuz...');

  $('.comment-english-comment-form #edit-name').attr('value', '').attr('placeholder', 'Name');
  $('.comment-english-comment-form #edit-subject-0-value').attr('placeholder', 'Subject');


  $(window).on('hashchange', function(e){
    if (location.href.indexOf('#gpdr-more') > 0){
      $('.gpdr-more').hide();
    }
  });
})(jQuery);
