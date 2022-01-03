<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage glasier_wellness
 * @since Glasier Wellness 1.0
 */

?>


<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="<?php echo site_url()?>">Home</a>
					<span><?php the_title()?></span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				
				<h1><?php the_title()?></h1>
				<div class="h-decor"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">

				<div class="col-lg-12 mt-3 mb-3 mt-lg-0">
					<?php echo the_content()?>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
</div>