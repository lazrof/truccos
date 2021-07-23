<?php
/*
* Template Name: Landing Old
*/


get_header(); ?>

<main id="primary" class="site-main">
		
	<div class="page-section">
		<div class="container">
			<?php if ( have_posts() ) : ?>	
				<?php while ( have_posts() ) : the_post();?>
				
					<?php get_template_part('template-parts/content-landing') ?>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>


</main><!-- #main -->



<?php get_footer(); ?>
