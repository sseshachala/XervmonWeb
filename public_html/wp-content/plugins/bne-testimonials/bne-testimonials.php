<?php
/*
 * Plugin Name: BNE Testimonials
 * Version: 1.3.1
 * Plugin URI: http://www.bluenotesentertainment.com
 * Description: Adds a Custom Post Type to display Testimonials on any page, post, or sidebar. Display the testimonials as a list or slider powered by Flexslider. Shortcodes: [bne_testimonials_list] & [bne_testimonials_slider]. Includes corresponding widget options.
 * Author: Kerry Kline, Bluenotes Entertainment
 * Author URI: http://www.bluenotesentertainment.com
 * Requires at least: 3.5
 * License: GPL2

    Copyright 2013  Bluenotes Entertainment

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    The license for this software can likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html

*/


// Exit if accessed directly
if ( !defined('ABSPATH')) exit;



/* ===========================================================
 *	Plugin CONSTANTS
 * ======================================================== */

define( 'BNE_TESTIMONIALS_VERSION', '1.3.1' );
define( 'BNE_TESTIMONIALS_DIR', dirname( __FILE__ ) );
define( 'BNE_TESTIMONIALS_URI', plugins_url( __FILE__ ) );
define( 'BNE_TESTIMONIALS_BASENAME', plugin_basename( __FILE__ ) );



/* ===========================================================
 *	Plugin Includes
 * ======================================================== */

// Admin Page
include_once( BNE_TESTIMONIALS_DIR . '/includes/help.php');

// Plugin Update
function bne_testimonials_auto_update() {
	include_once (BNE_TESTIMONIALS_DIR . '/includes/update.php');
	$wptuts_plugin_current_version = BNE_TESTIMONIALS_VERSION;
	$wptuts_plugin_remote_path = 'http://updates.bluenotesentertainment.com/bne-testimonials/update.php';
	$wptuts_plugin_slug = plugin_basename(__FILE__);
	new wp_auto_update ($wptuts_plugin_current_version, $wptuts_plugin_remote_path, $wptuts_plugin_slug);
}
add_action('init', 'bne_testimonials_auto_update');

// Custom Taxonomy
include_once( BNE_TESTIMONIALS_DIR . '/includes/taxonomy.php');

// Shortcodes
include_once( BNE_TESTIMONIALS_DIR . '/includes/shortcode-list.php');
include_once( BNE_TESTIMONIALS_DIR . '/includes/shortcode-slider.php');

// Widgets
include_once( BNE_TESTIMONIALS_DIR . '/includes/widget-slider.php');
include_once( BNE_TESTIMONIALS_DIR . '/includes/widget-list.php');


/* ===========================================================
 *	Register Our Custom Post Type (Testimonials)
 * ======================================================== */

function bne_testimonials_post_type() {
	// Custom Post Type Labels      
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
		'add_new'            => _x( 'Add new', 'testimonials' ),
		'add_new_item'       => __( 'Add new Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'all_items'          => __( 'All Testimonials' ),
		'view_item'          => __( 'View Testimonial' ),
		'search_items'       => __( 'Search Testimonials' ),
		'not_found'          => __( 'No Testimonial found' ),
		'not_found_in_trash' => __( 'No Testimonial found in trash' ),
		'parent_item_colon'  => __( 'Parent Testimonial' ),
		'menu_name'          => __( 'Testimonials' )
	);
	
	// Custom Post Type Supports  
	$supports = array('title', 'editor', 'thumbnail');
	
	// Custom Post Type Arguments  
	$args = array(
	    'labels'             => $labels,
	    'hierarchical'       => false,
	    'description'        => '',
	    'public'             => true,
	    'publicly_queryable' => true,
	    'show_ui'            => true,
	    'show_in_menu'       => true,
	    'show_in_nav_menus'  => false,
	    'show_in_admin_bar'  => true,
	    'exclude_from_search'=> true,
	    'query_var'          => true,
	    'rewrite'            => false,
	    'can_export'         => true,
	    'has_archive'        => false,
	    'menu_position'      => 5,
	    'supports'           => $supports,
	    'capability_type'    => 'post',
	);
	
	register_post_type( 'bne_testimonials', $args );

}
add_action( 'init', 'bne_testimonials_post_type' );



/* ===========================================================
 *	Add a Plugin Link to Help Page
 * ======================================================== */
 
function bne_testimonials_help_plugin_link( $links ) {
    $help_page_link = '<a href="edit.php?post_type=bne_testimonials&page=bne-testimonial-help">' . __('Instructions') . '</a>';
  	array_push( $links, $help_page_link );
  	return $links;
}
add_filter( 'plugin_action_links_'. BNE_TESTIMONIALS_BASENAME, 'bne_testimonials_help_plugin_link' );



/* ===========================================================
 *	Add Thumbnail to the WP Admin BNE Testimonial List Screen
 * ======================================================== */

// Setup Columns
if (function_exists( 'add_theme_support' )){
    add_filter('manage_edit-bne_testimonials_columns', 'bne_testimonials_posts_columns', 5);
    add_action('manage_posts_custom_column', 'bne_testimonials_posts_custom_columns', 10, 2);
}

// Add Columns
function bne_testimonials_posts_columns($cols){
    $cols['title'] = __('Name');
    $cols['bne_testimonials_message'] = __('Message');
    $cols['bne_testimonials_post_list_thumbs'] = __('Thumbnail Image');
    return $cols;
}

// Add Content to the Columns
function bne_testimonials_posts_custom_columns($column_name, $id){
	if($column_name === 'bne_testimonials_post_list_thumbs'){
		echo the_post_thumbnail( array( 80, 80) );
    }
	if($column_name === 'bne_testimonials_message'){
		echo substr(get_the_excerpt(), 0, 80) . '...';
    }
}



/* ===========================================================
 *	BNE Testimonials Menu icon
 * ======================================================== */

function bne_testimonials_admin_styles() {
	?>
	<style type="text/css" media="screen">
		/* BNE TEstimonials Menu/Page Icon CSS */
		#menu-posts-bne_testimonials .wp-menu-image {
			background: none;
			background-image: url(<?php echo plugins_url('/assets/images/menu-icon.png', __FILE__);?>);
			background-repeat: no-repeat;
			background-position: 1px -4px !important;
			background-size: 105px 190px;
		}
		
		#menu-posts-bne_testimonials.wp-menu-open .wp-menu-image,
		#menu-posts-bne_testimonials:hover .wp-menu-image {
			background-position: -49px -4px !important;
		}
		
		#icon-edit.icon32-posts-bne_testimonials {
			background: none;
			background-image: url(<?php echo plugins_url('/assets/images/menu-icon.png', __FILE__);?>);
			background-repeat: no-repeat;
			background-position: -54px -36px !important;
			background-size: 105px 190px;
		}
		@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min-device-pixel-ratio: 2) {

			#menu-posts-bne_testimonials .wp-menu-image {
				background-position: 4px -12px !important;
				background-size: 55px 90px;
			}
			
			#menu-posts-bne_testimonials.wp-menu-open .wp-menu-image,
			#menu-posts-bne_testimonials:hover .wp-menu-image {
				background-position: -22px -12px !important;
			}

			#icon-edit.icon32-posts-bne_testimonials {
				background-position: -1px -47px !important;
				background-size: 55px 96px;
			}
		}
    </style>
    <?php
}
add_action( 'admin_head', 'bne_testimonials_admin_styles' );



/* ===========================================================
 *	Scripts and Styles
 * ======================================================== */

function bne_testimonials_scripts( ) {
	
	// Get the Post
	global $post;
	
	// Register the CSS and Load up WP's default jQuery library
	wp_register_style( 'bne-testimonial-styles', plugins_url('/assets/css/bne-testimonial.css', __FILE__), '', BNE_TESTIMONIALS_VERSION, 'all');
	wp_enqueue_script( 'jquery' );
	
	// If Testimonials List Shortcode is found on the current page/post
	if ( !empty($post) ){
		if ( stripos($post->post_content, '[bne_testimonials_list') !== FALSE ) {
			wp_enqueue_style( 'bne-testimonial-styles');				
		}
	 }

	// If Testimonials Slider Shortcode is found on the current page/post
	if ( !empty($post) ){
		if ( stripos($post->post_content, '[bne_testimonials_slider') !== FALSE ) {
			wp_register_script('flexslider', plugins_url('assets/js/flexslider.min.js', __FILE__), array('jquery'), '2.1', true);
			wp_enqueue_style( 'bne-testimonial-styles');
			wp_enqueue_script( 'flexslider' );
		}
	 }
	
	// If Testimonials List Widget is active
	if( is_active_widget( '', '', 'bne_testimonials_list_widget', true ) ) { 
			wp_enqueue_style( 'bne-testimonial-styles');
    }
	
	// If Testimonials Slider Widget is active
	if( is_active_widget( '', '', 'bne_testimonials_slider_widget', true ) ) { 
			wp_register_script('flexslider', plugins_url('assets/js/flexslider.min.js', __FILE__), array('jquery'), '2.1', true);
			wp_enqueue_style( 'bne-testimonial-styles');
			wp_enqueue_script( 'flexslider' );
    }
}
add_action('wp_enqueue_scripts', 'bne_testimonials_scripts', 99);



/* ===========================================================
 *	get_the_content with formating
 *	- Since we need to use get_the_content in our shortcode/widget
 *	- output, we want to keep the origional post formatting.
 * ======================================================== */

function bne_testimonials_get_the_content_with_formatting() {
	$allowed_tags = '<b><strong><i><em><a><br><p><h1><h2><h3>';
	$content =  strip_tags(nl2br(get_the_content('')), $allowed_tags );
	return $content;
}


/* ===========================================================
 *	Alter Title Placeholder Text on Post Edit Screen
 * ======================================================== */

function bne_testimonials_post_title( $title ){
    $screen = get_current_screen();
    if ( 'bne_testimonials' == $screen->post_type ){
        $title = __('Enter the person\'s name  here');
    } 
    return $title;
}
add_filter( 'enter_title_here', 'bne_testimonials_post_title' );



/* ===========================================================
 *	Change Featured Image Text
 * ======================================================== */

// Widget box Title
function bne_testimonials_admin_featured_image_text() {
    remove_meta_box( 'postimagediv', 'bne_testimonials', 'side' );
    add_meta_box('postimagediv', __('Set Testimonial Thumbnail'), 'bne_testimonials_featured_image_box', 'bne_testimonials', 'side', 'default');
}
add_action('do_meta_boxes', 'bne_testimonials_admin_featured_image_text');


// Widget box text
function bne_testimonials_featured_image_box($post){
	$thumbnail_id = get_post_meta( $post->ID, '_thumbnail_id', true );
	echo _wp_post_thumbnail_html( $thumbnail_id, $post->ID );
	echo __('Add an optional featured image for this testimonial.');
}



/* ===========================================================
 *	Register Metabox for BNE Testimonials
 * ======================================================== */

// Registers the 'testimonial_details' metabox
function bne_testimonials_details_metabox() {
	add_meta_box('testimonial_details', 'Optional Testimonial Details', 'bne_testimonials_details_metabox_fields', 'bne_testimonials', 'normal', 'high');
        
}
add_action('add_meta_boxes', 'bne_testimonials_details_metabox'); 

// Creates the 'testimonial_details' metabox content
function bne_testimonials_details_metabox_fields() {
	
	global $post;
	
	?>
	<table class="form-table" id="rc_wctg_metabox">
		<tbody>
			<tr class="form-field">
				<th scope="row" valign="top" style="width: 30%;">
					<label for="tagline"><?php echo __('Tagline or Company Name:');?></label>
				</th>
				<?php $tagline = ( get_post_meta($post->ID, 'tagline', true) ) ? get_post_meta($post->ID, 'tagline', true) : ''; ?>
				<td>
					<input type="text" id="tagline" name="rc_wctg_meta_field[tagline]" value="<?php echo $tagline; ?>" title="Enter a tagline for the person giving this testimonial (for example: ">
					<span class="description" style="display:block;">
						<?php echo __('Enter a tagline or Company Name of this testimonial. This field is also used as the website anchor text if a url is entered below. Example: "Owner of Cat\'s Town".');?>
					</span>
				</td>
			</tr>
			<tr class="form-field">
				<th scope="row" valign="top" style="width: 30%;">
					<label for="website-url"><?php echo __('Website URL:');?></label>
				</th>
				<?php $website_url = ( get_post_meta($post->ID, 'website-url', true) ) ? get_post_meta($post->ID, 'website-url', true) : ''; ?>
				<td>
					<input type="text" id="website-url" name="rc_wctg_meta_field[website-url]" value="<?php echo $website_url; ?>" title="Enter a URL that applies to this customer (for example: http://google.com/).">
					<span class="description" style="display:block;">
						<?php echo __('Enter a URL that applies to this testimonial. Ex: http://www.google.com/')?>
					</span>
				</td>
			</tr>
		</tbody>
	</table>

	<?php
}



// Creates the 'save' function
// NOTE: this function must be used only ONCE
//       If you declare this function more than once you will get an error message
// ---------------------------------------------------------------------------------
function bne_testimonials_save_post_meta($post_id, $post) {

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;
		
	$post_meta =  array();
	
	// place all meta fields into a single array
	if( isset($_POST['rc_wctg_meta_field'] ) ) {
		$meta_fields = $_POST['rc_wctg_meta_field'];
		foreach( $meta_fields as $meta_key => $meta_value ) {
			$post_meta[$meta_key] = $meta_value;
		}
	}
	
	// Add values of $post_meta as custom fields
	foreach ($post_meta as $key => $value) {
		if( $post->post_type == 'revision' ) return;
		$value = implode(',', (array)$value);
		if(get_post_meta($post->ID, $key, FALSE)) {
			update_post_meta($post->ID, $key, $value);
		} else {
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key);
	}
}
add_action('save_post', 'bne_testimonials_save_post_meta', 1, 2); // save the custom fields