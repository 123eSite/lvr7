<?php
get_header();

if (have_posts()):
    while (have_posts()):
        the_post();
        ?>

        <!-- Hero Section -->
        <section id="home" class="hero d-flex align-items-center position-relative">
            <div class="container position-relative z-2">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="col-lg-8">
                            <h1 class="mb-4">
                                <?php echo get_field('hero_titulo') ? nl2br(get_field('hero_titulo')) : 'Solucionamos desafios de negócios, governança e finanças por meio de consultoria, treinamento e mediação'; ?>
                            </h1>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Propósito Section (Ex-Quem Somos) -->
        <section id="proposito" class="about padding-tb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="mb-4"><?php the_field('proposito_titulo'); ?> <img width="150px"
                                src="<?php bloginfo('template_url'); ?>/img/lvr7.webp" alt=""></h2>

                        <h3 class="h5 mb-4 fw-normal lh-base"><?php the_field('proposito_subtitulo'); ?></h3>

                        <h4 class="mb-4">Nossos Valores</h4>

                        <?php if (have_rows('proposito_valores')): ?>
                            <ul class="list-unstyled">
                                <?php
                                $rows = get_field('proposito_valores');
                                $total_rows = count($rows);
                                $i = 0;
                                while (have_rows('proposito_valores')):
                                    the_row();
                                    $i++;
                                    $class = ($i === $total_rows) ? 'mb-0' : 'mb-3 border-bottom pb-2';
                                    ?>
                                    <li class="<?php echo $class; ?>"><?php the_sub_field('valor_nome'); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <img src="<?php echo get_field('proposito_imagem') ? get_field('proposito_imagem') : get_bloginfo('template_url') . '/img/linhas.webp'; ?>"
                            alt="Propósito Detalhe">
                    </div>
                </div>
            </div>
        </section>

        <!-- Solutions Section -->
        <section id="solucoes" class="solutions padding-tb bg-gray-light">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="d-block text-uppercase fw-bold mb-2"
                        style="color: var(--color-green)"><?php the_field('solucoes_chapeu'); ?></span>
                    <h2><?php the_field('solucoes_titulo'); ?></h2>
                </div>
                <div class="row">
                    <?php if (have_rows('solucoes_lista')):
                        while (have_rows('solucoes_lista')):
                            the_row();
                            // Verifica se ocupa largura total
                            $largura_total = get_sub_field('largura_total');
                            $col_class = $largura_total ? 'col-lg-12' : 'col-lg-4 col-md-6';
                            $icone_class = get_sub_field('icone');
                            $icone_size = $largura_total ? 'fa-3x' : 'fa-2x';
                            ?>
                            <div class="<?php echo $col_class; ?> mb-4">
                                <div class="card h-100 border-0 shadow-sm p-4">
                                    <?php if ($largura_total): ?>
                                        <div class="row align-items-center">
                                            <div class="col-md-1 text-center mb-3 mb-md-0">
                                                <i class="<?php echo esc_attr($icone_class . ' ' . $icone_size); ?>"></i>
                                            </div>
                                            <div class="col-md-11">
                                                <h3 class="h4 mb-2"><?php the_sub_field('titulo'); ?></h3>
                                                <p class="mb-2"><?php the_sub_field('texto'); ?></p>
                                                <!-- <p class="small text-muted mb-0"><strong>Solução:</strong>
                                                    <?php the_sub_field('destaque'); ?></p> -->
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="mb-3">
                                            <i class="<?php echo esc_attr($icone_class . ' ' . $icone_size); ?>"></i>
                                        </div>
                                        <h3 class="h4 mb-3"><?php the_sub_field('titulo'); ?></h3>
                                        <p class="mb-4"><?php the_sub_field('texto'); ?></p>
                                        <p class="small text-muted border-top pt-3"><strong>Solução:</strong>
                                            <?php the_sub_field('destaque'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>

        <!-- História Section -->
        <section id="historia" class="history padding-tb">
            <div class="container">
                <div class="mb-5">
                    <div class="text-center mb-5">
                        <h2><?php the_field('historia_titulo'); ?></h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <div class="mb-5 ed-texto-formatado">
                                <?php the_field('historia_texto'); ?>
                            </div>

                            <div class="bg-gray-light p-4 rounded-3 border-start border-4 border-success">
                                <p class="small mb-0"><?php the_field('historia_box'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-5 text-center">
                            <img src="<?php echo get_field('historia_foto') ? get_field('historia_foto') : get_bloginfo('template_url') . '/img/foto-alberto.webp'; ?>"
                                alt="Fundador" class="img-fluid rounded-3 shadow-lg"
                                style="max-height: 500px; object-fit: cover;">
                        </div>
                    </div>
                </div>
        </section>

        <!-- Contact Section -->
        <section id="contato" class="contact padding-tb text-white" style="background-color: var(--color-green);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="text-white mb-4"><?php the_field('contato_titulo'); ?></h2>
                        <!-- <p class="mb-5 text-white opacity-75"><?php the_field('contato_texto'); ?></p> -->

                        <div class="d-flex align-items-start mb-4">
                            <i class="fa-solid fa-envelope mt-1 me-3 fa-lg"></i>
                            <div>
                                <h5 class="text-white h6 mb-1">E-mail</h5>
                                <p class="mb-0 opacity-75"><?php the_field('contato_email'); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5 offset-lg-1">
                        <div class="bg-white p-4 rounded-3 text-dark">
                            <h3 class="h4 mb-4 text-dark">Fale Conosco</h3>
                            <?php echo do_shortcode('[contact-form-7 id="meu_form_id" title="Formulário de Contato da Home"]'); ?>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <?php
    endwhile;
endif;
get_footer();
?>