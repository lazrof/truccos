<?php 
$left_chevron_url = get_template_directory_uri() . '/img/chevron-left.svg';
$right_chevron_url = get_template_directory_uri() . '/img/chevron-right.svg';
?>
<div class="carousel owl-carousel">
    
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="item" style="background-image: url(<?php echo get_template_directory_uri() . "/img/campaign-pic-$i.jpg" ?>);">
            <!-- <img src="<?php echo get_template_directory_uri() . "/img/campaign-pic-$i.jpg" ?>" alt=""> -->
            <div class="share">
                <a href="#"><?php get_template_part('template-parts/icons/share-icon') ?></a>
                <div class="extra-share">
                    <hr>
                    <div class="share-icons">
                        <a href="#"><?php get_template_part('template-parts/icons/fb-icon') ?></a>
                        <a href="#"><?php get_template_part('template-parts/icons/insta-icon') ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>

</div>

<script>
jQuery( document ).ready(function() {

    jQuery(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
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