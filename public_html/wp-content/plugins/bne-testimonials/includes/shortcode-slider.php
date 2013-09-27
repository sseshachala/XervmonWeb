<?php

/*
 * 	BNE Testimonials Wordpress Plugin
 *	Shortcode Slider Function
 *
 * 	@author		Kerry Kline
 * 	@copyright	Copyright (c) 2013, Kerry Kline
 * 	@link		http://www.bluenotesentertainment.com
 * 	@package	BNE Testimonials
 *
 *	@updated: September 25, 2013
*/



/* ===========================================================
 *	Shortcode to display Testimonials using Flexslider
 *	[bne_testimonials_slider]
 *	Accepts param: post, image, image_style, nav, arrows, pause, animation, smooth, class
 * ======================================================== */


function bne_testimonials_slider_shortcode( $atts ) {
	
	extract(shortcode_atts(array(
		"post" 			=> '-1',		// Number of post
		"order" 		=> 'date',		// Display Post Order (date / rand)
		"category" 		=> '',
		"image" 		=> 'true',		// Featured Image
		"image_style" 	=> 'square',	// Profile image styles ( circle / square / flat-circle / flat-square )
		"name" 			=> 'true',		// Post Title
		"nav" 			=> 'true',		// Flexslider: controlNav
		"arrows" 		=> 'true',		// Flexslider: directionNav
		"pause" 		=> 'true',		// Flexslider: pauseOnHover
		"animation" 	=> 'slide',		// Flexslider: animation
		"smooth" 		=> 'true',		// Flexslider: smoothHeight
		"class"			=> ''			// Add Custom Class
	),$atts));

	$query_args = array(
		'post_type' 		=> 'bne_testimonials',
		'orderby' 			=> $order,
		'posts_per_page'	=> $post,
		'taxonomy' 			=> 'bne-testimonials-taxonomy',
		'term' 				=> $category
	);

	// Get Shortocde Parameters 
	$featured_image_class = 'bne-testimonial-featured-image ' . $image_style;	

	// Setup the Query
	$bne_testimonials = new WP_Query( $query_args );
	if( $bne_testimonials->have_posts() ) {
		
		// Load Flexslider API
		$shortcode_output = '<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(\'.bne-testimonial-slider\').flexslider({
										animation:   "' . $animation . '",  					
										smoothHeight: ' . $smooth . ',
										pauseOnHover: ' . $pause . ',
										controlNav:   ' . $nav . ',
										directionNav: ' . $arrows . '
									});
								});
							</script>';
			
		// Build Slider
		$shortcode_output .= '<div class="bne-element-container ' . $class .'">';
			$shortcode_output .= '<div class="bne-testimonial-slider-wrapper">';
				$shortcode_output .= '<div class="slides-inner">';
					
					// Build Flexslider
					$shortcode_output .= '<div class="bne-testimonial-slider flexslider">';
						$shortcode_output .= '<ul class="slides">';
			
							// The Loop
							while ( $bne_testimonials->have_posts() ) : $bne_testimonials->the_post();
								$shortcode_output .= '<li class="single-bne-testimonial">';
									$shortcode_output .='<div class="flex-content">';
										
										// Get Thumbnail
										if ($image != 'false') {
											$shortcode_output .= get_the_post_thumbnail( $bne_testimonials->post->ID, 'thumbnail', array( 'class' => $featured_image_class ) );
										}
										
										// Get Title
										if ($name != 'false') {
											$shortcode_output .= '<h3 class="bne-testimonial-heading">' . get_the_title() . '</h3>';
										}
										
										// Get in Meta Information
										$bne_testimonials_id = get_the_ID();
										$tagline = get_post_meta( $bne_testimonials_id, 'tagline', true );
										$website_url = get_post_meta( $bne_testimonials_id, 'website-url', true );
										
										// If either is not empty, continue with meta information
										if (!empty($tagline) || !empty($website_url)) {
				
											// Build Testimonial Details (Tagline & Website)
											$shortcode_output .= '<div class="bne-testimonial-details">';
											
												// Tagline / Company Name
												if (empty($website_url)) {
													$shortcode_output .= '<span class="bne-testimonial-tagline">' . $tagline . '</span>';
												}
												
												// Website URL
												if (empty($tagline)) {
													$shortcode_output .= '<span class="bne-testimonial-website-url"><a href="' . $website_url . '" target="_blank">' . $website_url . '</a></span>';
												}
												
												// Tagline/Company Name and Website URL
												if (!empty($tagline) && !empty($website_url)) {
													$shortcode_output .= '<span class="bne-testimonial-website-url"><a href="' . $website_url . '" target="_blank" title=" ' . $tagline . ' ">' . $tagline . '</a></span>';
												}
											
											$shortcode_output .= '</div><!-- bne-testimonial-details (end) -->';
											
										} // END website/Tag fields
						
										// Get Content 
										$shortcode_output .= '<div class="bne-testimonial-description">';
											$shortcode_output .= bne_testimonials_get_the_content_with_formatting();
										$shortcode_output .= '</div>';
	
										
										$shortcode_output .= '<div class="clear"></div>';
									$shortcode_output .= '</div><!-- .flex-content (end) -->';
								$shortcode_output .= '</li>';
							endwhile;
				
						$shortcode_output .= '</ul><!-- .slides (end) -->';
					$shortcode_output .= '</div><!-- bne-testimonial-slider.flexslider (end) -->';
				$shortcode_output .= '</div><!-- .slides-inner (end) -->';
			$shortcode_output .= '</div><!-- bne-testimonial-wrapper (end) -->';
		$shortcode_output .= '</div><!-- bne-element-container (end) -->';
		$shortcode_output .= '<div class="clear"></div>';
	
	// If No Testimonials, display warning message
	} else {
		$shortcode_output = '<div class="bne-testimonial-warning">No testimonials were found.</div>';
	}
	
	wp_reset_postdata();
	return $shortcode_output;
}
add_shortcode( 'bne_testimonials_slider', 'bne_testimonials_slider_shortcode' );