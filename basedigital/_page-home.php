<?php
    /*Template name: Home*/
    get_header();

    $slider_home = wp_is_mobile() ? get_field("slider_mobile") : get_field("slider_desktop");
    $info_product = wp_is_mobile() ? get_field("mobile_pilares") : get_field("desktop_pilares");
?>
<main class="home">
    <div id="fullpage">
        <div class="section">
            <div class="slider-home">
                <?php
                foreach ($slider_home as $item) {
                    ?>
                    <div class="item" style="background-image: url(<?php echo $item['imagem']['url']; ?>);">
                        <div class="info">
                            <?php // if($item['logo']['url']){}  ?>
                            <img src="<?php echo wp_is_mobile() ? $item['logo']['url'] : $item['logo_slider_desktop']['url']; ?>" alt="<?php echo wp_is_mobile() ? $item['logo']['alt'] : $item['logo_slider_desktop']['alt']; ?>">
                            <?php // }  ?>

                            <h2><?php echo wp_is_mobile() ? $item['texto'] : $item['texto_slider_desktop']; ?></h2>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="progressBarContainer">
                <?php
                    $slickIndex = 0;
                    foreach($slider_home as $item) {
                        ?>
                        <div>
                            <span data-slick-index="<?php echo $slickIndex; ?>" class="progressBar"></span>
                        </div>
                        <?php
                        $slickIndex++;
                    }
                ?>
            </div>

            <a href="#" class="go-next-section" onclick="$.fn.fullpage.moveSectionDown();"></a>
        </div>

        <div class="section"><!-- container-fullpage --></div>
        <div class="section"><!-- container-fullpage --></div>
        <div class="section"><!-- container-fullpage --></div>
        <div class="section our-products">
            <h2 class="title-section">Nossos produtos</h2>

            <div class="food-box dog">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/racao-super-premium-para-caes-optimum.png" alt="Ração Super Premium para Cães Optimum">

                <div class="box-buttons">
                    <a href="<?php echo get_category_link(3); ?>" class="btn-dark" data-action="conheca-todos-produtos" data-category="caes" data-label="nossos-produtos">Alimentos para cães</a>
                </div>
            </div>

            <div class="food-box cat">
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/racao-super-premium-para-gatos-optimum.png" alt="Ração Super Premium para Gatos Optimum">

                <div class="box-buttons">
                    <a href="<?php echo get_category_link(4) ?>" class="btn-dark" data-action="conheca-todos-produtos" data-category="gatos" data-label="nossos-produtos">Alimentos para gatos</a>
                </div>
            </div>

            <div class="about-box optimum">
                <div class="wrap">
                    <h4>Sobre OPTIMUM™</h4>
                    <p>OPTIMUM™ chegou com o compromisso do aproveitamento máximo. Isso porque a receita de  OPTIMUM™ possui BIOAVAILABILITY: compromisso em entregar uma excelente absorção de  nutrientes. Os pets aproveitam o máximo do alimento, para aproveitarem o máximo da vida com você.</p>

                    <div class="box-buttons">
                        <a href="<?php echo get_permalink(5) ?>" class="btn-dark" data-action="saiba-mais" data-category="sobre-optimum" data-label="">saiba mais</a>
                    </div>
                </div>
            </div>

            <div class="about-box waltham">
                <div class="wrap">
                    <h4>Conheça WALTHAM™</h4>
                    <p>Os produtos OPTIMUM™ foram desenvolvidos  seguindo as recomendações de WALTHAM™, a maior  autoridade mundial em nutrição, cuidado e bem-estar animal.</p>

                    <div class="box-buttons">
                        <a href="<?php echo get_permalink(7) ?>" class="btn-dark" data-action="saiba-mais" data-category="conheca-waltham" data-label="">saiba mais</a>
                    </div>
                </div>
            </div>

            <?php get_template_part("partials/footer"); ?>
        </div>
    </div>

    <div class="container-fullpage position-bottom">
        <?php
        $infoProductIndex = 2;
        foreach ($info_product as $item) {
            ?>
            <div class="info-product step-<?php echo $infoProductIndex; ?>">
                <div class="image <?php echo $infoProductIndex == 2 ? "active" : ""; ?>" style="background-image: url(<?php echo $item['imagem_pilar']['url']; ?>);">
                </div>
                <div class="content">
                    <div class="box-info">
                    <?php $link = $item['link_pilar'][0];?>
                        <h3 class="title <?php echo $infoProductIndex == 2 ? "active" : ""; ?>">
                            <?php echo $item['titulo_pilar']; ?>
                        </h3>

                        <p class="description <?php echo $infoProductIndex == 2 ? "active" : ""; ?>"><?php echo $item['descricao_pilar']; ?></p>

                        <img class="selo <?php echo $infoProductIndex == 2 ? "active" : ""; ?>" src="<?php echo $item['selo_pilar']['url'] ?>" alt="<?php echo $item['selo_pilar']['alt'] ?>">

                        <a href="<?php echo get_permalink( $link->ID ); ?>" class="btn-dark <?php echo $infoProductIndex == 2 ? "active" : ""; ?>"><?php echo $item['texto_botao_pilar']; ?></a>
                    </div>
                </div>
            </div>
            <?php
            $infoProductIndex++;
        }
        ?>
    </div>

    <div class="paginate-scroll">
        <span class="active step-1"></span>
        <span class="page"></span>
        <span class="page"></span>
        <span class="page"></span>
    </div>
</main>
<?php wp_footer(); ?>
</body>
</html>