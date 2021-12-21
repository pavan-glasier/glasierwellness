<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage glasier_wellness
 * @since Glasier Wellness 1.0
 */

get_header();

?>

<?php if ($post->post_type=='products'){ ?>

	<?php get_template_part('products/category-page'); ?>

<?php } else if ($post->post_type=='post'){ ?>
	<?php get_template_part('blogs/category-page'); ?>
<?php } else {?>
	
<?php if ( have_posts() ) : ?>
<!-- hello -->
<header class="page-header alignwide">
	<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
	<?php if ( $description ) : ?>
		<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
	<?php endif; ?>
</header><!-- .page-header -->

<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
<?php endwhile; ?>

<?php glasier_wellness_the_posts_navigation(); ?>

<?php else : ?>
<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php } ?>








<?php get_footer(); ?>
