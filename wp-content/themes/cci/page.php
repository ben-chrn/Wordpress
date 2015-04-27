<?php 

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {

		?><div><?php
		the_post();
		?><a href="<?php the_permalink(); ?>"><?php the_title( $before='<h1>', $after='</h1>', $echo =true); ?></a>
		<?php the_content(); ?>
		<?php
	}
}
?>