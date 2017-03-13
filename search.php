<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Risultati di ricerca per: %s', 'skam' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'content', 'search' );
			endwhile;

			the_posts_navigation();

		else :
			get_template_part( 'content', '404' );
		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
