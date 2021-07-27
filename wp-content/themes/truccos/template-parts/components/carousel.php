<?php 
$left_chevron_url = get_template_directory_uri() . '/img/chevron-left.svg';
$right_chevron_url = get_template_directory_uri() . '/img/chevron-right.svg';

$args = array('posts_per_page' => -1);
$my_query = new WP_Query( $args );

?>

<?php if ( $my_query->have_posts() ): ?>
    <div class="carousel owl-carousel">
        
        <?php while ( $my_query->have_posts() ): $my_query->the_post(); ?>
            <?php
                $id = get_the_ID();
                $post_url = get_permalink($id);
                $featured_img_url = get_the_post_thumbnail_url($id,'full');
                if (empty($featured_img_url)){
                    continue;
                }  
            ?>
            
            <div class="item">
                <img class="owl-lazy" data-src="<?php echo $featured_img_url ?>" src="<?php echo $featured_img_url ?>" alt="">
                <div class="share">
                    <a href="<?php echo $featured_img_url ?>" target="_blank"><?php get_template_part('template-parts/icons/share-icon') ?></a>
                    <div class="extra-share">
                        <hr>
                        <div class="share-icons">
                            <a href="#"><?php get_template_part('template-parts/icons/fb-icon') ?></a>
                            <a href="#"><?php get_template_part('template-parts/icons/insta-icon') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


<script>
jQuery( document ).ready(function() {

    jQuery(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        lazyLoad: true,
        navText: ["<img src='<?php echo $left_chevron_url ?>'>","<img src='<?php echo $right_chevron_url ?>'>"],
        responsive: {
        0:{
            items:2,
            nav: false
        },
        600:{
            items:3,
            nav: false
        },
        1000:{
            items:4,
            nav: true
        }
        }
    });

});

</script>