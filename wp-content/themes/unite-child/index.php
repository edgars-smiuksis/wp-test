<?php

get_header(); 

if(($posts = get_transient('real_estate_posts')) === false) {

	$params = array(
		'post_type'		=> 'real_estate', 
	
	);

    $posts = new WP_Query($params); 
    set_transient('real_estate_posts', $posts, 3600);
 
} 

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