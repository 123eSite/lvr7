<?php
/**
 * Conteúdo da página A AltaVia (slug: a-altavia).
 * HTML fatiado de a-altavia.html; estrutura preservada.
 */

?>
	<?php get_template_part( 'template-parts/page-title' ); ?>

	<!-- ==========================
       Banner layout 8
    =========================== -->
	<section class="banner-layout8" id="a-altavia">
		<div class="container">
			<div class="row sticky-top">
				<div class="col-12 col-md-8 col-lg-6 px-xl-0">
					<div class="heading-layout2 mb-50 arrow-hover-flip-up">
						<?php if ( get_field( 'banner_subtitulo' ) ) : ?>
							<h2 class="heading-subtitle"><?php echo esc_html( get_field( 'banner_subtitulo' ) ); ?></h2>
						<?php endif; ?>
						<?php if ( get_field( 'banner_titulo' ) ) : ?>
							<h3 class="heading-title mb-30"><?php echo wp_kses_post( get_field( 'banner_titulo' ) ); ?></h3>
						<?php endif; ?>
						<?php $banner_link = get_field( 'banner_link_url' ); if ( $banner_link ) : ?>
							<a href="<?php echo esc_url( $banner_link ); ?>" class="btn btn-secondary btn-link">
								<svg class="arrow-flip" enable-background="new 0 0 64 64" viewBox="0 0 64 64" width="80" height="80" xmlns="http://www.w3.org/2000/svg">
									<g class="arrow-flip-path-1"><path d="m56 6h-48c-1.104 0-2 .896-2 2s.896 2 2 2h43.171l-44.585 44.586c-.781.781-.781 2.047 0 2.828.391.391.902.586 1.414.586s1.024-.195 1.414-.586l44.586-44.586v43.172c0 1.104.896 2 2 2s2-.896 2-2v-48c0-1.104-.896-2-2-2z" fill="currentColor"></path></g>
									<g class="arrow-flip-path-2"><path d="m56 6h-48c-1.104 0-2 .896-2 2s.896 2 2 2h43.171l-44.585 44.586c-.781.781-.781 2.047 0 2.828.391.391.902.586 1.414.586s1.024-.195 1.414-.586l44.586-44.586v43.172c0 1.104.896 2 2 2s2-.896 2-2v-48c0-1.104-.896-2-2-2z" fill="currentColor"></path></g>
								</svg>
							</a>
						<?php endif; ?>
					</div> <!-- /.heading-layout2 -->
				</div><!-- /.col-xl-6 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 offset-lg-6">
					<?php if ( get_field( 'banner_destaque' ) ) : ?>
					<div class="heading-layout2">
						<p class="heading-desc fw-bold color-secondary mb-30"><?php echo wp_kses_post( get_field( 'banner_destaque' ) ); ?></p>
					</div><!-- /.heading-layout2 -->
					<?php endif; ?>
					<?php
					$banner_imagem = get_field( 'banner_imagem' );
					$banner_src    = $banner_imagem ? temaaltavia_image_url( $banner_imagem, 'altavia_banner_intro' ) : '';
					if ( $banner_src ) :
						?>
					<div class="video-banner mb-30">
						<img src="<?php echo esc_url( $banner_src ); ?>" alt="<?php echo esc_attr( ! empty( $banner_imagem['alt'] ) ? $banner_imagem['alt'] : '' ); ?>" class="w-100">
					</div><!-- /.video-banner -->
					<?php endif; ?>
					<?php if ( get_field( 'banner_texto' ) ) : ?>
					<div class="row">
						<div class="col-sm-12">
							<div class="heading-layout2">
								<div class="heading-desc mb-20"><?php echo wp_kses_post( get_field( 'banner_texto' ) ); ?></div>
							</div><!-- /.heading-layout2 -->
						</div>
					</div><!-- /.row -->
					<?php endif; ?>
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.banner-layout8 -->


	<?php
	$fundador_subtitulo = get_field( 'fundador_subtitulo' );
	$fundador_citacao   = get_field( 'fundador_citacao' );
	$fundador_imagem    = get_field( 'fundador_imagem' );
	$fundador_nome      = get_field( 'fundador_nome' );
	$fundador_linkedin  = get_field( 'fundador_linkedin' );
	$fundador_email     = get_field( 'fundador_email' );
	$fundador_img_src   = $fundador_imagem ? temaaltavia_image_url( $fundador_imagem, 'altavia_fundador' ) : '';
	if ( $fundador_subtitulo && $fundador_img_src && $fundador_nome && have_rows( 'fundador_paragrafos' ) ) :
		?>
	<section class="banner-layout1 pb-90 bg-secondary">
		<div class="container">
			<div class="heading-layout2 heading-light mb-60">
				<h2 class="heading-subtitle color-primary"><?php echo esc_html( $fundador_subtitulo ); ?></h2>
				<?php if ( $fundador_citacao ) : ?>
					<h3 class="heading-title small"><?php echo esc_html( $fundador_citacao ); ?></h3>
				<?php endif; ?>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
					<div class="member card-gradient-animation">
						<div class="member-img">
							<img src="<?php echo esc_url( $fundador_img_src ); ?>" alt="<?php echo esc_attr( $fundador_nome ); ?>" loading="lazy">
							<div class="card-overlay">
								<div class="card-gradient">
									<div class="card-gradient-inner card-gradient-spot1"></div>
									<div class="card-gradient-inner card-gradient-spot2"></div>
								</div><!-- /.card-gradient -->
							</div><!-- /.card-overlay -->
						</div><!-- /.member-img -->
						<div class="member-data d-flex flex-wrap align-items-center justify-content-between">
							<div>
								<h5 class="member-name"><?php echo esc_html( $fundador_nome ); ?></h5>
							</div>
							<ul class="social-icons list-unstyled mb-0">
								<?php if ( $fundador_linkedin ) : ?>
									<li><a href="<?php echo esc_url( $fundador_linkedin ); ?>" target="_blank" rel="noopener"><i class="social-icon icon-linkedin-circle"></i></a></li>
								<?php endif; ?>
								<?php if ( $fundador_email ) : ?>
									<li><a href="mailto:<?php echo esc_attr( $fundador_email ); ?>" target="_blank"><i class="icon-email"></i></a></li>
								<?php endif; ?>
							</ul>
						</div><!-- /.member-data -->
					</div>
				</div><!-- /.col-xl-6 -->
				<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
					<div class="pt-0 ps-0 heading-layout2 box-about flex">
						<?php
						while ( have_rows( 'fundador_paragrafos' ) ) {
							the_row();
							$icone = get_sub_field( 'icone' );
							$txt   = get_sub_field( 'texto' );
							if ( $txt ) {
								echo '<p>';
								if ( $icone ) {
									echo '<img width="50" src="' . esc_url( $icone ) . '" alt="" loading="lazy"> ';
								}
								echo wp_kses_post( $txt ) . '</p>';
							}
						}
						?>
					</div><!-- /heading -->
				</div><!-- /.col-xl-5 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<?php endif; ?>

	<?php if ( get_field( 'clientes_subtitulo' ) && get_field( 'clientes_titulo' ) && have_rows( 'clientes_logos' ) ) : ?>
	<section class="clients">
		<div class="container">
			<div class="heading-layout2 mb-60">
				<h2 class="heading-subtitle color-primary"><?php echo esc_html( get_field( 'clientes_subtitulo' ) ); ?></h2>
				<h3 class="heading-title"><?php echo wp_kses_post( get_field( 'clientes_titulo' ) ); ?></h3>
			</div>
			<div class="grid">
				<?php
				while ( have_rows( 'clientes_logos' ) ) {
					the_row();
					$logo_src = get_sub_field( 'url' );
					if ( $logo_src ) {
						echo '<img src="' . esc_url( $logo_src ) . '" alt="">';
					}
				}
				?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php
	$depoimentos_imagem_bg = get_field( 'depoimentos_imagem_bg' );
	$depoimentos_bg_src    = $depoimentos_imagem_bg ? temaaltavia_image_url( $depoimentos_imagem_bg, 'altavia_depoimentos_bg' ) : '';
	if ( $depoimentos_bg_src && get_field( 'depoimentos_subtitulo' ) && get_field( 'depoimentos_titulo' ) && have_rows( 'depoimentos_lista' ) ) :
		?>
	<section class="banner-layout7 bg-overlay bg-parallax">
		<div class="bg-img"><img src="<?php echo esc_url( $depoimentos_bg_src ); ?>" alt=""></div>
		<div class="container">
			<div class="row sticky-top">
				<div class="col-12 col-md-12 col-lg-6">
					<div class="heading-layout2 heading-light mb-60">
						<h2 class="heading-subtitle color-primary"><?php echo esc_html( get_field( 'depoimentos_subtitulo' ) ); ?></h2>
						<h3 class="heading-title"><?php echo wp_kses_post( get_field( 'depoimentos_titulo' ) ); ?></h3>
					</div> <!-- /.heading-layout2 -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-12 col-md-12 col-lg-6 offset-lg-6">
					<div class="scrollable-sticky sticky-is-enabled">
						<?php
						while ( have_rows( 'depoimentos_lista' ) ) {
							the_row();
							$num   = get_sub_field( 'numero' );
							$nome  = get_sub_field( 'nome' );
							$cargo = get_sub_field( 'cargo' );
							$texto = get_sub_field( 'texto' );
							?>
						<div class="sticky-card sticky-top">
							<div class="sticky-card-inner">
								<div class="card-header d-flex align-items-start mb-40">
									<?php if ( $num ) : ?><span class="card-num"><?php echo esc_html( $num ); ?></span><?php endif; ?>
									<div class="card-title">
										<?php if ( $nome ) : ?><h4 class="mb-0"><?php echo esc_html( $nome ); ?></h4><?php endif; ?>
										<?php if ( $cargo ) : ?><p><?php echo esc_html( $cargo ); ?></p><?php endif; ?>
									</div>
								</div><!-- /.card-header -->
								<?php if ( $texto ) : ?>
								<div class="card-body">
									<p class="card-desc mt-30 mb-0"><?php echo wp_kses_post( $texto ); ?></p>
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


	<?php if ( get_field( 'ecossistema_subtitulo' ) && get_field( 'ecossistema_titulo' ) && have_rows( 'ecossistema_itens' ) ) : ?>
	<section class="services-layout2 bg-gray bg-overlay overlay-shadow-bottom-left">
		<div class="container">
			<div class="heading-layout2 mb-60">
				<h2 class="heading-subtitle color-primary"><?php echo esc_html( get_field( 'ecossistema_subtitulo' ) ); ?></h2>
				<h3 class="heading-title"><?php echo wp_kses_post( get_field( 'ecossistema_titulo' ) ); ?></h3>
			</div> <!-- /.heading-layout2 -->
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<?php
						while ( have_rows( 'ecossistema_itens' ) ) {
							the_row();
							$ico  = get_sub_field( 'icone' );
							$tit  = get_sub_field( 'titulo' );
							$desc = get_sub_field( 'descricao' );
							if ( ! $tit && ! $desc ) {
								continue;
							}
							?>
						<div class="col-lg-3 mb-30">
							<div class="service-item bg-secondary">
								<div class="service-body">
									<?php if ( $ico ) : ?>
									<div class="service-icon"><img width="80" src="<?php echo esc_url( $ico ); ?>" alt="<?php echo esc_attr( $tit ); ?>"></div>
									<?php endif; ?>
									<?php if ( $tit ) : ?><h4 class="service-title"><?php echo esc_html( $tit ); ?></h4><?php endif; ?>
									<?php if ( $desc ) : ?><p class="service-desc"><?php echo wp_kses_post( $desc ); ?></p><?php endif; ?>
								</div><!-- /.service-body -->
							</div><!-- /.service-item -->
						</div><!-- /.col-lg-3 -->
							<?php
						}
						?>
					</div><!-- /.row -->
				</div><!-- /.col-lg-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.Services Layout 2 -->
	<?php endif; ?>
