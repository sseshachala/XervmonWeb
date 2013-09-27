<?php 

	header("Content-type: text/css");
	define('WP_USE_THEMES', false);
	require('../../../../../wp-load.php');

	/* Get theme options */
	$jw_option = jw_get_options();
	
	/* Global shortname variable */
	global $sn;

	/* Custom CSS */
	if(!empty($jw_option[$sn.'_custom_css'])){
		echo $jw_option[$sn.'_custom_css'];
	}

	/* Customizer CSS */
	
	$customizer = jw_get_customizer_options();

?>

body { font-size: <?php echo $customizer['body_font_size']; ?> }