<?php
get_header();

$acestralCategories = get_ancestors($wp_query->get_queried_object()->term_id, 'category', 'taxonomy');
$actual_category = $wp_query->get_queried_object()->term_id;

$alimentos_cachorros_secos = array(11, 13, 14, 15, 16);
$alimentos_cachorros_umidos = array(6, 7, 8, 9, 10);

$adultos = array(13, 7, 23, 19);
$filhotes = array(14, 8, 24, 20);

$secos = array(11, 13, 15, 14, 16, 17, 23, 25, 24, 26);
$umidos = array(6, 7, 8, 9, 10, 18, 19, 20, 22);

if ($wp_query->get_queried_object()->term_id === 3 || end($acestralCategories) === 3) {
    $type_animal = 'cães';
    $type_animal_singular = 'cão';
    $id_todos = 3;
    $link_todos = get_term_link($id_todos);

    //Secos
    $id_todos_seco = 11;
    $id_filhote_seco = 14;
    $id_adulto_seco = 13;

    $link_filhote_seco = get_term_link($id_filhote_seco);
    $link_adulto_seco = get_term_link($id_adulto_seco);
    $link_todos_seco = get_term_link($id_todos_seco);

    //Umidos
    $id_todos_umidos = 6;
    $id_adulto_umido = 7;
    $id_filhote_umido = 8;

    $link_filhote_umido = get_term_link($id_filhote_umido);
    $link_adulto_umido = get_term_link($id_adulto_umido);
    $link_todos_umido = get_term_link($id_todos_umidos);

    if (in_array($actual_category, $adultos)) {
        $idade = "Adulto";
    } else if (in_array($actual_category, $filhotes)) {
        $idade = "Filhote";
    } else {
        $idade = wp_is_mobile() ? "Idade" : "Idade do cão";
    }

} else {
    $type_animal = 'gatos';
    $type_animal_singular = 'gato';
    $id_todos = 4;
    $link_todos = get_term_link($id_todos);

    //Secos
    $id_todos_seco = 17;
    $id_adulto_seco = 23;
    $id_filhote_seco = 24;

    $link_filhote_seco = get_term_link($id_filhote_seco);
    $link_adulto_seco = get_term_link($id_adulto_seco);
    $link_todos_seco = get_term_link($id_todos_seco);

    //Úmidos
    $id_todos_umidos = 18;
    $id_adulto_umido = 19;
    $id_filhote_umido = 20;

    $link_filhote_umido = get_term_link($id_filhote_umido);
    $link_adulto_umido = get_term_link($id_adulto_umido);
    $link_todos_umido = get_term_link($id_todos_umidos);

    if (in_array($actual_category, $adultos)) {
        $idade = "Adulto";
    } else if (in_array($actual_category, $filhotes)) {
        $idade = "Filhote";
    } else {
        $idade = wp_is_mobile() ? "Idade" : "Idade do gato";
    }

}


if (in_array($actual_category, $secos)) {
    $tipo_alimento = "Secos";
} else if (in_array($actual_category, $umidos)) {
    $tipo_alimento = "Úmidos";
} else {
    $tipo_alimento = wp_is_mobile() ? "Tipo" : "Tipo de alimento";
}

$term = get_queried_object();

?>

    <div class="modal-stores">
        <a href="#" class="close"></a>

        <div class="box-content">
            <h6>Lojas Parceiras</h6>
            <p>Escolha uma de nossas lojas parceiras para comprar.</p>

            <ul class="list-stores">
                <li>
                    <a href="" target="_blank" class="cobasi" data-action="cobasi" data-category="comprar" data-label="" data-value="produtos-para-<?php echo $type_animal; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/comprar-racao-optimum-na-cobasi.png" alt="Comprar Ração OPTIMUM na Cobasi">
                    </a>
                </li>
                <li>
                    <a href="" target="_blank" class="petlove" data-action="petlove" data-category="comprar" data-label="" data-value="produtos-para-<?php echo $type_animal; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/comprar-racao-optimum-na-petlove.png" alt="Comprar Ração OPTIMUM na Petlove">
                    </a>
                </li>
                <li>
                    <a href="" target="_blank" class="petz" data-action="petz" data-category="comprar" data-label="" data-value="produtos-para-<?php echo $type_animal; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/comprar-racao-optimum-na-petz.png" alt="Comprar Ração OPTIMUM na Petz">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <main class="product">
        <h1 class="title-main"><?php echo get_field("categoria", $term);?></h1>

        <div class="container">
            <div class="box-filtro">
                <p class="text">Filtrar por:</p>

                <div class="select-custom show tipo-alimento">
                    <p class="selected"><?php echo $tipo_alimento; ?></p>
                    <ul class="list-option">
                        <li>
                            <label>
                                <input type="radio" name="type_food" value="<?php echo $id_todos; ?>" data-url="<?php echo $link_todos; ?>" data-action="todos" data-category="filtro-tipo" data-label="local-">
                                <span>Todos<span>
                            </label>
                        </li>
                        <?php
                        /*
                        <li>
                            <label>
                                <input type="radio" name="type_food" value="<?php echo $id_todos_seco; ?>" data-url="<?php echo $link_todos_seco; ?>">
                                <span>Alimento seco</span>
                            </label>
                        </li>
                        */ ?>
                        <li>
                            <label>
                                <input type="radio" name="type_food" value="<?php echo $id_adulto_umido; ?>" data-url="<?php echo $link_todos_umido; ?>" data-action="alimento umido" data-category="filtro-tipo" data-label="local-">
                                <span><?php echo wp_is_mobile() ? "Úmida" : "Ração úmida"?></span>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="select-custom secos idade-animal <?php echo in_array($actual_category, $secos) ? "show" : "" ?>">
                    <p class="selected"><?php echo $idade; ?></p>
                    <ul class="list-option">
                        <li>
                            <label>
                                <input type="radio" name="age_dog" value="<?php echo $id_todos_secos; ?>" data-action="todos" data-category="filtro-idade" data-label="local-">
                                <span>Todos</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="age_dog" value="<?php echo $id_filhote_seco; ?>" data-url="<?php echo $link_filhote_seco; ?>" data-action="filhote" data-category="filtro-idade" data-label="local-">
                                <span>Filhote</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="age_dog" value="<?php echo $id_adulto_seco; ?>" data-url="<?php echo $link_adulto_seco; ?>" data-action="adulto" data-category="filtro-idade" data-label="local-">
                                <span>Adulto</span>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="select-custom umidos idade-animal <?php echo in_array($actual_category, $umidos) ? "show" : "" ?>">
                    <p class="selected"><?php echo $idade; ?></p>
                    <ul class="list-option">
                        <li>
                            <label>
                                <input type="radio" name="age_dog" value="<?php echo $id_todos_umidos; ?>" data-action="todos" data-category="filtro-idade" data-label="local-">
                                <span>Todos</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="age_dog" value="<?php echo $id_filhote_umido; ?>" data-url="<?php echo $link_filhote_umido; ?>" data-action="filhote" data-category="filtro-idade" data-label="local-">
                                <span>Filhote</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="age_dog" value="<?php echo $id_adulto_umido; ?>" data-url="<?php echo $link_adulto_umido; ?>" data-action="adulto" data-category="filtro-idade" data-label="local-">
                                <span>Adulto</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-product">
                <div class="box-loader">
                    <div class="sk-cube-grid">
                        <div class="sk-cube sk-cube1"></div>
                        <div class="sk-cube sk-cube2"></div>
                        <div class="sk-cube sk-cube3"></div>
                        <div class="sk-cube sk-cube4"></div>
                        <div class="sk-cube sk-cube5"></div>
                        <div class="sk-cube sk-cube6"></div>
                        <div class="sk-cube sk-cube7"></div>
                        <div class="sk-cube sk-cube8"></div>
                        <div class="sk-cube sk-cube9"></div>
                    </div>
                </div>

                <div class="box-product">
                    <h4 class="title-section"><?php echo $wp_query->get_queried_object()->name; ?></h4>

                    <ul class="list-products">
                        <?php
                        $products = get_posts(array(
                            'category' => $wp_query->get_queried_object()->term_id,
                            'posts_per_page' => -1
                        ));

                        foreach ($products as $product) {
                            
                            $imagem_url = get_field("imagem_produto_desktop", $product->ID);
                            // $image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);
                            
                            ?>
                            <li>
                                <a href="<?php echo get_permalink($product->ID); ?>" data-action="<?php echo get_page_uri( $product->ID ); ?>" data-category="produtos-para-<?php echo $type_animal; ?>" data-label="">
                                    <img src="<?php echo $imagem_url['url']; ?>" alt="<?php echo $imagem_url['alt']; ?>">
                                </a>

                                <a href="<?php echo get_permalink($product->ID); ?>" class="title-product" data-action="<?php echo get_page_uri( $product->ID ); ?>" data-category="produtos-para-<?php echo $type_animal; ?>" data-label="">
                                    <h3>
                                        <?php echo $product->post_title; ?>
                                    </h3>
                                </a>

                                <a href="<?php echo get_permalink($product->ID); ?>" class="btn-dark white" data-action="conheca" data-category="<?php echo get_page_uri( $product->ID ); ?>" data-label="">CONHEÇA</a>

                                <a href="#" class="btn-dark buy" data-action="comprar" data-category="<?php echo get_page_uri( $product->ID ); ?>" data-label="" data-cobasi="<?php echo get_field("cobasi", $product->ID); ?>" data-petlove="<?php echo get_field("petlove", $product->ID); ?>" data-petz="<?php echo get_field("petz", $product->ID); ?>" data-produto="<?php echo get_page_uri( $product->ID ); ?>">Comprar</a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>