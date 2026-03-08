<?php
/**
 * Template da página inicial (home).
 * Conteúdo 100% ACF; sem fallbacks.
 */

get_header();
?>

	<?php if ( have_rows( 'slider_slides' ) ) : ?>
	<!-- ============================
        Slider
    ============================== -->
	<section class="slider py-0">
		<div class="swiper swiper-controls-light p-0 m-0"
			data-swiper='{"slidesPerView":1,"spaceBetween":0,"autoplay":{"delay":"10000"}, "loop":true,"speed": 1000, "navigation": {"nextEl": ".slider-next","prevEl": ".slider-prev"} }'>
			<div class="swiper-wrapper">
				<?php
				while ( have_rows( 'slider_slides' ) ) {
					the_row();
					$slide_img = get_sub_field( 'imagem' );
					$slide_img_src = $slide_img ? temaaltavia_image_url( $slide_img, 'altavia_front_slider_bg' ) : '';
					if ( ! $slide_img_src ) {
						continue;
					}
					?>
				<div class="swiper-slide slide-item bg-overlay align-v-h">
					<div class="bg-img"><img src="<?php echo esc_url( $slide_img_src ); ?>" alt="slide img"></div>
					<div class="container">
						<div class="row align-items-center">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
								<div class="slide-content">
									<?php if ( get_sub_field( 'hero_subtitle' ) ) : ?>
									<span class="hero-subtitle"><?php echo esc_html( get_sub_field( 'hero_subtitle' ) ); ?></span>
									<?php endif; ?>
									<?php if ( get_sub_field( 'hero_title' ) ) : ?>
									<h2 class="hero-title mb-0"><?php echo esc_html( get_sub_field( 'hero_title' ) ); ?></h2>
									<?php endif; ?>
									<div class="slider-control d-none d-xxl-block">
										<?php if ( get_sub_field( 'slider_control_title' ) ) : ?>
										<h3 class="slider-control-title"><?php echo esc_html( get_sub_field( 'slider_control_title' ) ); ?></h3>
										<?php endif; ?>
										<div class="d-flex justify-content-between align-items-center">
											<?php if ( get_sub_field( 'slider_control_bio' ) ) : ?>
											<p class="slider-control-bio mb-0"><?php echo wp_kses_post( get_sub_field( 'slider_control_bio' ) ); ?></p>
											<?php endif; ?>
											<div class="d-flex">
												<div class="slider-next swiper-button-prev-2 icon-arrow-left position-static"></div>
												<div class="slider-prev swiper-button-next-2 icon-arrow-right position-static"></div>
											</div>
										</div>
									</div><!-- /.slider-control -->
								</div><!-- /.slide-content -->
							</div><!-- /.col-xl-7 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.slide-item -->
				<?php } ?>
			</div><!-- /.swiper-wrapper -->
		</div><!-- /.swiper -->
	</section><!-- /.slider -->
	<?php endif; ?>

	<?php
	$banner_subtitulo = get_field( 'banner_subtitulo' );
	$banner_titulo   = get_field( 'banner_titulo' );
	$banner_imagem   = get_field( 'banner_imagem' );
	$banner_img_src  = $banner_imagem ? temaaltavia_image_url( $banner_imagem, 'altavia_banner_intro' ) : '';
	if ( $banner_subtitulo && $banner_titulo && $banner_img_src && get_field( 'banner_destaque' ) && get_field( 'banner_texto' ) ) :
		?>
	<!-- ==========================
       Banner layout 8
    =========================== -->
	<section class="banner-layout8" id="a-altavia">
		<div class="container">
			<div class="row sticky-top">
				<div class="col-12 col-md-8 col-lg-6 px-xl-0">
					<div class="heading-layout2 mb-50 arrow-hover-flip-up">
						<h2 class="heading-subtitle"><?php echo esc_html( $banner_subtitulo ); ?></h2>
						<h3 class="heading-title mb-30"><?php echo wp_kses_post( $banner_titulo ); ?></h3>
						<?php
						$banner_link = get_field( 'banner_link_url' );
						if ( $banner_link ) :
							?>
						<a href="<?php echo esc_url( $banner_link ); ?>" class="btn btn-secondary btn-link">
							<svg class="arrow-flip" enable-background="new 0 0 64 64" viewBox="0 0 64 64" width="80" height="80"
								xmlns="http://www.w3.org/2000/svg">
								<g class="arrow-flip-path-1">
									<path
										d="m56 6h-48c-1.104 0-2 .896-2 2s.896 2 2 2h43.171l-44.585 44.586c-.781.781-.781 2.047 0 2.828.391.391.902.586 1.414.586s1.024-.195 1.414-.586l44.586-44.586v43.172c0 1.104.896 2 2 2s2-.896 2-2v-48c0-1.104-.896-2-2-2z"
										fill="currentColor"></path>
								</g>
								<g class="arrow-flip-path-2">
									<path
										d="m56 6h-48c-1.104 0-2 .896-2 2s.896 2 2 2h43.171l-44.585 44.586c-.781.781-.781 2.047 0 2.828.391.391.902.586 1.414.586s1.024-.195 1.414-.586l44.586-44.586v43.172c0 1.104.896 2 2 2s2-.896 2-2v-48c0-1.104-.896-2-2-2z"
										fill="currentColor"></path>
								</g>
							</svg>
						</a>
						<?php endif; ?>
					</div> <!-- /.heading-layout2 -->
				</div><!-- /.col-xl-6 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 offset-lg-6">
					<div class="heading-layout2">
						<p class="heading-desc fw-bold color-secondary mb-30"><?php echo wp_kses_post( get_field( 'banner_destaque' ) ); ?></p>
					</div><!-- /.heading-layout2 -->
					<div class="video-banner mb-30">
						<img src="<?php echo esc_url( $banner_img_src ); ?>" alt="video img" class="w-100">
					</div><!-- /.video-banner -->
					<div class="row">
						<div class="col-sm-12">
							<div class="heading-layout2">
								<p class="heading-desc mb-20"><?php echo wp_kses_post( get_field( 'banner_texto' ) ); ?></p>
							</div><!-- /.heading-layout2 -->
						</div><!-- /.col-lg-7 -->
					</div><!-- /.row -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.banner-layout8 -->
	<?php endif; ?>

	<?php if ( have_rows( 'counter_itens' ) ) : ?>
	<!-- ======================
     counters
    ========================= -->
	<section class="counters border-inline pt-0 pb-50">
		<div class="container">
			<div class="row">
				<?php
				while ( have_rows( 'counter_itens' ) ) {
					the_row();
					$counter_num = get_sub_field( 'numero' );
					$counter_desc = get_sub_field( 'descricao' );
					if ( ! $counter_desc ) {
						continue;
					}
					?>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter-item">
						<?php if ( $counter_num !== '' && $counter_num !== null ) : ?>
						<div class="d-flex align-items-center">
							<h4 class="counter"><span class="counter-number"><?php echo esc_html( $counter_num ); ?></span></h4>
							<div class="counter-icon">
								<i class="icon-arrow-up-right"></i>
							</div>
						</div>
						<?php endif; ?>
						<div class="counter-desc"><?php echo wp_kses_post( preg_replace( '/(?:<br\s*\/?\s*>)+/i', '<br>', preg_replace( '/<\/?p\b[^>]*>/i', '', $counter_desc ) ) ); ?></div>
					</div><!-- /.counter-item -->
				</div><!-- /.col-lg-3 -->
				<?php } ?>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.counters -->
	<?php endif; ?>

	<?php
	$secao_subtitulo = get_field( 'secao_subtitulo' );
	$secao_titulo   = get_field( 'secao_titulo' );
	$secao_paragrafo = get_field( 'secao_paragrafo' );
	if ( $secao_subtitulo && $secao_titulo && $secao_paragrafo && have_rows( 'secao_blocos' ) ) :
		?>
	<!-- ========================
    Banner layout 9
    ========================== -->
	<section class="banner-layout9 bg-gray-gradient">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-8">
					<div class="heading-layout2">
						<h2 class="heading-subtitle color-primary"><?php echo esc_html( $secao_subtitulo ); ?></h2>
						<h3 class="heading-title"><?php echo esc_html( $secao_titulo ); ?></h3>
						<p><?php echo wp_kses_post( $secao_paragrafo ); ?></p>
					</div> <!-- /.heading-layout2 -->
				</div><!-- /.col-lg-7 -->
			</div><!-- /.row -->
		</div><!-- /.container -->

		<div class="scrollable-sticky sticky-is-enabled boxed-section mt-60">
			<?php
			while ( have_rows( 'secao_blocos' ) ) {
				the_row();
				$bloco_img = get_sub_field( 'imagem' );
				$bloco_img_src = $bloco_img ? temaaltavia_image_url( $bloco_img, 'altavia_front_card_img' ) : '';

				?>
			<div class="sticky-card sticky-top">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="card-header d-flex align-items-start mb-40">
								<h4 class="card-title mb-0"><?php echo esc_html( get_sub_field( 'titulo' ) ); ?></h4>
							</div><!-- /.card-header -->
						</div><!-- /.col-12 -->
					</div><!-- /.row -->
					<div class="row">
						<div class="col-12 col-md-12 col-lg-6">
							<div class="d-flex flex-wrap">
								<div class="arrow-shape animated-arrow-hover">
									<svg class="animated-arrow" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
										viewBox="0 0 101.7 101.7">
										<g fill="none" stroke="currentColor" stroke-width="6">
											<path d="m.7 101 100-100" stroke-linejoin="round"></path>
											<path d="M.7 1h100" stroke-width="9" stroke-linejoin="round"></path>
											<path d="M100.7 1v100" stroke-width="9" stroke-linejoin="round"></path>
										</g>
									</svg>
								</div>
								<div class="flex-1">
									<p class="card-desc"><?php echo wp_kses_post( get_sub_field( 'card_desc' ) ); ?></p>
									<div class="fancyboxs-layout2 fancybox-light mt-30">
										<?php
										while ( have_rows( 'fancybox_itens' ) ) {
											the_row();
											$fb_texto = get_sub_field( 'texto' );
											if ( ! $fb_texto ) {
												continue;
											}
											$fb_icone = get_sub_field( 'icone' );
											?>
										<div class="fancybox-item">
											<?php if ( $fb_icone ) : ?>
											<div class="fancybox-icon">
												<img src="<?php echo esc_url( $fb_icone ); ?>" alt="" width="50">
											</div><!-- /.fancybox-icon -->
											<?php endif; ?>
											<div class="fancybox-body">
												<p class="fancybox-desc"><?php echo wp_kses_post( $fb_texto ); ?></p>
											</div><!-- /.fancybox-body -->
										</div><!-- /.fancybox-item -->
										<?php } ?>
									</div><!-- /.fancyboxs-layout2  -->
								</div>
							</div>
						</div><!-- /.col-lg-6 -->
						<div class="col-12 col-md-12 col-lg-6">
							<div class="card-img position-relative">
								<img src="<?php echo esc_url( $bloco_img_src ); ?>" loading="lazy" alt="img">
								<div class="progress-card">
									<div class="progress-circle" data-percentage="<?php echo esc_attr( get_sub_field( 'progress_percentage' ) ); ?>">
										<svg viewBox="0 0 100 100">
											<circle class="circle-bg" cx="50" cy="50" r="45"></circle>
											<circle class="progress" cx="50" cy="50" r="45"></circle>
											<text x="50" y="50" transform="rotate(90 50 50)"></text>
										</svg>
									</div> <!-- /.progress-circle -->
									<p class="progress-desc mb-0"><?php echo wp_kses_post( get_sub_field( 'progress_texto' ) ); ?></p>
								</div> <!-- /.progress-card-->
							</div><!-- /.card-img-->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div> <!-- /.sticky-card -->
		<?php } ?>
		</div><!-- /.scrollable-sticky -->
	</section><!-- /.Banner layout 9 -->
	<?php endif; ?>

	<?php
	$serv_subtitulo = get_field( 'servicos_subtitulo' );
	$serv_titulo   = get_field( 'servicos_titulo' );
	if ( $serv_subtitulo && $serv_titulo && have_rows( 'servicos_itens' ) ) :
		?>
	<!-- ========================
        Services Layout 6
    =========================== -->
	<section id="o-que-fazemos" class="services-layout6 overflow-x-hidden section-slider-stretched pt-0">
		<div class="container">
			<div class="heading-layout2 mb-60">
				<div class="row">
					<div class="col-12">
						<h2 class="heading-subtitle"><?php echo esc_html( $serv_subtitulo ); ?></h2>
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h3 class="heading-title"><?php echo wp_kses_post( $serv_titulo ); ?></h3>
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.heading -->
			<div class="row">
				<div class="col-12">
					<div class="swiper"
						data-swiper='{"slidesPerView":1,"spaceBetween":15,"autoplay":{"delay":"6000"}, "watchSlidesProgress": true, "loop":true,"breakpoints":{"600":{"slidesPerView":2},"992":{"slidesPerView":3},"1200":{"slidesPerView":4}}}'>
						<div class="swiper-wrapper">
							<?php
							while ( have_rows( 'servicos_itens' ) ) {
								the_row();
								$s_titulo = get_sub_field( 'titulo' );
								$s_desc   = get_sub_field( 'descricao' );
								if ( ! $s_titulo || ! $s_desc ) {
									continue;
								}
								$s_link   = get_sub_field( 'link' );
								$s_icone  = get_sub_field( 'icone' );
								$s_numero = get_sub_field( 'numero' );
								?>
							<div class="swiper-slide">
								<div class="service-item">
									<div class="service-body">
										<?php if ( $s_icone ) : ?>
										<div class="service-icon"><img width="50" src="<?php echo esc_url( $s_icone ); ?>" alt=""></div>
										<?php endif; ?>
										<h4 class="service-title">
											<?php if ( $s_link ) : ?>
											<a href="<?php echo esc_url( $s_link ); ?>"><?php echo esc_html( $s_titulo ); ?></a>
											<?php else : ?>
											<span><?php echo esc_html( $s_titulo ); ?></span>
											<?php endif; ?>
										</h4>
										<?php if ( $s_numero !== '' && $s_numero !== null ) : ?>
										<div class="number"><?php echo esc_html( $s_numero ); ?></div>
										<?php endif; ?>
										<p class="service-desc text-truncate-5"><?php echo wp_kses_post( $s_desc ); ?></p>
									</div><!-- /.service-body -->
								</div><!-- /.service-item -->
							</div>
							<?php } ?>
						</div><!-- /.swiper-wrapper-->
					</div><!-- /.swiper-->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.Services Layout 6 -->
	<?php endif; ?>

	<?php
	$fundador_titulo   = get_field( 'fundador_titulo' );
	$fundador_img  = get_field( 'fundador_imagem' );
	$fundador_src  = $fundador_img ? temaaltavia_image_url( $fundador_img, 'altavia_fundador' ) : '';
	$fundador_nome = get_field( 'fundador_nome' );
	$fundador_desc = get_field( 'fundador_desc' );
	if ( $fundador_src && $fundador_nome && $fundador_desc && have_rows( 'fundador_paragrafos' ) ) :
		?>
	<section class="banner-layout1 pt-0 pb-90">
		<div class="container">
			<div class="heading-layout2 mb-30">
				<div class="row">
					<div class="col-12">
						<h2 class="heading-subtitle"><?php echo esc_html( $fundador_titulo ); ?></h2>
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.heading -->
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
					<div class="member card-gradient-animation">
						<div class="member-img">
							<img src="<?php echo esc_url( $fundador_src ); ?>" alt="member img" loading="lazy">
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
								<p class="member-desc"><?php echo esc_html( $fundador_desc ); ?></p>
							</div>
							<ul class="social-icons list-unstyled mb-0">
								<?php if ( get_field( 'fundador_linkedin' ) ) : ?>
								<li><a href="<?php echo esc_url( get_field( 'fundador_linkedin' ) ); ?>" target="_blank" rel="noopener"><i class="social-icon icon-linkedin-circle"></i></a></li>
								<?php endif; ?>
								<?php if ( get_field( 'fundador_email' ) ) : ?>
								<li><a href="mailto:<?php echo esc_attr( get_field( 'fundador_email' ) ); ?>" target="_blank"><i class="icon-email"></i></a></li>
								<?php endif; ?>
							</ul>
						</div><!-- /.member-data -->
					</div>
				</div><!-- /.col-xl-6 -->
				<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
					<div class="heading-layout2 box-about">
						<?php
						while ( have_rows( 'fundador_paragrafos' ) ) {
							the_row();
							$paragrafo = get_sub_field( 'texto' );
							if ( $paragrafo ) {
								echo '<p>' . wp_kses_post( $paragrafo ) . '</p>';
							}
						}
						?>
					</div><!-- /heading -->
				</div><!-- /.col-xl-5 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<?php endif; ?>

<?php
get_footer();
