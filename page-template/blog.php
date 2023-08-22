<?php
/*
    Template name: blog
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
            'post_type' => 'post', 
            'posts_per_page' => 100,
            'post_status' => 'publish'
        ));
    ?>

    <section class="blog_entries">
        <div class="contenedor">
            <?php if ( have_posts($wp_query) ) : ?>
            <div class="grilla">
                <?php while ( have_posts($wp_query) ) : the_post($wp_query);?>
                <a class="entrada w-100" href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>" alt="<?php echo get_the_title(); ?>">
                    <div class="entrada_thumbnail">
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
                    <div class="entrada_info">
                        <p><b><?php echo get_the_title(); ?></b></p>
                        <p><?php echo get_the_excerpt(); ?></p>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php wp_reset_query(); ?>
            </div>
            <?php else: ?>
            <div class="w-100">
                <p class="no-one">No hay entradas disponibles</p>
            </div>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>