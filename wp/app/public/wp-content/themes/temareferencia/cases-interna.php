<?php
/**
 * Layout para páginas filhas de Cases.
 * Qualquer página no WP que tiver "Cases" como pai usará este template.
 * Título e breadcrumb dinâmicos (título da página atual; breadcrumb: Home > Cases > [título]).
 */

?>
	<?php get_template_part( 'template-parts/page-title' ); ?>

	<!-- ========================
        Services Layout 6 (case interno)
    =========================== -->
	<?php
	$icone          = get_field( 'icone' );
	$titulo_destaque = get_field( 'titulo_destaque' );
	$bloco_contexto = get_field( 'bloco_contexto' );
	$bloco_desafio  = get_field( 'bloco_desafio' );
	$bloco_solucao  = get_field( 'bloco_solucao' );
	$bloco_resultados = get_field( 'bloco_resultados' );

	// Se não tiver título destaque, usar o título da página
	if ( ! $titulo_destaque ) {
		$titulo_destaque = get_the_title();
	}
	?>

	<?php if ( $bloco_contexto && ( $bloco_contexto['titulo'] || $bloco_contexto['texto'] ) ) : ?>
	<section class="fancyboxs-layout3 pt-110 pb-110">
		<div class="container">
			<div class="row fancybox-wrapper align-items-center">
				<?php if ( $icone || $titulo_destaque ) : ?>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="fancybox-item">
						<?php if ( $icone ) : ?>
						<div class="fancybox-icon">
							<img width="50" src="<?php echo esc_url( $icone['url'] ); ?>" alt="<?php echo esc_attr( $icone['alt'] ? $icone['alt'] : $titulo_destaque ); ?>">
						</div><!-- /.fancybox-icon -->
						<?php endif; ?>
						<?php if ( $titulo_destaque ) : ?>
						<div class="fancybox-body">
							<h4 class="fancybox-title mb-0"><?php echo esc_html( $titulo_destaque ); ?></h4>
						</div><!-- /.fancybox-body -->
						<?php endif; ?>
					</div><!-- /.fancybox-item -->
				</div><!-- /.col-lg-3 -->
				<?php endif; ?>
				<div class="col-sm-12 col-md-12 col-lg-8">
					<div class="text-block">
						<?php if ( $bloco_contexto['titulo'] ) : ?>
							<h4><?php echo esc_html( $bloco_contexto['titulo'] ); ?></h4>
						<?php endif; ?>
						<?php if ( $bloco_contexto['texto'] ) : ?>
							<div class="text-link text-wrap-balance">
								<?php echo wp_kses_post( $bloco_contexto['texto'] ); ?>
							</div>
						<?php endif; ?>
					</div><!-- /.text-block -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<?php endif; ?>

	<section class="services-layout2 bg-gray-gradient">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<?php if ( $bloco_desafio && ( $bloco_desafio['titulo'] || $bloco_desafio['texto'] ) ) : ?>
						<div class="col-sm-6">
							<div class="service-body">
								<?php if ( $bloco_desafio['titulo'] ) : ?>
									<h4 class="service-title"><?php echo esc_html( $bloco_desafio['titulo'] ); ?></h4>
								<?php endif; ?>
								<?php if ( $bloco_desafio['texto'] ) : ?>
									<?php echo wp_kses_post( $bloco_desafio['texto'] ); ?>
								<?php endif; ?>
							</div><!-- /.service-body -->
						</div><!-- /.col-sm-6 -->
						<?php endif; ?>

						<?php if ( $bloco_solucao && ( $bloco_solucao['titulo'] || $bloco_solucao['texto'] ) ) : ?>
						<div class="col-sm-6">
							<div class="service-body">
								<?php if ( $bloco_solucao['titulo'] ) : ?>
									<h4 class="service-title"><?php echo esc_html( $bloco_solucao['titulo'] ); ?></h4>
								<?php endif; ?>
								<?php if ( $bloco_solucao['texto'] ) : ?>
									<?php echo wp_kses_post( $bloco_solucao['texto'] ); ?>
								<?php endif; ?>
							</div><!-- /.service-body -->
						</div><!-- /.col-sm-6 -->
						<?php endif; ?>

						<?php if ( $bloco_resultados && ( $bloco_resultados['titulo'] || $bloco_resultados['texto'] ) ) : ?>
						<div class="col-sm-12">
							<div class="service-body orange">
								<?php if ( $bloco_resultados['titulo'] ) : ?>
									<h4 class="service-title"><?php echo esc_html( $bloco_resultados['titulo'] ); ?></h4>
								<?php endif; ?>
								<?php if ( $bloco_resultados['texto'] ) : ?>
									<?php echo wp_kses_post( $bloco_resultados['texto'] ); ?>
								<?php endif; ?>
							</div><!-- /.service-body -->
						</div><!-- /.col-sm-6 -->
						<?php endif; ?>
					</div><!-- /.row -->
				</div><!-- /.col-lg-6 -->

			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
