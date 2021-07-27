
<div class="container-fluid p-0 coming-soon">
    <!-- <h1 style="font-family: 'Antipasto'; font-weight: normal; font-style: normal;">Antipasto</h1> -->
    
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
            <h1><?php the_title(); ?></h1>
            <?php truccos_post_thumbnail(); ?>
            <?php the_content(); ?>
        </div>

        <?php 
        the_post_navigation(
            array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Anterior:', 'truccos' ) . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Siguiente:', 'truccos' ) . '</span> <span class="nav-title">%title</span>',
            )
        ); ?>
        
        <div class="brands">
            <div class="brand-1">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-truccos-full.png' ?>" alt="">
            </div>
            <hr class="separator"></hr>
            <div class="brand-2">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-rappaz.png' ?>" alt="">
            </div>
        </div>

    </div>
</div>




