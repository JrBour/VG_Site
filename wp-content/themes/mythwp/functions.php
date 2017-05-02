<?php
add_theme_support('post-thumbnails');

register_nav_menu('mainmenu', 'Menu principal');
register_nav_menu('secondmenu', 'Menu pied de page');
add_action( 'init', 'create_post_type' );


  // CREATION DE CURTOM POST TYPE

function create_post_type() {

    // SI L ON VEUT CREER PLUSIEURS CUSTOM POST TYPE IL FAUT COPIER COLLER CETTE OBJET

    // CONTACT

    register_post_type( 'projet',
        array(
            'labels' => array(
                'name' => __( 'Projet' ),
                'singular_name' => __( 'Projet' )
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail')
        )
    );

    // BOUTIQUE

    register_post_type( 'boutique',
        array(
            'labels' => array(
                'name' => __( 'Boutique' ),
                'singular_name' => __( 'Boutique' )
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail')
        )
    );

    // CONTACT

    register_post_type( 'contact',
        array(
            'labels' => array(
                'name' => __( 'Contact' ),
                'singular_name' => __( 'Contact' )
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail')
        )
    );
}


?>
