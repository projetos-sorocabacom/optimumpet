<?php
global $post;


//Remove admin bar
show_admin_bar( false );

//Remove Meta wp generetor
remove_action( 'wp_head', 'wp_generator' );

//Remove Emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//Remove RSD
remove_action( 'wp_head', 'rsd_link' );

//Remove wlwmanifest
remove_action( 'wp_head', 'wlwmanifest_link' );

//Remove wp-embed.min.js
function my_deregister_scripts() {
	wp_deregister_script( 'wp-embed' );
}

add_action( 'wp_footer', 'my_deregister_scripts' );

//Remove jquery wp-head
function load_jquery() {
	if ( ! is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery' );
	}
}

add_action( 'template_redirect', 'load_jquery' );

/* GET specific custom field from post */
add_action( 'wp_head', 'myplugin_ajaxurl' );
function myplugin_ajaxurl() {
    global $post;
	echo '<script type="text/javascript">';
	echo 'var ajaxurl = "' . admin_url( 'admin-ajax.php' ) . '";';
	echo 'var base_url = "' . get_site_url() . '";';
	echo wp_is_mobile() ? 'var dispositivo = "-mobile";' : 'var dispositivo = "";';
	if(get_post_type() == "dicas_conselhos"){
		if(get_queried_object()->term_id == 36){
			echo 'var page = "dicas-conselhos-cao";';
		}else{
			echo 'var page = "dicas-conselhos-gatos";';
		}
	} else {
		echo 'var page = "' . get_page_uri( $post->ID ) . '";';
	}
	echo '</script>';
}

function revcon_change_post_label() {
	global $menu;
	global $submenu;
	$menu[5][0]                 = 'Produtos';
	$submenu['edit.php'][5][0]  = 'Produtos';
	$submenu['edit.php'][10][0] = 'Novo Produto';
	$submenu['edit.php'][16][0] = 'Produtos Tags';
}

function revcon_change_post_object() {
	global $wp_post_types;
	$labels                     = &$wp_post_types['post']->labels;
	$labels->name               = 'Produtos';
	$labels->singular_name      = 'Produtos';
	$labels->add_new            = 'Adicionar Produtos';
	$labels->add_new_item       = 'Adicionar Produtos';
	$labels->edit_item          = 'Editar Produtos';
	$labels->new_item           = 'Produtos';
	$labels->view_item          = 'Ver Produtos';
	$labels->search_items       = 'Procurar Produtos';
	$labels->not_found          = 'Nenhum produtos encontrado';
	$labels->not_found_in_trash = 'Nenhum produtos na lixeira';
	$labels->all_items          = 'Todos Produtos';
	$labels->menu_name          = 'Produtos';
	$labels->name_admin_bar     = 'Produtos';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

//Add suport thumbnail
add_theme_support( 'post-thumbnails' );

//Add menu
register_nav_menus( array(
	'header_menu'   => 'Menu cabeçalho',
	'footer_menu'   => 'Menu rodape',
	'header_caes'   => 'Menu Cães',
	'header_gatos'  => 'Menu Gatos',
	'header_mobile' => 'Menu Mobile',
) );

setlocale( LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese' );
date_default_timezone_set( 'America/Sao_Paulo' );

//Registro scripts e css
function basedigital_scripts() {
	//JS
	wp_enqueue_script( 'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), '1.11.1', true );
	wp_enqueue_script( 'foundation-core', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/js/plugins/foundation.core.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'foundation-magellan', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/js/plugins/foundation.magellan.min.js', array('foundation-core'), '1.0.0', true );
    wp_enqueue_script( 'foundation', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/js/foundation.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'slick-slider', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), '1.8.1', true );
    wp_enqueue_script( 'jquery-fullpage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.min.js', array(), '2.9.5', true );
    wp_enqueue_script( 'scrolloverflow', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/vendors/scrolloverflow.min.js', array(), '2.9.5', true );
	wp_enqueue_script( 'mask', '//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'imageload', '//unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array(), '1', true);
	wp_enqueue_script( 'isotop', '//unpkg.com/isotope-layout@3/dist/isotope.pkgd.js', array(), '1', true );
    wp_enqueue_script( 'main-js', '/wp-content/themes/basedigital/dist/js/main.min.js?ver=2.4', array(), '1.0.5', true );
    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/5ef691494b.js', array(), '1.0.5', true );

	//CSS
	wp_enqueue_style( 'fullpage-css', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.min.css', array(), '1.8.1' );
	wp_enqueue_style( 'slick-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', array(), '1.8.1' );
    wp_enqueue_style( 'main-css', '/wp-content/themes/basedigital/dist/css/main.min.css?ver=1.88', array(), '1.0' );
}

add_action( 'wp_enqueue_scripts', 'basedigital_scripts' );

//Pagination
function wordpress_pagination() {
	global $wp_query;

	$big = 999999999;

	echo paginate_links( array(
		'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'  => '?paged=%#%',
		'current' => max( 1, get_query_var( 'paged' ) ),
		'total'   => $wp_query->max_num_pages,
	) );
}

//Save contact
add_action( 'wp_ajax_nopriv_filter_post', 'filter_post' );
add_action( 'wp_ajax_filter_post', 'filter_post' );

function filter_post() {

	$products_list = get_posts( array(
		"category" => $_POST["id"]
	) );

	$products = array();

	foreach ( $products_list as $product ) {
		$imagem = get_field( "imagem_produto_desktop", $product->ID );

		$add_product = array(
			"category"     => $_POST["id"],
			"url"          => get_permalink( $product->ID ),
			"imagem"       => $imagem,
			"titulo"       => $product->post_title,
			"link_cobasi"  => get_field( "cobasi", $product->ID ),
			"link_petz"    => get_field( "petz", $product->ID ),
			"link_petlove" => get_field( "petlove", $product->ID )
		);

		array_push( $products, $add_product );
	}

	echo json_encode(
		array(
			"title_section" => get_term( $_POST["id"], "category" )->name,
			"resultado"     => $products
		)
	);

	die;
}

// Code for themes
add_action( 'after_switch_theme', 'flush_rewrite_rules' );

// Code for plugins
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'myplugin_flush_rewrites' );
function myplugin_flush_rewrites() {
	// call your CPT registration function here (it should also be hooked into 'init')
	myplugin_custom_post_types_registration();
	flush_rewrite_rules();
}
