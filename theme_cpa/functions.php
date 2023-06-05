<?php



// Ajout du support dynamique de <title>
add_theme_support( 'title-tag' );

// Ajoute le support pour les images à la une au thème personnalisé
add_theme_support('post-thumbnails');

// Ajout du support dynamique de <title>
add_theme_support( 'title-tag' );

// Menu
function pw_creer_menu() {
	register_nav_menus( array(
		'menu_principale' => __( 'Menu principale', 'text_domain'),
		'menu_gauche' => __( 'Menu gauche', 'text_domain'),
		'menu_droite' => __( 'Menu droite', 'text_domain'),
        'top_bar' => __( 'Top bar', 'text_domain'),
	) );
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

/**
 * Add textdomain support to the theme
 */
add_action('after_setup_theme', 'load_textdomain_func');
function load_textdomain_func()
{
    load_theme_textdomain('ltdp', get_template_directory() . '/languages');
}

// Register Custom Post Type
function realisation() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Réalisation', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Réalisation', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les projets', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Ajoutez un nouveau projet', 'text_domain' ),
		'new_item'              => __( 'Ajoutez un nouveau projet', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Réalisation', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'show_in_rest'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'realisations', $args );

}
add_action( 'init', 'realisation', 0 );