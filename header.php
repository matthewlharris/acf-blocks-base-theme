<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- <link rel="icon" href="favicon-url-here.png" /> -->
	<?php wp_head(); ?>
	<?php
	$theme_bg_color = get_field('theme_background_color', 'option');
	$header_bg_color = get_field('header_background_color', 'option');
	$header_sticky = get_field('header_sticky', 'option');
	?>
	
	<style>
	body {
		background-color: <?php echo $theme_bg_color; ?>;
	}	
	</style>
</head>

<body <?php body_class(); ?>>

<header 
	id="main-header" 
	style="background-color: <?php echo $header_bg_color ? $header_bg_color : '#fff'; ?>; <?php echo $header_sticky === 'yes' ? 'position: sticky' : ''; ?>;"
>
	<?php
	$header_id = get_field('header', 'option');
	$header_content = '';
	if($header_id) {
		$header_content = apply_filters( 'the_content', get_post_field( 'post_content', $header_id ) );
	}
	echo $header_content;
	?>
</header>

<div id="page-wrapper">