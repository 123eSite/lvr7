<?php
/**
 * Conteúdo da página O que fazemos (slug: o-que-fazemos).
 * HTML fatiado de o-que-fazemos.html; estrutura preservada.
 * Conteúdo 100% ACF; sem fallbacks.
 */

?>
	<?php get_template_part( 'template-parts/page-title' ); ?>

	<?php
	$desafio_bg   = get_field( 'desafio_imagem_bg' );
	$desafio_bg_src = $desafio_bg ? temaaltavia_image_url( $desafio_bg, 'altavia_o_que_fazemos_banner_bg' ) : '';
	if ( $desafio_bg_src && get_field( 'desafio_subtitulo' ) && get_field( 'desafio_titulo' ) && have_rows( 'desafio_perguntas' ) ) :
		?>
	<!-- ========================
    Banner layout 7 (O desafio)
    ========================== -->
	<section class="banner-layout7 bg-overlay bg-parallax">
		<div class="bg-img"><img src="<?php echo esc_url( $desafio_bg_src ); ?>" alt=""></div>
		<div class="container">
			<div class="row sticky-top">
				<div class="col-12 col-md-12 col-lg-6">
					<div class="heading-layout2 heading-light mb-60">
						<h2 class="heading-subtitle color-primary"><?php echo esc_html( get_field( 'desafio_subtitulo' ) ); ?></h2>
						<h3 class="heading-title"><?php echo wp_kses_post( get_field( 'desafio_titulo' ) ); ?></h3>
						<p><?php echo wp_kses_post( get_field( 'desafio_texto' ) ); ?></p>
					</div> <!-- /.heading-layout2 -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-12 col-md-12 col-lg-6 offset-lg-6">
					<div class="scrollable-sticky sticky-is-enabled">
						<?php
						while ( have_rows( 'desafio_perguntas' ) ) {
							the_row();
							$pergunta = get_sub_field( 'pergunta' );
							$resposta = get_sub_field( 'resposta' );
							if ( ! $pergunta && ! $resposta ) {
								continue;
							}
							?>
						<div class="sticky-card sticky-top">
							<div class="sticky-card-inner">
								<div class="card-header d-flex align-items-start mb-40">
									<div class="card-title" style="border: none; padding-left: 0; margin-left: 0;">
										<?php if ( $pergunta ) : ?><h4><?php echo esc_html( $pergunta ); ?></h4><?php endif; ?>
									</div>
								</div><!-- /.card-header -->
								<?php if ( $resposta ) : ?>
								<div class="card-body">
									<p class="card-desc mt-30 mb-0"><?php echo wp_kses_post( $resposta ); ?></p>
								</div>
								<?php endif; ?>
							</div>
						</div> <!-- /.sticky-card -->
							<?php
						}
						?>
					</div><!-- /.scrollable-sticky -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.Banner layout 7 -->
	<?php endif; ?>

	<?php if ( get_field( 'metodologia_subtitulo' ) && get_field( 'metodologia_titulo' ) && get_field( 'metodologia_texto' ) && have_rows( 'metodologia_etapas' ) ) : ?>
	<!-- ========================
    Banner layout 9 (Metodologia)
    ========================== -->
	<section class="banner-layout9 bg-gray-gradient">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12">
					<div class="heading-layout2">
						<h2 class="heading-subtitle color-primary"><?php echo esc_html( get_field( 'metodologia_subtitulo' ) ); ?></h2>
						<h3 class="heading-title"><?php echo wp_kses_post( get_field( 'metodologia_titulo' ) ); ?></h3>
						<p><?php echo wp_kses_post( get_field( 'metodologia_texto' ) ); ?></p>
					</div> <!-- /.heading-layout2 -->
				</div><!-- /.col-lg-7 -->
			</div><!-- /.row -->
		</div><!-- /.container -->

		<div class="scrollable-sticky sticky-is-enabled boxed-section mt-60">
			<?php
			while ( have_rows( 'metodologia_etapas' ) ) {
				the_row();
				$num      = get_sub_field( 'numero' );
				$titulo   = get_sub_field( 'titulo' );
				$icone    = get_sub_field( 'icone' );
				$destaque = get_sub_field( 'destaque' );
				$conteudo = get_sub_field( 'conteudo' );
				?>
			<div class="sticky-card sticky-top">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-12 col-lg-6 mt-30">
							<div class="d-flex flex-wrap mt-30">
								<?php if ( $num ) : ?><div class="ball-number"><?php echo esc_html( $num ); ?></div><?php endif; ?>
								<div class="flex-1">
									<?php if ( $titulo ) : ?><h4 class="card-title mb-0"><?php echo esc_html( $titulo ); ?></h4><?php endif; ?>
								</div>
							</div>
						</div><!-- /.col-lg-6 -->
						<div class="col-12 col-md-12 col-lg-6">
							<?php if ( $destaque || $conteudo ) : ?>
							<div class="fancyboxs-layout2 fancybox-light mt-30">
								<div class="fancybox-item">
									<?php if ( $icone ) : ?>
									<div class="fancybox-icon">
										<img width="70" src="<?php echo esc_url( $icone ); ?>" alt="">
									</div><!-- /.fancybox-icon -->
									<?php endif; ?>
									<div class="fancybox-body">
										<?php if ( $destaque ) : ?><p class="fancybox-desc"><strong><?php echo esc_html( $destaque ); ?></strong></p><?php endif; ?>
									</div><!-- /.fancybox-body -->
								</div><!-- /.fancybox-item -->
							</div><!-- /.fancyboxs-layout2 -->
							<?php endif; ?>
							<?php if ( $conteudo ) : ?>
							<div class="text">
								<?php echo wp_kses_post( $conteudo ); ?>
							</div>
							<?php endif; ?>
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div> <!-- /.sticky-card -->
				<?php
			}
			?>
		</div><!-- /.scrollable-sticky -->
	</section><!-- /.Banner layout 9 -->
	<?php endif; ?>

	<?php if ( get_field( 'entregamos_subtitulo' ) && get_field( 'entregamos_titulo' ) && get_field( 'entregamos_texto' ) && have_rows( 'entregamos_servicos' ) ) : ?>
	<!-- ========================
        Services Layout 9 (O que entregamos)
    =========================== -->
	<section class="services-layout9 pt-50 section-full-width overflow-x-hidden">
		<div class="container">
			<div class="row mb-40">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="heading-layout2">
						<h2 class="heading-subtitle"><?php echo esc_html( get_field( 'entregamos_subtitulo' ) ); ?></h2>
						<h3 class="heading-title text-wrap-balance"><?php echo wp_kses_post( get_field( 'entregamos_titulo' ) ); ?></h3>
						<p><?php echo wp_kses_post( get_field( 'entregamos_texto' ) ); ?></p>
					</div><!-- /.heading -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-12">
					<div class="swiper"
						data-swiper='{"slidesPerView":1,"spaceBetween":10,"autoplay":{"delay":"7000"}, "watchSlidesProgress": true, "loop":true, "navigation": {"nextEl": "#services-next","prevEl": "#services-prev"},"breakpoints":{"600":{"slidesPerView":2},"992":{"slidesPerView":3,"spaceBetween":20},"1200":{"slidesPerView":4,"spaceBetween":20}}}'>
						<div class="swiper-wrapper">
							<?php
							while ( have_rows( 'entregamos_servicos' ) ) {
								the_row();
								$ico  = get_sub_field( 'icone' );
								$tit  = get_sub_field( 'titulo' );
								$desc = get_sub_field( 'descricao' );
								if ( ! $tit && ! $desc ) {
									continue;
								}
								?>
							<div class="swiper-slide">
								<div class="service-item">
									<div class="service-body">
										<?php if ( $ico ) : ?>
										<div class="service-icon"><img width="80" src="<?php echo esc_url( $ico ); ?>" alt="<?php echo esc_attr( $tit ); ?>"></div>
										<?php endif; ?>
										<?php if ( $tit ) : ?><h4 class="service-title"><?php echo esc_html( $tit ); ?></h4><?php endif; ?>
										<?php if ( $desc ) : ?><p class="service-desc"><?php echo wp_kses_post( $desc ); ?></p><?php endif; ?>
									</div><!-- /.service-body -->
								</div><!-- /.service-item -->
							</div>
								<?php
							}
							?>
						</div><!-- /.swiper-wrapper-->
					</div><!-- /.swiper-->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<?php
			$cta_texto  = get_field( 'entregamos_cta_texto' );
			$cta_url    = get_field( 'entregamos_cta_url' );
			$cta_label  = get_field( 'entregamos_cta_label' );
			if ( $cta_texto || ( $cta_url && $cta_label ) ) :
				?>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-6 col-xl-6 col-xxl-4">
					<p class="text-link text-wrap-balance mb-30 mt-30">
						<?php if ( $cta_texto ) : ?>
							<?php echo wp_kses_post( $cta_texto ); ?>
						<?php endif; ?>
						<?php if ( $cta_url && $cta_label ) : ?>
							<a href="mailto:<?php echo $cta_url; ?>" class="btn btn-secondary btn-link btn-underlined arrow-hover-flip-up">
								<span><?php echo esc_html( $cta_label ); ?></span>
								<svg class="arrow-flip" enable-background="new 0 0 64 64" viewBox="0 0 64 64" width="10" height="10" xmlns="http://www.w3.org/2000/svg">
									<g class="arrow-flip-path-1"><path d="m56 6h-48c-1.104 0-2 .896-2 2s.896 2 2 2h43.171l-44.585 44.586c-.781.781-.781 2.047 0 2.828.391.391.902.586 1.414.586s1.024-.195 1.414-.586l44.586-44.586v43.172c0 1.104.896 2 2 2s2-.896 2-2v-48c0-1.104-.896-2-2-2z" fill="currentColor"></path></g>
									<g class="arrow-flip-path-2"><path d="m56 6h-48c-1.104 0-2 .896-2 2s.896 2 2 2h43.171l-44.585 44.586c-.781.781-.781 2.047 0 2.828.391.391.902.586 1.414.586s1.024-.195 1.414-.586l44.586-44.586v43.172c0 1.104.896 2 2 2s2-.896 2-2v-48c0-1.104-.896-2-2-2z" fill="currentColor"></path></g>
								</svg>
							</a>
						<?php endif; ?>
					</p>
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<?php endif; ?>
		</div><!-- /.container -->
	</section><!-- /.Services Layout 9 -->
	<?php endif; ?>
