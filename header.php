<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('-');?></title>
    <meta name="description" content="<?php get_bloginfo('description'); ?>">

    <link rel="shortcut icon" href="/favicon.png" type="image/png">
    <link rel="preload" fetchpriority="high" as="image" href="/assets/webp/img-hero.webp" type="image/webp">


    <!-- WordPress Header  -->
    <?php wp_head(); ?>
    <!-- End WordPress Header  -->
</head>

<body>

<header class="fixed z-40" id="js-header" onscroll="fixedMenu()">
    <div class="flex py-6 md:py-4 lg:px-4 justify-between items-center max-w-container w-full mx-auto">
        
        <?php 
            if(the_custom_logo(  )){
                the_custom_logo( );
            }
            else {
                ?>
                <a href="<?php echo get_site_url(); ?>/">
                    <img class="h-16 w-48 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/logo-aceda.webp" alt="logo">
                </a>
                <?php 
            }; 
        ?>

        <nav class="main-menu font-bold text-purple transition-colors desktop">

            <?php
                $args = array (
                    'menu' => 'Menu Principal',
                    'theme_location' => 'menu-principal',
                    'container' => false
                );
                wp_nav_menu( $args );
            ?>

        </nav>

        <div class="mobile">

            <button class="hamburger hamburger--collapse hamburger-outside" type="button"
                aria-label="Menu" aria-controls="navigation" id="js-btn-menu-mobile" onclick="openMobileSidebar()">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <nav id="navigation">

                <button class="hamburger hamburger--collapse is-active hamburger-sidebar" type="button"
                    aria-label="Menu" aria-controls="navigation" onclick="closeMobileSidebar()">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <?php
                    $args = array (
                        'menu' => 'Menu Principal',
                        'theme_location' => 'menu-principal',
                        'container' => false
                    );
                    wp_nav_menu( $args );
                ?>

                <a href="<?php echo get_site_url(); ?>/calculadora" class="btn primary text-purple font-medium">
                    Faça sua cotação    
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 10H15M15 10L10.8333 5.83334M15 10L10.8333 14.1667" stroke="#5B2D87" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                </a>

            </nav>
        </div>
    </div>
</header>