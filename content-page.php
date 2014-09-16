<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.3.0
 */
?>


	    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	    		<header class="entry-header">
	    			<?php if (get_field('alternate_header')) : ?>
	    				<h2 class="entry-title"><?php the_field('alternate_header'); ?>
	    					<?php if(get_field('alternate_subheader')) : ?>
	    						<small><?php the_field('alternate_subheader'); ?></small>
	    					<?php endif; ?>
	    				</h2>
						<hr class="smallDivider" />
	    			<?php else : ?>
	    				<h2 class="entry-title"><?php the_title(); ?></h2>
						<hr class="smallDivider" />
	    			<?php endif; ?>
	    		</header>
	
	    	<div class="entry-content">
	    		<?php the_content(); ?>
	    	</div><!-- .entry-content -->	
	    </article><!-- #post -->
