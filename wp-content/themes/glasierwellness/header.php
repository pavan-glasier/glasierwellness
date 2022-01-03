<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage glasier_wellness
 * @since Glasier Wellness 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php glasierwellness_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class('shop-page layout-medlab stickNav'); ?>>
<?php wp_body_open(); ?>
	
 <?php get_template_part( 'template-parts/header/site-header' ); ?>