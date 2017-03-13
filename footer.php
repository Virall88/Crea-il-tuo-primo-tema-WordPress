</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <?php if( is_active_sidebar( 'footer' ) ) : ?>
        <section>
            <?php dynamic_sidebar( 'footer' ); ?>
        </section>
    <?php  endif; ?>

    <?php if( is_active_sidebar( 'footer-2' ) ) : ?>
        <section>
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </section>
    <?php  endif; ?>
    
    <?php if( is_active_sidebar( 'footer-3' ) ) : ?>
        <section>
            <?php dynamic_sidebar( 'footer-3' ); ?>
        </section>
    <?php  endif; ?>

    <?php if( is_active_sidebar( 'footer-4' ) ) : ?>
        <section>
            <?php dynamic_sidebar( 'footer-4' ); ?>
        </section>
    <?php  endif; ?>
    <?php if( get_theme_mod( 'testo_copyright' ) ) : ?>
        <div class="site-info">
            <p>&copy; <?php echo get_theme_mod( 'testo_copyright' ); ?> <?php bloginfo( 'title' ); ?> Tutti i diritti riservati</p>
        </div>
    <?php endif; ?>
</footer>
</div><!-- .site -->
<?php wp_footer(); ?>

</body>
</html>
