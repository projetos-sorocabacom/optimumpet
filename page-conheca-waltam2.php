<?php
get_header();
$fields = $fields = get_fields();
?>
<main id="fullpage-waltham" class="know-main inner-main">

    <section class="section" id="section-header">
        <div class="grid-container fluid height-100 padding-left-0 padding-right-0">
            <div class="grid-x align-middle large-height-100">
                <div class="cell small-12 large-6 header-content small-order-2 large-order-1">
                    <div class="grid-container full">
                        <div class="grid-x grid-padding-x">

                            <div class="cell small-12 medium-8 medium-offset-2 text-center large-text-left">
                                <figure class="logo">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo1.jpg"
                                         alt="Waltham">
                                </figure>
                                <h1
                                        style="font-family: 'Gotham-Black', sans-serif !important;">
                                    <?php echo $fields['secao1']['frase_destaque']; ?>
                                </h1>
                                <h4
                                    style="font-family: 'Gotham-Book', sans-serif !important;"><?php echo $fields['secao1']['frase_inferior']; ?></h4>
                            </div>

                        </div>
                    </div>
                </div>

                <figure class="cell small-12 large-6 small-order-1 large-order-2 header-bg"
                        style="background-image: url(<?php echo $fields['secao1']['imagem_desktop']; ?>);"></figure>

                <div class="cell small-12 position-absolute next-section white text-center"
                     data-magellan
                     data-offset="15"
                     data-threshold="0">
                    <a href="#section-map" title="Saiba onde a Waltham se encontra">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/down-white.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section-map">
        <div class="grid-container fluid height-100 padding-left-0 padding-right-0">
            <div class="grid-x align-middle large-height-100">
                <div class="cell small-12 large-6 map-content small-order-2 large-order-1">
                    <div class="grid-container full">
                        <div class="grid-x grid-padding-x">
                            <div class="cell small-12 medium-8 medium-offset-2 text-center large-text-left">
                                <figure class="logo">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo2.jpg"
                                         alt="Waltham">
                                </figure>

                                <h2
                                        style="font-family: 'Gotham-Black', sans-serif !important;"><?php echo $fields['secao2']['frase']; ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <figure class="cell small-12 large-6 small-order-1 large-order-2 map-bg position-relative overflow-hidden show-for-large"
                        data-vide-bg="mp4: <?php echo get_template_directory_uri() ?>/dist/img/map_animation.mp4, poster: <?php echo get_template_directory_uri() ?>/dist/img/map.jpg"
                        data-vide-options="posterType: jpg, loop: false, position: 0% 0%"
                >
<!--                    <video class="vid" autoplay preload="auto" poster="--><?php //echo get_template_directory_uri() ?><!--/dist/img/map.jpg">-->
<!--                        <source id="mp4" src="--><?php //echo get_template_directory_uri() ?><!--/dist/img/map_animation.mp4" type="video/mp4">-->
<!--                    </video>-->
                </figure>

                <figure class="cell small-12 small-order-1 large-order-2 hide-for-large">
<!--                    <img src="--><?php //echo get_template_directory_uri() ?><!--/dist/img/map_anim.gif" alt="Mapa" class="width-100">-->
                    <video class="vid-mobile width-100" loop autoplay preload="auto" poster="<?php echo get_template_directory_uri() ?>/dist/img/map.jpg">
                        <source id="mp4" src="<?php echo get_template_directory_uri() ?>/dist/img/map_animation.mp4" type="video/mp4" class="width-100">
                    </video>
                </figure>

                <div class="cell small-12 position-absolute next-section primary text-center"
                     data-magellan
                     data-offset="15"
                     data-threshold="0">
                    <a href="#section-slider" title="Conheça nossas áreas de estudo">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/down-primary.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section-slider" data-magellan-target="section-slider">
        <div class="grid-container fluid height-100 slide-content">
            <div class="grid-x grid-padding-x align-middle height-100">
                <header class="cell small-12 text-center h-areas margin-bottom-1">
                    <h2 style="font-family: 'Gotham-Black', sans-serif !important;">Áreas de estudo</h2>
                </header>

                <nav class="responsive-list cell small-12 large-10 large-offset-1" data-equalizer
                     data-equalize-by-row="true">
                    <?php foreach ($fields['secao3']['areas_estudo'] as $key => $area) { ?>

                        <div class="item" data-equalizer-watch>
                            <div class="card">
                                <figure class="figure-1" style="background-image: url(<?php echo $area['imagem_fundo']; ?>);"></figure>
                                <article>
                                    <h3 style="font-family: 'Gotham-Black', sans-serif !important;"><?php echo $area['titulo']; ?></h3>
                                    <h4 style="font-family: 'Gotham-Bold', sans-serif !important;"><?php echo $area['frase']; ?></h4>
                                    <ul class="menu vertical">
                                        <?php foreach ($area['artigos'] as $key2 => $artigo) { ?>
                                            <li><a href="<?php echo $artigo['artigo_link']; ?>"
                                                   title="<?php echo $artigo['artigo_texto']; ?>" target="_blank"><?php echo $artigo['artigo_texto']; ?> <i
                                                            class="fas fa-external-link-alt"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </article>
                            </div>
                        </div>

                    <?php } ?>


                </nav>

                <div class="width-100 text-center list-arrows text-center">
                    <a href="#" title="Próximo" class="prev">&larr;</a>
                    <span class="display-inline-block" style="margin-left: 20px;"><strong>1 - 2</strong></span>
                    <a href="#" title="Anterior" class="next">&rarr;</a>
                </div>

                <div class="cell small-12 position-absolute next-section white text-center"
                     data-magellan
                     data-offset="15"
                     data-threshold="0">
                    <a href="#section-team" title="Sobre nossos profissionais">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/down-white.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section-team" data-magellan-target="section-team">
        <div class="grid-container fluid height-100 padding-left-0 padding-right-0">
            <div class="grid-x align-middle large-height-100">
                <figure class="cell small-12 large-6 team-bg"
                        style="background-image: url(<?php echo $fields['secao4']['imagem_desktop']; ?>);"></figure>

                <div class="cell small-12 large-6 team-content">
                    <div class="grid-container full">
                        <div class="grid-x grid-padding-x">
                            <div class="cell small-12 large-8 large-offset-2 text-center large-text-left">
                                <figure class="logo">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo2.jpg"
                                         alt="Waltham">
                                </figure>

                                <h2 style="font-family: 'Gotham-Black', sans-serif !important;">
                                    <?php echo $fields['secao4']['frase']; ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cell small-12 position-absolute next-section primary text-center"
                     data-magellan
                     data-offset="15"
                     data-threshold="0">
                    <a href="#section-timeline" title="Confira as pesquisas já realizadas">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/down-primary.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-timeline" data-magellan-target="section-timeline" class="section">
        <div class="grid-container fluid full padding-left-0 padding-right-0">
            <div class="grid-x grid-padding-x">
                <header class="cell text-center small-12 margin-bottom-3">
                    <h2 class="margin-bottom-2"
                        style="font-size: 40px; font-family: 'Gotham-Black', sans-serif !important;">Pesquisas ao longo
                        dos anos</h2>
                    <h4 style="font-family: 'Gotham-Book', sans-serif !important;">Desde 1961 foram realizadas mais de
                        1700 publicações,<br>
                        incluindo mais de 600 artigos técnicos em revistas científicas.</h4>
                </header>

                <div class="cell small-12 large-10 large-offset-1 margin-top-1">
                    <div class="grid-container full">
                        <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-4 list-years">

                            <?php foreach ($fields['secao5']['pesquisas'] as $key => $pesquisa) { ?>

                                <article class="cell">
                                    <div class="content width-100 padding-2 text-center large-text-left">
                                        <h3 class="margin-bottom-2"
                                            style="font-size: 31px; font-family: 'Gotham-Black', sans-serif !important;"><?php echo $pesquisa['ano']; ?></h3>
                                        <p style="font-size: 14px; line-height: 22.4px; font-family: 'Gotham-Book', sans-serif !important;">
                                            <b><?php echo $pesquisa['pesquisa_texto']; ?></b></p>
                                        <div class="btn-more width-100 text-center large-text-left">
                                            <a href="<?php echo $pesquisa['pesquisa_link']; ?>"
                                               class="button margin-top-3" target="_blank">Saiba mais <i
                                                        class="fas fa-external-link-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center timeline-footer padding-left-1 padding-right-1 margin-top-3">
            <figure>
                <a href="#" title="Saiba mais sobre a Waltham" class="display-inline-block margin-bottom-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo1.jpg" alt="Waltham">
                </a>
            </figure>

            <h4 class="margin-bottom-2"><?php echo $fields['secao6']['frase']; ?></h4>
            <p>
                <a href="<?php echo $fields['secao6']['link']; ?>"
                   class="button white text-uppercase padding-left-2 padding-right-2">Waltham <i
                            class="fas fa-external-link-alt"></i></a>
            </p>
        </div>

        <?php get_footer(); ?>
    </section>

</main>

<script>
    $(document).foundation();
</script>