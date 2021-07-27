<?php
/*
* Template Name: Landing
*/


get_header(); ?>

<main id="primary">
		
	<div class="page-section">
		<div class="container p-0">
			<?php if ( have_posts() ) : ?>	
				<?php while ( have_posts() ) : the_post();?>
				
					<?php get_template_part('template-parts/content-landing') ?>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>


</main><!-- #main -->



<?php get_footer(); ?>
