<?php

/*
 * 	BNE Testimonials Wordpress Plugin
 *	Widget List Class
 *
 * 	@author		Kerry Kline
 * 	@copyright	Copyright (c) 2013, Kerry Kline
 * 	@link		http://www.bluenotesentertainment.com
 * 	@package	BNE Testimonials
 *
*/


/*
 * @since v1.1
*/
class bne_testimonials_list_widget extends WP_Widget {
	
	// Constructor
	function bne_testimonials_list_widget() {
		parent::WP_Widget(
			false,
			$name = __('BNE Testimonial List', 'bne_testimonials_list_widget'),
			array( 'description' => __( 'Display your testimonials as a list.', 'bne_testimonials_list_widget' ) )
		);
	}



	// Widget Form Creation
	function form($instance) {
	
		// Check values
		if( $instance) {
			$title = esc_attr($instance['title']);
			$number_of_post = esc_attr($instance['number_of_post']);
			$order = esc_attr($instance['order']);
			$category = esc_attr($instance['category']);
			$name = esc_attr($instance['name']);
			$image = esc_attr($instance['image']);
			$image_style = esc_attr($instance['image_style']);
		
		} else {
			$title = 'Testimonials';
			$number_of_post = '-1';
			$order = 'date';
			$category = '';	// Show All
			$name = 'true';
			$image = 'true';
			$image_style = 'square';

		}
		?>
			<!-- Widget Title -->
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title', 'bne_testimonials_list_widget'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
			</p>
			
			<!-- Number of Post to Display -->
			<p>
				<label for="<?php echo $this->get_field_id('number_of_post'); ?>"><?php _e('Number of Testimonials: (-1 to show all)', 'bne_testimonials_list_widget'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('number_of_post'); ?>" name="<?php echo $this->get_field_name('number_of_post'); ?>" type="text" value="<?php echo $number_of_post; ?>" />
			</p>
		
			
			<!-- Post Order -->
			<p>
				<label for="<?php echo $this->get_field_id('order'); ?>"><?php _e('Testimonial Order', 'bne_testimonials_list_widget'); ?></label>
				<select name="<?php echo $this->get_field_name('order'); ?>" id="<?php echo $this->get_field_id('order'); ?>" class="widefat">
					<?php
						echo '<option value="date" id="date"', $order == 'date' ? ' selected="selected"' : '', '>By Published Date</option>';
						echo '<option value="rand" id="rand"', $order == 'rand' ? ' selected="selected"' : '', '>Random</option>';
					?>
					<?php
					//	$options = array('date', 'rand');
					//	foreach ($options as $option) {
					//		echo '<option value="' . $option . '" id="' . $option . '"', $order == $option ? ' selected="selected"' : '', '>', $option, '</option>';
					//	}
					?>
				</select>
			</p>


			<!-- Taxonomy Options -->
			<p>
				<label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Select Testimonial Category', 'bne_testimonials_list_widget'); ?></label>
				<select name="<?php echo $this->get_field_name('category'); ?>" id="<?php echo $this->get_field_id('category'); ?>" class="widefat">
					<?php
						// Option to show all taxonomies of this post type (returns empty)
						echo '<option value="" id="show_all"', $category == '' ? ' selected="selected"' : '', '>All Categories</option>';
	
						// Get the ID's of Custom Taxonomies
						$taxonomy_name = "bne-testimonials-taxonomy";
						$tax_args = array(
							'orderby' 		=> 'name',
							'hide_empty' 	=> 1,
							'hierarchical' 	=> 1
						);
						
						$terms = get_terms($taxonomy_name,$tax_args);
						
						foreach($terms as $term) {
							echo '<option value="' . $term->name . '" id="' . $term->name . '"', $category == $term->name ? ' selected="selected"' : '', '>', $term->name, '</option>';
						}
					?>
				</select>
			</p>


			<!-- Testimonial Name -->
			<p>
				<label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Show Person\'s Name (Testimonial Title)', 'bne_testimonials_list_widget'); ?></label>
				<select name="<?php echo $this->get_field_name('name'); ?>" id="<?php echo $this->get_field_id('name'); ?>" class="widefat">
					<?php
						echo '<option value="true" id="true"', $name == 'true' ? ' selected="selected"' : '', '>Yes</option>';
						echo '<option value="false" id="false"', $name == 'false' ? ' selected="selected"' : '', '>No</option>';
					?>
				</select>
			</p>

			<!-- Testimonial Featured Image -->
			<p>
				<label for="<?php echo $this->get_field_id('image'); ?>"><?php _e('Show Featured Testimonial Image', 'bne_testimonials_list_widget'); ?></label>
				<select name="<?php echo $this->get_field_name('image'); ?>" id="<?php echo $this->get_field_id('image'); ?>" class="widefat">
					<?php
						echo '<option value="true" id="true"', $image == 'true' ? ' selected="selected"' : '', '>Yes</option>';
						echo '<option value="false" id="false"', $image == 'false' ? ' selected="selected"' : '', '>No</option>';
					?>
				</select>
			</p>


			<!-- Testimonial Featured Image Style -->
			<p>
				<label for="<?php echo $this->get_field_id('image_style'); ?>"><?php _e('Featured Testimonial Image Style', 'bne_testimonials_list_widget'); ?></label>
				<select name="<?php echo $this->get_field_name('image_style'); ?>" id="<?php echo $this->get_field_id('image_style'); ?>" class="widefat">
					<?php
						echo '<option value="square" id="square"', $image_style == 'square' ? ' selected="selected"' : '', '>Square</option>';
						echo '<option value="circle" id="circle"', $image_style == 'circle' ? ' selected="selected"' : '', '>Circle</option>';
						echo '<option value="flat-square" id="flat-square"', $image_style == 'flat-square' ? ' selected="selected"' : '', '>Flat Square</option>';
						echo '<option value="flat-circle" id="flat-circle"', $image_style == 'flat-circle' ? ' selected="selected"' : '', '>Flat Circle</option>';
					?>
				</select>
			</p>

		<?php
	}

	
	// Update the Widget Settings
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		// Fields
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number_of_post'] = strip_tags($new_instance['number_of_post']);
		$instance['order'] = strip_tags($new_instance['order']);
		$instance['category'] = strip_tags($new_instance['category']);
		$instance['name'] = strip_tags($new_instance['name']);
		$instance['image'] = strip_tags($new_instance['image']);
		$instance['image_style'] = strip_tags($new_instance['image_style']);

		return $instance;
	}

	// Display the Widget on the Frontend
	function widget($args, $instance) {
		
		extract( $args );
			// these are the widget options
			$title = apply_filters('widget_title', $instance['title']);
			$number_of_post = $instance['number_of_post'];
			$order = $instance['order'];
			$category = $instance['category'];
			$name = $instance['name'];
			$image = $instance['image'];
			$image_style = $instance['image_style'];
	   
		
		// Testimonial Loop Args 
		$query_args = array(
			'post_type' 		=> 'bne_testimonials',
			'orderby' 			=> $order,
			'posts_per_page'	=> $number_of_post,
			'taxonomy' 			=> 'bne-testimonials-taxonomy',
			'term' 				=> $category
		);
	
		// Set Image Class from Widget Option
		$featured_image_class = 'bne-testimonial-featured-image ' . $image_style;	
	
		// Before Widget
		echo $before_widget;
	
		// Display the widget
		echo '<div class="bne_testimonial_list_widget">';

		// Check if Widget title is set
		if ( $title ) {
		  echo $before_title . $title . $after_title;
		}
		
		// Begin the Query
		$bne_testimonials = new WP_Query( $query_args );
		if( $bne_testimonials->have_posts() ) {
			
			echo '<div class="bne-element-container">';
			
				// Testimonial Wrapper
				echo '<div class="bne-testimonial-list-wrapper">';
				
					// The Loop
					while ( $bne_testimonials->have_posts() ) : $bne_testimonials->the_post();
		
						// Build Single Testimonial
						echo '<div class="single-bne-testimonial">';
						
							// Get Thumbnail
							if ($image != 'false') {
								echo get_the_post_thumbnail( $bne_testimonials->post->ID, 'thumbnail', array( 'class' => $featured_image_class ) );
							}
			
							// Get Title
							if ($name != 'false') {
								echo '<h4 class="bne-testimonial-heading">' . get_the_title() . '</h4>';
							}
	
	
							// Get in Meta Information
							$bne_testimonials_id = get_the_ID();
							$tagline = get_post_meta( $bne_testimonials_id, 'tagline', true );
							$website_url = get_post_meta( $bne_testimonials_id, 'website-url', true );
							
							// If either is not empty, continue with meta information
							if (!empty($tagline) || !empty($website_url)) {
	
								// Build Testimonial Details (Tagline & Website)
								echo '<div class="bne-testimonial-details">';
								
									// Tagline / Company Name
									if (empty($website_url)) {
										echo '<span class="bne-testimonial-tagline">' . $tagline . '</span>';
									}
									
									// Website URL
									if (empty($tagline)) {
										echo '<span class="bne-testimonial-website-url"><a href="' . $website_url . '" target="_blank">' . $website_url . '</a></span>';
									}
									
									// Tagline/Company Name and Website URL
									if (!empty($tagline) && !empty($website_url)) {
										echo '<span class="bne-testimonial-website-url"><a href="' . $website_url . '" target="_blank" title=" ' . $tagline . ' ">' . $tagline . '</a></span>';
									}
								
								echo '</div><!-- bne-testimonial-details (end) -->';
							
							} // END Tag and Website Fields
							
													
							// Get Content 
							echo '<div class="bne-testimonial-description">' . bne_testimonials_get_the_content_with_formatting() . '</div>';
	
							echo '<div class="clear"></div>';					
						echo '</div><!-- .bne-testimonial-single (end) -->';
					
					endwhile;
				
				echo '</div><!-- .bne-testimonial-list-wrapper (end) -->';
			echo '</div><!-- .bne-element-container (end) -->';
			echo '<div class="clear"></div>';
		
		// If No Testimonials, display warning message
		} else {
			echo '<div class="bne-testimonial-warning">No testimonials were found.</div>';
		}
		
		wp_reset_postdata();

		echo '</div><!-- .bne_testimonial_list_widget (end) -->';
		echo $after_widget;
	}

}

// Register Widget
add_action('widgets_init', create_function('', 'return register_widget("bne_testimonials_list_widget");'));