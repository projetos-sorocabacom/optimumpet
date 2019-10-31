<?php get_header(); ?>

<main class="page404">
    <section class="info404">
        <h1>404</h1>
        <p>A página que você procura não existe ou está fora do ar.</p>
    </section>
    
    <?php
        // Relacionados #####
        $values = get_field('produtos-relacionados', 835);
    
        if($values)
        {
            echo'<section class="related">';
                echo'<div class="wrap">';
                    echo'<h2>Conheça nossos produtos</h2>';
                    foreach($values as $value)
                    {
                    ?>
                        <div class="product_related">
                            <figure>
                                <a href="<?php echo get_permalink($value->ID); ?>">
                                    <img src="<?php echo get_field("imagem_produto_desktop", $value->ID)['url']; ?>" alt="<?php echo get_field("imagem_produto_desktop", $value->ID)['alt']; ?>">
                                </a>
                            </figure>
                                
                            <h3>
                                <a href="<?php echo get_permalink($value->ID); ?>">
                                    <?php echo $value->post_title;?>
                                </a>
                            </h3>

                            <a href="<?php echo get_permalink($value->ID); ?>" class="btn-dark white" data-action="conheca" data-category="<?php echo get_page_uri( $value->ID ); ?>" data-label="">CONHEÇA</a>

                            <a href="#" class="btn-dark buy" data-action="comprar" data-category="<?php echo get_page_uri( $value->ID ); ?>" data-label="" data-cobasi="<?php echo get_field("cobasi", $value->ID); ?>" data-petlove="<?php echo get_field("petlove", $value->ID); ?>" data-petz="<?php echo get_field("petz", $value->ID); ?>" data-produto="<?php echo get_page_uri( $value->ID ); ?>">Comprar</a>
                        </div>
                    <?php
                    }
                echo'</div>';
            echo'</section>';
        }
        // var_dump($values);
    ?>
</main>

<?php get_footer(); ?>