<?php

/**
 * 
 * Template Name: getID
 * 
 **/
	$the_query = new WP_Query(
		array(
			'posts_per_page' => 1,
			'p' => $_POST['postID'],
			'post_type' => 'products'
		)
	);
?>
		<?php
		if ($the_query->have_posts()) :
			while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<div class="postThumb">
					<?php
						if (has_post_thumbnail()) { ?>
							<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($_POST['postID']), 'full'); ?>" class="img-fluid" alt="<?php echo get_the_title(); ?>">
						<?php } else { ?>
							<img src="<?= site_url(); ?>/wp-content/uploads/2021/12/no-preview.png" alt="noprivew">
						<?php }
						?>
					</div>

					<div class="title-wrap">
						<h2 class="h1"><?php echo get_the_title(); ?> </h2>
						<div class="h-decor"></div>
					</div>
					<p><?php the_excerpt() ?></p>
					<div class="mt-4"></div>
					<?php echo do_shortcode('[contact-form-7 id="200" title="Inquiry Form"]');?>

		<?php endwhile;
			wp_reset_postdata();
		else :
			echo '<span>No Results Found !</span>';
		endif;
// die();
?>