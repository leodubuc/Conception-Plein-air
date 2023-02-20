<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         
        <title>Le temps d'une pause</title>

        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/styles/main.css">

        <script src="<?php bloginfo('template_url') ?>/scripts/main.js" defer></script>
    </head>

    <body data-component="Scrolly">

<section class="header" data-component="Header">
    <div class="wrapper">
        <?php
            $image = get_field('logo', 'options');
                if( $image ){
                $url = $image['url'];
                } ?>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url($url); ?>" alt="Logo de Le temps d'une pause"></a>
        </a>

        <div>
            <nav class="top_bar">
                <ul>
                    <li><a href="#">EN</a></li>
                    <li><a href="#" class="connexion">Se connecter</a></li>
                    <li class="button_vert"><a href="#">Devenir membre</a></li>
                    <li class="button_bleu"><a href="#">Faire une référence</a></li>
                </ul>
            </nav>

            <nav>
                <ul>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Nos services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Fiches pratiques</a></li>
                </ul>
            </nav>
        </div>

        <button class="header__toggle js-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

          <div class="mobile">
            <nav class="top_bar">
                <ul>
                    <li><a href="#" class="connexion">Se connecter</a></li>
                    <li class="button_vert"><a href="#">Devenir membre</a></li>
                    <li class="button_bleu"><a href="#">Faire une référence</a></li>
                </ul>
            </nav>

            <nav>
                <ul>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Nos services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Fiches pratiques</a></li>
                    <li><a href="#">EN</a></li>
                </ul>
            </nav>
            
          </div>
    </div>
</section>