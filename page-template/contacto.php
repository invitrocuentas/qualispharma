<?php
/*
    Template name: contacto
*/

get_header();

?>

<main>
    <section class="banner" style="background: url(<?php echo get_field('img_banner')['url'] ?>);">
        <div class="contenedor">
            <h1>Contacto</h1>
        </div>
    </section>
    <section class="contacto">
        <div class="contenedor">
            <div class="row">
                <div class="col">
                    <div class="contenido">
                        <img src="<?php echo IMG; ?>/logo.svg">
                        <?php echo get_template_part('inc/information') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form_box">
                        <p>Completa el siguiente formulario y te enviaremos la información que necesitas.</p>
                        <?php echo do_shortcode('[contact-form-7 id="40" title="Formulario de Contacto"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacto_mapa">
        <div class="contenedor">
            <img src="<?php echo get_field('imagen_mapa')['url'] ?>" 
                title="<?php echo get_field('imagen_mapa')['title'] ?>" 
                alt="<?php echo get_field('imagen_mapa')['alt'] ?>" 
                width="<?php echo get_field('imagen_mapa')['width'] ?>" 
                height="<?php echo get_field('imagen_mapa')['height'] ?>" 
                loading="lazy" class="w-100">
        </div>
    </section>
</main>

<?php get_footer(); ?>