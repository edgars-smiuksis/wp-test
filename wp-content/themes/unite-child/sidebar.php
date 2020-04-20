<?php

if(($posts = get_transient('agencies_list')) === false) {

	$params = array(
		'post_type'		=> 'agencies', 
	
	);

    $posts = new WP_Query($params); 
    set_transient('agencies_list', $posts, 3600);
 
}

?>
	<?php if ( $posts->have_posts() ) : ?>

			<ul>
		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

		<?php endwhile; ?>
		</ul>

	<?php endif; ?>