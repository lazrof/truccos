<div class="row">
    <div class="col-12">
        <div class="brands">
            <div class="brand-1">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-truccos.png' ?>" alt="Truccos">
            </div>
            <hr class="separator"></hr>
            <div class="brand-2">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-rappaz.png' ?>" alt="Rappaz">
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="first-banner">
            <img src="<?php echo get_template_directory_uri() . '/img/landing-first-banner.jpg' ?>" alt="Pasarela">
        </div>
    </div>
    <div class="col-12">
        <div class="runway-section">
            <h2>Pasarela</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

            <div class="runway-video">
                <div class="video">
                    <div class="play-icon">
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri() . '/img/video-icon.png' ?>" alt="Video Play Icon">
                        </a>
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/img/runway.jpg' ?>" alt="Pasarela">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="gallery-section">
            <h2>Galería</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            
            <?php get_template_part('template-parts/components/carousel') ?>
            
        </div>
    </div>

</div>