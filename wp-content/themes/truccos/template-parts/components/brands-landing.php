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