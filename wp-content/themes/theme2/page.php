<?php

get_header('header.php');

if ( have_posts() ) {
	while ( have_posts() ) {

		?><div><?php
		the_post();
		?><a href="<?php the_permalink(); ?>"><?php the_title( $before='<h1>', $after='</h1>', $echo =true); ?></a>
		<p><?php the_excerpt();?></p></div><?php
	edit_post_link('Modifier cette page', '<p>', '</p>');	
	}
}

get_sidebar();

get_footer('footer.php');

?>