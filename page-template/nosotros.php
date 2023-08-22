<?php
/*
    Template name: nosotros
*/

get_header();

?>

<main>
    <section class="banner" style="background: url(<?php echo get_field('img_banner')['url'] ?>);">
        <div class="contenedor">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </section>

    <section class="somos">
        <div class="contenedor">
            <div class="contenido">
                <h2>¿Quiénes somos?</h2>
                <p>Somos una empresa farmacéutica con altos estándares de calidad, ofrecemos productos innovadores, productos de alta calidad que provienen de plantas certificadas por países de alta vigilancia. Todos nuestros productos cuentan con estudios de bioequivalencia</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>