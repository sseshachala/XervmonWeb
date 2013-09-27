<?php

/* ------------------------------------------------------------------------------------------------------------

	Menus
	
	Description: Custom menus specific to the theme
	
------------------------------------------------------------------------------------------------------------ */

	
	/* Actions and filters */
	add_action('init', 'jw_register_custom_menus');
	
	
	/* -----------------------------------------------------------------
		
		Name: jw_register_custom_menus
		
	----------------------------------------------------------------- */
	function jw_register_custom_menus(){
	
		register_nav_menus(
			array(
			  'footer_navigation' => 'Footer Navigation'
			)
		);
	
	} /* jw_register_custom_menus() END */
	
?>