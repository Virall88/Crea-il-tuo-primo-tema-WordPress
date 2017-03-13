<?php
/**
 *
 */

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
  	register_sidebar( array(
  		'name'          => __( 'Sidebar', 'skam' ),
  		'id'            => 'sidebar-1',
  		'description'   => __( 'Aggiungi le widget da mostrare nella sidebar principale.', 'skam' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h2 class="widget-title">',
  		'after_title'   => '</h2>',
  	) );

    register_sidebar( array(
        'name'          => __( 'Colonna Footer 1', 'skam' ),
        'id'            => 'footer-1',
        'description'   => __( 'Aggiungi le widget da mostrare nel footer del tema. Il numero di colonne verrà modificato in base al numero delle widget.', 'skam' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Colonna Footer 2', 'skam' ),
        'id'            => 'footer-2',
        'description'   => __( 'Aggiungi le widget da mostrare nel footer del tema. Il numero di colonne verrà modificato in base al numero delle widget.', 'skam' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Colonna Footer 3', 'skam' ),
        'id'            => 'footer-3',
        'description'   => __( 'Aggiungi le widget da mostrare nel footer del tema. Il numero di colonne verrà modificato in base al numero delle widget.', 'skam' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Colonna Footer 4', 'skam' ),
        'id'            => 'footer-4',
        'description'   => __( 'Aggiungi le widget da mostrare nel footer del tema. Il numero di colonne verrà modificato in base al numero delle widget.', 'skam' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'skam_widgets_init' );

function skam_scripts() {
    wp_enqueue_style( 'skam-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'skam_scripts' );

//* Aggiungo le impostazioni del Customizer per le widget area del footer
function skam_impostazioni( $wp_customize ) {

    $wp_customize->add_section( 'theme_tools', array(
        'title' => __( 'Personalizza il tema', 'skam' ),
        'description' => __( 'Utilizza le opzioni incluse per personalizzare il tema.' ),
        'priority' => 160,
    ));

    $wp_customize->add_setting( 'col_footer', array(
        'default' => 2,
    ));

    $wp_customize->add_control( 'col_footer', array(
        'label' => __( 'Colonne Footer', 'skam' ),
        'description' => __( 'Seleziona dal menu a tendina il numero di colonne da usare.', 'skam' ),
        'section' => 'theme_tools',
        'type' => 'select',
        'choices' => array( //Utile per impostare dei limiti
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4
        ),
     ));
}
add_action( 'customize_register', 'skam_impostazioni' );
