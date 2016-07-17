<aside id="secondary" class="widget-area" role="complementary">
    <?php
        if( is_active_sidebar( 'sidebar-1' ) ) :
            dynamic_sidebar( 'sidebar-1' );
        else :
    ?>
        <!-- Qua puoi inserire il tuo contenuto alternativo -->
    <?php endif; ?>
</aside><!-- #secondary -->
