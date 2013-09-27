<?php
/* ---------------------------------------------------------------------------------------------------
	
	Template Name: Blog
	
--------------------------------------------------------------------------------------------------- */
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
		
		/* Query the blog posts */
		if(is_front_page()){ $paged = (get_query_var('page')) ? get_query_var('page') : 1; }else{ $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; }
		if($post_options['jw_blog_categories'] != 'all'){
			$blog_cats = unserialize($post_options['jw_blog_categories']);
			$args = array(
				'paged' 			=> $paged, 
				'post_type' 		=> 'post',
				'posts_per_page'	=> $jw_option[$sn.'_blog_listing_per_page'],
				'category__in'		=> $blog_cats
			);
		}else{
			$args = array(
				'paged' 			=> $paged, 
				'post_type' 		=> 'post',
				'posts_per_page'	=> $jw_option[$sn.'_blog_listing_per_page'],
			);
		}
			
		$jw_query = new WP_Query($args);
		
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
		
		<?php $count = 0; ?>
		
		<?php if ($jw_query->have_posts()) : while ($jw_query->have_posts()) : $jw_query->the_post(); $count++;  /* Loop the posts */ ?>
			
			<?php
			/* ---------------------------------------------------------------------------------------------------
				Post Content
			--------------------------------------------------------------------------------------------------- */
			?>
			
			<?php
				
				/* publish_date var is used to get the day archive link */
				$publish_date = array();
				$publish_date['year'] = get_the_time('Y');
				$publish_date['month'] = get_the_time('m');
				$publish_date['day'] = get_the_time('d');
				
			?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post-entry'); ?>>
				
				<!-- Blog Post Meta -->
				
				<header>
					
					<h1 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					
					<ul class="blog-post-meta clearfix">
						<li><?php _e('published:', 'jwlocalize'); ?> <a href="<?php echo get_day_link($publish_date['year'], $publish_date['month'], $publish_date['day']); ?>"><?php the_time(__('jS F Y', 'jwlocalize')); ?></a> // </li>
						<li><?php _e('author:', 'jwlocalize'); ?> <?php the_author_posts_link(); ?> // </li>
						<li><?php _e('categories:', 'jwlocalize'); ?> <?php the_category(', '); ?> // </li>
						<li><?php _e('comments:', 'jwlocalize'); ?> <?php comments_popup_link( __('None', 'jwlocalize'), __('One comment', 'jwlocalize'), '% '.__('comments', 'jwlocalize'), 'blog-post-meta-comments', '' ); ?></li>
					</ul><!-- .blog-post-meta -->
					
				</header>
				
				<!-- Blog Post Thumbnail -->
				
				<?php if(has_post_thumbnail() && $jw_option[$sn.'_blog_listing_thumbnails'] == 'yes'){ ?>
						
					<div class="blog-post-thumbnail">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumb_size, array( 'title' => get_the_title() )); ?></a>
					</div><!-- .blog-post-thumbnail -->
					
				<?php } ?>
				
				<!-- Blog Post Content -->
				
				<div class="blog-post-content">
					<?php if($jw_option[$sn.'_blog_listing_content_type'] == 'excerpt'){ the_excerpt(); }else{ the_content(); } ?>
				</div><!-- .blog-post-content -->
				
				<!-- Blog Post Extra -->
				
				<div class="blog-post-extra">
					<a href="<?php the_permalink(); ?>" class="blog-post-read-more"><?php _e('Read more', 'jwlocalize'); ?></a>
				</div><!-- .blog-post-extra -->
				
			</article>
			
		<?php endwhile; else: ?>
			
			<p><?php _e('The blog is empty.', 'jwlocalize'); ?></p>
			
		<?php endif; ?>
		
		<?php
		/* ---------------------------------------------------------------------------------------------------
			Pagination
		--------------------------------------------------------------------------------------------------- */
		?>
		
		<div class="clear"></div>
		<?php $num_pages = $jw_query->max_num_pages; jw_pagination($num_pages); ?>
		
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