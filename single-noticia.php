<?php

get_header();

$args = array(
    'post_type' => 'noticia',
    'posts_per_page' => 10,
    'post__not_in' => array(get_the_ID()), // Excluir el producto actual
);

$similars = new WP_Query($args);

?>

<main>
    <section class="banner" style="background: url(<?php echo IMG; ?>/noticia.svg);">
        <div class="contenedor">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </section>

    <section class="noticia_content w-100">
        <div class="contenedor">
            <?php the_content(); ?>
        </div>
    </section>

    <?php if($similars->have_posts()): ?>
    <section class="similares">
        <div class="contenedor">

            <div class="splide" id="similares">
                <div class="splide__track">
            		<ul class="splide__list">
                        <?php while($similars->have_posts()): $similars->the_post(); ?>
            			<li class="splide__slide">
                            <a class="noticia w-100" href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>" alt="<?php echo get_the_title(); ?>">
                                <div class="noticia_thumbnail">
                                    <?php 
                                        $thumbID = get_post_thumbnail_id( $post->ID );
                                        $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                                        if(!empty($imgDestacada)){
                                            echo '<img src="'.$imgDestacada[0].'" title="'.get_the_title().'" alt="'.get_the_title().'" class="w-100">';
                                        }else{
                                            echo '<div></div>';
                                        }
                                    ?>
                                </div>
                                <div class="noticia_info">
                                    <p><b><?php echo get_the_title(); ?></b></p>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </a>
                        </li>
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