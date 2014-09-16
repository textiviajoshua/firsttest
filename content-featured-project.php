<?php
/**
 * The template used for displaying Featured Projects
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
					<h2 class="entry-title">Featured Project
							<small>LOREM IPSUM DOLOR SIT AMET, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</small>
					</h2>
			</header>
		</div><!-- #content -->
	</div>
	<div class="featuredProjectsContainer">
		<div class="row">
			<?php			
				$args = array(
				  'post_type'   => 'project',
				  'posts_per_page' => '2',
				  'order' => 'DESC',
				  'tax_query' => array(
						array(
							'taxonomy' => 'project-category',
							'field' => 'slug',
							'terms' => 'featured'
						)
					)
				  
				);
			?>

		<?php query_posts($args); ?>

		<?php if(have_posts()) : ?>
		
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="small-12 medium-6 columns project text-center">
				<?php if(has_post_thumbnail()) : ?>
				<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<img src="<?php echo $featuredImage; ?>" alt="<?php the_title(); ?>" />
				<?php endif; ?>
			</div>
			<div class="small-12 medium-6 columns project">

				<h3><?php the_title(); ?>
					<?php if(get_field('project_location')) : ?>
					<small><?php the_field('project_location'); ?></small>
					<?php endif; ?>
				</h3>
				<?php the_content(); ?>
				<a href="<?php the_permalink(); ?>" class="custom_button">View This Project <i class="fa fa-caret-right"></i></a>
				<a href="/roofing-contractor-roof-repair-gallery/" class="custom_button">View All Projects <i class="fa fa-caret-right"></i></a>

			</div>
				
			
			<?php endwhile; ?>
		<?php endif; ?>

		<?php wp_reset_query(); ?>

		</div><!-- end row -->

	</div>
</div>