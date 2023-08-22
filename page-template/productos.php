<?php
/*
    Template name: productos
*/

get_header();

?>

<main>
    <section class="banner" style="background: url(<?php echo get_field('img_banner')['url'] ?>);">
        <div class="contenedor">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </section>

    <?php 
        $wp_query = new WP_Query( array(
            'post_type' => 'producto', 
            'posts_per_page' => 100,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'ASC'
        ));
    ?>

    <section class="productos">
        <div class="contenedor">
            <?php if ( have_posts($wp_query) ) : ?>
            <div class="productos_grid">
                <?php while ( have_posts($wp_query) ) : the_post($wp_query);?>
                <?php 
                    $thumbID = get_post_thumbnail_id( $post->ID );
                    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                    if(!empty($imgDestacada)):
                ?>
                <div class="product">
                    <div class="product_image">
                        <?php echo '<img src="'.$imgDestacada[0].'" title="'.get_the_title().'" alt="'.get_the_title().'">'; ?>
                    </div>
                    <div class="product_info w-100">
                        <div class="product_info_content">
                            <p><?php echo get_the_title(); ?></p>
                            <p><b>Vildagliptina 50 mg + Metformina 1000 mg</b>Caja x 30 tabletas</p>
                        </div>
                        <div class="product_info_link">
                            <a href="<?php the_permalink(); ?>">Ver más</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php else: ?>
            <div class="w-100">
                <p class="no-one">No hay productos disponibles</p>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php get_template_part('inc/contacto'); ?>
</main>

<?php get_footer(); ?>