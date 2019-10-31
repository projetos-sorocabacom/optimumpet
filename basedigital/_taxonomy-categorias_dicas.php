
<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="robots" content="noindex" />
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo str_replace( "http://", "//", get_template_directory_uri() ); ?>/dist/img/favicon.ico" type="image/x-icon">

    <meta property="og:image" content="<?php echo str_replace( "http://", "//", get_template_directory_uri() ); ?>/dist/img/share.jpg"/>

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1687728621260788');
        fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=1687728621260788&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-103956846-1', 'auto');
    </script>
	<?php wp_head(); ?>
</head>
<body style="background: #FFFFFF">
<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=1687728621260788&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!--Cookies-->
<style>
    .cookies {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background: #eeeeec;
        z-index: 999999;
        text-align: center;
        padding: 56px 0;
    }
    .cookies-container {
        display: block;
        margin: 0 auto;
        max-width: 1080px;
    }
    .cookies h3 {
        text-transform: uppercase;
        font-size: 16px;
        margin-bottom: 27px;
    }
    .cookies p {
        font-size: 14px;
        line-height: 20px;
        font-family: 'gotham_bookregular';
        letter-spacing: -0.05em;
    }
    .close-cookies {
        position: absolute;
        width: 50px;
        height: 50px;
        top: 0;
        bottom: 0;
        margin: auto 0;
        right: 5%;
        border: 2px solid #3c3c3c;
        border-radius: 50%;
        opacity: 1;
    }
    .close-cookies:hover {
        transition: all ease-in-out 150ms;
        opacity: 0.6;
    }
    .close-cookies:before {
        position: absolute;
        content: "";
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width: 20px;
        height: 2px;
        background: #3c3c3c;
        transform: rotate(45deg);
    }
    .close-cookies:after {
        position: absolute;
        content: "";
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width: 20px;
        height: 2px;
        background: #3c3c3c;
        transform: rotate(-45deg);
    }

    @media (max-width: 768px) {
        .cookies-container {
            padding: 0 30px;
        }
        .cookies h3 {
            text-transform: uppercase;
            font-size: 14px;
            margin-bottom: 27px;
            margin-top: 30px;
        }
        .cookies p {
            font-size: 12px;
            line-height: 20px;
            font-family: 'gotham_bookregular';
            letter-spacing: -0.05em;
        }
        .close-cookies {
            margin: 20px auto;
            width: 30px;
            height: 30px;
            left: 0;
            right: 0;
        }
        .close-cookies:before {
            width: 10px;
        }
        .close-cookies:after {
            width: 10px;
        }
        .cookies a {
            font-size: 14px;
            color: #000000;
            text-decoration: underline;
        }
    }
</style>

<div class="cookies" id="cookies">
    <a href="#" class="close-cookies" onclick="closeCookies();">
        <spa></spa>
    </a>

    <div class="cookies-container">
        <h3>Política de cookies</h3>

        <p>
            Usamos os cookies (proprietários e de terceiros) para ajudar você a navegar em nosso website e colher informações relacionadas ao uso do próprio website. <br>
            Ao acessar nossas páginas, você concorda com o uso dos cookies. Para mais informações sobre cookies, ou se não concorda com isso, consulte nossa <a href="http://optimumpet.com.br/">Política de Cookies.</a>
        </p>
    </div>
</div>
<script>
    function closeCookies() {
        document.getElementById("cookies").style.display = "none";
        localStorage.setItem("cookie", true);
    }

    if (localStorage.getItem("cookie") == "true") {
        document.getElementById("cookies").style.display = "none";
    }
</script>
<!--Cookies-->

<header class="header-main active">
    <a href="<?php echo get_home_url(); ?>" class="logo">
        <svg class="svg-logo" id="b5af54d3-3dc9-4a3c-9e6b-4f907af6ae46" data-name="ARTWORK" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 217.86 34.16"><title>Vector Smart Object</title>
            <path d="M0,17.08C0,9.63,4.93,0,18,0,28.85,0,35.6,6.32,35.6,16.3s-7,17.86-18,17.86C5.05,34.16,0,24.79,0,17.08Zm29.5.83c0-9.76-5.62-15.82-12.77-15.82C11.72,2.09,6,4.88,6,15.73,6,24.79,11,32,19.39,32,22.44,32,29.5,30.5,29.5,17.91Z"/>
            <path class="svg-logo" d="M42.83,15.61c0-5.85,0-6.93-.07-8.16s-.39-1.92-1.66-2.19a8.09,8.09,0,0,0-1.5-.11c-.42,0-.65-.08-.65-.35s.27-.35.84-.35c2,0,4.46.12,5.54.12,1.58,0,3.81-.12,5.58-.12,4.81,0,6.54,1.62,7.15,2.19A6.68,6.68,0,0,1,60,11.22a9.05,9.05,0,0,1-9.46,9.31,5.51,5.51,0,0,1-.81,0c-.19,0-.46-.08-.46-.34s.27-.42,1.08-.42c2.15,0,5.16-2.43,5.16-6.35A7.4,7.4,0,0,0,53.22,7.6a5.71,5.71,0,0,0-3.85-1.5,5.37,5.37,0,0,0-1.5.16c-.19.07-.31.31-.31.73V22.38c0,3.54,0,6.58.19,8.23.12,1.08.35,1.92,1.5,2.08a16.63,16.63,0,0,0,2,.15c.42,0,.62.11.62.31s-.31.38-.73.38c-2.54,0-5-.12-6-.12s-3.31.12-4.85.12c-.5,0-.77-.12-.77-.38s.15-.31.61-.31a6.36,6.36,0,0,0,1.38-.15c.77-.16,1-1,1.12-2.12.19-1.62.19-4.65.19-8.19Z"/>
            <path class="svg-logo" d="M74.22,6.6l-5.73.15c-2.23.08-3.16.27-3.73,1.12a4.56,4.56,0,0,0-.65,1.35c-.07.31-.19.46-.42.46s-.34-.19-.34-.62c0-.62.73-4.12.8-4.42.12-.5.23-.73.47-.73a8.76,8.76,0,0,0,1.65.46c1.11.11,2.58.19,3.85.19H85.34A18.59,18.59,0,0,0,88,4.37a9.64,9.64,0,0,1,1-.19c.27,0,.31.23.31.81,0,.81-.11,3.46-.11,4.47,0,.38-.12.61-.35.61s-.38-.19-.42-.77l0-.42c-.08-1-1.11-2.08-4.54-2.15L79,6.6V22.38c0,3.54,0,6.58.2,8.23.11,1.08.34,1.92,1.5,2.08a16.63,16.63,0,0,0,2,.15c.42,0,.62.11.62.31s-.31.38-.73.38c-2.54,0-5-.12-6-.12-.89,0-3.31.12-4.85.12-.5,0-.77-.12-.77-.38s.16-.31.62-.31a6.36,6.36,0,0,0,1.38-.15c.77-.16,1-1,1.12-2.12.19-1.62.19-4.65.19-8.19Z"/>
            <path class="svg-logo" d="M96.42,15.61c0-5.85,0-6.93-.08-8.16s-.47-2-1.31-2.15a5.48,5.48,0,0,0-1.39-.15c-.38,0-.62-.08-.62-.38s.31-.31.93-.31c1.46,0,3.89.12,5,.12s3.23-.12,4.7-.12c.5,0,.81.08.81.31s-.23.38-.61.38a6.65,6.65,0,0,0-1.16.11c-1,.19-1.35.85-1.42,2.19s-.08,2.31-.08,8.16v6.77c0,3.73,0,6.77.15,8.43.12,1,.38,1.73,1.54,1.89a16.6,16.6,0,0,0,2,.15c.42,0,.62.11.62.31s-.31.38-.73.38c-2.54,0-5-.12-6-.12-.88,0-3.31.12-4.85.12-.5,0-.77-.12-.77-.38s.16-.31.61-.31a6.39,6.39,0,0,0,1.39-.15c.77-.16,1-.81,1.12-1.92.19-1.62.19-4.66.19-8.39Z"/>
            <path class="svg-logo" d="M115.23,4.6c.11-.65.35-1,.65-1s.54.19,1,1.19l10.5,21.7,10.47-22c.3-.62.5-.92.84-.92s.58.38.69,1.19l3.5,23.78c.34,2.43.73,3.54,1.88,3.88a7.65,7.65,0,0,0,2.39.39c.34,0,.62,0,.62.27s-.46.42-1,.42c-1,0-6.27-.12-7.81-.23-.88-.08-1.11-.19-1.11-.42s.15-.31.42-.43.35-.57.19-1.65L136.2,13.88H136l-8.39,17.47c-.88,1.81-1.08,2.15-1.42,2.15s-.73-.77-1.35-1.92c-.92-1.77-4-7.66-4.43-8.74-.34-.81-2.65-5.65-4-8.54h-.16l-2,15.31a15.52,15.52,0,0,0-.11,1.81c0,.73.5,1.08,1.15,1.23a7.4,7.4,0,0,0,1.62.19c.31,0,.58.07.58.27s-.35.42-.92.42c-1.62,0-3.35-.12-4-.12s-2.58.12-3.81.12c-.39,0-.69-.08-.69-.42s.23-.27.61-.27a4.9,4.9,0,0,0,1.15-.12c1.08-.23,1.39-1.73,1.58-3Z"/>
            <path class="svg-logo" d="M150.71,15.61c0-5.85,0-6.93-.08-8.16s-.39-1.92-1.66-2.19a8.1,8.1,0,0,0-1.5-.11c-.43,0-.66-.08-.66-.35s.27-.35.84-.35c2,0,4.47.12,5.62.12.92,0,3.35-.12,4.73-.12.58,0,.85.08.85.35s-.23.35-.62.35a6,6,0,0,0-1.12.11c-1,.19-1.35.85-1.42,2.19s-.08,2.31-.08,8.16V21c0,5.58,1.11,7.93,3,9.46A7.11,7.11,0,0,0,163.44,32,7.54,7.54,0,0,0,168.75,30c2.12-2.12,2.23-5.58,2.23-9.54V15.61c0-5.85,0-6.93-.08-8.16s-.39-1.92-1.66-2.19a7.61,7.61,0,0,0-1.39-.11c-.42,0-.65-.08-.65-.35s.27-.35.8-.35c2,0,4.39.12,4.43.12.46,0,2.88-.12,4.38-.12.54,0,.81.08.81.35s-.23.35-.7.35a5.9,5.9,0,0,0-1.11.11c-1,.19-1.35.85-1.42,2.19s-.08,2.31-.08,8.16v4.12c0,4.27-.42,8.81-3.65,11.58a11.49,11.49,0,0,1-8,2.77c-2,0-5.73-.11-8.54-2.65-2-1.77-3.42-4.62-3.42-10.19Z"/>
            <path class="svg-logo" d="M185.28,4.6c.12-.65.35-1,.66-1s.54.19,1,1.19l10.5,21.7,10.46-22c.31-.62.5-.92.85-.92s.57.38.69,1.19L213,28.57c.34,2.43.73,3.54,1.88,3.88a7.64,7.64,0,0,0,2.39.39c.35,0,.61,0,.61.27s-.46.42-1,.42c-1,0-6.27-.12-7.81-.23-.88-.08-1.12-.19-1.12-.42s.15-.31.42-.43.34-.57.19-1.65l-2.31-16.93h-.15l-8.39,17.47c-.89,1.81-1.08,2.15-1.42,2.15s-.73-.77-1.34-1.92c-.93-1.77-4-7.66-4.43-8.74-.35-.81-2.65-5.65-4-8.54h-.16l-2,15.31a14.79,14.79,0,0,0-.12,1.81c0,.73.5,1.08,1.16,1.23a7.36,7.36,0,0,0,1.62.19c.31,0,.58.07.58.27s-.35.42-.92.42c-1.62,0-3.35-.12-4-.12s-2.58.12-3.81.12c-.38,0-.69-.08-.69-.42s.23-.27.62-.27a4.91,4.91,0,0,0,1.15-.12c1.08-.23,1.38-1.73,1.58-3Z"/>
            <path class="svg-logo" d="M214.12,4h.21a.41.41,0,0,0,.1,0s0,0,0,.12,0,.33,0,.37,0,.14-.08.14-.06,0-.06-.18,0-.16-.31-.16h-.35V5.57a4.83,4.83,0,0,0,0,.64c0,.1.06.19.16.19h.08c.08,0,.1,0,.1.06s0,.06-.1.06l-.49,0-.53,0c-.08,0-.1,0-.1-.06s0-.06.1-.06h.1c.14,0,.14-.12.16-.19s0-.29,0-.64V4.28h-.41c-.21,0-.31.08-.33.19s0,.1-.08.1,0,0,0-.1.08-.39.08-.45a.14.14,0,0,1,0-.08s0,0,.14,0a1.6,1.6,0,0,0,.27,0Zm.82.08C215,4,215,4,215,4s.08,0,.12.1l.93,1.77L217,4a.1.1,0,0,1,.1-.08s.06.06.08.12l.31,2c0,.25.1.31.19.31h.08c.06,0,.06,0,.06.06s0,.06-.08.06-.56,0-.64,0a.07.07,0,0,1-.08-.08L216.79,5h0l-.7,1.34c-.06.12-.08.18-.14.18s-.1-.1-.14-.18l-.7-1.38h0l-.14,1.23v.14s0,.1.08.1h.08c.06,0,.08,0,.08.06s0,.06-.06.06l-.39,0-.31,0c-.06,0-.08,0-.08-.06s0-.06.1-.06h.06c.06,0,.1-.06.12-.23Z"/>
        </svg>
    </a>

    <nav class="menu-menu-header-container">
        <ul class="menu">
            <li class="sub-caes">
                <a href="#">Tudo sobre cães</a>
                <div class="submenu">
                    <figure>
                        <img src="<?php echo str_replace( "http://", "//", get_template_directory_uri() ); ?>/dist/img/cachorro.png" alt="Cachorro" />
                    </figure>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header_caes',
							'container'      => 'div'
						)
					);
					?>
                </div>
            </li>
            <li class="sub-gatos">
                <a href="#">Tudo sobre gatos</a>
                <div class="submenu">
                    <figure>
                        <img src="<?php echo str_replace( "http://", "//", get_template_directory_uri() ); ?>/dist/img/gato.png" alt="Gato" />
                    </figure>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header_gatos',
							'container'      => 'div'
						)
					);
					?>
                </div>
            </li>
            <li class="menu-item">
                <a href="<?php echo get_permalink( 5 ); ?>">Sobre optimum™</a>
            </li>
            <li>
                <a href="<?php echo get_permalink( 7 ); ?>">Conheça WALTHAM</a>
            </li>
            <li>
                <a href="<?php echo get_permalink( 9 ); ?>">Fale conosco</a>
            </li>
        </ul>
    </nav>

    <div id="iconMenuMobile" onclick="header.hamburguerMenu()">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="nav-mobile">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'header_mobile',
				'container'      => 'div'
			)
		);
		?>
    </div>
</header><?php

$idSlider   = get_queried_object()->term_id == 36 ? 94 : 92;
$idTaxonomy = get_queried_object()->term_id == 36 ? 36 : 37;

if(get_queried_object()->term_id == 36){
	$page = "dicas-conselhos-cao";
}else{
	$page = "dicas-conselhos-gatos";
}

?>
<div class="slider-dicas">
	<?php
	foreach ( get_field( 'slider', $idSlider ) as $item ) {
		if ( ! wp_is_mobile() ) {
			?>
            <div class="item" style="background-image: url(<?php echo $item['imagem']['url']; ?>);">
                <div class="info">
                    <h1><?php echo $item['titulo']; ?></h1>
                    <div class="texto">
						<?php echo $item['descricao']; ?>
                    </div>
                </div>
            </div>
			<?php
		} else {
			?>
            <div class="item" style="background-image: url(<?php echo $item['imagem_interna_mobile']['url']; ?>);">
                <div class="info">
                    <img src="<?php echo $item['logo_interna']['url']; ?>" alt="<?php echo $item['logo_interna']['alt']; ?>">
                    <h2><?php echo $item['titulo']; ?></h2>
                </div>
            </div>
			<?php
		}
	}
	?>

	<?php
	if ( wp_is_mobile() ) {
		?>
        <span class="more goToSextion" data-section="texto-mobile"></span>
		<?php
	} else {
		?>
        <span class="more goToSextion" data-section="filtro"></span>
		<?php
	}
	?>
</div>

<?php
if ( wp_is_mobile() ) {
	?>
    <div class="texto-mobile">
		<?php echo get_field( 'slider', $idSlider )[0]['descricao']; ?>
    </div>

	<?php
}
?>

<!-- <div class="filtro">
    <div class="container">
        <p><?php echo wp_is_mobile() ? "FILTRE SUA BUSCA" : "Filtrar:"; ?></p>

		<?php
		$categorias = get_terms( array(
			'taxonomy'   => 'categorias_dicas',
			'hide_empty' => false,
			'child_of'   => $idTaxonomy
		) );

		foreach ( $categorias as $categoria ) {
			?>
                <span class="label inactive" data-action-dicas="<?php echo $page; ?>" data-info="filtro" data-label="<?php echo $categoria->name; ?>">
                    <span class="checkbox" data-value="<?php echo $categoria->term_id; ?>"></span> <?php echo $categoria->name; ?>
                </span>
			<?php
		}
		?>

        <button class="clean-filter" data-action-dicas="<?php echo $page; ?>" data-info="limpar-filtro" data-label="<?php echo $page; ?>">Limpar filtros</button>
    </div>
</div> -->

<div class="content-blog nofilter">
    <div class="grid">
        <div class="grid-sizer"></div>
        <?php
        $dicas = get_posts( array(
            'posts_per_page' => - 1,
            'post_type'      => 'dicas_conselhos',
            'tax_query'      => array(
                array(
                    'taxonomy' => 'categorias_dicas',
                    'field'    => 'term_id',
                    'terms'    => get_queried_object()->term_id
                )
            )
        ) );

        //var_dump($dicas);

        forEach ( $dicas as $dica ) {
            $terms = get_the_terms( $dica->ID, 'categorias_dicas' );

            forEach ( $terms as $term ) {
                if ( $term->parent == get_queried_object()->term_id ) {
                    $termId   = $term->term_id;
                    $termName = $term->name;
                }
            }
            ?>
            <div class="grid-item <?php echo $termId; ?>">
                <!-- <span class="category"><?php echo $termName; ?></span> -->

                <a href="<?php echo get_permalink( $dica->ID ); ?>">
                    <img src="<?php echo get_field( "imagem_listagem", $dica->ID )['url']; ?>" alt="<?php echo get_field( "imagem_listagem", $dica->ID )['alt']; ?>">
                </a>

                <p class="data"><?php echo get_the_date( '', $dica->ID ); ?></p>

                <h3><a href="<?php echo get_permalink( $dica->ID ); ?>"><?php echo $dica->post_title; ?></a></h3>

                <a href="<?php echo get_permalink( $dica->ID ); ?>" class="link" data-action-dicas="<?php echo $page; ?>" data-info="<?php echo sanitize_title($dica->post_title); ?>" data-label="saiba-mais">Saiba mais ></a>
            </div>
            <?php
        }
        ?>
    </div>
    <aside>
            <div class="categories">
                <h2>Todas as categorias</h2>
                <ul>
                <?php
                    $categorias = get_terms( array(
                        'taxonomy'   => 'categorias_dicas',
                        'hide_empty' => true,
                        'child_of'   => $idTaxonomy
                    ) );

                    foreach ( $categorias as $categoria ) {
                        $classact = ($categorias[1]->term_id == $categoria->term_id) ? 'active' : 'dflt';
                        ?>
                            <li data-action-dicas="<?php echo $page; ?>" data-info="Categorias" data-label="<?php echo $categoria->name; ?>">
                                <a href="<?php echo get_category_link( $categoria->term_id ); ?>" class="<?php echo $classact; ?>"><?php echo $categoria->name; ?></a>
                            </li>
                        <?php
                    }
                    ?>
                </ul> 
            </div>
            <div class="article">
                <h2>Artigos populares</h2>
                <?php 
                    $values = get_field('artigos_populares', $idSlider);
                    
                    if($values) {
                        foreach($values as $value) { 
                            setup_postdata($value);
                            $id = $value->ID;
                            $categories = get_the_category( $id );   
                            $terms = get_the_terms( $id, 'categorias_dicas' );

                            forEach ( $terms as $term ) {
                                if ( $term->parent == $idTaxonomy ) {
                                    $termId   = $term->term_id;
                                    $termName = $term->name;
                                }
                            }
                            ?>

                            <div class="article-pop">
                                <figure style="background: url(<?php echo get_field('imagem_listagem', $id)['url']; ?>) no-repeat center center; background-size: cover;"></figure>
                                <div class="infos">
                                    <span><?php echo $termName; ?></span>
                                    <a href="<?php the_permalink(); ?>" class="pop-title"><?php the_title(); ?></a>
                                    <a href="<?php the_permalink(); ?>" class="pop-more">Saiba mais ></a>
                                </div>
                            </div>

                        <?php }
                    }

                    // quevar_dump($values);
                ?>
            </div>
        </aside>
</div>

<div class="related-dicas">
    
    <?php
    // Relacionados #####
    $values = get_field('produtos', $idSlider);
    
    if($values)
    {
        echo'<section class="related">';
        echo'<div class="wrap">';
        echo'<h4>Produtos Relacionados</h4>';
        foreach($values as $value)
        {
            ?>
                <div class="product_related">
                    <h3>
                        <a href="<?php echo get_permalink($value->ID); ?>">
                            <?php echo $value->post_title;?>
                        </a>
                    </h3>
                    
                    <figure>
                        <a href="<?php echo get_permalink($value->ID); ?>">
                            <img src="<?php echo get_field("imagem_produto_desktop", $value->ID)['url']; ?>" alt="<?php echo get_field("imagem_produto_desktop", $value->ID)['alt']; ?>">
                        </a>
                    </figure>
                    
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
</div>


<div class="single-dicas">
    <div class="section our-products">
        <h2 class="title-section">Nossos produtos</h2>

        <div class="food-box dog">
            <h3><a href="<?php echo get_category_link(3) ?>">Alimentos para cães</a></h3>
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/racao-super-premium-para-caes-optimum.png" alt="Ração Super Premium para Cães Optimum">

            <div class="box-buttons">
                <a href="<?php echo get_category_link( 3 ) ?>" class="btn-dark" data-action-dicas="<?php echo $page; ?>" data-info="conheca-produto" data-label="alimento-caes">Conheça todos os produtos</a>
            </div>
        </div>

        <div class="food-box cat">
            <h3><a href="<?php echo get_category_link(4) ?>">Alimentos para gatos</a></h3>
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/racao-super-premium-para-gatos-optimum.png" alt="Ração Super Premium para Gatos Optimum">

            <div class="box-buttons">
                <a href="<?php echo get_category_link( 4 ) ?>" class="btn-dark" data-action-dicas="<?php echo $page; ?>" data-info="conheca-produto" data-label="alimento-gatos">Conheça todos os produtos</a>
            </div>
        </div>

        <div class="about-box optimum">
            <div class="wrap">
                <h4>Sobre OPTIMUM™</h4>
                <p>OPTIMUM™ chegou com o compromisso do aproveitamento máximo. Isso porque a receita de OPTIMUM™ possui BIOAVAILABILITY: compromisso em entregar uma excelente absorção de nutrientes. Os pets aproveitam o máximo do alimento, para aproveitarem o máximo da vida com você.</p>

                <div class="box-buttons">
                    <a href="<?php echo get_permalink( 5 ) ?>" class="btn-dark" data-action-dicas="<?php echo $page; ?>" data-info="sobre-optimum" data-label="saiba-mais">saiba mais</a>
                </div>
            </div>
        </div>

        <div class="about-box waltham">
            <div class="wrap">
                <h4>Conheça WALTHAM</h4>
                <p>Os produtos OPTIMUM™ foram desenvolvidos seguindo as recomendações de WALTHAM, a maior autoridade mundial em nutrição, cuidado e bem-estar animal.</p>

                <div class="box-buttons">
                    <a href="<?php echo get_permalink( 7 ) ?>" class="btn-dark" data-action-dicas="<?php echo $page; ?>" data-info="sobre-waltham" data-label="saiba-mais">saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.onkeydown = function(event) {
        switch (event.keyCode) {
            case 40:
                ga('send', 'event', '<?php echo $page; ?>', "botao-directional-baixo");
                break;
        }
    };

    window.addEventListener('scroll', function(){
        ga('send', 'event', '<?php echo $page; ?>', "scroll");
    });

    
    var path = window.location.pathname;
    path = path.split("/");
    localStorage.setItem('origin', path[path.length-2]);

</script>
<?php get_footer(); ?>