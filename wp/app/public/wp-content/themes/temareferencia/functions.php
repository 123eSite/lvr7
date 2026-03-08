<?php

/**
 * Funções básicas do tema AltaVia.
 *
 * Nesta fase estamos:
 * - Registrando suporte ao title-tag.
 * - Registrando um menu principal.
 * - Carregando CSS e JS exatamente como no HTML estático,
 *   apenas trocando caminhos absolutos por bloginfo('template_url') / get_bloginfo('template_url').
 */

// Suporte à tag <title> gerenciada pelo WordPress.
add_theme_support( 'title-tag' );

/**
 * Tamanhos de imagem usados na página A AltaVia (e reutilizáveis).
 * Cada entrada: 'nome_do_tamanho' => [ largura, altura, crop ].
 * crop: true = recorte fixo, false = proporcional (altura 0 = automática).
 */
function temaaltavia_get_image_sizes() {
	return array(
		// Page title (banner-quem-somos) – fundo full width.
		'altavia_page_title'     => array( 1920, 360, true ),
		// Banner intro (sobre) – .video-banner max-width 700px.
		'altavia_banner_intro'   => array( 620, 413, true ),
		// Foto do fundador – .member col-lg-3, card retrato.
		'altavia_fundador'       => array( 296, 296, true ),
		// Fundo depoimentos (banners/13) – full width.
		'altavia_depoimentos_bg' => array( 1920, 1080, true ),
		// Página O que fazemos: fundo do banner "O desafio dos negócios".
		'altavia_o_que_fazemos_banner_bg' => array( 1920, 1080, true ),
		// Front page: fundo dos slides do slider.
		'altavia_front_slider_bg' => array( 1920, 1080, true ),
		// Front page: imagens dos cards (metodologia, abordagem, entregamos).
		'altavia_front_card_img' => array( 550, 367, true ),
	);
}

/**
 * Registra os tamanhos de imagem do tema (add_image_size).
 */
function temaaltavia_add_image_sizes() {
	foreach ( temaaltavia_get_image_sizes() as $name => $args ) {
		add_image_size( $name, (int) $args[0], (int) $args[1], (bool) $args[2] );
	}
}
add_action( 'after_setup_theme', 'temaaltavia_add_image_sizes' );

/**
 * Exibe os tamanhos do tema no seletor de mídia do admin.
 */
function temaaltavia_custom_image_size_names( $sizes ) {
	$labels = array(
		'altavia_page_title'     => __( 'AltaVia: Page title (bg)', 'temaaltavia' ),
		'altavia_banner_intro'   => __( 'AltaVia: Banner intro', 'temaaltavia' ),
		'altavia_fundador'       => __( 'AltaVia: Fundador', 'temaaltavia' ),
		'altavia_depoimentos_bg' => __( 'AltaVia: Depoimentos (bg)', 'temaaltavia' ),
		'altavia_o_que_fazemos_banner_bg' => __( 'AltaVia: O que fazemos (banner bg)', 'temaaltavia' ),
		'altavia_front_slider_bg' => __( 'AltaVia: Front – Slider (bg)', 'temaaltavia' ),
		'altavia_front_card_img' => __( 'AltaVia: Front – Card img', 'temaaltavia' ),
	);
	return array_merge( $sizes, $labels );
}
add_filter( 'image_size_names_choose', 'temaaltavia_custom_image_size_names' );

/**
 * Retorna a URL da imagem ACF no tamanho indicado (ou full).
 *
 * @param array|int $image ACF image (array com ID/url/sizes) ou attachment ID.
 * @param string    $size  Nome do tamanho (ex: 'altavia_banner_intro').
 * @return string URL ou vazio.
 */
function temaaltavia_image_url( $image, $size = '' ) {
	if ( empty( $image ) ) {
		return '';
	}
	$id  = 0;
	$url = '';
	if ( is_numeric( $image ) ) {
		$id = (int) $image;
	} elseif ( is_array( $image ) ) {
		$id  = isset( $image['ID'] ) ? (int) $image['ID'] : 0;
		$url = isset( $image['url'] ) ? $image['url'] : '';
		if ( $size && ! empty( $image['sizes'][ $size ] ) ) {
			return (string) $image['sizes'][ $size ];
		}
	}
	if ( $id && $size ) {
		$src = wp_get_attachment_image_src( $id, $size );
		if ( $src && ! empty( $src[0] ) ) {
			return $src[0];
		}
	}
	return $url ? (string) $url : '';
}

// Registro de menu principal (será usado depois no header).
register_nav_menus(
	array(
		'menu-principal' => __( 'Menu principal', 'temaaltavia' ),
	)
);

/**
 * Página de opções ACF para o Footer (campos em acf-json/group_footer.json).
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(
		array(
			'page_title'  => 'Rodapé',
			'menu_title'  => 'Rodapé',
			'menu_slug'   => 'acf-options-footer',
			'capability'    => 'edit_posts',
        	'redirect'  => false
		)
	);
}

/**
 * Enfileira os estilos e scripts do tema.
 * Nesta etapa seguimos o HTML estático, sem otimizações.
 */
function temaaltavia_enqueue_assets() {
	$template_uri = get_bloginfo( 'template_url' );

	// Google Fonts (mantendo a URL do HTML).
	wp_enqueue_style(
		'temaaltavia-google-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Unbounded:wght@400;500;700&display=swap',
		array(),
		null
	);

	// CSS principais (mesmos arquivos do HTML, mas servidos via tema).
	wp_enqueue_style(
		'temaaltavia-libraries',
		$template_uri . '/assets/css/libraries.css',
		array(),
		null
	);

	wp_enqueue_style(
		'temaaltavia-icons',
		$template_uri . '/assets/css/icons.css',
		array( 'temaaltavia-libraries' ),
		null
	);

	wp_enqueue_style(
		'temaaltavia-style',
		$template_uri . '/assets/css/style.css',
		array( 'temaaltavia-icons' ),
		'2'
	);

	// JS principais (mantendo ordem do HTML: libraries.js depois main.js).
	wp_enqueue_script(
		'temaaltavia-libraries',
		$template_uri . '/assets/js/libraries.js',
		array(),
		null,
		true
	);

	wp_enqueue_script(
		'temaaltavia-main',
		$template_uri . '/assets/js/main.js',
		array( 'temaaltavia-libraries' ),
		null,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'temaaltavia_enqueue_assets' );
