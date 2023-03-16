<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         
        <title>Le temps d'une pause</title>

        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/styles/main.css">

        <script src="<?php bloginfo('template_url') ?>/scripts/main.js" defer></script>
        <script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
    </head>

    <body data-component="Scrolly">

    <div class="content">
        <header class="header" data-component="Header">
            <div class="wrapper">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/logo_text.png" alt="Logo de l'organisme">
                </a>
            
                <div class="nav_content">
                    <nav class="top_bar">
                        <ul>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'top_bar',
                                'container' => 'ul',
                                'container_class' => 'nav-primary__item',
                            )); ?>
                        </ul>
                    </nav>

                    <nav>
                        <ul>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'menu_principale',
                                'container' => 'ul',
                                'container_class' => 'nav-primary__item',
                            )); ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>

<div class="menu">
    <input type="checkbox" id="active" class="open">
    <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
    <div class="wrapper">
        <a class="logo" href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Logo de l'organisme">
        </a>
        
        
        <ul class="liste_droite">
            <?php wp_nav_menu(array(
                'theme_location' => 'top_bar',
                'container' => 'ul',
                'container_class' => 'nav-primary__item',
            )); ?>
        </ul>
        
        <ul class="liste_gauche"> 
            <?php wp_nav_menu(array(
                'theme_location' => 'menu_principale',
                'container' => 'ul',
                'container_class' => 'nav-primary__item',
            )); ?>
        </ul>
    </div>
</div>
