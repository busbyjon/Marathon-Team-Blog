<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
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

	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/print.css" type="text/css" media="print" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--[if IE]>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie.css" type="text/css" media="screen, projection" />
<![endif]--><!-- Import fancy-type plugin. -->
	<!-- end css -->
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<div class="prepend-1 append-1 span-22 last">
				<!-- start header  -->
				<div id="header" class="span-22 last">
					<div id='logo' class="span-4 border left-border">
						&nbsp;
					</div>
					<div id='widget-area' class='prepend-1 append-1 span-10'>
						<div class="span-3">
							<div class="top_left"></div>
						</div>
						<div class="span-7 last">
							&nbsp;
						</div>
					</div>
					<div id='donate-area' class='span-6 last'>
						<div class="span-2">
							<a href='#'><img src="<?php bloginfo('template_directory'); ?>/images/btn_donate_large.gif" width="80" height="105" /></a>
						</div>
						<div class="span-4 last">
							<div class="top_right"></div>
						</div>
					</div>
				</div>
				<!-- end header -->
				<!-- start nav -->
				<div id='navbar' class="nav_container span-22 last">
					<ul>
					<li><a href='/'>Home</a></li>
										</ul>
					<?php wp_nav_menu(); ?>

				</div>
				<!-- end nav  -->