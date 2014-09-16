<?php
/**
 * The template used for displaying secondary page content in page.php
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.3.0
 */
?>

<section class="secondaryContent" id="secondary">
	<div class="row">
		<div class="content medium-12 large-12 columns" role="main">

			<?php if (get_field('secondary_alternate_header')) : ?>
			<header class="entry-header">
				<h2 class="entry-title"><?php the_field('secondary_alternate_header'); ?>
				    <?php if(get_field('secondary_alternate_subheader')) : ?>
				    	<small><?php the_field('secondary_alternate_subheader'); ?></small>
				    <?php endif; ?>
				</h2>
				<hr class="smallDivider" />
			</header>
			<?php endif; ?>
			
			<?php if(get_field('secondary_content_area')) : ?>
				<?php the_field('secondary_content_area'); ?>
			<?php endif; ?>
		</div><!-- #content -->
	</div>
</section>