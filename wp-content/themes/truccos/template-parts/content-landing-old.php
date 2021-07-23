<div class="container .col-md-">
    <!-- Nav Bar -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img id="logo-1" src="<?php echo get_template_directory_uri() . '/img/logo-truccos.png' ?>" alt="">
            <div class="barra"></div>
            <img src="<?php echo get_template_directory_uri() . '/img/logo-rappaz.png' ?>" alt="">
        </a>
    </nav>
    <!-- REFACTOR -->
    <section id="imagen"></section>

    <section>
        <div class="bloque-medio .col-md-">
            <h1 class="texto-1">PASARELA</h1>
            <ul class="ul-1">Lorem ipsum dolor sit amet consectetur adipiscing elit, auctor placerat erat porta senectus sociis malesuada, arcu metus volutpat consequat nullam nisi. Quis etiam vel gravida vivamus feugiat primis fermentum, per justo fusce tempor libero nam enim, mollis morbi nullam nisi sem turpis. </ul>
            <!-- video pasarela-->
            <div class="video-imagen" style="background-image: url(<?php echo get_template_directory_uri() . '/img/runway.jpg' ?>)"></div>
            <a href="#">
                <div class="video-icon" style="background-image: url(<?php echo get_template_directory_uri() . '/img/video-icon.jpg' ?>)"></div>
            </a>
        </div>
    </section> 

    <section>
        <div class="bloque-blanco .col-md-">
            <!--galeria-->
            <div class="galeria">
                <h1 class="texto-2">GALERÍA</h1>
                <p class="ul-2">Lorem ipsum dolor sit amet consectetur adipiscing elit, auctor placerat erat porta senectus sociis malesuada, arcu metus volutpat consequat nullam nisi. Quis etiam vel gravida vivamus feugiat primis fermentum, per justo fusce tempor libero nam enim, mollis morbi nullam nisi sem turpis. </p>
            </div>
            <!--slider-->
            <div class="slider">
                <div class="carousel owl-carousel">
                
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="card"><span>a</span><img src="<?php echo get_template_directory_uri() . '/img/look-33.jpg' ?>" alt=""></div>
                <?php endfor; ?>

                </div>
            </div>
        </div>
    </section>
    
    <!--contacto con el proovedor-->
    <section>
        <div class="ultimo-bloque">
            <h1 id="texto-mayorista">¿QUIERES SER MAYORISTA TRUCCO'S?</h1>
            <button class="mayorista">¡INSCRIBETE AHORA!</button>
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="imagen-hojas-<?php echo $i; ?>" style="background-image: url(<?php echo get_template_directory_uri() . '/img/hojas-'. $i .'.png' ?>)"></div>
            <?php endfor; ?>
        </div>
    </section>
    
    <!--footer-->
    <footer>
        <nav class="navbar navbar-bottom navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img id="logo-abajo-1" src="/logo.png" alt=""><img id="logo-abajo-2" src="/image-1.png" alt="">
        </a>
        </nav>
    </footer> 
</div>   

<!-- Optional JavaScript -->
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