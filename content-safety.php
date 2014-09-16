<section id="safety">
	<div class="row">
		<div class="content medium-12 large-12 columns" role="main">

			<?php if(!is_front_page()) : ?> <hr /> <?php endif; ?>
			<header class="entry-header">
				<?php if (get_field('red_section_header','options')) : ?>
					<h2 class="entry-title"><?php the_field('red_section_header','options'); ?>
						<?php if(get_field('red_section_subheader','options')) : ?>
							<small><?php the_field('red_section_subheader','options'); ?></small>
						<?php endif; ?>
					</h2>
				<?php endif; ?>
			</header>
			
			<?php if(get_field('red_section_content_area','options')) : ?>
				<?php the_field('red_section_content_area','options'); ?>
			<?php endif; ?>

			<?php if(get_field('red_section_button_link_text','options')) : ?>
				<a href="<?php the_field('red_section_button_link','options'); ?>" class="custom_button">
					<?php the_field('red_section_button_link_text','options'); ?>  <i class="fa fa-caret-right"></i>
				</a>
			<?php endif; ?>			
			
		</div><!-- #content -->
	</div>
</section>