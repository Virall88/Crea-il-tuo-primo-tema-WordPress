<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Purtroppo non trovo la pagina che stai cercando.', 'skam' ); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php _e( 'Sembra che la URL inserita non sia corretta, prova con una ricerca o consultando alcuni dei nostri articoli.', 'skam' ); ?></p>

                <?php
                get_search_form(); 
                the_widget( 'WP_Widget_Recent_Posts' );
                ?>

                <div class="widget widget_categories">
                    <h2 class="widget-title"><?php _e( 'Le nostre categorie pi&ugrave; popolari.', 'skam' ); ?></h2>
                    <ul>
                        <?php
                        wp_list_categories( array(
                            'orderby'    => 'count',
                            'order'      => 'DESC',
                            'show_count' => 1,
                            'title_li'   => '',
                            'number'     => 5,
                        ) );
                        ?>
                    </ul>
                </div><!-- .widget -->

                <h2><?php
                printf(
                    __( 'Non hai trovato ancora niente? <a href="%s">Contattaci direttamente</a> attraverso il nostro modulo.', 'skam' ),
                    get_permalink( get_page_by_title( 'Contatti' ) )
                );
                ?></h2>


            </div><!-- .page-content -->
        </section><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
