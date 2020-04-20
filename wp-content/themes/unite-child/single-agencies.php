<?php

get_header(); 

	$params = array(
		'post_type'	 => 'real_estate',
		'meta_query' => array(
			array(
				'key' 		=> 'agency',
				'value' 	=> '"' . get_the_ID() . '"',
				'compare' 	=> 'LIKE'
			)
		)
	);

    $posts = new WP_Query($params); 

?>

	<div id="primary" class="content-area col-sm-12 col-md-8">
		<main id="main" class="site-main" role="main">

		<?php if ( $posts->have_posts() ) : ?>

			<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

				<?php
					get_template_part( 'content-real_estate', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php unite_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>