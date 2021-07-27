<?php 
$sample_lorem = "Lorem Ipsum is simply3 dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";

$video_title = get_field('video_title') ? get_field('video_title')  : 'Pasarela';
$video_text = get_field('video_text') ? get_field('video_text')  : $sample_lorem;
$video_iframe = get_field('video_iframe_url') ? get_field('video_iframe_url')  : false ; 

$gallery_title = get_field('gallery_title') ? get_field('gallery_title')  : 'Galería';
$gallery_text = get_field('gallery_text') ? get_field('gallery_text')  : $sample_lorem;

$wholesalers_title = get_field('mayoristas_title') ? get_field('mayoristas_title')  : '¿Te gustaría ser mayorista truccos?';

$link = get_field('mayoristas_button');
if( $link ){
    $link_url = $link['url'] ? $link['url'] : '#';
    $link_title = $link['title'] ? $link['title'] : '¡Inscríbete ahora!';
    $link_target = $link['target'] ? $link['target'] : '_blank';
}

?>

<div class="page-section">
    <div class="container p-0">
        
        <div class="row">
            <div class="col-12">
                <div class="brands">
                    <div class="brand-1">
                        <?php if (get_field('truccos_logo')): ?>
                            <img src="<?php the_field('truccos_logo') ?>" alt="Truccos Logo">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri() . '/img/logo-truccos.png' ?>" alt="Truccos"> 
                        <?php endif ?>
                    </div>
                    <hr class="separator"></hr>
                    <div class="brand-2">
                        <?php if (get_field('rappaz_logo')): ?>
                            <img src="<?php the_field('rappaz_logo') ?>" alt="Rappaz Logo">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri() . '/img/logo-rappaz.png' ?>" alt="Rappaz">
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="first-banner">
                    <?php if (get_field('first_banner_image')): ?>
                        <img src="<?php the_field('first_banner_image') ?>" alt="Pasarela Banner">
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri() . '/img/landing-first-banner.jpg' ?>" alt="Pasarela Primer Banner">
                    <?php endif ?>
                </div>
            </div>
            <div class="col-12">
                <div class="runway-section">
                    <h2><?php echo $video_title ?></h2>
                    <p><?php echo $video_text ?></p>

                    <div class="runway-video">
                        <?php if (empty($video_iframe)): ?>
                        <div class="video">
                            <div class="play-icon">
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <img src="<?php echo get_template_directory_uri() . '/img/video-icon.png' ?>" alt="Video Play Icon">
                                </a>
                            </div>
                            <img src="<?php echo get_template_directory_uri() . '/img/runway.jpg' ?>" alt="Pasarela">
                        </div>
                        <?php else: ?>
                            <?php echo $video_iframe; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="gallery-section">
                    <h2><?php echo $gallery_title ?></h2>
                    <p><?php echo $gallery_text ?></p>
                    
                    <?php get_template_part('template-parts/components/carousel') ?>
                    
                </div>
            </div>
            <div class="col-12">
                <div class="wholesalers" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-blue-wall.png' ?>);">
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
                        <img src="<?php echo get_template_directory_uri() . '/img/plant-4-cam.png' ?>" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h2><?php echo $wholesalers_title ?></h2>
                        <div class="button">
                            <a href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="brands landing">
                    <div class="brand-1">
                        <img src="<?php echo get_template_directory_uri() . '/img/logo-truccos.png' ?>" alt="Truccos">
                    </div>
                    <hr class="separator"></hr>
                    <div class="brand-2">
                        <img src="<?php echo get_template_directory_uri() . '/img/logo-rappaz.png' ?>" alt="Rappaz">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>