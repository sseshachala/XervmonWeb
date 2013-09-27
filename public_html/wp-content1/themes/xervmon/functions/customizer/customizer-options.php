<?php

global $sn;

$font_families = array('inheirt' => 'Inherit from parent', 'arial' => 'Arial', 'arialblack' => 'Arial Black', 'courier' => 'Courier New', 'georgia' => 'Georgia', 'lucida' => 'Lucida', 'tahoma' => 'Tahoma', 'times' => 'Times New Roman', 'trebuchet' => 'Trebuchet MS', 'verdana' => 'Verdana', 'google' => 'Google Font *'  );
$bg_repeat_opts = array( 'repeat' => 'Repeat', 'repeat-x' => 'Repeat X', 'repeat-y' => 'Repeat Y', 'no-repeat' => 'No Repeat',  );
$bg_position_opts = array( 'left top' => 'Left Top', 'left center' => 'Left Center', 'left bottom' => 'Left Bottom', 'right top' => 'Right Top', 'right center' => 'Right Center', 'right bottom' => 'Right Bottom', 'center top' => 'Center Top', 'center center' => 'Center Center', 'center bottom' => 'Center Bottom', );


/* Set the options */
$customizer_options = array();

/* -----------------------------------------------------------------
	BODY
----------------------------------------------------------------- */

$customizer_options[] = array(
	'type'	=> 'section',
	'id'	=> 'section_body',
	'title' => 'General',
);
	
	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Text Color',
		'id'	=> 'body_color',
		'def'	=> '#494f56',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Size',
		'id'	=> 'body_font_size',
		'def'	=> '13px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Line Height',
		'id'	=> 'body_line_height',
		'def'	=> '22px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Style',
		'id'	=> 'body_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'Italic' => 'italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Weight',
		'id'	=> 'body_font_weight',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'Bold' => 'bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Family',
		'id'	=> 'body_font_family',
		'def'	=> 'arial',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Family (google)',
		'id'	=> 'body_font_family_google',
		'def'	=> ''
	);

/* -----------------------------------------------------------------
	Heading 1
----------------------------------------------------------------- */

$customizer_options[] = array(
	'type'	=> 'section',
	'id'	=> 'section_heading_1',
	'title' => 'Heading 1 (h1)',
);
	
	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Text Color',
		'id'	=> 'h1_color',
		'def'	=> '#2A3036',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Size',
		'id'	=> 'h1_font_size',
		'def'	=> '22px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Line Height',
		'id'	=> 'h1_line_height',
		'def'	=> '28px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Style',
		'id'	=> 'h1_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'italic' => 'Italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Weight',
		'id'	=> 'h1_font_weight',
		'def'	=> 'bold',
		'opts'	=> array( 'normal' => 'Normal', 'bold' => 'Bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Family',
		'id'	=> 'h1_font_family',
		'def'	=> 'inherit',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Family (google)',
		'id'	=> 'h1_font_family_google',
		'def'	=> ''
	);
	
/* -----------------------------------------------------------------
	Heading 2
----------------------------------------------------------------- */

$customizer_options[] = array(
	'type'	=> 'section',
	'id'	=> 'section_heading_2',
	'title' => 'Heading 2 (h2)',
);
	
	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Text Color',
		'id'	=> 'h2_color',
		'def'	=> '#2A3036',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Size',
		'id'	=> 'h2_font_size',
		'def'	=> '20px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Line Height',
		'id'	=> 'h2_line_height',
		'def'	=> '26px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Style',
		'id'	=> 'h2_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'italic' => 'Italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Weight',
		'id'	=> 'h2_font_weight',
		'def'	=> 'bold',
		'opts'	=> array( 'normal' => 'Normal', 'bold' => 'Bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Family',
		'id'	=> 'h2_font_family',
		'def'	=> 'inherit',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Family (google)',
		'id'	=> 'h2_font_family_google',
		'def'	=> ''
	);

/* -----------------------------------------------------------------
	Heading 3
----------------------------------------------------------------- */

$customizer_options[] = array(
	'type'	=> 'section',
	'id'	=> 'section_heading_3',
	'title' => 'Heading 3 (h3)',
);
	
	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Text Color',
		'id'	=> 'h3_color',
		'def'	=> '#2A3036',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Size',
		'id'	=> 'h3_font_size',
		'def'	=> '18px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Line Height',
		'id'	=> 'h3_line_height',
		'def'	=> '24px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Style',
		'id'	=> 'h3_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'italic' => 'Italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Weight',
		'id'	=> 'h3_font_weight',
		'def'	=> 'bold',
		'opts'	=> array( 'normal' => 'Normal', 'bold' => 'Bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Family',
		'id'	=> 'h3_font_family',
		'def'	=> 'inherit',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Family (google)',
		'id'	=> 'h3_font_family_google',
		'def'	=> ''
	);

/* -----------------------------------------------------------------
	Heading 4
----------------------------------------------------------------- */

$customizer_options[] = array(
	'type'	=> 'section',
	'id'	=> 'section_heading_4',
	'title' => 'Heading 4 (h4)',
);
	
	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Text Color',
		'id'	=> 'h4_color',
		'def'	=> '#2A3036',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Size',
		'id'	=> 'h4_font_size',
		'def'	=> '16px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Line Height',
		'id'	=> 'h4_line_height',
		'def'	=> '22px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Style',
		'id'	=> 'h4_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'italic' => 'Italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Weight',
		'id'	=> 'h4_font_weight',
		'def'	=> 'bold',
		'opts'	=> array( 'normal' => 'Normal', 'bold' => 'Bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Family',
		'id'	=> 'h4_font_family',
		'def'	=> 'inherit',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Family (google)',
		'id'	=> 'h4_font_family_google',
		'def'	=> ''
	);

/* -----------------------------------------------------------------
	Heading 5
----------------------------------------------------------------- */

$customizer_options[] = array(
	'type'	=> 'section',
	'id'	=> 'section_heading_5',
	'title' => 'Heading 5 (h5)',
);
	
	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Text Color',
		'id'	=> 'h5_color',
		'def'	=> '#2A3036',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Size',
		'id'	=> 'h5_font_size',
		'def'	=> '14px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Line Height',
		'id'	=> 'h5_line_height',
		'def'	=> '20px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Style',
		'id'	=> 'h5_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'italic' => 'Italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Weight',
		'id'	=> 'h5_font_weight',
		'def'	=> 'bold',
		'opts'	=> array( 'normal' => 'Normal', 'bold' => 'Bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Family',
		'id'	=> 'h5_font_family',
		'def'	=> 'inherit',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Family (google)',
		'id'	=> 'h5_font_family_google',
		'def'	=> ''
	);

/* -----------------------------------------------------------------
	Heading 6
----------------------------------------------------------------- */

$customizer_options[] = array(
	'type'	=> 'section',
	'id'	=> 'section_heading_6',
	'title' => 'Heading 6 (h6)',
);
	
	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Text Color',
		'id'	=> 'h6_color',
		'def'	=> '#2A3036',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Size',
		'id'	=> 'h6_font_size',
		'def'	=> '13px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Line Height',
		'id'	=> 'h6_line_height',
		'def'	=> '18px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Style',
		'id'	=> 'h6_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'italic' => 'Italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Weight',
		'id'	=> 'h6_font_weight',
		'def'	=> 'bold',
		'opts'	=> array( 'normal' => 'Normal', 'bold' => 'Bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Family',
		'id'	=> 'h6_font_family',
		'def'	=> 'inherit',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Family (google)',
		'id'	=> 'h6_font_family_google',
		'def'	=> ''
	);

/* -----------------------------------------------------------------
	Navigation
----------------------------------------------------------------- */

$customizer_options[] = array(
	'type'	=> 'section',
	'id'	=> 'section_navigation',
	'title' => 'Navigation',
);
	
	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Title &rarr; Text Color',
		'id'	=> 'nav_title_color',
		'def'	=> '#5f6671',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Title &rarr; Font Size',
		'id'	=> 'nav_title_font_size',
		'def'	=> '14px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Title &rarr; Line Height',
		'id'	=> 'nav_title_line_height',
		'def'	=> '14px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Title &rarr; Font Style',
		'id'	=> 'nav_title_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'italic' => 'Italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Title &rarr; Font Weight',
		'id'	=> 'nav_title_font_weight',
		'def'	=> 'bold',
		'opts'	=> array( 'normal' => 'Normal', 'bold' => 'Bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Title &rarr; Font Family',
		'id'	=> 'nav_title_font_family',
		'def'	=> 'inherit',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Title &rarr; Font Family (google)',
		'id'	=> 'nav_title_font_family_google',
		'def'	=> ''
	);

	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Description &rarr; Text Color',
		'id'	=> 'nav_description_color',
		'def'	=> '#6b7481',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Description &rarr; Font Size',
		'id'	=> 'nav_description_font_size',
		'def'	=> '12px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Description &rarr; Line Height',
		'id'	=> 'nav_description_line_height',
		'def'	=> '12px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Description &rarr; Font Style',
		'id'	=> 'nav_description_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'italic' => 'Italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Description &rarr; Font Weight',
		'id'	=> 'nav_description_font_weight',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'bold' => 'Bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Description &rarr; Font Family',
		'id'	=> 'nav_description_font_family',
		'def'	=> 'inherit',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Description &rarr; Font Family (google)',
		'id'	=> 'nav_description_font_family_google',
		'def'	=> ''
	);

/* -----------------------------------------------------------------
	Blog Title
----------------------------------------------------------------- */

$customizer_options[] = array(
	'type'	=> 'section',
	'id'	=> 'section_blog',
	'title' => 'Blog Title',
);
	
	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Text Color',
		'id'	=> 'blog_title_color',
		'def'	=> '#2A3036',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Size',
		'id'	=> 'blog_title_font_size',
		'def'	=> '22px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Line Height',
		'id'	=> 'blog_title_line_height',
		'def'	=> '28px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Style',
		'id'	=> 'blog_title_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'italic' => 'Italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Weight',
		'id'	=> 'blog_title_font_weight',
		'def'	=> 'bold',
		'opts'	=> array( 'normal' => 'Normal', 'bold' => 'Bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Family',
		'id'	=> 'blog_title_font_family',
		'def'	=> 'inherit',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Family (google)',
		'id'	=> 'blog_title_font_family_google',
		'def'	=> ''
	);

/* -----------------------------------------------------------------
	Portfolio Title
----------------------------------------------------------------- */

$customizer_options[] = array(
	'type'	=> 'section',
	'id'	=> 'section_portfolio',
	'title' => 'Portfolio Title',
);
	
	/* Text Color */
	
	$customizer_options[] = array(
		'type'	=> 'option_color',
		'title' => 'Text Color',
		'id'	=> 'portfolio_title_color',
		'def'	=> '#2A3036',
	);
	
	/* Font Size */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Size',
		'id'	=> 'portfolio_title_font_size',
		'def'	=> '13px',
	);
	
	/* Line Height */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Line Height',
		'id'	=> 'portfolio_title_line_height',
		'def'	=> '16px',
	);
	
	/* Font Style */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Style',
		'id'	=> 'portfolio_title_font_style',
		'def'	=> 'normal',
		'opts'	=> array( 'normal' => 'Normal', 'italic' => 'Italic' ),
	);

	/* Font Weight */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Weight',
		'id'	=> 'portfolio_title_font_weight',
		'def'	=> 'bold',
		'opts'	=> array( 'normal' => 'Normal', 'bold' => 'Bold' ),
	);
	
	/* Font Family */
	
	$customizer_options[] = array(
		'type'	=> 'option_select',
		'title' => 'Font Family',
		'id'	=> 'portfolio_title_font_family',
		'def'	=> 'inherit',
		'opts'	=> $font_families,
	);
	
	/* Font Family Google */
	
	$customizer_options[] = array(
		'type'	=> 'option_text',
		'title' => 'Font Family (google)',
		'id'	=> 'portfolio_title_font_family_google',
		'def'	=> ''
	);