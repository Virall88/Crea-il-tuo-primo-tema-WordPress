<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        //Da qui inseriamo il Loop
        if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
            get_template_part( 'content', 'single' );
        endwhile;

        else :
            get_template_part( 'content', '404' );
        endif;
        ?>
    </main>
</div><!-- #primary -->
<?php
    get_sidebar( 'single' );
    get_footer();
?>
