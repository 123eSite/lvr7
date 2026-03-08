<?php
/**
 * Conteúdo da página Cases (slug: cases).
 * HTML fatiado de cases.html; estrutura preservada.
 */

?>
	<?php get_template_part( 'template-parts/page-title' ); ?>

	<!-- ========================
        Services Layout 6
    =========================== -->
	<section id="o-que-fazemos" class="services-layout6 overflow-x-hidden section-slider-stretched">
		<div class="container">
			<div class="heading-layout2 mb-60">
				<div class="row">
					<div class="col-12">
						<?php if ( get_field( 'subtitulo' ) ) : ?>
							<h2 class="heading-subtitle"><?php echo esc_html( get_field( 'subtitulo' ) ); ?></h2>
						<?php else : ?>
							<h2 class="heading-subtitle">O que fazemos na prática.</h2>
						<?php endif; ?>
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<?php if ( get_field( 'titulo' ) ) : ?>
							<h3 class="heading-title"><?php echo esc_html( get_field( 'titulo' ) ); ?></h3>
						<?php else : ?>
							<h3 class="heading-title">Cada cliente tem um desafio diferente, mas todos compartilham o mesmo resultado:
								uma operação mais eficiente, rentável e sustentável.</h3>
						<?php endif; ?>
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.heading -->
			<div class="row">
				<div class="col-12">
					<div class="row">
						<?php
						// Buscar todas as subpáginas de Cases
						$cases_page = get_page_by_path( 'cases' );
						if ( $cases_page ) {
							$child_pages = get_children(
								array(
									'post_parent' => $cases_page->ID,
									'post_type'   => 'page',
									'post_status' => 'publish',
									'orderby'     => 'menu_order',
									'order'       => 'ASC',
								)
							);

							if ( $child_pages ) {
								foreach ( $child_pages as $child_page ) {
									$child_id = $child_page->ID;
									setup_postdata( $child_page );

									$icone          = get_field( 'icone', $child_id );
									$titulo_destaque = $child_page->post_title;
									$numero         = get_field( 'numero', $child_id );
									$chamada        = get_field( 'chamada', $child_id );
									$link_case      = get_permalink( $child_id );

									// Se não tiver título destaque, usar o título da página
									if ( ! $titulo_destaque ) {
										$titulo_destaque = get_the_title( $child_id );
									}
									?>
							<div class="col-lg-4 mb-4">
								<a href="<?php echo esc_url( $link_case ); ?>" class="service-item-link" style="display: block; text-decoration: none; color: inherit;">
									<div class="service-item">
										<div class="service-body">
											<?php if ( $icone ) : ?>
												<div class="service-icon">
													<img width="50" src="<?php echo esc_url( $icone['url'] ); ?>" alt="<?php echo esc_attr( $icone['alt'] ? $icone['alt'] : $titulo_destaque ); ?>">
												</div>
											<?php endif; ?>
											<h4 class="service-title">
												<?php echo esc_html( $titulo_destaque ); ?>
											</h4>
											<?php if ( $numero ) : ?>
												<div class="number"><?php echo esc_html( $numero ); ?></div>
											<?php endif; ?>
											<?php if ( $chamada ) : ?>
												<p class="service-desc text-truncate-5"><?php echo $chamada; ?></p>
											<?php endif; ?>
										</div><!-- /.service-body -->
									</div><!-- /.service-item -->
								</a>
							</div>
									<?php
								}
								wp_reset_postdata();
							}
						}
						?>
					</div><!-- /.row-->
				</div><!-- /.col-lg-12 -->
			</div><!-- /.row -->

		</div><!-- /.container -->
	</section><!-- /.Services Layout 6 -->
