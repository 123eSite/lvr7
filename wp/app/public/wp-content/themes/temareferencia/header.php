<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/assets/images/favicon/favicon.png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<div class="preloader">
			<div class="loading"><span></span><span></span><span></span><span></span></div>
		</div><!-- /.preloader -->

		<!-- =========================
        Header
    =========================== -->
		<header class="header header-transparent header-layout1">
			<nav class="navbar navbar-expand-lg sticky-navbar">
				<div class="container-fluid">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img width="108" src="<?php bloginfo( 'template_url' ); ?>/assets/images/altavia-branco.svg" class="logo-light" alt="Alta Via Log">
						<img width="108" src="<?php bloginfo( 'template_url' ); ?>/assets/images/altavia.svg" class="logo-dark" alt="Alta Via Log">
					</a>
					<button class="navbar-toggler" type="button">
						<span class="menu-lines"><span></span></span>
					</button>
					<?php
					$nav_current_slug = '';
					$nav_parent_slug  = '';
					if ( is_singular( 'page' ) ) {
						$nav_current_slug = get_post_field( 'post_name', get_the_ID() );
						$nav_parent_id    = wp_get_post_parent_id( get_the_ID() );
						if ( $nav_parent_id ) {
							$nav_parent_slug = get_post_field( 'post_name', $nav_parent_id );
						}
					}
					$nav_active_home        = is_front_page();
					$nav_active_altavia     = ( $nav_current_slug === 'a-altavia' );
					$nav_active_o_que_fazemos = ( $nav_current_slug === 'o-que-fazemos' );
					$nav_active_cases       = ( $nav_current_slug === 'cases' || $nav_parent_slug === 'cases' );
					?>
					<div class="collapse navbar-collapse" id="mainNavigation">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-item-link<?php echo $nav_active_home ? ' active' : ''; ?>">Home</a>
							</li><!-- /.nav-item -->
							<li class="nav-item">
								<a href="<?php echo esc_url( home_url( '/a-altavia/' ) ); ?>" class="nav-item-link<?php echo $nav_active_altavia ? ' active' : ''; ?>">A AltaVia</a>
							</li><!-- /.nav-item -->
							<li class="nav-item">
								<a href="<?php echo esc_url( home_url( '/o-que-fazemos/' ) ); ?>" class="nav-item-link<?php echo $nav_active_o_que_fazemos ? ' active' : ''; ?>">O que fazemos</a>
							</li><!-- /.nav-item -->
							<li class="nav-item">
								<a href="<?php echo esc_url( home_url( '/cases/' ) ); ?>" class="nav-item-link<?php echo $nav_active_cases ? ' active' : ''; ?>">Cases</a>
							</li><!-- /.nav-item -->
							<?php /* Futuramente poderemos trocar esses <li> por wp_nav_menu. */ ?>
						</ul><!-- /.navbar-nav -->
						<button class="close-mobile-menu d-flex justify-content-center align-items-center d-lg-none">
							<i class="icon-close"></i>
						</button>
					</div><!-- /.navbar-collapse -->
					<ul class="navbar-actions d-flex flex-row-reverse flex-lg-row align-items-center list-unstyled mb-0">
						<li>
							<a href="#contato" class="btn btn-white btn-white-style2 action-btn action-btn-contact arrow-hover-flip-up">
								<span>Fale com agente</span>
								<svg class="arrow-flip" enable-background="new 0 0 64 64" viewBox="0 0 64 64" width="10" height="10"
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
						</li>
					</ul>
				</div><!-- /.container -->
			</nav><!-- /.navabr -->
		</header><!-- /.Header -->
