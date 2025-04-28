<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

    <header id="masthead" class="site-header">

        <nav id="site-navigation" class="main-navigation">
            <div class="container-flex">
                <!-- Bloc vide pour équilibrer -->
                <div class="item-left"></div>

                <!-- Titre centré -->
                <h1 class="titre-header">Fleurs d’oranger & chats errants</h1>

                <!-- Burger à droite -->
                <div class="menu-toggle" id="menu-toggle" aria-label="Ouvrir le menu" role="button">
                    <i class="fa-solid fa-bars"></i>

                </div>

            </div>
</div>

<div class="menu">

    <!-- Décorations -->
    <span class="decor decor-1"></span>
    <span class="decor decor-2"></span>
    <span class="decor decor-3"></span>
    <span class="decor decor-4"></span>
    <span class="decor decor-5"></span>
    <span class="decor decor-6"></span>
    <span class="decor decor-7"></span>
    <span class="decor decor-8"></span>
    <span class="decor decor-9"></span>
    <span class="decor decor-10">Studio Koukaki</span>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'menu-principal',

    ));
    ?>
</div>





</div>
</div>

</nav><!-- #site-navigation -->
</header><!-- #masthead -->
</div>