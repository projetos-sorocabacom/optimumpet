<?php
/*
* Template name: Home
*/

get_header();


//Consulta que retorna os Banners.
$banners_db = array('post_type' => 'banners',
    'post_status' => 'publish',
    'numberposts' => -1);
$banners = get_posts($banners_db);


//Consulta que retorna os Banners.
$produtos_db = array('post_type' => 'produtos',
    'post_status' => 'publish',
    'numberposts' => -1);
$produtos = get_posts($produtos_db);

//Consulta que retorna os Banners.
$faqs_db = array('post_type' => 'faq',
    'post_status' => 'publish',
    'numberposts' => -1);
$faqs = get_posts($faqs_db);


if (have_posts()) :
    while (have_posts()) : the_post();
        $page_fields = get_fields(); // serve para pegar os campos personalizados desta pagina
        //$Arrayfields = $page_fields["parametro"];

        ?>


        <section id="s-header" class="section-header width-100 position-relative">
            <div class="grid-container">
                <div class="grid-x grid-padding-x" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="cell small-10 small-offset-1 medium-8 medium-offset-2 large-7 large-offset-0 products-line">
                        <figure class="width-100 text-center margin-bottom-2 logo-colageno">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo-colageno.png" alt="Disfor Colágenos"
                                 width="350">
                        </figure>
                        <figure class="width-100 product-line text-center">
                            <img src="<?php bloginfo('template_url'); ?>/img/products-line.png"
                                 alt="Linha de produtos Disfor">
                            <figcaption class="width-100 text-center" data-magellan data-threshold="0"
                                        data-offset="120">
                                <a href="#s-slide" target="_blank" title="Saiba mais sobre nossa linha de produtos"
                                   class="btn-gradient">
                                    Saiba mais <i class="fas fa-chevron-right"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <figure class="couple-runner position-absolute" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-delay="300">
                <img src="<?php bloginfo('template_url'); ?>/img/casal.png" alt="Imagem de um casal correndo">
            </figure>
        </section>

        <section id="s-products" class="section-products width-100 position-relative section margin-top-3">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell small-12 large-10 large-offset-1">
                        <article class="text-uppercase products-content" data-aos-delay="600" data-aos-duration="1000"
                                 data-aos="fade-down">
                            <h2>Produtos</h2>
                            <h3>Família Disfor<sup>&reg;</sup></h3>
                            <p>A mais completa do mercado<br>
                                de colágenos</p>
                            <p><a href="<?php echo $page_fields['botao_comprar']; ?>" target="_blank" title="Comprar"
                                  class="btn-gradient">Comprar <i class="fas fa-chevron-right"></i></a>
                            </p>
                        </article>

                        <figure class="family position-relative" data-aos="fade-right" data-aos-delay="400"
                                data-aos-duration="1000">
                            <img src="<?php bloginfo('template_url'); ?>/img/lineproducts.png" alt="Família Disfor">
                            <figcaption class="width-100 position-relative" style="top: -15px;">
                                <p>
                                    *A família Disfor<sup>®</sup> oferece as seguintes apresentações: peptídeos de
                                    colágeno em sachê,
                                    peptídeos de colágeno + mineirais + vitamina E em sachê e colágeno não hidrolisado
                                    do tipo
                                    II em cápsulas.
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section id="s-types" class="section-types width-100 position-relative" data-aos="fade-up"
                 data-aos-duration="1000" data-aos-delay="500">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <article class="cell small-12 large-10 large-offset-1 text-center medium-text-left text-uppercase">
                        <h2>Tipos de colágeno</h2>
                        <div class="width-100 types-text padding-2 position-relative">
                            <div class="grid-container full">
                                <div class="grid-x">
                                    <div class="cell small-12 large-8">
                                        <h4 class="text-uppercase">O que é o colágeno?</h4>
                                        <p class="text-justify">
                                            O <b>colágeno</b> é a principal proteína estrutural do organismo que
                                            assegura a coesão, elasticidade e manutenção de todos os tecidos
                                            conjuntivos, inclusive pele, tendões, ligamentos, cartilagem e
                                            ossos.<sup>1</sup>
                                            Existem muitos tipos diferentes de colágeno em nosso corpo, dos quais de 80%
                                            a 90% são do <b>tipo I, II ou III</b>.<sup>1</sup> O <b>colágeno do tipo
                                                I</b> é o mais comum e geralmente encontrado em locais que resistem a
                                            grandes tensões, como tendões, pele e ossos. O <b>colágeno do tipo II</b> se
                                            acha em locais que resistem
                                            a grandes pressões, como as cartilagens, e o <b>colágeno do tipo III</b>
                                            pode ser encontrado nos músculos.<sup>2</sup>
                                        </p>
                                        <h4 class="text-uppercase">Diferença entre colágeno, gelatina e peptídeo de
                                            colágeno</h4>
                                    </div>

                                    <div class="small-4 show-for-large position-absolute yoga"
                                         style="top: -20px; right: -30px;" data-aos-delay="1000"
                                         data-aos-duration="1000" data-aos="fade-left">
                                        <img src="<?php bloginfo('template_url'); ?>/img/yoga.png"
                                             alt="Foto com mulher fazendo Yoga" width="300">
                                    </div>

                                    <div class="cell small-12">
                                        <p class="text-justify">
                                            A partir do <b>colágeno nativo ou não hidrolisado</b>, podem ser obtidos o
                                            colágeno parcialmente fragmentado (gelatina) e o colágeno totalmente
                                            fragmentado ou hidrolisado* (peptídeos de colágeno). Cada um deles apresenta
                                            características próprias de solubilidade, absorção e
                                            digestibilidade.<sup>1</sup>
                                            <b>A característica mais importante do colágeno hidrolisado é sua composição
                                                de aminoácidos e peptídeos com baixo peso molecular e alta solubilidade,
                                                o que favorece sua elevada absorção intestinal.</b><sup>1,3</sup><br>
                                            <sup>*Colágeno hidrolisado: quebra do colágeno em partículas menores na
                                                presença da água.</sup>
                                        </p>
                                    </div>

                                    <div class="cell small-12">
                                        <div class="grid-x grid-padding-x align-middle">
                                            <div class="cell small-12 large-9 small-order-2 large-order-1">
                                                <p class="text-justify">
                                                    <b>Peptan<sup>®</sup></b> é a marca líder mundial de peptídeos de
                                                    colágeno. Os peptídeos de colágeno são altamente biodisponíveis e
                                                    sua forma hidrolisada os torna facilmente digeríveis.<sup>4</sup>
                                                </p>
                                                <p>
                                                    Estudos demonstram que o colágeno <b>hidrolisado ministrado</b> por
                                                    via oral efetivamente atinge tecidos-alvo, como a pele, os ossos, a
                                                    cartilagem articular e os músculos.<sup>5</sup>
                                                </p>
                                            </div>
                                            <div class="cell small-12 large-3 text-center small-order-1 large-order-2 peptan">
                                                <img src="<?php bloginfo('template_url'); ?>/img/logo-peptan.png"
                                                     alt="Logo da Peptan">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cell small-12">
                                        <div class="grid-x grid-padding-x align-middle">
                                            <div class="cell small-12 large-4 large-text-right">
                                                <h4>
                                                    Colágeno Não Hidrolisado do tipo II
                                                </h4>
                                            </div>
                                            <div class="cell small-12 large-8">
                                                <p class="text-justify">
                                                    O colágeno do tipo II, nativo, é a principal proteína estrutural da
                                                    cartilagem e fornece resistência à tração e tenacidade a esse
                                                    tecido.<sup>6</sup>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cell small-12">
                                        <p><small><b>Referências Bibliográficas</b>: 1.Peptan [homepage na internet]. O
                                                que são peptídeos de colágeno [acesso em 18 junho 2019]. Disponível em:
                                                https://www.peptan.com/pt/about-peptan/what-is-peptan/about-collagen-peptides.
                                                2.Gonçalves GR, et.al. Benefícios da ingestão de colágeno para o
                                                organismo humano. REB. 2015;8(2):190-207. 3.Silva TF, Penna ALB.
                                                Colágeno: Características químicas e propriedades funcionais. Rev Inst
                                                Adolfo Lutz. São Paulo, 2012; 71(3):530-9. 4.Peptan [homepage na
                                                internet]. O que é Peptan [acesso em 18 junho 2019]. Disponível em:
                                                https://www.peptan.com/pt/sobre-peptan/o-que-e-peptan.
                                                5.Watanabe-Kamiyama et al. Absorption and Effectiveness of Orally
                                                Administered Low Molecular Weight Collagen Hydrolysate in Rats (J.
                                                Agric. Food Chem. 2010, 58, 835–841). 6.Lugo JP, et al. Efficacy and
                                                tolerability of an undenatured type II collagen supplement in modulating
                                                knee osteoarthritis symptoms: a multicenter randomized, double-blind,
                                                placebo-controlled study. . Nutr J. 2016 Jan 29;15:14.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="cell small-12 large-10 large-offset-1 credit-types margin-top-2">
                        <div class="grid-padding-x grid-x align-middle">
                            <div class="cell small-12 medium-5 margin-bottom-1">
                                <h5>PARA PROFISSIONAIS DA SAÚDE, MAIS INFORMAÇÕES:</h5>
                            </div>
                            <div class="cell small-12 medium-7 text-center medium-text-left">
                                <a href="<?php echo $page_fields['botao_biolabstudio']; ?>" target="_blank"
                                   title="Ir para Biolab Studio"><img
                                            src="<?php bloginfo('template_url'); ?>/img/btn.png"
                                            alt="Biolab Studio"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="s-slide" class="section-slide width-100 padding-bottom-3 position-relative padding-top-3"
                 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div class="elip width-100 text-center position-absolute">
                <img src="<?php bloginfo('template_url'); ?>/img/bgslide.png" alt="">
            </div>

            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell small-12 large-10 large-offset-1 slide-types position-relative">
                        <nav class="slide-content width-100 shadow cycle-slideshow" data-cycle-fx="fade"
                             data-cycle-timeout="6000" data-cycle-pager=".slide-nav"
                             data-cycle-pager-template="<span></span>" data-cycle-slides="> div">

                            <?php
                            foreach ($banners as $banner) {
                                //var_dump($banner['post_title']);
                                $banner_fields = get_fields($banner->ID);
                                //var_dump($banner_fields);
                                # code...

                                ?>
                                <div class="item width-100">
                                    <header class="small-12 text-center margin-bottom-3">
                                        <h2 class="text-uppercase"><?php echo $banner->post_title; ?></h2>
                                    </header>
                                    <div class="grid-x grid-padding-x">
                                        <div class="cell small-12 product-img">
                                            <img src="<?php echo $banner_fields['imagem_banner']; ?>">
                                        </div>
                                        <div class="cell small-12 product-credit">
                                            <?php echo $banner_fields['referencias']; ?>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>


                        </nav>
                        <div class="slide-nav position-absolute show-for-large"></div>
                    </div>
                </div>
            </div>
            <div class="slide-nav position-absolute hide-for-large"></div>
        </section>

        <section id="s-market" class="section-market width-100 margin-bottom-3 position-relative" data-aos="fade-up"
                 data-aos-duration="1000" data-aos-delay="500">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell small-12 medium-10 medium-offset-1 text-center medium-text-left text-uppercase">
                        <h2>Comprar</h2>
                    </div>
                    <div class="cell small-12 medium-10 medium-offset-1 market-box">
                        <div class="grid-container full">

                            <div class="grid-x grid-padding-x market-items align-bottom padding-2">

                                <?php
                                foreach ($produtos as $produto) {
                                    //var_dump($produto);
                                    $produto_fields = get_fields($produto->ID);
                                    //var_dump($produto_fields);
                                    # code...
                                    ?>
                                    <div class="cell small-12 medium-4">
                                        <figure class="width-100 text-center">
                                            <img src="<?php echo $produto_fields['imagem_produto']; ?>" alt="">
                                            <figcaption class="width-100">
                                                <h4 class="margin-bottom-1 margin-top-1"><?php echo $produto_fields['titulo_produto']; ?></h4>
                                                <p>
                                                    <a href="<?php echo $produto_fields['link_produto_botao_comprar']; ?>"
                                                       target="_blank" title="<?php echo $produto->post_title; ?>"
                                                       class="btn-gradient primary">
                                                        Comprar <i class="fas fa-chevron-right"></i>
                                                    </a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <?php
                                }
                                ?>

                                <!-- <div class="cell small-12 medium-4">
                            <figure class="width-100 text-center">
                                <img src="<?php bloginfo('template_url'); ?>/img/p2.png" alt="">
                                <figcaption class="width-100">
                                    <h4 class="margin-bottom-1 margin-top-1">DISFOR® CAPS – 60 cápsulas</h4>
                                    <p>
                                        <a href="#" title="Comprar DISFOR® CAPS – 60 cápsulas" class="btn-gradient primary">
                                            Comprar <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="cell small-12 medium-4">
                            <figure class="width-100 text-center">
                                <img src="<?php bloginfo('template_url'); ?>/img/p3.png" alt="">
                                <figcaption class="width-100">
                                    <h4 class="margin-bottom-1 margin-top-1">DISFOR® CAPS – 60 cápsulas</h4>
                                    <p>
                                        <a href="#" title="Comprar DISFOR® CAPS – 60 cápsulas" class="btn-gradient primary">
                                            Comprar <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="s-locals" class="section-locals width-100 margin-bottom-3 position-relative" data-aos="fade-up"
                 data-aos-duration="1000" data-aos-delay="500">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell small-12 medium-10 medium-offset-1 text-center medium-text-left text-uppercase">
                        <h2 class="margin-bottom-2">Onde<br>Comprar</h2>
                        <a href="<?php echo $page_fields['botao_biolabemcasa']; ?>" target="_blank "
                           title="Biolaemcasa"><img src="<?php bloginfo('template_url'); ?>/img/casa-title.png"
                                                    alt="Biolaemcasa" width="180" class="biologo"></a>

                        <div class="grid-container full brand-grid">
                            <div class="grid-x small-up-3 medium-up-6">
                                <div class="cell"><a target="_blank"
                                                     href="https://www.drogarianovaesperanca.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_02.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.drogariaspacheco.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_03.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.drogasil.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_04.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.farmadelivery.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_05.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://loja.farmaciasvaleverde.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_06.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.drogaraia.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_07.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.drogariaminasbrasil.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_08.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.ultrafarma.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_09.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.drogariasaopaulo.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_10.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.onofre.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_11.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.farmagora.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_12.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.farmaciasnissei.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_13.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.drogariavenancio.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_14.png" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.drogaosuper.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_15.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.drogarialiviero.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_16.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.paguemenos.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_17.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.panvel.com/panvel/main.do"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_18.jpg" alt=""></a></div>
                                <div class="cell"><a target="_blank" href="https://www.araujo.com.br/"><img
                                                src="<?php bloginfo('template_url'); ?>/img/pd_19.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="s-faq" class="section-faq width-100 position-relative margin-bottom-3" data-aos="fade-up"
                 data-aos-duration="1000" data-aos-delay="500">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell small-12 medium-10 medium-offset-1 faq-box">
                        <header>
                            <h2>FAQ</h2>
                        </header>

                        <div class="width-100 margin-top-2">

                            <ul class="accordion" data-accordion data-allow-all-closed="true">

                                <?php
                                $aux = 0;
                                foreach ($faqs as $faq) {
                                    //var_dump($faq);
                                    $faq_fields = get_fields($faq->ID);
                                    //var_dump($faq_fields);
                                    # code...

                                    ?>

                                    <li class="accordion-item <?php if ($aux == 0) {
                                        echo 'is-active';
                                    } ?>" data-accordion-item="" role="presentation">
                                        <a href="#" class="accordion-title" aria-controls="2fm5l1-accordion" role="tab"
                                           aria-expanded="false" aria-selected="false"><?php echo $faq->post_title; ?>
                                            <i class="fas fa-caret-down"></i> <i class="fas fa-caret-up"></i></a>
                                        <div class="accordion-content" data-tab-content="" role="tabpanel"
                                             aria-labelledby="2fm5l1-accordion-label" aria-hidden="true"
                                             style="display: none;">
                                            <?php echo $faq_fields['resposta_faq']; ?>
                                        </div>
                                    </li>

                                    <?php
                                    $aux++;
                                }
                                ?>
                                <li style="font-family: 'Roboto Condensed',Helvetica,Roboto,Arial,sans-serif;"><small><strong>
                                    1.Peptan [home page na internet]. O que é Peptan [acesso em 02 agosto 2019]. Disponível em: https://www.peptan.com/pt/sobre-peptan/o-que-e-peptan 2. Gonçalves GR, et.al. Benefícios da ingestão de colágeno para o organismo humano. REB.2015;8(2):190-207. 3. Disfor<sup>®</sup>Artro: peptídeos de colágeno Peptan<sup>®</sup> + magnésio + manganês + cobre + selênio + vitamina E. Monografia do produto. Taboão da Serra, SP: Biolab Sanus Farmacêutica Ltda, 2017; 4. Disfor<sup>®</sup>: peptídeos de colágeno Peptan<sup>®</sup> + vitamina D. Monografia do produto. Taboão da Serra, SP: Biolab Sanus Farmacêutica Ltda, 2012. 5. Disfor<sup>®</sup>Caps: colágeno não hidrolisado tipo II. Monografia do produto. Taboão da Serra, SP: Biolab Sanus Farmacêutica Ltda, 2018; 6. Jin-HongKim, et al: Regulation of the Catabolic Cascade in Osteoarthritis by the Zinc-ZIP8-MTF1 Axis. Cell 156, 730 – 743, February 13, 2014. 7. Resolução RDC no 269, de 22 de setembro de 2005. Dispõe sobre a ingestão diária recomendada (IDR) de proteína, vitaminas e minerais. 8. Peptan [homepage na internet]. What are collagen peptides [acesso em 02 agosto 2019]. Disponível em: https://www.peptan.com/pt/about-peptan/what-is-peptan/about-collagen-peptides 9.Galena [home page na internet]. Dor articular [acesso em 02 agosto 2019]. Disponível em: https://www.galena.com.br/ativos/b2cool/. 10. Disfor<sup>®</sup>Artro: peptídeos de colágeno Peptan<sup>®</sup> + magnésio + manganês + cobre + selênio + vitamina E.Buladomedicamento. Taboão da Serra, SP: Biolab Sanus Farmacêutica Ltda.; 2016. 11. Disfor<sup>®</sup>: peptídeos de colágeno Peptanz. Bula do medicamento. Taboão da Serra, SP: Biolab Sanus Farmacêutica Ltda. 12. Disfor<sup>®</sup> Caps: colágeno não hidrolisado tipo II. Bula do medicamento. Biolab Sanus Farmacêutica Ltda, 2018 13. Disfor<sup>®</sup>Artro: peptídeos de colágeno Peptan<sup>®</sup> + magnésio + manganês + cobre + selênio + vitamina E. Rótulo do produto. Taboão da Serra, SP: Biolab Sanus Farmacêutica Ltda, 2017. 14. Disfor<sup>®</sup>: peptídeos de colágeno Peptan<sup>®</sup> + vitamina D. Rótulo do produto. Taboão da Serra, SP: Biolab Sanus Farmacêutica Ltda, 2017. 15. Disfor<sup>®</sup> Caps: colágeno não hidrolisado tipo II. Rótulo do produto. Biolab Sanus Farmacêutica Ltda, 2018.
                                    </strong></small></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <?php

    endwhile;
endif;
get_footer();
?>







