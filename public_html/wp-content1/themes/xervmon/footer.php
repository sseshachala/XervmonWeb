<?php
/* ---------------------------------------------------------------------------------------------------
	
	Footer
	
--------------------------------------------------------------------------------------------------- */
?>
	
<?php $jw_option = jw_get_options(); /* Get theme options */ ?>

<?php global $sn; ?>

<?php $sidebar_name = 'Footer Widgets'; ?>
						
				</div><!-- .wrapper -->
					
			</div><!-- #main -->

			<?php jw_after_main(); ?>
			
			<?php
			/* ---------------------------------------------------------------------------------------------------					
			
				Footer
				
			--------------------------------------------------------------------------------------------------- */
			?>
			
			<?php jw_before_footer(); ?>

			<footer id="footer" class="clearfix">
				
				<div id="footer-inner">
				
					<?php if($jw_option[$sn.'_footer_main'] == 'widgets'){ ?>
						
						<?php jw_before_footer_top(); ?>

						<!--<div id="footer-top">
							
							<div id="footer-top-inner" class="wrapper clearfix">
								
								<?php echo do_shortcode('[recent_tweets profile="'.$jw_option[$sn.'_footer_twitter_profile'].'" amount=1 /]'); ?>
							
							</div><!-- #footer-top-inner -->
							
						<!--</div><!-- #footer-top -->
						
						<?php jw_after_footer_top(); ?>

						<?php jw_before_footer_main(); ?>

						<div id="footer-main">
							
							<div id="footer-main-inner" class="wrapper clearfix">
							
								<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar($sidebar_name)) : else : ?>
					
									<!-- No widgets START -->
									
									<section class="widget one-one">
										<h3 class="widget-title"><span><?php _e('No Widgets Added Yet', 'jwlocalize'); ?></span></h3>
										<?php _e('Please add them in the WordPress admin page under Appearance &rarr; Widgets. The widget section is', 'jwlocalize'); echo ' "'.$sidebar_name.'".'; ?>
									</section>
									
									<!-- No widgets END -->
									
								<?php endif; ?>
							
							</div><!-- #footer-main-inner -->
							
						</div><!-- #footer-main -->
						
						<?php jw_after_footer_main(); ?>

						<?php jw_before_footer_bottom(); ?>

						<div id="footer-bottom">
							
							<div id="footer-bottom-inner" class="wrapper clearfix">
							
								<div class="fl"><?php echo $jw_option[$sn.'_footer_copyright']; ?></div>
							
								<div id="footer-navigation" class="fr">
									<?php
										if (has_nav_menu('footer_navigation')){
											wp_nav_menu(array('container_class' => '', 'menu_class' => 'clearfix', 'theme_location' => 'footer_navigation', 'link_before' => '', 'link_after' => '', ));
										}
									?>
								</div>
							
							</div><!-- #footer-bottom-inner -->
							
						</div><!-- #footer-bottom -->
						
						<?php jw_after_footer_bottom(); ?>

					<?php }else{ ?>
						
						<?php echo $jw_option[$sn.'_footer_main_text']; ?>
						
					<?php } ?>
			
				</div><!-- #footer-inner -->
			
			</footer><!-- end #footer -->

			<?php jw_after_footer(); ?>
		
		</div><!-- end #container -->
		
		<?php wp_footer(); ?>

		<?php if(!empty($jw_option[$sn.'_custom_js'])){ ?>
			<script>
				<?php echo $jw_option[$sn.'_custom_js']; ?>
			</script>
		<?php } ?>

		<?php  if(isset($jw_option[$sn.'_analytics']) && $jw_option[$sn.'_analytics_position'] == 'body'){ echo $jw_option[$sn.'_analytics']; } ?>
		
	</body>

</html>
