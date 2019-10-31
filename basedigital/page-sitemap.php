<?php
    /*Template name: Sitemap */
    get_header();
?>

<main class="sitemap">
    <div class="wrap">
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        } ?>
        
        <h1 class="title">Mapa do site Optimum</h1>
        
        <?php // echo do_shortcode( '[wp_sitemap_page]' ); ?>

        <?php wp_nav_menu(
            array(
                'theme_location' => 'mapa',
                'container'      => 'div'
            )
        ); ?>
    </div>
</main>

<?php get_footer(); ?>
