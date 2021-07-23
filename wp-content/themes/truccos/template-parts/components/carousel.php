<div class="carousel owl-carousel">
    
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="item"><img src="<?php echo get_template_directory_uri() . "/img/campaign-pic-$i.jpg" ?>" alt=""></div>
    <?php endfor; ?>

</div>

<script>
jQuery( document ).ready(function() {

    jQuery(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
        0:{
            items:1,
            nav: false
        },
        600:{
            items:2,
            nav: false
        },
        1000:{
            items:3,
            nav: false
        }
        }
    });

});

</script>