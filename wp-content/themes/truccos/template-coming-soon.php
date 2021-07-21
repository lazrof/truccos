<?php
/*
* Template Name: Coming soon
*/


get_header(); ?>

<main id="primary" class="site-main">
	
		
		<?php if ( have_posts() ) : ?>	
			<?php while ( have_posts() ) : the_post();?>
			
				<?php get_template_part('template-parts/content-coming-soon') ?>

			<?php endwhile; ?>

		<?php endif; ?>
		
	
</main><!-- #main -->



<?php get_footer(); ?>
