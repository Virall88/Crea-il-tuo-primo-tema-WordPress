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
          <div class="site-info">

          </div>
    </footer>
    </div><!-- .site -->
    <?php wp_footer(); ?>

</body>
</html>
