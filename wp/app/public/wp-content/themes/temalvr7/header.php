<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/lvr7.jpeg" type="image/x-icon">

    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ECDWG1X6ZF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-ECDWG1X6ZF');
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Header -->
    <header class="header-main">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <span class="h3 mb-0"><img width="200px" src="<?php bloginfo('template_url'); ?>/img/lvr7.jpeg"
                            alt="<?php bloginfo('name'); ?>"></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo esc_url(home_url('/#home')); ?>">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url(home_url('/#proposito')); ?>">Propósito</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url(home_url('/#solucoes')); ?>">Soluções</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url(home_url('/#historia')); ?>">História</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url(home_url('/#contato')); ?>">Contatos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">