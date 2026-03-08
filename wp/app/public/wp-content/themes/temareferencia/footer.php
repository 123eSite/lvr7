		<!-- ========================
      Footer
    ========================== -->
		<footer class="footer" id="contato">
			<div class="footer-secondary">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12">
							<?php
							$footer_texto = get_field( 'footer_texto_contato', 'option' );
							$footer_email = get_field( 'footer_email', 'option' );
							if ( $footer_texto ) :
								?>
								<span class="contact-text-title"><?php echo wp_kses_post( $footer_texto ); ?></span>
								<?php
							endif;
							if ( $footer_email ) :
								?>
								<a class="mail" href="mailto:<?php echo esc_attr( $footer_email ); ?>"><?php echo esc_html( $footer_email ); ?></a>
								<?php
							endif;
							?>
						</div><!-- /.col-12 -->
						<div class="col-12 d-flex flex-wrap justify-content-center align-items-center">
							<?php
							$footer_copyright = get_field( 'footer_copyright', 'option' );
							if ( $footer_copyright ) :
								?>
								<div class="footer-copyrights my-2">
									<span class="fz-14">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php echo esc_html( $footer_copyright ); ?></span>
								</div>
								<?php
							endif;
							?>
						</div><!-- /.col-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.footer-secondary -->
		</footer><!-- /.Footer -->
	</div><!-- /.wrapper -->

	<?php wp_footer(); ?>
</body>
</html>
