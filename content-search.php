<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php search_title_highlight(); ?></a>
        </h2>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php search_excerpt_highlight(); ?>
    </div>
</article>
