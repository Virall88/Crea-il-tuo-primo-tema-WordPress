<?php

if( !function_exists( 'skam_setup') ){
    function skam_setup(){

    }
}
add_action( 'after_setup_theme', 'skam_setup' );

function skam_widgets_init() {

}
add_action( 'widgets_init', 'skam_widgets_init' );

function skam_scripts() {

}
add_action( 'wp_enqueue_scripts', 'skam_scripts' );
