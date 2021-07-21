<?php
/*
* Template Name: Coming soon
*/


get_header(); ?>

<main id="primary" class="site-main">
		
	<div class="page-section">
		<div class="container">
			<?php if ( have_posts() ) : ?>	
				<?php while ( have_posts() ) : the_post();?>
				
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>

			<?php else: ?>
				<h4>No posts were found.</h4>
			<?php endif; ?>
		</div>
	</div>


</main><!-- #main -->



<?php get_footer(); ?>
