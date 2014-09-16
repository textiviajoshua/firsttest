<?php
/**
 * The template used for displaying Gallery Info on Home Page
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.3.0
 */
?>

<div class="section" id="featuredProjects">
	<div class="row">
		<div class="content medium-12 large-12 columns bottomArrow" role="main">
			<header class="entry-header">
					<h2 class="entry-title"><?php the_field('gallery_blurb_header','14'); ?>
							<small><?php the_field('gallery_blurb_subheader','14'); ?></small>
					</h2>
			</header>
		</div><!-- #content -->
	</div>
	<div class="featuredProjectsContainer">
		<div class="row">

			<div class="small-12 medium-6 columns project text-center">
					<img src="<?php the_field('gallery_featured_image','14'); ?>" alt="<?php the_title(); ?>" />
			</div>
			<div class="small-12 medium-6 columns project text-center">
			<br />
				<?php the_field('gallery_blurb','14') ?>
				<a href="/roofing-contractor-roof-repair-gallery/" class="custom_button">View All Projects <i class="fa fa-caret-right"></i></a>
			</div>
				

		</div><!-- end row -->

	</div>
</div>