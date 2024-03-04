<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('-');?></title>
    <meta name="description" content="<?php get_bloginfo('description'); ?>">

    <link rel="shortcut icon" href="/favicon.png" type="image/png">
    <link rel="preload" fetchpriority="high" as="image" href="<?php echo get_template_directory_uri( ); ?>/assets/webp/aceda-hero-image.webp" type="image/webp">


    <!-- WordPress Header  -->
    <?php wp_head(); ?>
    <!-- End WordPress Header  -->
</head>

<body>

<header class="fixed z-40" id="js-header" onscroll="fixedMenu()">
    <div class="container flex py-6 md:py-4 lg:px-4 justify-between items-center">
        
        <?php 
            if(the_custom_logo(  )){
                the_custom_logo( );
            }
            else {
                ?>
                <a href="<?php echo get_site_url(); ?>/">
                    <img class="h-16 w-48 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/aceda-main-logo.svg" alt="Logo da Aceda">
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

            </nav>
        </div>
    </div>
</header>