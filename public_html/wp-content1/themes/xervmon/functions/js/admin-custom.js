jQuery(document).ready(function($){

	

	/* ---------------------------------------------------------------------------------------------------

			

		Sections

		

	--------------------------------------------------------------------------------------------------- */

	

	/* Hide and show sections based on post type and page template */

	function jw_sections_check(){

		

		var template = $('#page_template').val(); /* default, template-blog.php, template-portfolio.php */

		var post_type = $('#post_type').val(); /* page, post, jw_portfolio, jw_testimonials */

		

		/* Hide all that are not shared by all templates and post types (excerpt the testimonials one which only has one section) */

		$('#jw-metabox-options #jwtab-blog-sidebar-li, #jw-metabox-options #jwtab-portfolio-sidebar-li, #jwtab-portfolio-info-sidebar-li, #jwtab-portfolio-media-sidebar-li, #jwtab-testimonial-info-sidebar-li, #jwtab-staff-member-sidebar-li').hide();

		

		/* Show sections based on page template */

		if(template == 'template-blog.php'){

			

			$('#jw-metabox-options #jwtab-blog-sidebar-li').show();

			

		}else if(template == 'template-portfolio.php'){

		

			$('#jw-metabox-options #jwtab-portfolio-sidebar-li').show();

		

		}

		

		/* Show sections based on post type */

		if(post_type == 'jw_portfolio'){

			

			$('#jwtab-portfolio-info-sidebar-li, #jwtab-portfolio-media-sidebar-li').show();

			

		}else if(post_type == 'jw_testimonials'){

			

			$('#jwtab-general-sidebar-li, #jwtab-tagline-sidebar-li, #jwtab-slider-sidebar-li').hide();

			$('#jwtab-testimonial-info-sidebar-li').show().find('a').click();

		

		}else if(post_type == 'jw_staff'){

			

			$('#jwtab-general-sidebar-li, #jwtab-tagline-sidebar-li, #jwtab-slider-sidebar-li').hide();

			$('#jwtab-staff-member-sidebar-li').show().find('a').click();

			

		}

		

	}/* end jw_sections_check() */

	

	/* Check sections on page load */

	jw_sections_check();

	

	/* Check sections on page template change */

	$('#page_template').change(function(){ jw_sections_check(); });

	

	

	/* ---------------------------------------------------------------------------------------------------

			

		General Section Options

		

	--------------------------------------------------------------------------------------------------- */

	

	/* Hide and show options based on page template selection */

	function jw_general_section_check(){

		

		var template = $('#page_template').val(); /* default, template-blog.php, template-portfolio.php */

		

		/* Hide all options that are not shared by all templates */

		$('#field_jw_layout_post_style, #field_jw_layout_special_item_size').hide();

		

		/* Show options based on page template */

		if(template == 'template-portfolio.php'){

			

			$('#field_jw_layout_post_style, #field_jw_layout_special_item_size').show();

			

		}

		

	}/* end jw_general_section_check() */

	

	/* Check general section on page load */

	jw_general_section_check();

	

	/* Check general section on page template change */

	$('#page_template').change(function(){ jw_general_section_check(); });

	

	

	/* ---------------------------------------------------------------------------------------------------

			

		Slider Section Options - Slider Type

		

	--------------------------------------------------------------------------------------------------- */

	

	/* Hide and show options based on page template selection */
	function jw_slider_section_type_check(){

		var slider_type = $('#jw-metabox-options #jw_slider_type').val();
		var slider_slides_type = $('#jw-metabox-options #jw_slider_slides_type').val();
		var slider_post_type = $('#jw-metabox-options #jw_slider_post_type').val();

		$('#jw-metabox-options #jwtab-slider .jw-field').hide(); /* Hide all the fields */

		if(slider_type == 'disabled'){

			$('#jw-metabox-options #field_jw_slider_type').show();

		}else{

			$('#jw-metabox-options #field_jw_slider_type, #jw-metabox-options #field_jw_slider_slides_type').show(); /* Show all the ones that are shared by everything */

			if(slider_slides_type == 'custom'){

				/* If slider slides type is custom (user chooses images and content) */
				$('#jw-metabox-options #field_jw_slider').show();

				if(slider_type == 'slider'){

					/* If the slides are fetched from posts and it's a slider */
					$('#jw-metabox-options #field_jw_slider_loop, #jw-metabox-options #field_jw_slider_animation, #jw-metabox-options #field_jw_slider_autoplay, #jw-metabox-options #field_jw_slider_autoplay_bar, #jw-metabox-options #field_jw_slider_arrows').show();

				}else if(slider_type == 'carousel'){

					/* If the slides are fetched from posts and it's a carousel */
					$('#jw-metabox-options #field_jw_slider_loop, #jw-metabox-options #field_jw_slider_autoplay, #jw-metabox-options #field_jw_slider_arrows, #jw-metabox-options #field_jw_slider_carousel_amount').show();

				}

			}else if(slider_slides_type == 'posts'){

				/* If slider slides type is posts (the content is fetched from blog or portfolio posts) */
				$('#jw-metabox-options #field_jw_slider_post_type, #jw-metabox-options #field_jw_slider_post_order_by, #jw-metabox-options #field_jw_slider_post_order, #jw-metabox-options #field_jw_slider_post_amount').show();

				if(slider_post_type == 'post'){

					/* If blog posts */
					$('#jw-metabox-options #field_jw_slider_post_blog_cats').show();

				}else if(slider_post_type == 'jw_portfolio'){

					/* If portfolio posts */
					$('#jw-metabox-options #field_jw_slider_post_portfolio_cats').show();

				}

				if(slider_type == 'slider'){

					/* If the slides are fetched from posts and it's a slider */
					$('#jw-metabox-options #field_jw_slider_loop, #jw-metabox-options #field_jw_slider_animation, #jw-metabox-options #field_jw_slider_autoplay, #jw-metabox-options #field_jw_slider_autoplay_bar, #jw-metabox-options #field_jw_slider_arrows').show();

				}else if(slider_type == 'carousel'){

					/* If the slides are fetched from posts and it's a carousel */
					$('#jw-metabox-options #field_jw_slider_loop, #jw-metabox-options #field_jw_slider_autoplay, #jw-metabox-options #field_jw_slider_arrows, #jw-metabox-options #field_jw_slider_carousel_amount').show();

				}
			}
		}

	}/* end jw_slider_section_type_check() */

	

	/* Check slider section on page load */

	jw_slider_section_type_check();

	

	/* Check slider section on slider type change */

	$('#jw-metabox-options #jw_slider_type, #jw-metabox-options #jw_slider_slides_type, #jw-metabox-options #jw_slider_post_type').change(function(){ jw_slider_section_type_check(); });
	
	/* ---------------------------------------------------------------------------------------------------

			

		Slider Section Options - Slider Regular Type Sub-type

		

	--------------------------------------------------------------------------------------------------- */

	function jw_slider_section_regular_type_subtype_check(){

		

		var slider_type = $('#jw_slider_type').val(); /* disabled, regular, posts */

		var slider_subtype = $('#jw_slider_subtype').val(); /* regular, accordion, carousel */

		

		/* If the current slider type is regular */

		if(slider_type == 'regular'){

		

			/* Hide all the options that are not shared by all sub-types */

			$('#field_jw_slider_item_size, #field_jw_slider_wrap, #field_jw_slider_autoplay').hide();

			

			/* Show options based on slider sub-type */

			if(slider_subtype == 'regular'){

				

				$('#field_jw_slider_wrap, #field_jw_slider_autoplay').show();

				

			}else if(slider_subtype == 'accordion'){

				

				/* None for now */

				

			}else if(slider_subtype == 'carousel'){

				

				$('#field_jw_slider_item_size, #field_jw_slider_wrap, #field_jw_slider_autoplay').show();

				

			}

			

		}

	

	}/* end jw_slider_section_regular_type_subtype_check() */

	

	/* Check slider section regular type subtype on page load */

	jw_slider_section_regular_type_subtype_check();

	

	/* Check slider section on regular slider sub-type change */

	$('#jw_slider_subtype').change(function(){ jw_slider_section_regular_type_subtype_check(); });

	

	

	/* ---------------------------------------------------------------------------------------------------

			

		Slider Section Options - Slider Posts Type Sub-type

		

	--------------------------------------------------------------------------------------------------- */

	function jw_slider_section_posts_type_subtype_check(){

		

		var slider_type = $('#jw_slider_type').val(); /* disabled, regular, posts */

		var slider_subtype = $('#jw_slider_post_subtype').val(); /* regular, accordion, carousel */

		

		/* If the current slider type is posts */

		if(slider_type == 'posts'){

			

			/* Hide all the options that are not shared by all sub-types */

			$('#field_jw_slider_post_item_size, #field_jw_slider_post_wrap').hide();

			

			/* Show options based on slider sub-type */

			if(slider_subtype == 'regular'){

				

				/* None for now */

				

			}else if(slider_subtype == 'accordion'){

				

				/* None for now */

				

			}else if(slider_subtype == 'carousel'){

				

				$('#field_jw_slider_post_item_size, #field_jw_slider_post_wrap').show();

				

			}

			

		}

	

	}/* end jw_slider_section_posts_type_subtype_check() */

	

	/* Check slider section posts type subtype on page load */

	jw_slider_section_posts_type_subtype_check();

	

	/* Check slider section on posts slider sub-type change */

	$('#jw_slider_post_subtype').change(function(){ jw_slider_section_posts_type_subtype_check(); });

	

	

	/* ---------------------------------------------------------------------------------------------------

			

		Slider Section Options - Slider Posts Type Post Type

		

	--------------------------------------------------------------------------------------------------- */

	function jw_slider_section_posts_type_post_type_check(){

		

		var slider_type = $('#jw_slider_type').val(); /* disabled, regular, posts */

		var post_type = $('#jw_slider_post_type').val(); /* post, jw_portfolio */

		

		/* If the current slider type is posts */

		if(slider_type == 'posts'){

			

			/* Hide all the options */

			$('#field_jw_slider_post_categories_portfolio, #field_jw_slider_post_categories_blog').hide();

			

			/* Show options based on post type */

			if(post_type == 'post'){

				

				$('#field_jw_slider_post_categories_blog').show();

				

			}else if(post_type == 'jw_portfolio'){

				

				$('#field_jw_slider_post_categories_portfolio').show();

				

			}

			

		}

	

	}/* end jw_slider_section_posts_type_post_type_check() */

	

	/* Check slider section posts type subtype on page load */

	jw_slider_section_posts_type_post_type_check();

	

	/* Check slider section on posts slider sub-type change */

	$('#jw_slider_post_type').change(function(){ jw_slider_section_posts_type_post_type_check(); });

	$('#jw_slider_type').change(function(){ jw_slider_section_posts_type_post_type_check(); });

	

});