</main>

<!-- Footer -->
<footer id="contato" class="footer padding-tb bg-gray-light">
    <div class="container">
        <div class="row">
            <!-- Logo & Socials -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <span class="h3 d-block mb-3"><img width="150"
                        src="<?php bloginfo('template_url'); ?>/img/lvr7-transparente.webp" alt=""></span>
                <!-- <div class="social-links">
                    <a href="#" class="me-3"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="me-3"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="me-3"><i class="fa-brands fa-facebook-f"></i></a>
                </div> -->
            </div>

            <!-- Navigation -->
            <div class="col-lg-2 offset-lg-1 col-md-4 mb-4 mb-md-0">
                <h5 class="mb-3">Menu</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="<?php echo esc_url(home_url('/#home')); ?>"
                            class="text-decoration-none color-black">Início</a></li>
                    <li class="mb-2"><a href="<?php echo esc_url(home_url('/#proposito')); ?>"
                            class="text-decoration-none color-black">Propósito</a>
                    </li>
                    <li class="mb-2"><a href="<?php echo esc_url(home_url('/#solucoes')); ?>"
                            class="text-decoration-none color-black">Soluções</a></li>
                    <li class="mb-2"><a href="<?php echo esc_url(home_url('/#historia')); ?>"
                            class="text-decoration-none color-black">História</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
            </div>

            <div class="col-lg-3 col-md-4">
                <h5 class="mb-3">Contato</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fa-solid fa-envelope me-2"></i> <?php the_field('contato_email'); ?></li>
                </ul>
            </div>
        </div>

        <hr class="my-5">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 small">&copy;
                    <?php echo date('Y'); ?> LVR7. Todos os direitos reservados.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <p class="mb-0 small">Desenvolvido por <span class="fw-bold">123eSite</span></p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>