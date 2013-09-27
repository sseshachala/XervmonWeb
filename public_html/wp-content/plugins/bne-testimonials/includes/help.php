<?php

/*
 * 	BNE Testimonials Wordpress Plugin
 *	Admin Help Page
 *
 * 	@author		Kerry Kline
 * 	@copyright	Copyright (c) 2013, Kerry Kline
 * 	@link		http://www.bluenotesentertainment.com
 * 	@package	BNE Testimonials
 *
 *	@updated: September 25, 2013
*/



/* ===========================================================
 *	Setup The submenu under "Testimonials"
 * ======================================================== */

function bne_testimonial_help_menu_link() {
    add_submenu_page(
    	'edit.php?post_type=bne_testimonials',		// Post Type
    	'BNE Testimonial Instructions',				// Page Title
    	'Help',										// Menu Title
    	'edit_posts',								// User Role
    	'bne-testimonial-help',						// Page slug
    	'bne_testimonial_admin_help_page'			// Function call
    );
}
add_action('admin_menu' , 'bne_testimonial_help_menu_link');  



/* ===========================================================
 *	Build the Admin Help Page
 * ======================================================== */


function bne_testimonial_admin_help_page() {
	
	// Load BNE Admin CSS
	wp_enqueue_style('bne-admin-styles', plugins_url('/assets/css/admin.css', dirname(__FILE__)));
	
	// Load Thickbox
	add_thickbox();
	?>
	
	<div id="bne-admin-wrapper" class="wrap" >
		<div class="bne-inner">
	
			<img src="<?php echo plugins_url('/assets/images/help-icon.png', dirname(__FILE__));?>"  class="alignleft image-75"  />
			<h1><?php echo __('Testimonial Instructions'); ?></h1>
			<div class="clear"></div>
			
			<div class="canvas">
				<div class="row">
					<div class="span-two-thirds">
						
						<div class="widget">
							<h3 class="widget-title">Display Testimonials as a List</h3>
							<p>Add the following shortcode to a page/post: <code>[bne_testimonials_list]</code></p>
							<p>The following parameters are available. You only need to include them if changing the default behavior:</p>
							<ul>
								<li><code>post="-1"</code><br>
									<em>
										<Strong>Default:</Strong> -1<br>
										<strong>Description:</strong> Number determines amount of testimonials to display.
									</em>
								</li>
								<li><code>order="date"</code><br>
									<em>
										<Strong>Default:</Strong> date<br>
										<strong>Choices:</strong> date or rand<br>
										<strong>Description:</strong> Displays the order of the testimonials.
									</em>
								</li>
								<li><code>image="true"</code><br>
									<em>
										<Strong>Default:</Strong> true<br>
										<strong>Choices:</strong> true or false<br>
										<strong>Description:</strong> Display featured image or not.
									</em>
								</li>
								<li><code>image_style="square"</code><br>
									<em>
										<Strong>Default:</Strong> square<br>
										<strong>Choices:</strong> square, circle, flat-square, flat-circle<br>
										<strong>Description:</strong> Styles the featured image using one of the four built in styles. Square and Circle will give the image a border, frame and shadow. flat-square and flat-circle will show no border, no frame, and no shadow. 
									</em>
								</li>
								<li><code>category="name-of-category"</code><br>
									<em>
										<strong>Description:</strong> If you created categories, add the slug you wish to only display. Ex: If the category is "San Diego", the slug will be "san-diego".
									</em>
								</li>
								<li><code>class="name_of_class"</code><br>
									<em>
										<strong>Description:</strong> Allows you to add a custom class name to the main shortcode div. This way you can easily style each list/slider testimonial individually based on the class used.
									</em>
								</li>
							</ul>
							<p><strong>Example Use:</strong> <code>[bne_testimonials_list post="3" image_style="circle"]</code></p>
						</div><!-- .widget (end) -->

						<div class="widget">
							<h3 class="widget-title">Display Testimonials as a Slider</h3>
							<p>Add the following shortcode to a page/post: <code>[bne_testimonials_slider]</code></p>
							<p>The following parameters are available. You only need to include them if changing the default behavior:</p>
							<ul>
								<li><code>post="-1"</code><br>
									<em>
										<Strong>Default:</Strong> -1<br>
										<strong>Description:</strong> Number determines amount of testimonials to display.
									</em>
								</li>
								<li><code>order="date"</code><br>
									<em>
										<Strong>Default:</Strong> date<br>
										<strong>Choices:</strong> date or rand<br>
										<strong>Description:</strong> Displays the order of the testimonials.
									</em>
								</li>
								<li><code>category="name-of-category"</code><br>
									<em>
										<strong>Description:</strong> If you created categories, add the slug you wish to only display. Ex: If the category is "San Diego", the slug will be "san-diego".
									</em>
								</li>
								<li><code>name="true"</code><br>
									<em>
										<Strong>Default:</Strong> true<br>
										<strong>Choices:</strong> true or false<br>
										<strong>Description:</strong> Display the testimonial name/title.
									</em>
								</li>
								<li><code>image="true"</code><br>
									<em>
										<Strong>Default:</Strong> true<br>
										<strong>Choices:</strong> true or false<br>
										<strong>Description:</strong> Display featured image or not.
									</em>
								</li>
								<li><code>image_style="square"</code><br>
									<em>
										<Strong>Default:</Strong> square<br>
										<strong>Choices:</strong> square, circle, flat-square, flat-circle<br>
										<strong>Description:</strong> Styles the featured image using one of the four built in styles. Square and Circle will give the image a border, frame and shadow. flat-square and flat-circle will show no border, no frame, and no shadow. 
									</em>
								</li>
								<li><code>animation="slide"</code><br>
									<em>
										<Strong>Default:</Strong> slide<br>
										<strong>Choices:</strong> slide or fade<br>
										<strong>Description:</strong> The transition of each testimonial.
									</em>
								</li>
								<li><code>nav="true"</code><br>
									<em>
										<Strong>Default:</Strong> true<br>
										<strong>Choices:</strong> true or false<br>
										<strong>Description:</strong> Display the pagination buttons.
									</em>
								</li>
								<li><code>arrows="true"</code><br>
									<em>
										<Strong>Default:</Strong> true<br>
										<strong>Choices:</strong> true or false<br>
										<strong>Description:</strong> Display the directional arrows.
									</em>
								</li>
								<li><code>smooth="true"</code><br>
									<em>
										<Strong>Default:</Strong> true<br>
										<strong>Choices:</strong> true or false<br>
										<strong>Description:</strong> Height will adjust with a smooth animation based on the amount of content.
									</em>
								</li>
								<li><code>pause="true"</code><br>
									<em>
										<Strong>Default:</Strong> true<br>
										<strong>Choices:</strong> true or false<br>
										<strong>Description:</strong> If mouse cursor hovers over slider, slideshow will pause.
									</em>
								</li>
								<li><code>class="name_of_class"</code><br>
									<em>
										<strong>Description:</strong> Allows you to add a custom class name to the main shortcode div. This way you can easily style each list/slider testimonial individually based on the class used.
									</em>
								</li>
							</ul>								
							<p><strong>Example Use:</strong> <code>[bne_testimonials_slider animation="fade" arrows="false" image_style="flat-circle"]</code></p>
						</div><!-- .widget (end) -->

					</div><!-- .span-two-third (end) -->
					<div class="span-one-third">
						

						<div class="widget">
							<h3 class="widget-title">Change Log</h3>
							<div id="changelog">
								
								<a href="#TB_inline?width=600&height=450&inlineId=changelog_notes" class="thickbox button-primary" title="BNE Testimonials Changelog">View Log</a>
								
								<div id="changelog_notes" style="display:none;"><br>


									<strong>September 25, 2013 (v1.3.1)</strong>
									<ul style="list-style:disc;margin-left:20px;">
										<li>Added an empty class shortcode parameter to target individual list/slider testimonials for easy css customizations.</li>
										<li>Removed an extra comma that was placed on the list shortcode markup.</li>
									</ul>


									<strong>September 12, 2013 (v1.3)</strong>
									<ul style="list-style:disc;margin-left:20px;">
										<li>Changed the get_the_content function with a better and a much simpler one that strips everything out except the following post tags: b, strong, i, em, a, br, h1, h2, h3. This prevents other plugins from throwing in their filtered content items such as, social icons, onto every testimonial entry.</li>
										<li>Moved the list and slider shortcode functions into their own included files.</li>
										<li>Added featured Image frame styles with their corresponding shortcode/widget attributes: square (default), circle, flat-square, flat-circle.</li>
									</ul>
									<strong>August 27, 2013 (v1.2.2)</strong>
									<ul style="list-style:disc;margin-left:20px;">
										<li>Further accommodate some random theme styles.</li>
										<li>Allow the taxonomy to be filterable in the Show all Post Edit Screen.</li>
									</ul>
									<strong>August 7, 2013 (v1.2.1)</strong>
									<ul style="list-style:disc;margin-left:20px;">
										<li>Accommodate some random theme styles that uses flexslider.</li>
									</ul>
									<strong>August 4, 2013 (v1.2)</strong>
									<ul style="list-style:disc;margin-left:20px;">
										<li>Added Custom Taxonomies (Categories)</li>
										<li>Added a category="" parameter into both shortcodes and Widgets as a dropdown option.</li>
										<li>Adjusted the title tags to h4 for widgets and h3 for shortcodes.</li>
										<li>Updated help.php with new info.</li>
										<li>Enabled the auto update class. All future updates can be pulled using the WordPress update API.</li>
									</ul>
									<strong>July 31, 2013 (v1.1)</strong>
									<ul style="list-style:disc;margin-left:20px;">
										<li>Added List and Slider <a href="<?php echo site_url();?>/wp-admin/widgets.php">Widget Options</a>.</li>
										<li>Corrected some typos.</li>
										<li>Adjusted the .bne-testimonial-slider-wrapper. Made “testimonial” singular.</li>
										<li>Adjusted the .bne-testimonial-list-wrapper.  Made “testimonial” singular.</li>
									</ul>
									<strong>July 28, 2013 (v1.0)</strong>
									<ul style="list-style:disc;margin-left:20px;">
										<li>First Release</li>
									</ul>
								</div>
							</div>
						</div><!-- .widget (end) -->
						

						<div class="widget">
							<h3 class="widget-title">Style Classes</h3>
								<p>To alter the basic css styles of the testimonials, use the following classes to alter the style of the testimonial and include them in your themes' css file or custom css options. Note: If the list view or slider is displaying oddly, it may be due to a style being overridden from your theme or another plugin.</p>
								<p><strong>Main Container:</strong><br>
									.bne-element-container { }
								</p>
								<p><strong>List Only:</strong><br>
									.bne-testimonial-list-wrapper { }<br>
								</p>
								<p>
								<strong>Slider Only:</strong><br>
									.bne-testimonial-slider-wrapper { }<br>
								</p>
								<p>
								<strong>Image:</strong><br>
									.bne-testimonial-featured-image { }<br>
									.bne-testimonial-featured-image.circle { }<br>
									.bne-testimonial-featured-image.square { }<br>
									.bne-testimonial-featured-image.flat-circle { }<br>
									.bne-testimonial-featured-image.flat-square { }<br>
								</p>
								<p>
								<strong>Heading, Content, Custom Fields:</strong><br>
									.bne-testimonial-heading { }<br>
									.bne-testimonial-tagline { }<br>
									.bne-testimonial-website-url { }<br>
									.bne-testimonial-description { }
								</p>

						</div><!-- .widget (end) -->
					
					
					</div><!-- .span-one-third (end) -->
				</div><!-- .row (end) -->

			</div><!-- .canvas (end) -->
		</div><!-- .bne-inner (end) -->
	</div><!-- .bne-admin-wrapper.wrap (end) -->
	
	<?php
} // END Admin Help Page