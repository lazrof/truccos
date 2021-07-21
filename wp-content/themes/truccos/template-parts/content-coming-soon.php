<div class="container-fluid p-0">
    <!-- <h1 style="font-family: 'Antipasto'; font-weight: normal; font-style: normal;">Antipasto</h1> -->
    <!-- <h1><?php the_title(); ?></h1> -->
    <!-- <?php the_content(); ?> -->
    <div class="page-section">
        <div class="light light-1">
            <img src="<?php echo get_template_directory_uri() . '/img/light-1.png' ?>" alt="">
        </div>
        <div class="light light-2">
            <img src="<?php echo get_template_directory_uri() . '/img/light-2.png' ?>" alt="">
        </div>
        <div class="light light-3">
            <img src="<?php echo get_template_directory_uri() . '/img/light-3.png' ?>" alt="">
        </div>
        <div class="light light-4">
            <img src="<?php echo get_template_directory_uri() . '/img/light-4.png' ?>" alt="">
        </div>
        
        <div class="pictures pictures-girl">
            <img src="<?php echo get_template_directory_uri() . '/img/pictures-girl.png' ?>" alt="">
        </div>
        <div class="pictures pictures-boy">
            <img src="<?php echo get_template_directory_uri() . '/img/pictures-boy.png' ?>" alt="">
        </div>

        <div class="plant plant-1">
            <img src="<?php echo get_template_directory_uri() . '/img/plant-1.png' ?>" alt="" srcset="">
        </div>
        <div class="plant plant-2">
            <img src="<?php echo get_template_directory_uri() . '/img/plant-2.png' ?>" alt="" srcset="">
        </div>
        <div class="plant plant-3">
            <img src="<?php echo get_template_directory_uri() . '/img/plant-3.png' ?>" alt="" srcset="">
        </div>
        <div class="plant plant-4">
            <img src="<?php echo get_template_directory_uri() . '/img/plant-4.png' ?>" alt="" srcset="">
        </div>

        <div class="content">
            <div class="title">
                <img src="<?php echo get_template_directory_uri() . '/img/title-memories.png' ?>" alt="">
            </div>
            <h4>Coming Soon</h4>
            <p>Proximamente podrás disfrutar de nuestra</p>
            <p class="box-text">Nueva Colección Otoño-Invierno</p>

            <?php get_template_part('template-parts/components/countdown') ?>
            
            <h4>¿Estás listo para disfrutar de mucho estilo?</h4>
        </div>
        
        <div class="brands">
            <div class="brand-1">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-truccos.png' ?>" alt="">
            </div>
            <hr class="separator"></hr>
            <div class="brand-2">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-rappaz.png' ?>" alt="">
            </div>
        </div>

    </div>
</div>
