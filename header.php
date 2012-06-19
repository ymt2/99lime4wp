<?php
/**
 * 
 *
 * 
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since 
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="title" content="" />
<meta name="description" content="" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

?></title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/prettify.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/kickstart.js"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/kickstart.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css" media="all" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 *
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>><a id="top-of-page" ></a><div id="wrap" class="clearfix">

<?php
wp_nav_menu(array(
	'container' => 'div'
	,'container_id' => 'nav'
//	,'container_class' => 'menu-header'
//	,'theme_location' => 'primary'
	,'menu_class' => 'menu'
));
?>