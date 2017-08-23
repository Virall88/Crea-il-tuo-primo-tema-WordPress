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

        // Aggiungo la cartella per leggere le traduzioni del tema
        load_theme_textdomain( 'skam', get_template_directory() . '/languages' );

        // Aggiungo il supporto agli elementi HTML5
        add_theme_support( 'html5', array(
        	'search-form',
        	'comment-form',
        	'comment-list',
        	'gallery',
        	'caption',
        ) );
    }
}
add_action( 'after_setup_theme', 'skam_setup' );

// Aggiungo la dimensione immagine per lo slider
add_image_size( 'slider', 1000, 200, true );

// Aggiungo la possibilita' di modificare il colore di sfondo
$bg_args = array(
    'default-color' => 'ffffff',
    'default-image' => '',
);
add_theme_support( 'custom-background', $bg_args );

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
  		'name'          => __( 'Sidebar Pagina Singola', 'skam' ),
  		'id'            => 'sidebar-single',
  		'description'   => __( 'Aggiungi le widget da mostrare nella pagina del singolo articolo.', 'skam' ),
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

    register_sidebar( array(
        'name'          => __( 'Homepage Value Proposition', 'skam' ),
        'id'            => 'home-value',
        'description'   => __( 'All\'interno di questo contenitore puoi inserire tutte le widget testo che desideri per specificare la tua value proposition.', 'skam' ),
        'before_widget' => '<div id="%1$s" class="single-prop %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="prop-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'skam_widgets_init' );

function skam_scripts() {
    wp_enqueue_style( 'skam-style', get_stylesheet_uri() );

    // Carico il file per l'annidamento dei commenti
    if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ){
        wp_enqueue_script( 'comment-reply' );
    }

    // Carico i file dedicati alla homepage
    if( is_home() ){
        wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/css/slick.css' );
        wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'slick-custom-js', get_template_directory_uri() . '/js/skam-slick.js', array( 'jquery', 'slick-js' ), '', true );
    }
}
add_action( 'wp_enqueue_scripts', 'skam_scripts' );

//* Aggiungo le impostazioni del Customizer per le widget area del footer
require get_template_directory() . '/inc/customizer.php';

//* Aggiungo stili in linea per il customizer
function skam_aggiungi_stili(){
    ?>
    <style>
        .site-info p{
            color: <?php echo get_theme_mod( 'colore_copyright' ); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'skam_aggiungi_stili' );

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

// Modifico la schermata di login
function skam_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: none;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'skam_login_logo' );

function skam_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'skam_login_logo_url' );

function skam_login_logo_url_title() {
    return 'skillsAndMore - Dove crescono gli sviluppatori del domani';
}
add_filter( 'login_headertitle', 'skam_login_logo_url_title' );

function skam_no_errors_login(){
  return 'Sbagliato. Tenta di nuovo o contattami via mail.';
}
add_filter( 'login_errors', 'skam_no_errors_login' );

// Rimuovo le informazioni extra presenti nel codice WordPress
function skam_remove_head_extra(){
	remove_action('wp_head', 'rsd_link'); //Se non usi un client
	remove_action('wp_head', 'wlwmanifest_link'); //Windows Live Writer
	remove_action('wp_head', 'wp_generator'); //Rimuovo versione WP
	remove_action('wp_head', 'wp_shortlink_wp_head'); //Rimuovo gli shortlink dal <head>
	remove_action('wp_head', 'feed_links_extra', 3); //Rimuovo i link a feed come le categorie
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); //Rimuovo i link ai post vicini
}
add_action('init', 'skam_remove_head_extra');

// Sposto gli script alla chiusura del <body>
if(!is_admin()){
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'wp_enqueue_scripts', 1);

	add_action('wp_footer', 'wp_print_scripts', 5);
	add_action('wp_footer', 'wp_enqueue_scripts', 5);
	add_action('wp_footer', 'wp_print_head_scripts', 5);
}

// Aggiungo funzioni dedicate per mettere in risalto i termini cercati
function search_title_highlight() {
    $title = get_the_title();
    $keys = implode('|', explode(' ', get_search_query()));
    $title = preg_replace('/(' . $keys .')/iu', '<mark class="search-highlight">\0</mark>', $title);

    echo $title;
}

function search_excerpt_highlight() {
    $excerpt = get_the_excerpt();
    $keys = implode('|', explode(' ', get_search_query()));
    $excerpt = preg_replace('/(' . $keys .')/iu', '<mark class="search-highlight">\0</mark>', $excerpt);

    echo '<p>' . $excerpt . '</p>';
}
