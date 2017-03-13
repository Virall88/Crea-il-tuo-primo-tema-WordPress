<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        $args = array(
            'post_type'  => 'post',
            'post__not_in' => get_option( 'sticky_posts' ),
            'posts_per_page' => 6,
            'meta_query' => array(
                array(
                    'key' => '_thumbnail_id',
                    'compare' => 'EXISTS'
                ),
            )
        );

        $skam_loop = new WP_Query( $args );
        if( $skam_loop->have_posts() ):
            ?>
            <div class="slider">
                <?php while( $skam_loop->have_posts() ): $skam_loop->the_post(); ?>
                    <div class="slide" style="background: url(' <?php the_post_thumbnail_url( 'slider' ); ?> ' ) no-repeat center center;">
                        <h2><?php the_title(); ?></h2>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if( is_active_sidebar( 'home-value' ) ) : ?>
            <div class="value-prop flex">
                <?php dynamic_sidebar( 'home-value' ); ?>
            </div><!-- end .value-prop -->
        <?php else : ?>
            <p>
                Usa la Widget Area "Homepage Value Proposition" per popolare questa sezione.
            </p>
        <?php endif; ?>

        <?php
        //Sezione prima categoria
        $args = array(
            'post_type'  => 'post',
            'post__not_in' => get_option( 'sticky_posts' ),
            'posts_per_page' => 3,
            'category_name' => 'post-formats'
        );

        $lcat_1 = new WP_Query( $args );
        if( $lcat_1->have_posts() ):
            $cat_obj = get_category_by_slug( 'post-formats' );
            ?>
            <h2><?php printf( __( 'Ultimi articoli della categoria "%s"', 'skam' ), $cat_obj->name  ); ?></h2>
            <div class="highlight flex">
                <?php while( $lcat_1->have_posts() ): $lcat_1->the_post(); ?>
                    <div>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php
        //Sezione seconda categoria
        $args = array(
            'post_type'  => 'post',
            'post__not_in' => get_option( 'sticky_posts' ),
            'posts_per_page' => 3,
            'category_name' => 'content'
        );

        $lcat_2 = new WP_Query( $args );
        if( $lcat_2->have_posts() ):
            $cat_obj = get_category_by_slug( 'content' );
            ?>
            <h2><?php printf( __( 'Ultimi articoli della categoria "%s"', 'skam' ), $cat_obj->name  ); ?></h2>
            <div class="highlight flex">
                <?php while( $lcat_2->have_posts() ): $lcat_2->the_post(); ?>
                    <div>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php
        //Sezione prima categoria
        $args = array(
            'post_type'  => 'post',
            'post__not_in' => get_option( 'sticky_posts' ),
            'posts_per_page' => 3,
            'category_name' => 'images'
        );

        $lcat_3 = new WP_Query( $args );
        if( $lcat_3->have_posts() ):
            $cat_obj = get_category_by_slug( 'images' );
            ?>
            <h2><?php printf( __( 'Ultimi articoli della categoria "%s"', 'skam' ), $cat_obj->name  ); ?></h2>
            <div class="highlight flex">
                <?php while( $lcat_3->have_posts() ): $lcat_3->the_post(); ?>
                    <div>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </main>
</div><!-- #primary -->

<?php get_footer(); ?>
