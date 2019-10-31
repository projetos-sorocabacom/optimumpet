<?php

    /*Template name: Conheça Waltham */
    
    get_header();

?>


<main class="know-main inner-main">

    <section class="know section_inner first_section">
        
        <div class="wrap">

            <h1 class="title"><?php the_title(); ?></h1>

            <span class="description">
                <?php echo get_field("subtitulo_conheca"); ?>
            </span>

            <figure class="figure_section">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                <?php $image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true); ?>
                
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>">
            </figure>

            <div class="text">
                <?php the_content(); ?>
            </div>
            
        </div>
        

    </section>

</main>


<?php get_footer(); ?>
