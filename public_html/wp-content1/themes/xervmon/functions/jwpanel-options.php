<?php
/* ---------------------------------------------------------------------------------------------------

JWPanel Options

--------------------------------------------------------------------------------------------------- */

$themename = 'Skinizer';
$shortname = 'sknzr';

$options = array();

$box_icons_array = array( 'Contact' => 'icon-01.png', 'Globe' => 'icon-02.png', 'Documents' => 'icon-03.png', 'Enveloppe' => 'icon-04.png', 'Notes' => 'icon-05.png', 'Notes 2' => 'icon-06.png', 'Blueprint' => 'icon-07.png', 'Folder' => 'icon-08.png', 'Documents in holder' => 'icon-09.png', 'Checklist' => 'icon-10.png', 'Calendar' => 'icon-11.png', 'Label' => 'icon-12.png', 'House' => 'icon-13.png', 'Box' => 'icon-14.png', 'Cloud' => 'icon-15.png', 'Support' => 'icon-16.png', 'Radar' => 'icon-17.png', 'Clock' => 'icon-18.png', 'Gear' => 'icon-19.png', 'Lock' => 'icon-21.png', 'Monitor' => 'icon-22.png', 'Microphone' => 'icon-23.png', 'Heart' => 'icon-24.png', 'Star' => 'icon-25.png', 'Pin' => 'icon-26.png', 'Information' => 'icon-27.png', 'Warning' => 'icon-28.png', 'Colour Pallete' => 'icon-29.png', 'Magnifier' => 'icon-30.png', 'Check' => 'icon-31.png'  );

/* -----------------------------------------------------------------
General
----------------------------------------------------------------- */

$options[] = array( 'title' => 'General',
	'type'  => 'open',
	'desc'	=> '');

$options[] = array( 'title' => 'Responsive',
	'desc'  => 'Do you want the website to be responsive?',
	'id'    => $shortname.'_responsive',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Enable responsive feature ' => 'yes', 'No - Disable responsive feature' => 'no' ),
	'type'  => 'select' );

$options[] = array( 'title' => 'Page Comments',
	'desc'  => 'Do you want to show the comments on pages?',
	'id'    => $shortname.'_page_comments',
	'std'   => 'no',
	'opts'	=> array( 'Yes - Show the comments' => 'yes', 'No - Do not show the comments' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Logo - Upload',
	'desc'  => 'Upload your logo. If not uploaded the default logo will be shown which is located in the images folder of the theme.',
	'id'    => $shortname.'_logo',
	'std'   => '',
	'type'  => 'upload' );
	
$options[] = array( 'title' => 'Logo - Textual',
	'desc'  => 'In case you want to show a textual logo set this option to <strong>yes</strong>. The website title you have set when you installed WordPress will be shown.',
	'id'    => $shortname.'_logo_textual',
	'std'	=> 'no',
	'opts'  => array( 'Yes - show the textual logo' => 'yes', 'No - do not show the textual logo' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Favicon - Upload',
	'desc'  => 'Upload your favicon. If not uploaded the default favicon will be shown which is located in the root folder of the theme',
	'id'    => $shortname.'_favicon',
	'std'   => '',
	'type'  => 'upload' );
	
$options[] = array( 'title' => 'Analytics',
	'desc'  => 'Enter your full analytics code here. It will be added right before the closing body tag.',
	'id'    => $shortname.'_analytics',
	'std'   => '',
	'type'  => 'textarea' );
	
$options[] = array( 'title' => 'Analytics Position',
	'desc'  => 'Where to place the analytics code?',
	'id'    => $shortname.'_analytics_position',
	'std'   => 'body',
	'opts'	=> array( 'Before &lt;/body&gt;' => 'body', 'Before &lt;/head&gt;' => 'head' ),
	'type'  => 'select' );
	
$options[] = array( 'type'  => 'close' );

/* -----------------------------------------------------------------
Header
----------------------------------------------------------------- */

$options[] = array( 'title' => 'Header',
	'type'  => 'open',
	'desc'	=> '');
	
$options[] = array( 'title' => 'Header Left',
	'desc'  => 'What do you want to show in the left part of the header.',
	'id'    => $shortname.'_header_left',
	'std'	=> 'content',
	'opts'  => array( 'Content - Custom content (from the textarea bellow)' => 'content', 'Social' => 'social_search', 'Disabled' => 'disabled' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Header Left &darr;<br>Custom Content',
	'desc'	=> 'Custom content which will be shown on the left part of the header. <strong>HTML allowed.</strong>',
	'id'    => $shortname.'_header_left_text',
	'std'	=> 'Change this in the <strong>Theme Options</strong> &rarr; <strong>Header</strong> section.',
	'type'  => 'textarea' );
	
$options[] = array( 'title' => 'Header Right',
	'desc'  => 'What do you want to show in the right part of the header.',
	'id'    => $shortname.'_header_right',
	'std'	=> 'social_search',
	'opts'  => array( 'Content - Custom content (from the textarea bellow)' => 'content', 'Social ' => 'social_search', 'Disabled' => 'disabled' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Header Right &darr;<br>Custom Content',
	'desc'	=> 'Custom content which will be shown on the right part of the header. <strong>HTML allowed.</strong>',
	'id'    => $shortname.'_header_right_text',
	'std'	=> '',
	'type'  => 'textarea' );
	
$options[] = array( 'title' => 'Header Social &darr;<br>Facebook',
	'desc'	=> 'Enter full url to your profile.',
	'id'    => $shortname.'_header_social_facebook',
	'std'	=> '',
	'type'  => 'text' );
	
$options[] = array( 'title' => 'Header Social &darr;<br>Twitter',
	'desc'	=> 'Enter full url to your profile.',
	'id'    => $shortname.'_header_social_twitter',
	'std'	=> '',
	'type'  => 'text' );

$options[] = array( 'title' => 'Header Social &darr;<br>Youtube',
	'desc'	=> 'Enter full url to your profile.',
	'id'    => $shortname.'_header_social_youtube',
	'std'	=> '',
	'type'  => 'text' );

$options[] = array( 'title' => 'Header Social &darr;<br>Vimeo',
	'desc'	=> 'Enter full url to your profile.',
	'id'    => $shortname.'_header_social_vimeo',
	'std'	=> '',
	'type'  => 'text' );
	
$options[] = array( 'title' => 'Header Social &darr;<br>Linkedin',
	'desc'	=> 'Enter full url to your profile.',
	'id'    => $shortname.'_header_social_linkedin',
	'std'	=> '',
	'type'  => 'text' );
	
$options[] = array( 'title' => 'Header Social &darr;<br>Google+',
	'desc'	=> 'Enter full url to your profile.',
	'id'    => $shortname.'_header_social_googleplus',
	'std'	=> '',
	'type'  => 'text' );
	
$options[] = array( 'title' => 'Header Social &darr;<br>Dribbble',
	'desc'	=> 'Enter full url to your profile.',
	'id'    => $shortname.'_header_social_dribbble',
	'std'	=> '',
	'type'  => 'text' );
	
$options[] = array( 'title' => 'Header Social &darr;<br>RSS',
	'desc'	=> 'Enter full url to the RSS feed.',
	'id'    => $shortname.'_header_social_rss',
	'std'	=> '',
	'type'  => 'text' );

$options[] = array( 'title' => 'Header Social &darr;<br>Instagram',
	'desc'	=> 'Enter full url to your profile.',
	'id'    => $shortname.'_header_social_instagram',
	'std'	=> '',
	'type'  => 'text' );
	
$options[] = array( 'title' => 'Breadcrumbs',
	'desc'  => 'Do you want to show the breadcrumbs?.',
	'id'    => $shortname.'_breadcrumbs',
	'std'	=> 'yes',
	'opts'  => array( 'Yes - show the breadcrumbs' => 'yes', 'No - do not show the breadcrumbs' => 'no' ),
	'type'  => 'select' );

$options[] = array( 'type'  => 'close' );

$options[] = array( 'title' => 'Boxes',
	'type'  => 'open',
	'desc'	=> '');

$options[] = array( 'title' => 'Enable/Disable',
	'desc'  => 'Do you want to show this section?.',
	'id'    => $shortname.'_boxes',
	'std'	=> 'no',
	'opts'  => array( 'Yes - show the boxes' => 'yes', 'No - do not show the boxes' => 'no' ),
	'type'  => 'select' );

$options[] = array( 'title' => 'Box 1 - Icon',
	'desc'  => 'Choose which icon you want.',
	'id'    => $shortname.'_boxes_box_1_icon',
	'std'   => 'icon-01.png',
	'opts'	=> $box_icons_array,
	'type'  => 'select' );

$options[] = array( 'title' => 'Box 1 - Title',
	'desc'	=> 'Enter the title for this box section.',
	'id'    => $shortname.'_boxes_box_1_title',
	'std'	=> 'Box Title',
	'type'  => 'text' );

$options[] = array( 'title' => 'Box 1 - Content',
	'desc'	=> 'Enter the content for this box section',
	'id'    => $shortname.'_boxes_box_1_content',
	'std'	=> 'Change this in Theme Options under the "Boxes" options.',
	'type'  => 'textarea' );

$options[] = array( 'title' => 'Box 2 - Icon',
	'desc'  => 'Choose which icon you want.',
	'id'    => $shortname.'_boxes_box_2_icon',
	'std'   => 'icon-01.png',
	'opts'	=> $box_icons_array,
	'type'  => 'select' );

$options[] = array( 'title' => 'Box 2 - Title',
	'desc'	=> 'Enter the title for this box section.',
	'id'    => $shortname.'_boxes_box_2_title',
	'std'	=> 'Box Title',
	'type'  => 'text' );

$options[] = array( 'title' => 'Box 2 - Content',
	'desc'	=> 'Enter the content for this box section',
	'id'    => $shortname.'_boxes_box_2_content',
	'std'	=> 'Change this in Theme Options under the "Boxes" options.',
	'type'  => 'textarea' );

$options[] = array( 'title' => 'Box 3 - Icon',
	'desc'  => 'Choose which icon you want.',
	'id'    => $shortname.'_boxes_box_3_icon',
	'std'   => 'icon-01.png',
	'opts'	=> $box_icons_array,
	'type'  => 'select' );

$options[] = array( 'title' => 'Box 3 - Title',
	'desc'	=> 'Enter the title for this box section.',
	'id'    => $shortname.'_boxes_box_3_title',
	'std'	=> 'Box Title',
	'type'  => 'text' );

$options[] = array( 'title' => 'Box 3 - Content',
	'desc'	=> 'Enter the content for this box section',
	'id'    => $shortname.'_boxes_box_3_content',
	'std'	=> 'Change this in Theme Options under the "Boxes" options.',
	'type'  => 'textarea' );

$options[] = array( 'type'  => 'close' );

/* -----------------------------------------------------------------
Footer
----------------------------------------------------------------- */

$options[] = array( 'title' => 'Footer',
	'type'  => 'open',
	'desc'	=> '');

$options[] = array( 'title' => 'Enable/Disable',
	'desc'  => 'Do you want to show the footer?',
	'id'    => $shortname.'_footer',
	'std'	=> 'yes',
	'opts'  => array( 'Yes - show the footer' => 'yes', 'No - do not show the footer' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 	
	'title' => 'Footer Tweet&darr;<br />Profile',
	'desc'  => 'The Twitter profile ID which will be used to show the latest tweet.',
	'id'    => $shortname.'_footer_twitter_profile',
	'std'	=> 'wpscientist',
	'type'  => 'text' 
);
	
$options[] = array( 'title' => 'Footer Type',
	'desc'  => 'What to show in the main area?',
	'id'    => $shortname.'_footer_main',
	'std'	=> 'widgets',
	'opts'  => array( 'Widgets - show the widgets section' => 'widgets', 'Custom HTML - type in the option bellow' => 'custom' ),
	'type'  => 'select' );

$options[] = array( 	'title' => 'Footer Content&darr;<br />Custom HTML',
'desc'  => 'The text that will appear in the main area of the footer. <strong>HTML allowed</strong>. <strong>Important:</strong> Choose "Custom" in the option above.',
'id'    => $shortname.'_footer_main_text',
'std'	=> '',
'type'  => 'textarea' );

$options[] = array( 	'title' => 'Footer Copyright',
'desc'  => 'The text that will appear in bottom of the footer as the copyright text.',
'id'    => $shortname.'_footer_copyright',
'std'	=> 'Copyright 2012 WPScientist',
'type'  => 'text' );

$options[] = array( 'type'  => 'close' );

/* -----------------------------------------------------------------
Blog
----------------------------------------------------------------- */

$options[] = array( 'title' => 'Blog',
	'type'  => 'open',
	'desc'	=> '');
	
$options[] = array( 'title' => 'Listing &darr;<br />Posts per page',
	'desc'  => 'How many posts do you want to show per page on the blog posts listing?',
	'id'    => $shortname.'_blog_listing_per_page',
	'std'   => '8',
	'type'  => 'text' );
	
$options[] = array( 'title' => 'Listing &darr;<br />Thumbnails',
	'desc'  => 'Do you want to show thumbnails on the blog posts listing? Also includes search page and archive pages.',
	'id'    => $shortname.'_blog_listing_thumbnails',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Show the thumbnails' => 'yes', 'No - Do not show the thumbnails' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Listing &darr;<br />Excerpt or Full',
	'desc'  => 'Do you want to show excerpts on the blog posts listing or do you want to show the full posts?',
	'id'    => $shortname.'_blog_listing_content_type',
	'std'   => 'excerpt',
	'opts'	=> array( 'Excerpt' => 'excerpt', 'Full content' => 'content' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Single &darr;<br />Thumbnail',
	'desc'  => 'Do you want to show the thumbnail?',
	'id'    => $shortname.'_blog_single_thumbnail',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Show the thumbnail' => 'yes', 'No - Do not show the thumbnail' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Single &darr;<br />Author Info',
	'desc'  => 'Do you want to show the author info?',
	'id'    => $shortname.'_blog_single_about_author',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Show the author info' => 'yes', 'No - Do not show the author info' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Single &darr;<br />Comments',
	'desc'  => 'Do you want to show the comments?',
	'id'    => $shortname.'_blog_single_comments',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Show the comments' => 'yes', 'No - Do not show the comments' => 'no' ),
	'type'  => 'select' );

$options[] = array( 'type'  => 'close' );

/* -----------------------------------------------------------------
Portfolio
----------------------------------------------------------------- */

$options[] = array( 'title' => 'Portfolio',
	'type'  => 'open',
	'desc'	=> '');
	
$options[] = array( 'title' => 'Listing &darr;<br />Posts per page',
	'desc'  => 'How many posts do you want to show per page on the portfolio posts listing?',
	'id'    => $shortname.'_portfolio_listing_per_page',
	'std'   => '8',
	'type'  => 'text' );
	
$options[] = array( 'title' => 'Listing &darr;<br />Lightbox',
	'desc'  => 'Do you want to show the media you added for the portoflio post in a lightbox when the visitor clicks the thumbnail?',
	'id'    => $shortname.'_portfolio_listing_lightbox',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Show the lightbox' => 'yes', 'No - Do not show the lightbox' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Single &darr;<br />Portfolio Listing link',
	'desc'  => 'Link for the back to portfolio listing button in sidebar.',
	'id'    => $shortname.'_portfolio_overview_link',
	'std'   => '',
	'type'  => 'text' );

$options[] = array( 'title' => 'Single &darr;<br />Project Info',
	'desc'  => 'Do you want to show the project info in the sidebar?',
	'id'    => $shortname.'_portfolio_single_info',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Show the project info' => 'yes', 'No - Do not show the project info' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Single &darr;<br />Project Info - <strong>Author</strong>',
	'desc'  => 'Do you want to show this in the project info?',
	'id'    => $shortname.'_portfolio_single_info_author',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Show author in project info' => 'yes', 'No - Do not show the author in the project info' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Single &darr;<br />Project Info - <strong>Date</strong>',
	'desc'  => 'Do you want to show this in the project info?',
	'id'    => $shortname.'_portfolio_single_info_date',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Show date in project info' => 'yes', 'No - Do not show the date in the project info' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Single &darr;<br />Project Info - <strong>Categories</strong>',
	'desc'  => 'Do you want to show this in the project info?',
	'id'    => $shortname.'_portfolio_single_info_categories',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Show categories in project info' => 'yes', 'No - Do not show the categories in the project info' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Single &darr;<br />Project Info - <strong>Client</strong>',
	'desc'  => 'Do you want to show this in the project info?',
	'id'    => $shortname.'_portfolio_single_info_client',
	'std'   => 'yes',
	'opts'	=> array( 'Yes - Show client in project info' => 'yes', 'No - Do not show the client in the project info' => 'no' ),
	'type'  => 'select' );

$options[] = array( 'title' => 'Single &darr;<br /> Comments',
	'desc'  => 'Do you want to show the comments on portfolio posts?',
	'id'    => $shortname.'_portfolio_comments',
	'std'   => 'no',
	'opts'	=> array( 'Yes - Show the comments' => 'yes', 'No - Do not show the comments' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'type'  => 'close' );

/* -----------------------------------------------------------------
First Steps
----------------------------------------------------------------- */

$options[] = array( 
	'title' => 'Custom CSS and JS',
	'type'  => 'open' 
);

$options[] = array(
	'title' => 'Custom CSS',
	'desc'  => 'Enter your custom CSS here.',
	'id'    => $shortname.'_custom_css',
	'std'   => '',
	'type'  => 'textarea'
);

$options[] = array(
	'title' => 'Custom JS',
	'desc'  => "Enter your custom JS here. If you are going to use jQuery don't forget <strong>jQuery(document).ready(function(){ code });</strong> and <strong>jQuery(window).load(function(){ code });</strong>, and use <strong>jQuery</strong> instead of <strong>$</strong>.",
	'id'    => $shortname.'_custom_js',
	'std'   => '',
	'type'  => 'textarea'
);

$options[] = array( 
	'type'  => 'close' 
);

/* -----------------------------------------------------------------
First Steps
----------------------------------------------------------------- */

$options[] = array( 'title' => 'First Steps',
	'type'  => 'open' );

$options[] = array( 'title' => 'Default Layout',
	'desc'  => 'If you already had posts and pages before you activated this theme please choose the layout they will have. Also the posts and pages you create from now on will have this as the default value.',
	'id'    => $shortname.'jw_layout',
	'std'	=> 'layout_cs',
	'opts'  => array( 'Full Content' => 'layout_c', 'Content + Sidebar' => 'layout_cs', 'Sidebar + Content' => 'layout_sc' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Default Tagline',
	'desc'  => 'If you already had posts and pages before you activated this theme please choose do you want to show the tagline area. Also the posts and pages you create from now on will have this as the default value.',
	'id'    => $shortname.'jw_tagline_show',
	'std'	=> 'yes',
	'opts'  => array( 'Yes - show the tagline area' => 'yes', 'No - do not show the tagline area' => 'no' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Archive Layout',
	'desc'  => 'Choose the layout for the blog archive page.',
	'id'    => $shortname.'_layout_archive',
	'std'   => 'layout_cs',
	'opts'	=> array( 'Full Content' => 'layout_c', 'Content + Sidebar' => 'layout_cs', 'Sidebar + Content' => 'layout_sc' ),
	'type'  => 'select' );
	
$options[] = array( 'title' => 'Search Layout',
	'desc'  => 'Choose the layout for the search page.',
	'id'    => $shortname.'_layout_search',
	'std'   => 'layout_cs',
	'opts'	=> array( 'Full Content' => 'layout_c', 'Content + Sidebar' => 'layout_cs', 'Sidebar + Content' => 'layout_sc' ),
	'type'  => 'select' );

$options[] = array( 'type'  => 'close' );