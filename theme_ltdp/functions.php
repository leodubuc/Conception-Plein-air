<?php



// Ajout du support dynamique de <title>
add_theme_support( 'title-tag' );

// Ajoute le support pour les images à la une au thème personnalisé
add_theme_support('post-thumbnails');

// Ajout du support dynamique de <title>
add_theme_support( 'title-tag' );

// Menu
function pw_creer_menu() {
	register_nav_menu('menu_principal', 'Menu principal');
}
add_action('init', 'pw_creer_menu');

// PAGE OPTIONS ACF
if ( function_exists('acf_add_options_page') ) {

    // on ajoute une page d'option
    acf_add_options_page(array(
        'page_title'   => 'Options générales',
        'menu_title'   => 'Options générales',
        'menu_slug'    => 'theme-options-generales',
        'capability'   => 'edit_posts',
        'redirect'     => false
    ));
}