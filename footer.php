<footer>
    <div class="contenedor">
        <div class="grilla">
            <div class="nav_logo">
                <img src="<?php echo IMG; ?>/logo-white.svg" class="logo" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
            </div>
            <div class="nav_menu">
                <?php wp_nav_menu(array('theme_location'=>'header-menu','container_class'=>'navbar_links','menu_class'=>'ul_menu')); ?>
            </div>
            <div class="nav_contact">
                <p><b>Contacto</b></p>
                <?php echo get_template_part('inc/information') ?>
            </div>
        </div>
    </div>
    <div class="contenedor">
        <svg id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg" width="45.286" height="45.286" viewBox="0 0 45.286 45.286">
            <g id="Capa_1" data-name="Capa 1">
                <path id="Trazado_8004" data-name="Trazado 8004" d="M41.169,0H4.117A4.117,4.117,0,0,0,0,4.117V41.169a4.117,4.117,0,0,0,4.117,4.117H41.169a4.117,4.117,0,0,0,4.117-4.117V4.117A4.117,4.117,0,0,0,41.169,0ZM14.409,37.052H8.234V17.517h6.175ZM11.219,14.718a3.541,3.541,0,1,1,3.541-3.541,3.541,3.541,0,0,1-3.541,3.541ZM37.052,37.052H31v-9.51c0-2.264,0-5.167-3.17-5.167s-3.643,2.47-3.643,5v9.675H18.114V17.517H23.94v2.676h0a6.4,6.4,0,0,1,5.743-3.17c6.175,0,7.287,4.117,7.287,9.3Z" fill="#fff"/>
            </g>
        </svg>
    </div>
</footer>

<?php wp_footer();?>

<script>
    window.addEventListener('DOMContentLoaded', function() {
        var header = document.querySelector('header');
        var body = document.querySelector('body');  
        if (header) {
            var headerHeight = header.offsetHeight;
            body.style.paddingTop = headerHeight + 'px';
        }
    });
</script>

</body>
</html>