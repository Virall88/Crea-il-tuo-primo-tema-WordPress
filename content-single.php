<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(  ); ?></h1>
        <div class="entry-meta">
            <time class="entry-date published updated" datetime="<?php the_date( 'c' ); ?>">
                <?php echo get_the_date(); ?>
            </time>
            <span class="author vcard">
                <a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                    <?php echo get_the_author(); ?>
                </a>
            </span>
            <?php edit_post_link( __( 'Modifica ' . get_the_title(), 'skam' ), '<span class="edit-link">', '</span>' ); ?>
        </div><!-- .entry-meta -->
        <?php if( has_post_thumbnail() ) : ?>
            <div class="featured-image">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; //end has_post_thumbnail() ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content( __('Continua a leggere ', 'skam') . get_the_title() ); ?>
    </div>

    <footer class="entry-footer">
	<span class="cat-links"><?php the_category( ', ' ); ?></span>
        <span class="tag-links"><?php the_tags(); ?></span>
        <span class="comments-links"><?php comments_template(); ?></span>
    </footer><!-- .entry-footer -->
</article>
