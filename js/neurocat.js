jQuery(window).load(function($) {
	// Animate loader off screen
	jQuery(".loader-wrap").fadeOut("slow");;
});
jQuery(document).ready(function($){
	$(document).on('click', '.featured-service-box a[href^="#"]', function(e) {
		var id = $(this).attr('href');
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}
		e.preventDefault();
		var pos = $id.offset().top - 150;
		$('body, html').animate({scrollTop: pos});
	});

	$('.service-side-nav-btn').click(function(){
		$('.service-side-nav-menu').addClass('showing-sidebar');
	});
	$('.service-side-nav-close').click(function(){
		$('.service-side-nav-menu').removeClass('showing-sidebar');
	});
	$(document).on('click', function (e) {
		if ($(e.target).closest('.service-side-nav-menu, .service-side-nav-btn').length === 0) {
			$('.service-side-nav-menu').removeClass('showing-sidebar');
		}
	});
	$('.service-side-nav-menu-title').click(function(){
		$('.service-side-nav-menu').removeClass('showing-sidebar');
	});
	
	$(document).on('click', '.service-side-nav-menu ul li a[href^="#"]', function(e) {
		var id = $(this).attr('href');
		$('.service-side-nav-menu ul li a').removeClass('active');
		$(this).addClass('active');
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}
		e.preventDefault();
		var pos = $id.offset().top - 150;
		$('body, html').animate({scrollTop: pos});
	});
	
	// news page
		$('.all-news .last-news-block:nth-child(1)').addClass('wow fadeInLeft');
		$('.all-news .last-news-block:nth-child(2)').addClass('wow fadeInRight');
		$('.all-news .last-news-block:nth-child(3)').addClass('wow fadeInUp');

		if ($(window).width() <= 767){
			$('.process-block li').removeAttr('data-wow-delay');
		}

});

;(function($){
	var wow = new WOW(
        {
          boxClass:     'wow',
          animateClass: 'animated',
          offset:       0,
          mobile:       true,
          live:         true,
          callback:     function(box) {
          },
          scrollContainer: null
        }
      );
      wow.init();
}(jQuery));
