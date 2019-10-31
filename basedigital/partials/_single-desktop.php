<?php
    get_header();

    $categorias = get_the_category($post->ID);
    
    if($categorias[0]->term_id == 3){
        $animal = "cão";
    }else{
        $animal = "gato";
    }

?>

<main class="detail-product">
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="section">

    <?php // echo get_field("produtos-relacionados");?>

    <?php
        // Relacionados #####
        $values = get_field('produtos-relacionados');
    
        if($values)
        {
            echo'<section class="related">';
                echo'<div class="wrap">';
                    echo'<h2>Alimentos relacionados</h2>';
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

    
           

        <div class="image-animal" style="background-image: url(<?php echo get_field("imagem_animal_desktop")['url']; ?>);"></div>

        <div class="compre">
            <div class="container-conteudo">
                <div class="conteudo">
                    <h3>Experimente OPTIMUM™</h3>
                    <p>Compre agora nossos produtos sem sair de casa.</p>

                    <a href="#" target="_blank" class="btn-dark buy" data-cobasi="<?php echo get_field("cobasi"); ?>" data-petlove="<?php echo get_field("petlove"); ?>" data-petz="<?php echo get_field("petz"); ?>" data-action="comprar" data-category="experimente-optimum" data-label="<?php echo get_page_uri( $post->ID ); ?>">COMPRAR</a>
                </div>
            </div>
        </div>
        <?php get_template_part("partials/footer"); ?>
    </div>
</main>

<div class="modal-stores">
    <a href="#" class="close"></a>

    <div class="box-content">
        <h6>Lojas Parceiras</h6>
        <p>Escolha uma de nossas lojas parceiras para comprar.</p>

        <ul class="list-stores">
            <li>
                <a href="" target="_blank" class="cobasi" data-action="cobasi" data-category="lojas-parceiras" data-label="" data-value="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/cobasi.png" alt="Comprar Ração OPTIMUM na Cobasi">
                </a>
            </li>
            <li>
                <a href="" target="_blank" class="petlove" data-action="petlove" data-category="lojas-parceiras" data-label="" data-value="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/comprar-racao-optimum-na-petlove.png" alt="Comprar Ração OPTIMUM na Petlove">
                </a>
            </li>
            <li>
                <a href="" target="_blank" class="petz" data-action="petz" data-category="lojas-parceiras" data-label="" data-value="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/comprar-racao-optimum-na-petz.png" alt="Comprar Ração OPTIMUM na Petz">
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="modal-niveis-garantia">
    <a href="#" class="close"></a>

    <h6>Níveis de garantia</h6>

    <table align="center" cellpadding="0" cellspacing="0">
        <tbody>
        <?php
        $niveis_garantia = get_field("ingredientes");
        $niveis_garantia = $niveis_garantia["tabela"];
        $niveis_garantia = $niveis_garantia["niveis"];
        $ingredientes = get_field("ingredientes");

        foreach ($niveis_garantia as $niveis) {
            ?>
            <tr>
                <td><?php echo $niveis["texto_niveis"]; ?></td>
                <td><?php echo $niveis["quantidade_niveis"]; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

    <p><strong>Composição básica do produto: </strong><?php echo $ingredientes["tabela"]["composicao"]; ?></p>
</div>

<div class="container-detail-product">

    <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    } ?>
 
    <span class="risco">
        <img src="<?php echo get_field('imagem_risco_desktop', $post->ID)['url']; ?>" alt="<?php echo get_field('imagem_risco_desktop', $post->ID)['alt']; ?>">
    </span>

    <span class="product-image">
        <?php $image_alt = get_post_meta( $image->id, '_wp_attachment_image_alt', true); ?>
        <img src="<?php echo get_field('imagem_produto_desktop', $post->ID)['url']; ?>" alt="<?php echo get_field('imagem_produto_desktop', $post->ID)['alt']; ?>" class="image-1 active">
        <img src="<?php $imagem_comida = get_field('imagem_comida_desktop', $post->ID);
        echo $imagem_comida["url"]; ?>" alt="<?php echo $imagem_comida["alt"]; ?>" class="image-2">
    </span>

    <div class="box-1-left active">
        
        <h1><?php the_title(); ?></h1>
        <h2><?php echo get_field("subtitulo"); ?></h2>

        <ul class="icones-menu">
            <?php
            $icones_produto = get_field("icones_produto");

            foreach ($icones_produto as $icone) {
                ?>
                <li>
                    <a href="#">
                        <img src="<?php echo $icone["imagem_icone_produto"]['url']; ?>" alt="<?php echo $icone["imagem_icone_produto"]['alt']; ?>">
                        <span><?php echo $icone["texto_icone_produto"]; ?></span>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
    <div class="box-1-right active">
        <div class="content">
            <?php the_content(); ?>
        </div>

        <p class="quantidade">Quantidade: <?php echo get_field("quantidade"); ?></p>

        <a href="#" class="btn-dark buy" data-action="comprar" data-category="<?php echo get_page_uri( $post->ID ); ?>" data-label="produtos-para-<?php echo $type_animal; ?>" data-cobasi="<?php echo get_field("cobasi"); ?>" data-petlove="<?php echo get_field("petlove"); ?>" data-petz="<?php echo get_field("petz"); ?>" data-produto="<?php echo get_page_uri( $post->ID ); ?>">COMPRAR</a>
    </div>

    <div class="box-2-left">
        <h2>Benefícios</h2>

        <div class="content">
            <h3>
                <?php
                $beneficios = get_field("beneficios");
                echo $beneficios["titulo"];
                ?>
            </h3>
            <p><?php echo $beneficios["texto_principal"]; ?></p>

            <img src="<?php echo $beneficios["selo"]["url"]; ?>" alt="<?php echo $beneficios["selo"]["alt"]; ?>">
        </div>
    </div>
    <div class="box-2-right">
        <div class="lista-beneficios">
            <?php
            foreach ($beneficios["lista_beneficios"] as $beneficio) {
                ?>
                <div class="item">
                    <img src="<?php echo $beneficio["selo_beneficio"]["url"]; ?>" alt="<?php echo $beneficio["selo_beneficio"]["alt"]; ?>">
                    <h2><?php echo $beneficio["titulo_beneficio"]; ?></h2>
                    <p><?php echo $beneficio["texto_beneficio"]; ?></p>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="navigation">
            <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;" data-action="banner-esquerda" data-category="beneficios" data-label="<?php echo get_page_uri( $post->ID ); ?>">Previous</button>
            <span class="total"></span>
            <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;" data-action="banner-direita" data-category="beneficios" data-label="<?php echo get_page_uri( $post->ID ); ?>">Next</button>
        </div>
    </div>

    <div class="box-3-right ">
        <h3><?php echo $ingredientes["titulo"]; ?></h3>

        <ul class="list-icons">
            <?php
            foreach ($ingredientes["icones"] as $icone) {
                ?>
                <li>
                    <img src="<?php echo $icone["icone_ingrediente"]["url"] ?>" alt="<?php echo $icone["icone_ingrediente"]["alt"]; ?>">
                    <span><?php echo $icone["texto_ingrediente"] ?></span>
                </li>
                <?php
            }
            ?>
        </ul>

        <p><?php echo $ingredientes["texto"]; ?></p>

        <a href="#" class="btn-dark composicao" data-action="composicao" data-category="ingredientes" data-label="<?php echo get_page_uri( $post->ID ); ?>">COMPOSIÇÃO E NÍVEIS DE GARANTIA</a>
    </div>

    <div class="box-4-right">
        <?php
        $quantidade = get_field("quantidade_ideal");
        $output_opcao_1 = array_values(array_intersect_key(
            $quantidade,
            array_unique(array_map(function ($item) {
                return $item['opcao_1'];
            }, $quantidade))
        ));
        $output_opcao_2 = array_values(array_intersect_key(
            $quantidade,
            array_unique(array_map(function ($item) {
                return $item['opcao_2'];
            }, $quantidade))
        ));
        ?>
        <h2>Quantidade</h2>
        <h3>Calcule a quantidade ideal de alimento para seu <?php echo $animal; ?>:</h3>

        <div class="slider idade" data-action="Peso" data-category="quantidade-ideal" data-label="">
            <span>Peso</span>
            <input type="range" min="1" max="<?php echo count($output_opcao_1); ?>" step="1" class="age" value="1"/>
        </div>

        <?php if ($quantidade[0]["opcao_2"] != "") { ?>
            <div class="slider peso" data-action="idade" data-category="quantidade-ideal" data-label="">
                <span>Idade</span>
                <input type="range" min="1" max="<?php echo count($output_opcao_2); ?>" step="1" class="peso" value="1"/>
            </div>
        <?php } ?>

        <p class="resposta">Seu <?php echo $animal; ?> deve comer: <label><span class="strong"></span><span class="light"></span></label></p>

        <p class="importante">*IMPORTANTE: As quantidades indicadas são calculadas para um pet saudável, bem nutrido e não gestante/lactante. As orientações dos guias alimentares são um ponto de partida, e o pet pode precisar de quantidades maiores de alimento úmido para alcançar a condição corpórea ideal, dependendo do nível de atividade diária. Para mais informações, consulte o veterinário</p>
    </div>
</div>

<div class="header-product">
    <h4><?php echo get_field("titulo_barra"); ?></h4>

    

    <a href="#" class="btn-dark buy" data-cobasi="<?php echo get_field("cobasi"); ?>" data-petlove="<?php echo get_field("petlove"); ?>" data-petz="<?php echo get_field("petz"); ?>" data-action="botao" data-category="comprar" data-label="">COMPRAR</a>

    <ul class="nav">
        <li>
            <a href="#" class="beneficios go-to-section" data-index="2" data-action="botao" data-category="beneficio" data-label="" data-value="<?php echo get_page_uri( $post->ID ); ?>">Benefícios</a>
        </li>
        <li>
            <a href="#" class="ingredientes go-to-section" data-index="3" data-action="botao" data-category="ingredientes" data-label="" data-value="<?php echo get_page_uri( $post->ID ); ?>">Ingredientes e informações nutricionais</a>
        </li>
        <li>
            <a href="#" class="quantidade go-to-section" data-index="4" data-action="botao" data-category="quantidade" data-label="" data-value="<?php echo get_page_uri( $post->ID ); ?>">Quantidade ideal</a>
        </li>
    </ul>

</div>


<?php wp_footer(); ?>
<script>
    
    var quantidades = <?php echo json_encode($quantidade); ?>;
    var labels_1 = <?php echo json_encode($output_opcao_1); ?>;
    var labels_2 = <?php echo json_encode($output_opcao_2); ?>;
    var matchCalc = function (option1, option2) {
        for (var i = 0; i < quantidades.length; i++) {
            if (option2 != "") {
                if (quantidades[i].opcao_1 === option1 && quantidades[i].opcao_2 === option2) {
                    return quantidades[i];
                }
            } else {
                if (quantidades[i].opcao_1 === option1) {
                    return quantidades[i];
                }
            }
        }
    }

    // Initialize a new plugin instance for one element or NodeList of elements.
    var sliderage = document.querySelectorAll('input.age');
    rangeSlider.create(sliderage, {
        polyfill: true,     // Boolean, if true, custom markup will be created
        onInit: function () {
            $(".slider.idade .rangeSlider__handle").html("<span class='label'>" + labels_1[0].opcao_1 + "</span>");
            
            match1 = matchCalc(quantidades[0].opcao_1, $(".slider.peso .label").text());

            if (match1) {
                if (match1.e_adulto === "1") {
                    $(".resposta span").html("<a href='" + match1.link + "' target='_blank'>Clique aqui para ver seu cão adulto</a>");
                } else {
                    var resp = match1.resposta.split("*");
                    $(".resposta label .strong").text(resp[0]+"*");
                    $(".resposta label .light").text(resp[1]);
                }
            } else {
                $(".resposta span").text("Nada cadastrado");
            }

        },
        onSlideStart: function (position, value) {
        },
        onSlide: function (position, value) {
            $(".slider.idade .rangeSlider__handle").html("<span class='label'>" + labels_1[position - 1].opcao_1 + "</span>");

            match1 = matchCalc(quantidades[position - 1].opcao_1, $(".slider.peso .label").text());

            if (match1) {
                if (match1.e_adulto === "1") {
                    $(".resposta span").html("<a href='" + match1.link + "' target='_blank'>Clique aqui para ver seu cão adulto</a>");
                } else {
                    var resp = match1.resposta.split("*");
                    $(".resposta label .strong").text(resp[0]+"*");
                    $(".resposta label .light").text(resp[1]);
                }
            } else {
                $(".resposta span").text("Nada cadastrado");
            }

        },
        onSlideEnd: function (position, value) {
        }
    });

    // Initialize a new plugin instance for one element or NodeList of elements.
    var sliderpeso = document.querySelectorAll('input.peso');
    rangeSlider.create(sliderpeso, {
        polyfill: true,     // Boolean, if true, custom markup will be created
        onInit: function () {
            $(".slider.peso .rangeSlider__handle").html("<span class='label'>" + labels_2[0].opcao_2 + "</span>");
            match2 = matchCalc($(".slider.idade .label").text(), quantidades[0].opcao_2);
            
            if (match2) {
                if (match2.e_adulto === "1") {
                    $(".resposta span.strong").html("<a href='" + match2.link + "' target='_blank'>Clique aqui para ver seu cão adulto</a>");
                    $(".resposta span.light").text(' ');
                } else {
                    var resp = match2.resposta.split("*");
                    $(".resposta label .strong").text(resp[0]+"*");
                    $(".resposta label .light").text(resp[1]);
                }
            } else {
                $(".resposta span").text("Nada cadastrado");
            }
        },
        onSlideStart: function (position, value) {
        },
        onSlide: function (position, value) {
            $(".slider.peso .rangeSlider__handle").html("<span class='label'>" + labels_2[position - 1].opcao_2 + "</span>");
            match2 = matchCalc($(".slider.idade .label").text(), quantidades[position - 1].opcao_2);
            
            if (match2) {
                if (match2.e_adulto === "1") {
                    $(".resposta span.strong").html("<a href='" + match2.link + "' target='_blank'>Clique aqui para ver seu cão adulto</a>");
                    $(".resposta span.light").text(' ');
                } else {
                    var resp = match2.resposta.split("*");
                    $(".resposta label .strong").text(resp[0]+"*");
                    $(".resposta label .light").text(resp[1]);
                }
            } else {
                $(".resposta span").text("Nada cadastrado");
            }
        },
        onSlideEnd: function (position, value) {
        }
    });
    
    
    setTimeout(function(){ 
        sliderage.sliderpeso.rangeSlider.update({value : 1}, triggerEvents);
        sliderpeso.rangeSlider.update({value : 1}, triggerEvents);
    }, 3000);
    
    
</script>
</body>
</html>
