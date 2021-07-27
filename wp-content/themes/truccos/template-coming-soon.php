<?php
/*
* Template Name: Coming soon
*/


get_header(); 
date_default_timezone_set('America/Bogota');

$now = date("y-m-d");
$target = "21-07-26";

// date into dateTimestamp
$now_date = strtotime($now);
$target_date = strtotime($target);

?>

<?php if ( have_posts() ) : ?>	
	<?php while ( have_posts() ) : the_post();?>

		<?php if ($now_date < $target_date): ?>
			<main id="primary" class="site-main">	
			<?php get_template_part('template-parts/content-coming-soon') ?>
			</main>
		
		<?php else: ?>
			<main id="primary" class="landing">	
			<?php get_template_part('template-parts/content-landing') ?>
			</main>
		<?php endif; ?>
		

	<?php endwhile; ?>

<?php endif; ?>
		
<?php get_footer(); ?>
