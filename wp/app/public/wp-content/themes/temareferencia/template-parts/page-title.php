<?php
/**
 * Bloco Page Title (compartilhado).
 * Usa ACF: page_title_titulo, page_title_imagem (obrigatórios).
 * Breadcrumb: Home; se a página tiver pai (ex.: filha de Cases), exibe link do pai; depois título atual.
 */
$titulo = get_field( 'page_title_titulo' );
$imagem = get_field( 'page_title_imagem' );
if ( ! $titulo || ! $imagem ) {
	return;
}
$img_src = temaaltavia_image_url( $imagem, 'altavia_page_title' );
if ( ! $img_src ) {
	$img_src = ! empty( $imagem['url'] ) ? $imagem['url'] : '';
}
if ( ! $img_src ) {
	return;
}
$parent_id   = wp_get_post_parent_id( get_the_ID() );
$parent_url  = $parent_id ? get_permalink( $parent_id ) : '';
$parent_name = $parent_id ? get_the_title( $parent_id ) : '';
?>
<section class="page-title-layout1 page-title-light bg-parallax bg-overlay text-center">
	<div class="bg-img"><img src="<?php echo esc_url( $img_src ); ?>" alt="<?php echo esc_attr( $titulo ); ?>"></div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="pagetitle-heading"><?php echo esc_html( $titulo ); ?></h1>
				<nav>
					<ol class="breadcrumb justify-content-center mb-0">
						<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
						<?php if ( $parent_id && $parent_url && $parent_name ) : ?>
							<li class="breadcrumb-item"><a href="<?php echo esc_url( $parent_url ); ?>"><?php echo esc_html( $parent_name ); ?></a></li>
						<?php endif; ?>
						<li class="breadcrumb-item active" aria-current="page"><?php echo esc_html( $titulo ); ?></li>
					</ol>
				</nav>
			</div><!-- /.col-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.page-title -->
