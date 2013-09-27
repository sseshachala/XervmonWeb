<?php
/* ------------------------------------------------------------------------------------------------------------
	
	Page template - Blog single post page
	
------------------------------------------------------------------------------------------------------------ */
?>

	<?php 
		
		/* Get theme options */
		$jw_option = jw_get_options();
		
		/* Global shortname variable */
		global $sn;
		
		/* Get the custom fields values (aka post options) */
		$post_options = jw_get_post_options($post->ID);
		
		/* Get the post/page */
		the_post();
		
		/* Thumbnail size */
		$thumb_size = 'jw_full';
		if($post_options['jw_layout'] != 'layout_c'){ $thumb_size = 'jw_two_third'; }
		
		$content_class = '';
		
	?>
	
	<?php get_header(); /* Get header */ ?>
	
	<?php
	/* ---------------------------------------------------------------------------------------------------
		Content Composer Top
	--------------------------------------------------------------------------------------------------- */
	?>
	
	<?php if(isset($post_options['jw_composer_status']) && $post_options['jw_composer_status'][0] == 'active' & isset($post_options['jw_composer_top_frontend'])){ ?>
		
		<div id="content-top">
			<?php echo do_shortcode($post_options['jw_composer_top_frontend'][0]); ?>
		</div><!-- #content-top -->
		
		<div class="clear"></div>
		
	<?php } ?>
	
	<?php
	/* ---------------------------------------------------------------------------------------------------
		Main Content
	--------------------------------------------------------------------------------------------------- */
	?>
	
	<div id="content" class="col-clear <?php echo $content_class; ?>">
		
		<?php
		/* ---------------------------------------------------------------------------------------------------
			Post
		--------------------------------------------------------------------------------------------------- */
		?>
			
		<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post-entry'); ?>>
			
			<?php if(isset($post_options['jw_composer_status']) && $post_options['jw_composer_status'][0] == 'active' && $post_options['jw_composer_main_frontend'][0] != ''){ ?>
			
				<?php echo do_shortcode($post_options['jw_composer_main_frontend'][0]); ?>
				
			<?php }else{ ?>
			
				<?php if(has_post_thumbnail() && $jw_option[$sn.'_blog_single_thumbnail'] == 'yes'){ ?>
						
					<div class="blog-post-thumbnail">
						<?php the_post_thumbnail($thumb_size, array( 'title' => get_the_title() )); ?>
					</div><!-- .blog-post-thumbnail -->
					
				<?php } ?>
				
				<header>
					<ul class="blog-post-meta clearfix">
						<li><?php _e('by', 'jwlocalize'); ?> <?php the_author_posts_link(); ?></li>
						<?php 
							$arc_year = get_the_time('Y');
							$arc_month = get_the_time('m');
							$arc_day = get_the_time('d');
						?>
						<li><?php _e('on', 'jwlocalize'); ?> <a href="<?php echo get_day_link($arc_year, $arc_month, $arc_day); ?>"><?php the_time(__('jS F Y', 'jwlocalize')); ?></a></li>
						<li><?php _e('in', 'jwlocalize'); ?> <?php the_category(', '); ?></li>
						<li><?php _e('with', 'jwlocalize'); ?> <?php comments_popup_link( __('No comments', 'jwlocalize'), __('One comment', 'jwlocalize'), '% '.__('comments', 'jwlocalize'), 'blog-post-meta-comments', '' ); ?></li>
					</ul>
				</header>		
				
				<div class="blog-post-content">
					<?php the_content(); ?>
				</div><!-- .blog-post-content -->
				
			<?php } ?>
			
		</article>
			
		<div class="separator big"></div>
			
		<?php
		/* ---------------------------------------------------------------------------------------------------
			About Author
		--------------------------------------------------------------------------------------------------- */
		?>
		
		<?php if($jw_option[$sn.'_blog_single_about_author'] == 'yes'){ ?>
			
			<div id="about-author" class="clearfix">
				
				<div id="about-author-avatar"><?php echo get_avatar( get_the_author_meta('email'), 100 ); ?></div>
				<div id="about-author-info">
					<h4><?php _e('Author:', 'jwlocalize'); ?> <?php the_author_posts_link(); ?></h4>
					<?php 
						$author_description = get_the_author_meta('description'); 
						if(empty($author_description)){
							_e('There is no additional info about this author.', 'jwlocalize');
						}else{
							echo $author_description;
						}
					?>
				</div><!-- #about-author-info -->
				
			</div><!-- #about-author -->
			
			<div class="separator big"></div>
			
		<?php } ?>
		
		<?php
		/* ---------------------------------------------------------------------------------------------------
			Comments
		--------------------------------------------------------------------------------------------------- */
		?>
		
		<?php if($jw_option[$sn.'_blog_single_comments'] == 'yes'){ ?>
			
			<?php comments_template( '', true ); ?>
			
		<?php } ?>
		
	</div><!-- #content -->
	
	<?php
	/* ---------------------------------------------------------------------------------------------------
		Sidebar
	--------------------------------------------------------------------------------------------------- */
	?>
	
	<?php if($post_options['jw_layout'] != 'layout_c'){ get_sidebar('blog'); } ?>
	
	<?php
	/* ---------------------------------------------------------------------------------------------------
		Content Composer Bottom
	--------------------------------------------------------------------------------------------------- */
	?>
	
	<?php if(isset($post_options['jw_composer_status']) && $post_options['jw_composer_status'][0] == 'active' && isset($post_options['jw_composer_bottom_frontend'])){ ?>
		
		<div class="clear"></div>
		
		<div id="content-bottom">
			<?php echo do_shortcode($post_options['jw_composer_bottom_frontend'][0]); ?>
		</div><!-- #content-top -->
		
	<?php } ?>
	
	<?php get_footer(); /* Get footer */ ?>