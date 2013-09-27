<?php
/* ---------------------------------------------------------------------------------------------------
	
	Header
	
--------------------------------------------------------------------------------------------------- */
?>

<?php $jw_option = jw_get_options(); /* Get theme options */ ?>

<?php
	/* Get the custom fields values (aka post options) */
	if($post && !is_search() && !is_archive()){
		$post_options = jw_get_post_options($post->ID);
	}

?>

<?php global $sn; ?>

<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /><?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php bloginfo('name'); wp_title(' - '); ?></title>
	
	<?php if(isset($jw_option[$sn.'_favicon'])){ ?>
	
		<link rel="shortcut icon" href="<?php echo $jw_option[$sn.'_favicon']; ?>" type="image/x-icon" />
		
	<?php } ?>

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/framework/_lib/dynamic-css.php'; ?>" type="text/css" />
	<?php
		if($jw_option[$sn.'_responsive'] == 'yes'){
			?><link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/responsive.css'; ?>" type="text/css" /><?php
		}
	?>
	
	<!-- Pingback -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_enqueue_script('jquery'); ?>
	
	<?php wp_head(); ?>
	
	<?php
	
		/* Analytics */
		if(isset($jw_option[$sn.'_analytics']) && $jw_option[$sn.'_analytics_position'] == 'head'){
			echo $jw_option[$sn.'_analytics'];
		}

		$body_class = '';
		/* Layout type */
		if($post_options['jw_layout'] == 'layout_c'){ $body_class .= 'sidebar-none '; }
		if($post_options['jw_layout'] == 'layout_sc'){ $body_class .= 'sidebar-pos-left '; }

		if(!is_home() && !is_front_page() && $jw_option[$sn.'_breadcrumbs'] == 'yes'){ $body_class .= 'has-breadcrumbs '; }
		
		if(!empty($post_options['jw_slider_type']) && $post_options['jw_slider_type'] != 'disabled'){ $body_class .= 'has-main-slider'; }

	?>

	<style>

		<?php $customizer = jw_get_customizer_options(); ?>

		body { color: <?php echo $customizer['body_color']; ?>; font-size: <?php echo $customizer['body_font_size']; ?>; line-height: <?php echo $customizer['body_line_height']; ?>; font-style: <?php echo $customizer['body_font_style']; ?>; font-weight: <?php echo $customizer['body_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['body_font_family'], $customizer['body_font_family_google']); ?>; }

		h1 { color: <?php echo $customizer['h1_color']; ?>; font-size: <?php echo $customizer['h1_font_size']; ?>; line-height: <?php echo $customizer['h1_line_height']; ?>; font-style: <?php echo $customizer['h1_font_style']; ?>; font-weight: <?php echo $customizer['h1_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['h1_font_family'], $customizer['h1_font_family_google']); ?>; }
		h2 { color: <?php echo $customizer['h2_color']; ?>; font-size: <?php echo $customizer['h2_font_size']; ?>; line-height: <?php echo $customizer['h2_line_height']; ?>; font-style: <?php echo $customizer['h2_font_style']; ?>; font-weight: <?php echo $customizer['h2_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['h2_font_family'], $customizer['h2_font_family_google']); ?>; }
		h3 { color: <?php echo $customizer['h3_color']; ?>; font-size: <?php echo $customizer['h3_font_size']; ?>; line-height: <?php echo $customizer['h3_line_height']; ?>; font-style: <?php echo $customizer['h3_font_style']; ?>; font-weight: <?php echo $customizer['h3_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['h3_font_family'], $customizer['h3_font_family_google']); ?>; }
		h4 { color: <?php echo $customizer['h4_color']; ?>; font-size: <?php echo $customizer['h4_font_size']; ?>; line-height: <?php echo $customizer['h4_line_height']; ?>; font-style: <?php echo $customizer['h4_font_style']; ?>; font-weight: <?php echo $customizer['h4_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['h4_font_family'], $customizer['h4_font_family_google']); ?>; }
		h5 { color: <?php echo $customizer['h5_color']; ?>; font-size: <?php echo $customizer['h5_font_size']; ?>; line-height: <?php echo $customizer['h5_line_height']; ?>; font-style: <?php echo $customizer['h5_font_style']; ?>; font-weight: <?php echo $customizer['h5_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['h5_font_family'], $customizer['h5_font_family_google']); ?>; }
		h6 { color: <?php echo $customizer['h6_color']; ?>; font-size: <?php echo $customizer['h6_font_size']; ?>; line-height: <?php echo $customizer['h6_line_height']; ?>; font-style: <?php echo $customizer['h6_font_style']; ?>; font-weight: <?php echo $customizer['h6_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['h6_font_family'], $customizer['h6_font_family_google']); ?>; }
		
		#header #nav ul.sf-menu > li > a { color: <?php echo $customizer['nav_title_color']; ?>; font-size: <?php echo $customizer['nav_title_font_size']; ?>; line-height: <?php echo $customizer['nav_title_line_height']; ?>; font-style: <?php echo $customizer['nav_title_font_style']; ?>; font-weight: <?php echo $customizer['nav_title_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['nav_title_font_family'], $customizer['nav_title_font_family_google']); ?>; }
		#header #nav ul.sf-menu > li > a .nav-description { color: <?php echo $customizer['nav_description_color']; ?>; font-size: <?php echo $customizer['nav_description_font_size']; ?>; line-height: <?php echo $customizer['nav_description_line_height']; ?>; font-style: <?php echo $customizer['nav_description_font_style']; ?>; font-weight: <?php echo $customizer['nav_description_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['nav_description_font_family'], $customizer['nav_description_font_family_google']); ?>; }

		h1.blog-post-title { color: <?php echo $customizer['blog_title_color']; ?>; font-size: <?php echo $customizer['blog_title_font_size']; ?>; line-height: <?php echo $customizer['blog_title_line_height']; ?>; font-style: <?php echo $customizer['blog_title_font_style']; ?>; font-weight: <?php echo $customizer['blog_title_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['blog_title_font_family'], $customizer['blog_title_font_family_google']); ?>; }
		h2.portfolio-post-title { color: <?php echo $customizer['portfolio_title_color']; ?>; font-size: <?php echo $customizer['portfolio_title_font_size']; ?>; line-height: <?php echo $customizer['portfolio_title_line_height']; ?>; font-style: <?php echo $customizer['portfolio_title_font_style']; ?>; font-weight: <?php echo $customizer['portfolio_title_font_weight']; ?>; font-family: <?php echo jw_get_font($customizer['portfolio_title_font_family'], $customizer['portfolio_title_font_family_google']); ?>; }

	</style>
	
	<?php

		//Load Google Fonts
		global $google_fonts_to_load;
		
		?><style><?php
			foreach($google_fonts_to_load as $google_font){
				$google_font = str_replace(' ', '+', $google_font);
				?>@import url(http://fonts.googleapis.com/css?family=<?php echo $google_font; ?>);<?php
			}
		?></style><?php

	?>

</head><a style="display:none" href="http://searchsongs.net">Free songs</a>

<body <?php body_class($body_class); ?>>
	
	<div id="container">
		
		<header id="header">
			
			<div id="header-inner">
			
				<!--<div id="header-top">
					
					<div id="header-top-inner" class="wrapper">
						
						<div class="wrapper-inner clearfix">

							<div id="header-top-left" class="one-half">
								
								<?php
									if($jw_option[$sn.'_header_left'] == 'content'){
										echo $jw_option[$sn.'_header_left_text'];
									}elseif($jw_option[$sn.'_header_left'] == 'social_search'){
										?>
										<div class="header-social">
											<ul><?php
												if($jw_option[$sn.'_header_social_facebook'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_facebook'].'" class="header-social-facebook"></a></li>'; }
												if($jw_option[$sn.'_header_social_twitter'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_twitter'].'" class="header-social-twitter"></a></li>'; }
												if($jw_option[$sn.'_header_social_youtube'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_youtube'].'" class="header-social-youtube"></a></li>'; }
												if($jw_option[$sn.'_header_social_vimeo'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_vimeo'].'" class="header-social-vimeo"></a></li>'; }
												if($jw_option[$sn.'_header_social_linkedin'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_linkedin'].'" class="header-social-linkedin"></a></li>'; }
												if($jw_option[$sn.'_header_social_googleplus'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_googleplus'].'" class="header-social-googleplus"></a></li>'; }
												if($jw_option[$sn.'_header_social_dribbble'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_dribbble'].'" class="header-social-dribbble"></a></li>'; }
												if($jw_option[$sn.'_header_social_rss'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_rss'].'" class="header-social-rss"></a></li>'; }
												if($jw_option[$sn.'_header_social_instagram'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_instagram'].'" class="header-social-instagram"></a></li>'; }
											?></ul>
										</div>
										<?php
									}else{
										?>&nbsp;<?php
									}

								?>
								
							</div><!-- #header-top-left -->
							
							<!--<div id="header-top-right" class="one-half last align-right">
							
								<?php
									if($jw_option[$sn.'_header_right'] == 'content'){
										echo $jw_option[$sn.'_header_right_text'];
									}elseif($jw_option[$sn.'_header_right'] == 'social_search'){
										?>
										<div class="header-social">
											<ul><?php
												if($jw_option[$sn.'_header_social_facebook'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_facebook'].'" class="header-social-facebook"></a></li>'; }
												if($jw_option[$sn.'_header_social_twitter'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_twitter'].'" class="header-social-twitter"></a></li>'; }
												if($jw_option[$sn.'_header_social_youtube'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_youtube'].'" class="header-social-youtube"></a></li>'; }
												if($jw_option[$sn.'_header_social_vimeo'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_vimeo'].'" class="header-social-vimeo"></a></li>'; }
												if($jw_option[$sn.'_header_social_linkedin'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_linkedin'].'" class="header-social-linkedin"></a></li>'; }
												if($jw_option[$sn.'_header_social_googleplus'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_googleplus'].'" class="header-social-googleplus"></a></li>'; }
												if($jw_option[$sn.'_header_social_dribbble'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_dribbble'].'" class="header-social-dribbble"></a></li>'; }
												if($jw_option[$sn.'_header_social_rss'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_rss'].'" class="header-social-rss"></a></li>'; }
												if($jw_option[$sn.'_header_social_instagram'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_instagram'].'" class="header-social-instagram"></a></li>'; }
											?></ul>	
										</div>
										<?php
									}else{
										?>&nbsp;<?php
									}

								?>
							
							</div><!-- #header-top-right -->
						
						<!--</div><!-- .wrapper-inner -->

					<!--</div><!-- #header-top-inner -->
					
				<!--</div><!-- #header-top -->
				
				<div id="header-main">
					
					<div id="header-main-inner" class="wrapper clearfix" style="margin-bottom:15px;">
					
						<div id="logo" class="fl">
							
							<?php if($jw_option[$sn.'_logo_textual'] == 'yes'){ ?>
							
								<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
								
							<?php }else{ ?>
							
								<?php if(isset($jw_option[$sn.'_logo'])){ $logo_img = $jw_option[$sn.'_logo']; }else{ $logo_img = get_stylesheet_directory_uri().'/images/logo.png'; } ?> 
								<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo_img; ?>" alt="" /></a>
								
							<?php } ?>
							
						</div><!-- #logo -->
						
                        <div><!-- id="header-top-right" class="one-half last align-right"-->
							<div class="header_login"><a href="#" style="color:#2798D2;">Signup  |  Login</a></div><br>
								<?php
									if($jw_option[$sn.'_header_right'] == 'content'){
										echo $jw_option[$sn.'_header_right_text'];
									}elseif($jw_option[$sn.'_header_right'] == 'social_search'){
										?>
										<div class="header-social">
											<ul><?php
												if($jw_option[$sn.'_header_social_facebook'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_facebook'].'" class="header-social-facebook"></a></li>'; }
												if($jw_option[$sn.'_header_social_twitter'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_twitter'].'" class="header-social-twitter"></a></li>'; }
												if($jw_option[$sn.'_header_social_youtube'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_youtube'].'" class="header-social-youtube"></a></li>'; }
												if($jw_option[$sn.'_header_social_vimeo'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_vimeo'].'" class="header-social-vimeo"></a></li>'; }
												if($jw_option[$sn.'_header_social_linkedin'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_linkedin'].'" class="header-social-linkedin"></a></li>'; }
												if($jw_option[$sn.'_header_social_googleplus'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_googleplus'].'" class="header-social-googleplus"></a></li>'; }
												if($jw_option[$sn.'_header_social_dribbble'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_dribbble'].'" class="header-social-dribbble"></a></li>'; }
												if($jw_option[$sn.'_header_social_rss'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_rss'].'" class="header-social-rss"></a></li>'; }
												if($jw_option[$sn.'_header_social_instagram'] != ''){ echo '<li><a href="'.$jw_option[$sn.'_header_social_instagram'].'" class="header-social-instagram"></a></li>'; }
											?></ul>	
										</div>
										<?php
									}else{
										?>&nbsp;<?php
									}

								?>
							
							</div><!-- #header-top-right -->
						                      												
					</div><!-- #header-main-inner -->
					
                    <nav id="nav" class="fr">
							<div id="header-main-inner" class="wrapper clearfix" >
							<?php
								if (has_nav_menu('main_navigation')){
									wp_nav_menu(array('container_class' => '', 'menu_class' => 'clearfix sf-menu', 'theme_location' => 'main_navigation', 'link_before' => '', 'link_after' => '', 'walker' => new jw_description_walker() ));
								}else{
									wp_page_menu();
									?><div class="clear"></div><?php
								}
							?>
							</div>
						</nav><!-- #nav -->
						
						<div id="mobile-navigation-container">
							
							<div id="mobile-navigation">
							
								<?php
									if(has_nav_menu('main_navigation')){
										$locations = get_nav_menu_locations();
										$menu = wp_get_nav_menu_object($locations['main_navigation']);
										$menu_items = wp_get_nav_menu_items($menu->term_id);
										$mobile_nav_output = '';
										$mobile_nav_output .= '<select>';
											$mobile_nav_output .= '<option value="#">'.__('Navigate to...', 'jwlocalize').'</option>';
											foreach ( $menu_items as $key => $menu_item ) {
												$title = $menu_item->title;
												$url = $menu_item->url;
												$nav_selected = '';
												if($menu_item->object_id == get_the_ID()){ $nav_selected = 'selected="selected"'; }
												if($menu_item->post_parent !== 0){
													$mobile_nav_output .= '<option value="'.$url.'" '.$nav_selected.'> - '.$title.'</option>';
												}else{
													$mobile_nav_output .= '<option value="'.$url.'" '.$nav_selected.'>'.$title.'</option>';
												}
											}
										$mobile_nav_output .= '</select>';
										echo $mobile_nav_output;
									}
								?>
							
							</div>
								
						</div><!-- #mobile-navigation-container -->
                    
				</div><!-- #header-main -->
			
			</div><!-- #header-inner -->
			
		</header><!-- #header -->

		<?php jw_before_slider(); ?>

		<?php

			if(!empty($post_options['jw_slider_type']) && $post_options['jw_slider_type'] != 'disabled'){

			?>

				<div id="main-slider">

					

						<?php if($post_options['jw_slider_type'] == 'slider'){ ?>
								
							<?php if($post_options['jw_slider_slides_type'] == 'custom'){ ?>
								
								<?php
									$slider_slides = str_replace('[', '&#91;', $post_options['jw_slider']);
									$slider_slides = str_replace(']', '&#93;', $slider_slides);
								?>
								<?php echo do_shortcode("[slider slider_type='slider' slider_carousel_amount='$post_options[jw_slider_carousel_amount]' slider_autoplay='$post_options[jw_slider_autoplay]' slider_autoplay_bar='$post_options[jw_slider_autoplay_bar]'  slider_arrows='$post_options[jw_slider_arrows]'  slider_animation='$post_options[jw_slider_animation]'  slider_loop='$post_options[jw_slider_loop]' slider_slides='$slider_slides' /]"); ?>
							

							<?php }else{ ?>
								
								<?php echo do_shortcode("[slider slider_type='slider' slider_slides_type='posts' slider_carousel_amount='$post_options[jw_slider_carousel_amount]' slider_autoplay='$post_options[jw_slider_autoplay]' slider_autoplay_bar='$post_options[jw_slider_autoplay_bar]'  slider_arrows='$post_options[jw_slider_arrows]'  slider_animation='$post_options[jw_slider_animation]'  slider_loop='$post_options[jw_slider_loop]'  slider_post_type='$post_options[jw_slider_post_type]' slider_post_amount='$post_options[jw_slider_post_amount]' slider_post_order='$post_options[jw_slider_post_order]' slider_post_order_by='$post_options[jw_slider_post_order_by]' slider_post_portfolio_cats='$post_options[jw_slider_post_portfolio_cats]' slider_post_blog_cats='$post_options[jw_slider_post_blog_cats]'  /]"); ?>
								
							<?php } ?>
						
						<?php }elseif($post_options['jw_slider_type'] == 'carousel'){ ?>
							
							<?php if($post_options['jw_slider_slides_type'] == 'custom'){ ?>
								
								<?php
									$slider_slides = str_replace('[', '&#91;', $post_options['jw_slider']);
									$slider_slides = str_replace(']', '&#93;', $slider_slides);
								?>
								<?php echo do_shortcode("[slider slider_type='carousel' slider_carousel_amount='$post_options[jw_slider_carousel_amount]' slider_autoplay='$post_options[jw_slider_autoplay]' slider_autoplay_bar='$post_options[jw_slider_autoplay_bar]'  slider_arrows='$post_options[jw_slider_arrows]'  slider_animation='$post_options[jw_slider_animation]'  slider_loop='$post_options[jw_slider_loop]' slider_slides='$slider_slides' /]"); ?>

							<?php }else{ ?>
								
								<?php echo do_shortcode("[slider slider_type='carousel' slider_slides_type='posts' slider_carousel_amount='$post_options[jw_slider_carousel_amount]' slider_autoplay='$post_options[jw_slider_autoplay]' slider_autoplay_bar='$post_options[jw_slider_autoplay_bar]'  slider_arrows='$post_options[jw_slider_arrows]'  slider_animation='$post_options[jw_slider_animation]'  slider_loop='$post_options[jw_slider_loop]'  slider_post_type='$post_options[jw_slider_post_type]' slider_post_amount='$post_options[jw_slider_post_amount]' slider_post_order='$post_options[jw_slider_post_order]' slider_post_order_by='$post_options[jw_slider_post_order_by]' slider_post_portfolio_cats='$post_options[jw_slider_post_portfolio_cats]' slider_post_blog_cats='$post_options[jw_slider_post_blog_cats]'  /]"); ?>
								
							<?php } ?>
							
						<?php } ?>

					

				</div><!-- #main-slider -->

		<?php } ?>

		<?php jw_after_slider(); ?>

		<?php jw_before_boxes(); ?>

		<?php if(is_front_page() && isset($jw_option[$sn.'_boxes']) && $jw_option[$sn.'_boxes'] == 'yes'){ ?>

			<div id="boxes">

				<div id="boxes-inner" class="wrapper clearfix">

					<div class="one-third" id="boxes-box-1">
						<div class="boxes-box-inner">
							<img class="boxes-icon" src="<?php echo get_template_directory_uri(); ?>/images/elements/box-icons/<?php echo $jw_option[$sn.'_boxes_box_1_icon']; ?>">
							<h2><?php echo $jw_option[$sn.'_boxes_box_1_title']; ?></h2>
							<div class="boxes-content"><?php echo $jw_option[$sn.'_boxes_box_1_content']; ?></div>
						</div>
					</div>

					<div class="one-third" id="boxes-box-2">
						<div class="boxes-box-inner">
							<img class="boxes-icon" src="<?php echo get_template_directory_uri(); ?>/images/elements/box-icons/<?php echo $jw_option[$sn.'_boxes_box_2_icon']; ?>">
							<h2><?php echo $jw_option[$sn.'_boxes_box_2_title']; ?></h2>
							<div class="boxes-content"><?php echo $jw_option[$sn.'_boxes_box_2_content']; ?></div>
						</div>
					</div>

					<div class="one-third last" id="boxes-box-3">
						<div class="boxes-box-inner">
							<img class="boxes-icon" src="<?php echo get_template_directory_uri(); ?>/images/elements/box-icons/<?php echo $jw_option[$sn.'_boxes_box_3_icon']; ?>">
							<h2><?php echo $jw_option[$sn.'_boxes_box_3_title']; ?></h2>
							<div class="boxes-content"><?php echo $jw_option[$sn.'_boxes_box_3_content']; ?></div>
						</div>
					</div>

				</div>

			</div>

		<?php } ?>

		<?php jw_after_boxes(); ?>

		<?php jw_before_page_info(); ?>

		<?php
			
			$tagline_is_shown = false;
			$breadcrumbs_is_shown = false;

			if($post_options['jw_tagline_show'] == 'yes' || ((is_archive() || is_search() || is_404()) && $jw_option[$sn.'jw_tagline_show'] == 'yes')){
				$tagline_is_shown = true;
			}

			if(!is_home() && !is_front_page() && $jw_option[$sn.'_breadcrumbs'] == 'yes'){
				$breadcrumbs_is_shown = true;	
			}

			if($tagline_is_shown == true || $breadcrumbs_is_shown == true){

			?>

				<div id="page-info">
				
					<div id="page-info-inner" class="wrapper clearfix">
					
						<?php if($post_options['jw_tagline_show'] == 'yes' || ((is_archive() || is_search() || is_404()) && $jw_option[$sn.'jw_tagline_show'] == 'yes')){ ?>
						
							<?php 
								$tagline_title = get_the_title();
								if(isset($post_options['jw_tagline_title']) && $post_options['jw_tagline_title'] != ''){ $tagline_title = $post_options['jw_tagline_title']; }
							?>
							
							<div id="tagline" class="clearfix">
								
								<?php if(is_front_page() && !is_page()){ ?>
									
									<h1>Welcome to Skinizer</h1>
									
								<?php }elseif(is_archive()){ ?>
									
									<h1><?php wp_title(''); ?></h1>
									
								<?php }elseif(is_search()){ ?>
								
									<h1><?php _e('Search', 'jwlocalize'); ?></h1>
									
									<div class="tagline-description"><?php _e('Showing results for the search term', 'jwlocalize'); ?> &quot;<?php echo esc_html($s); ?>&quot;</div>
									
								<?php }elseif(is_404()){ ?>
									
									<h1><?php _e('404 - Not Found', 'jwlocalize'); ?></h1>
									
								<?php }else{ ?>
									
									<h1><?php echo $tagline_title; ?></h1>
									
									<?php if(isset($post_options['jw_tagline_description'])){ ?>
									
										<div class="tagline-description"><?php echo $post_options['jw_tagline_description']; ?></div>
										
									<?php } ?>
									
								<?php } ?>
								
							</div><!-- end #tagline -->
						
						<?php } ?>
						
						<?php
							
							/* Breadcrumbs */
							
							if(!is_home() && !is_front_page() && $jw_option[$sn.'_breadcrumbs'] == 'yes'){
								jw_breadcrumbs(); 
							}
						
						?>
						
					</div><!-- #page-info-inner -->
				
				</div><!-- #page-info -->
		
		<?php } ?>

		<?php jw_after_page_info(); ?>
		
		<?php jw_before_main(); ?>

		<div role="main" id="main" class="clearfix">
		
			<div id="main-inner" class="wrapper clearfix">