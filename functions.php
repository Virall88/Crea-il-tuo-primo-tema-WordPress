<?php

if( !function_exists( 'skam_setup') ){
    function skam_setup(){
        //Aggiungo il supporto al tag <title>
        add_theme_support( 'title-tag' );

        //Mostro il link del feed all'interno di <head>
        add_theme_support( 'automatic-feed-links' );

        //Aggiungo il supporto al caricamento del logo con misure standard
        add_theme_support('custom-logo', array(
            'width' => 300,
            'height' => 60,
            'flex-width' => true
        ));

        //Aggiungo un nuovo menu
        register_nav_menus( array(
        	'primary' => __( 'Principale', 'skam' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'skam_setup' );

function skam_widgets_init() {

}
add_action( 'widgets_init', 'skam_widgets_init' );

function skam_scripts() {
    wp_enqueue_style( 'skam-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'skam_scripts' );
