<?php

get_header();

$args = array(
    'post_type' => 'producto',
    'posts_per_page' => 10,
    'post__not_in' => array(get_the_ID()), // Excluir el producto actual
);

$similars = new WP_Query($args);

?>

<main>
    <?php if ($similars->have_posts()) : ?>
        <section class="similares">
            <div class="contenedor">
                <h2>Ver otros productos</h2>
                <div class="splide" id="similares">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while ($similars->have_posts()) : $similars->the_post(); ?>
                                <?php 
                                    $thumbID = get_post_thumbnail_id( $post->ID );
                                    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                                    if(!empty($imgDestacada)):
                                ?>
                                <li class="splide__slide">
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
                                </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>