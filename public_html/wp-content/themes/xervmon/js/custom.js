jQuery(document).ready(function($){
	
	/* ---------------------------------------------------------------------------------------------------
		Responsive Vids
	--------------------------------------------------------------------------------------------------- */
	$("body").fitVids();

	/* ---------------------------------------------------------------------------------------------------
		Navigation
	--------------------------------------------------------------------------------------------------- */
	$('ul.sf-menu').superfish({
		autoArrows	: false,
		animation	: { opacity:'show' },
		speed		: 'fast',
		disableHI	: true,
		delay		: 100
	}); 

	/* ---------------------------------------------------------------------------------------------------
		Navigation - Submenu
	--------------------------------------------------------------------------------------------------- */
	$('ul.sf-menu li').each(function(){
		if($(this).find('ul').length){
			$(this).addClass('has-submenu').find('.nav-link').append('<span class="nav-submenu-arrow"></span>');
		}else{
			$(this).addClass('no-submenu');
		}
	});
	
	/* ---------------------------------------------------------------------------------------------------
		Elements - Tabs
	--------------------------------------------------------------------------------------------------- */
	$('.tabs-container .tab-content:first-child').siblings('.tab-content').hide();
	$('.tabs-nav li:first-child').addClass('active');
	
	$('.tabs-container .tabs-nav a').live('click', function(e){
		
		e.preventDefault();
		
		$(this).parents('li').addClass('active').siblings('li.active').removeClass('active');
		var tab_id = $(this).parents('li').index();
		$(this).parents('.tabs-container').find('.tab-content').eq(tab_id).show().siblings('.tab-content').hide();
	
	});

	$('.tabs-container').each(function(){
		var tab_title;
		var tab_id;
		$(this).find('.tabs-nav li').each(function(){
			tab_title = $(this).text();
			tab_id = $(this).index();
			$(this).parents('.tabs-container').find('.tab-content').eq(tab_id).	prepend('<span class="tab-mobile-title">' + tab_title +  '</span>');
		});
	});
	
	/* ---------------------------------------------------------------------------------------------------
		Elements - Content Box - Toggle
	--------------------------------------------------------------------------------------------------- */
	$('.content-box-toggle').each(function(){
		
		var content_box = $(this).parents('.content-box');
		var content_box_content = content_box.find('.content-box-content');
		
		content_box_content.height(content_box_content.height());
		
		if(content_box.hasClass('content-box-toggle-state-closed')){
			content_box.find('.content-box-content').hide();
		}else{
			content_box.addClass('content-box-toggle-state-open');
		}		
		
	});
	
	$('.content-box-toggle-state-open .content-box-title').live('click', function(e){
		
		e.preventDefault();
		
		var content_box = $(this).parents('.content-box');
		content_box.find('.content-box-content').slideUp(200);
		
		content_box.removeClass('content-box-toggle-state-open').addClass('content-box-toggle-state-closed');
		
	});
	
	$('.content-box-toggle-state-closed .content-box-title').live('click', function(e){
		
		e.preventDefault();
		
		var content_box = $(this).parents('.content-box');
		content_box.find('.content-box-content').slideDown(200);
		
		if($(this).parents('.accordion').length){
			content_box.siblings('.content-box.content-box-toggle-state-open').find('.content-box-toggle').click();
		}
		
		content_box.removeClass('content-box-toggle-state-closed').addClass('content-box-toggle-state-open');
		
	});
	
	/* ---------------------------------------------------------------------------------------------------
		Elements - Testimonials
	--------------------------------------------------------------------------------------------------- */
	
	$('.testimonials-scroller-container').each(function(){
		
		var testimonial_autoplay = $(this).data('autoplay');
		
		if(testimonial_autoplay == '0'){ testimonial_autoplay_state = false; }else{ testimonial_autoplay_state = true; }

		/* Init slider */
		$(this).find('.flexslider').flexslider({
			animation: 'fade',
			slideshow: testimonial_autoplay_state,
			slideshowSpeed: testimonial_autoplay,
			controlNav: false
		});
		
	});
	
	$('.testimonials-scroller-prev').on('click', function(e){
		
		e.preventDefault(); $(this).closest('.testimonials-scroller-container').find('.flex-prev').click();
		
	});
	
	$('.testimonials-scroller-next').on('click', function(e){
		
		e.preventDefault(); $(this).closest('.testimonials-scroller-container').find('.flex-next').click();
		
	});
	
	/* Flexslider */
	
	$('.slider-container').mouseenter(function(){
		
		/* Autoplay stop */
		var autoplay = $(this).data('autoplay');
		var autoplaybar = $(this).data('autoplaybar');
		var autoplay_state = autoplay != false ? true : false;
		if(autoplaybar == true && autoplay_state == true){ var slider_loader = $(this).find('.slider-loader-inner'); slider_loader.stop().height(0); }

		/* Arrows show */
		$(this).find('.slider-prev').css({ left : 0 })
		$(this).find('.slider-next').css({ right : 0 })

	}).mouseleave(function(){

		/* Autoplay start */
		var autoplay = $(this).data('autoplay');
		var autoplaybar = $(this).data('autoplaybar');
		var autoplay_state = autoplay != false ? true : false;
		if(autoplaybar == true && autoplay_state == true){ var slider_loader = $(this).find('.slider-loader-inner'); slider_loader.height(0).stop().animate({ height : '100%' }, autoplay); }

		/* Arrows show */
		$(this).find('.slider-prev').css({ left : '-40px' })
		$(this).find('.slider-next').css({ right : '-40px' })

	});
	
	/* Previous slide */
	$('.slider-container .slider-prev').on('click', function(e){ e.preventDefault(); $(this).closest('.slider-container').find('.flex-prev').click(); });
	
	/* Next slide */
	$('.slider-container .slider-next').on('click', function(e){ e.preventDefault(); $(this).closest('.slider-container').find('.flex-next').click(); });
	
	/* ---------------------------------------------------------------------------------------------------
		Carousel - Flexslider
	--------------------------------------------------------------------------------------------------- */
	/*
		vars
			- autoplay (slideshowSpeed as int and slideshow to true)
			- loop (animationLoop true|false)
			- animation (animation fade|slide)
	*/
	
	$('.carousel-container').each(function(){
		
		/* Default values */
		var def = {
			autoplay: false,
			loop: false,
			animation: 'slide',
			arrows: true,
			items: 4
		};
		
		/* User values */
		var usr = {
			autoplay: $(this).data('autoplay'),
			loop: $(this).data('loop'),
			animation: $(this).data('animation'),
			arrows: $(this).data('arrows'),
			items: $(this).data('items')
		};
		
		/* Merge values */
		var opts = $.extend({}, def, usr);
		
		/* Other vars */
		var autoplay_state = opts.autoplay != false ? true : false;
		
		/* Arrows */
		if(opts.arrows == false){
			$(this).addClass('carousel-arrows-disabled');
		}
		
		/* Init slider */
		$(this).find('.flexslider').flexslider({
			animation: opts.animation,
			slideshow: autoplay_state,
			slideshowSpeed: opts.autoplay,
			controlNav: false,
			animationLoop: opts.loop,
			itemWidth : 920,
			itemMargin : 0,
			minItems : opts.items,
			maxItems : opts.items
		});
		
		if($(this).find('.slides li').length <= opts.items){
			$(this).find('.carousel-actions').hide();
		}

	});
	
	/* Previous slide */
	$('.carousel-container .carousel-prev').on('click', function(e){ e.preventDefault(); $(this).closest('.carousel-container').find('.flex-prev').click(); });
	
	/* Next slide */
	$('.carousel-container .carousel-next').on('click', function(e){ e.preventDefault(); $(this).closest('.carousel-container').find('.flex-next').click(); });	

	/* ---------------------------------------------------------------------------------------------------
		Portfolio - Hover
	--------------------------------------------------------------------------------------------------- */
	$('.portfolio-post-entry .portfolio-post-images .portfolio-post-hover').live('mouseenter', function(){
		var bg_position = $(this).width() / 2 - 24;
		bg_position = bg_position + 'px center';

		if($(this).hasClass('portfolio-post-hover-image')){
			$(this).closest('.portfolio-post-images').find('ul.slides').find('img').stop().animate({ opacity : 0.15 }, 300);
		}else{ 
			$(this).siblings('a').find('img').stop().animate({ opacity : 0.15 }, 300);
		}
		$(this).stop().animate({ opacity : 1 }, 300).css('background-position', bg_position);
	}).live('mouseleave', function(){
		var bg_position = $(this).width();
		bg_position = bg_position + 'px center';

		if($(this).hasClass('portfolio-post-hover-image')){
			$(this).closest('.portfolio-post-images').find('ul.slides').find('img').stop().animate({ opacity : 1 }, 300);
		}else{
			$(this).siblings('a').find('img').stop().animate({ opacity : 1 }, 300);
		}
		$(this).stop().css( 'background-position', bg_position ).animate({ opacity : 0 }, 300, function(){
			$(this).css({ 'opacity' : 0, 'background-position' : '-50px center'});
		});
	});
	
	/* ---------------------------------------------------------------------------------------------------
		Portfolio Fancy - Hover
	--------------------------------------------------------------------------------------------------- */
	$('html.backgroundsize .portfolio-listing-fancy .portfolio-post-entry').live('mouseenter', function(){
		$(this).find('.portfolio-fancy-images-inner').stop().css({ 'background-size' : '100px', 'opacity' : 0});
		$(this).find('.portfolio-fancy-info').stop().css({ 'opacity' : '1'});
	}).live('mouseleave', function(){
		var width = $(this).width();
		$(this).find('.portfolio-fancy-images-inner').stop().css({ 'background-size' : width,  'opacity' : 1});
		$(this).find('.portfolio-fancy-info').stop().css({ 'opacity' : '0'});
	});

	/* ---------------------------------------------------------------------------------------------------
		Portfolio Fancy - No BG image size 
	--------------------------------------------------------------------------------------------------- */
	$('html.no-backgroundsize .portfolio-listing-fancy .portfolio-post-entry').live('mouseenter', function(){
		$(this).find('.portfolio-fancy-info').stop().animate({ 'opacity' : 1}, 300 );
	}).live('mouseleave', function(){
		$(this).find('.portfolio-fancy-info').stop().animate({ 'opacity' : 0}, 300 );
	});

	/* ---------------------------------------------------------------------------------------------------
		Portfolio Fancy - Init BG
	--------------------------------------------------------------------------------------------------- */
	$('.portfolio-fancy-images').each(function(){

		var width = $(this).width();
		var image_src = $(this).find('.portfolio-fancy-images-inner').data('image-src');
		$(this).find('.portfolio-fancy-images-inner').css({ 'background-image' : 'url("' + image_src + '")', 'background-size' : width });

	});
	
	/* ---------------------------------------------------------------------------------------------------
		Portfolio - Lightbox init
	--------------------------------------------------------------------------------------------------- */
	$('.portfolio-post-entry .portfolio-post-images .portfolio-post-hover-image, .portfolio-post-entry .portfolio-post-images .portfolio-post-hover-video').live('click', function(){
		if($(this).hasClass('portfolio-post-hover-image')){
			var flex_active = $(this).closest('.portfolio-post-images').find('ul.slides li.flex-active-slide a');
			var flex_active_alt = $(this).closest('.portfolio-post-images').find('ul.slides li.flex-active a');
			if(flex_active.length){
				flex_active.click();
			}else{
				flex_active_alt.click();
			}
		}else{ 
			$(this).siblings('a').click();
		}
	});
	
	/* ---------------------------------------------------------------------------------------------------
		Portfolio - Flexslider
	--------------------------------------------------------------------------------------------------- */
	window.quicksand_data = $('.portfolio-quicksand').clone();
	$('.portfolio-post-entry .flexslider').flexslider({
		animation: 'slide',
		slideshow: false,
		controlNav: false,
		animationLoop: false,
		start: function(){
			window.quicksand_data = $('.portfolio-quicksand').clone();
		}
	});

	/* ---------------------------------------------------------------------------------------------------
		Elements - Flickr
	--------------------------------------------------------------------------------------------------- */
	
	var flickr_profile;
	var flickr_amount;

	$('.flickr-stream').each(function(){
		
		flickr_profile = $(this).find('input.flickr-profile').val();
		flickr_amount = $(this).find('input.flickr-amount').val();
		
		$(this).html('');
		
		$(this).jflickrfeed({
			limit: flickr_amount,
			qstrings: { id: flickr_profile },
			itemTemplate: 
			'<li class="flickr-stream-item">' +
				'<a href="{{image_b}}" rel="prettyPhoto"><img src="{{image_s}}" alt="{{title}}" title="{{title}}" /></a>' +
			'</li>'
		},function(data) {
			$(this).find('a').prettyPhoto({
				social_tools : ''
			});
			
			$('.flickr-stream-item').mouseenter(function(){
				$(this).siblings('.flickr-stream-item').stop().animate({ opacity : 0.6 }, 500);
			}).mouseleave(function(){
				$(this).siblings('.flickr-stream-item').stop().animate({ opacity : 1 }, 500);
			});
			
		});

	});
	
	/* ---------------------------------------------------------------------------------------------------
		Elements - Twitter
	--------------------------------------------------------------------------------------------------- */

	var twitter_profile;
	var twitter_amount;

	$('.recent-tweets').each(function(){
		
		twitter_profile = $(this).find('input.twitter-profile').val();
		twitter_amount = $(this).find('input.twitter-amount').val();
		
		$(this).tweet({
			username: twitter_profile,
			join_text: 'auto',
			avatar_size: 32,
			count: twitter_amount,
			auto_join_text_default: '', 
			auto_join_text_ed: '',
			auto_join_text_ing: '',
			auto_join_text_reply: '',
			auto_join_text_url: '',
			loading_text: 'Loading tweets...',
			template: '{time}{join}{text}'
		});
		
	});
	
	/* ---------------------------------------------------------------------------------------------------
		Prettyphoto
	--------------------------------------------------------------------------------------------------- */
	$('a[rel^="prettyPhoto"]').prettyPhoto({
		social_tools : ''
	});
	
	/* --------------------------------------------------
		Portfolio Listing - Filter - Quicksand
	-------------------------------------------------- */
	$('#portfolio-filter a').click(function(e) {
		
		e.preventDefault();  

		$('#portfolio-filter a.active').removeClass('active');
		$(this).addClass('active');
		
		if($('body').hasClass('sidebar-none')){
			var full_width = 1;
		}else{
			var full_width = 0.67;
		}
		
		if($('.portfolio-quicksand article').hasClass('one-fourth')){
			var item_width = 0.25;
		}else if($('.portfolio-quicksand article').hasClass('one-third')){
			var item_width = 0.33;
		}else if($('.portfolio-quicksand article').hasClass('one-half')){
			var item_width = 0.5;
		}else{
			var item_width = full_width;
		}
		
		var item_last = Math.round(full_width/item_width);
		var item_first = item_last + 1;
		
		var filter_cat = $(this).data('filter-cat');
		
		if(filter_cat == 'all'){
			var filtered_data = quicksand_data.find('article');
		}else{
			var data_new = quicksand_data.clone();
			$(data_new).find('article').removeClass('last clear').not('[data-cat~="' + filter_cat + '"]').remove();
			$(data_new).find('article:nth-child(' + item_last + 'n)').addClass('last');
			$(data_new).find('article:nth-child(' + item_first + 'n)').addClass('clear');
			var filtered_data = $(data_new).find('article');
		}

		$('.portfolio-quicksand').quicksand(filtered_data, { 
			
			duration: 700,
			easing: 'jswing',
			adjustHeight : 'dynamic'
			
		}, function(){

			$('.portfolio-post-entry .flexslider').flexslider({
				animation: 'slide',
				slideshow: false,
				controlNav: false,
				animationLoop: false
			});
			
			$('.portfolio-post-entry a[rel^="prettyPhoto"]').prettyPhoto({
				social_tools : ''
			});
			
		});
		
	});
	
	/* ---------------------------------------------------------------------------------------------------
		Mobile
	--------------------------------------------------------------------------------------------------- */
	$('#mobile-navigation-handle').click(function(){
		
		if($('#mobile-navigation.mobile-nav-active').length){
			$('#mobile-navigation').hide().removeClass('mobile-nav-active');
		}else{
			$('#mobile-navigation').show().addClass('mobile-nav-active');;
		}
		
	});
	
	$('img').each(function(){
		$(this).removeAttr('width')
		$(this).removeAttr('height');
	});

	/* ---------------------------------------------------------------------------------------------------
		Contact Form
	--------------------------------------------------------------------------------------------------- */
	$('.contact-form form').submit(function(e){
	
		e.preventDefault();
		
		var submit_path = $(this).attr('action');
		
		var name = $(this).find('.contact-form-name');
		var email = $(this).find('.contact-form-email');
		var message = $(this).find('.contact-form-message');
		
		var status = true;
		
		name.removeClass('contact-form-invalid');
		email.removeClass('contact-form-invalid');
		message.removeClass('contact-form-invalid');
		
		if(name.val() == ''){
			name.addClass('contact-form-invalid');
			status = false;
		}
		
		if(email.val() == ''){
			email.addClass('contact-form-invalid');
			status = false;
		}
		
		if(message.val() == ''){
			message.addClass('contact-form-invalid');
			status = false;
		}
		
		if(status == true){
			
			$(this).parents('.contact-form').load(submit_path, $(this).serialize());
			
		}
	
	});

	/* Mobile Navigation Click */
	$('#mobile-navigation select').change(function() {
		window.location = $(this).val();
	});

	/* ---------------------------------------------------------------------------------------------------
		Pricing table - Mobile headings
	--------------------------------------------------------------------------------------------------- */
	$('.pricing-table').each(function(){
		
		$(this).find('.pricing-table-features li:not(.pricing-table-header)').each(function(){
			
			var pt_title = $(this).text();
			var pt_id = $(this).index();

			console.log($(this).parents('.pricing-table').find('.pricing-table-column:not(.pricing-table-features) li').eq(pt_id));

			$(this).parents('.pricing-table').find('.pricing-table-column:not(.pricing-table-features) ul').each(function(){
				$(this).find('li').eq(pt_id).prepend('<span class="pricing-table-mobile">' + pt_title +  '</span>');
			});

		});

	});

	/* ---------------------------------------------------------------------------------------------------
		Pricing table - Equal height
	--------------------------------------------------------------------------------------------------- */
	$('.pricing-table').each(function(){

		var tallest = 0;

		jQuery('.pricing-table li:first-child').each(function(){
			if($(this).height() > tallest){
				tallest = jQuery(this).height();
			}
		}).height(tallest);

	});
	
});

jQuery(window).load(function(){
	
	/* ---------------------------------------------------------------------------------------------------
		Slider - Flexslider
	--------------------------------------------------------------------------------------------------- */
	/*
		vars
			- autoplay (slideshowSpeed as int and slideshow to true)
			- loop (animationLoop true|false)
			- animation (animation fade|slide)
	*/
	
	jQuery('.slider-container').each(function(){

		/* Default values */
		var def = {
			autoplay: false,
			loop: false,
			autoplaybar: true,
			animation: 'slide',
			arrows: true
		};
		
		/* User values */
		var usr = {
			autoplay: parseInt(jQuery(this).data('autoplay')),
			autoplaybar: jQuery(this).data('autoplaybar'),
			loop: jQuery(this).data('loop'),
			animation: jQuery(this).data('animation'),
			arrows: jQuery(this).data('arrows')
		};
		
		/* Merge values */
		var opts = jQuery.extend({}, def, usr);
		
		/* Other vars */
		var autoplay_state = opts.autoplay != false ? true : false;
		
		/* Arrows */
		if(opts.arrows == false){
			jQuery(this).addClass('slider-arrows-disabled');
		}
		
		if(opts.autoplaybar == true && autoplay_state == true){
			var slider_loader = jQuery(this).find('.slider-loader-inner');
			slider_loader.parent().show();
		}
		
		/* Init slider */
		jQuery(this).find('.flexslider').flexslider({
			animation: opts.animation,
			slideshow: autoplay_state,
			slideshowSpeed: opts.autoplay,
			controlNav: false,
			animationLoop: opts.loop,
			start : function(slider){
				if(opts.autoplaybar == true && autoplay_state == true){
					slider_loader.height(0).stop().animate({ height : '100%' }, opts.autoplay);
				}
				var height_to = slider.find('li:not(.clone)').eq(slider.currentSlide).height();
				slider.stop().css({ height : height_to });
			},
			before : function(slider){
				if(opts.autoplaybar == true && autoplay_state == true){
					slider_loader.height(0).stop().animate({ height : '100%' }, opts.autoplay);
				}
				var height_to = slider.find('li:not(.clone)').eq(slider.animatingTo).height();
				slider.stop().animate({ height : height_to }, 200);
			}
		});

		if( jQuery(this).find('.slides li:not(.clone)').length < 2 ){
			jQuery(this).find('.slider-prev, .slider-next').remove();
		}
		
	});

	/* ---------------------------------------------------------------------------------------------------
		Portfolio Fancy - Center
	--------------------------------------------------------------------------------------------------- */
	jQuery('.portfolio-fancy-info').each(function(){
		
		var this_height = jQuery(this).height();
		var info_height = jQuery(this).find('h2').height() + jQuery(this).find('div').height();
		var center_offset = (this_height/2)-(info_height/2);
		if(center_offset > 20){
			jQuery(this).css({ paddingTop : center_offset });
		}
		
	});	

	/* ---------------------------------------------------------------------------------------------------
		Equal boxes size
	--------------------------------------------------------------------------------------------------- */
	if(jQuery('#boxes').length){

		var tallest = 0;

		jQuery('#boxes .boxes-box-inner').each(function(){
			if(jQuery(this).height() > tallest){
				tallest = jQuery(this).height();
			}
		}).height(tallest);

	}
	
});