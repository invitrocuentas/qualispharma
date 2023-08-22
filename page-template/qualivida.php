<?php
/*
    Template name: qualivida
*/

get_header();

?>

<main>
    <section class="banner" style="background: url(<?php echo get_field('img_banner')['url'] ?>);">
        <div class="contenedor">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </section>

    <section class="overlaying in-right">
        <div class="contenedor">
            <div class="row">
                <div class="col">
                    <?php echo get_field('descripcion_des') ?>
                </div>
                <div class="col">
                    <img src="<?php echo get_field('imagen_des')['url'] ?>" 
                        alt="<?php echo get_field('imagen_des')['alt'] ?>" 
                        title="<?php echo get_field('imagen_des')['title'] ?>" 
                        width="<?php echo get_field('imagen_des')['width'] ?>" 
                        height="<?php echo get_field('imagen_des')['height'] ?>" 
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>