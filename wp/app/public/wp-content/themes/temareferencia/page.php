<?php
/**
 * Template padrão para páginas.
 * Carrega o conteúdo conforme o slug da página (nome da página).
 * Páginas filhas de "Cases" usam sempre o layout cases-interna.php.
 */

get_header();

$page_id = get_the_ID();
$slug    = get_post_field( 'post_name', $page_id );

// Páginas filhas de Cases: usar layout cases-interna
$parent_id = wp_get_post_parent_id( $page_id );
if ( $parent_id ) {
	$parent_slug = get_post_field( 'post_name', $parent_id );
	if ( $parent_slug === 'cases' ) {
		$template_file = get_template_directory() . '/cases-interna.php';
		if ( file_exists( $template_file ) ) {
			include $template_file;
			get_footer();
			return;
		}
	}
}

// Mapeamento slug da página → arquivo PHP do tema
$map = array(
	'a-altavia'     => 'altavia',
	'o-que-fazemos' => 'o-que-fazemos',
	'cases'         => 'cases',
);
$template_name = isset( $map[ $slug ] ) ? $map[ $slug ] : $slug;
$template_file = get_template_directory() . '/' . $template_name . '.php';

if ( file_exists( $template_file ) ) {
	include $template_file;
} else {
	// Fallback: conteúdo do editor
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
	<div class="container py-5 default-page">
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5' ); ?>>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	</div>
			<?php
		endwhile;
	endif;
}

get_footer();
