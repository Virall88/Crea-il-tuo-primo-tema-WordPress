<?php if( is_active_sidebar( 'sidebar-single' ) ) : ?>
    <aside id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-single' ); ?>
    </aside><!-- #secondary -->
<?php else : ?>
    <!-- Qua puoi inserire il tuo contenuto alternativo -->
<?php endif; ?>
