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

        //Aggiungo il supporto alle immagini in evidenza
        add_theme_support( 'post-thumbnails' );

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

    if( get_theme_mod('col_footer') == 1 ){

        register_sidebar( array(
            'name'          => __( 'Colonna Footer', 'skam' ),
            'id'            => 'footer-1',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        ));

    } else {

        $args = array(
            'name' => __( 'Footer %d', 'skam'),
            'id' => "footer",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        );
        register_sidebars( get_theme_mod( 'col_footer' ), $args );

    }
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

//*Imposto la grandezza del contenitore
if ( ! isset( $content_width ) ) {
	$content_width = 900;
}

//* Aggiungo il contenitore elastico per i video
function skam_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="embed-container">' . $html . '</div>';
    return $return;
}
add_filter( 'embed_oembed_html', 'skam_oembed_filter', 10, 4 );
