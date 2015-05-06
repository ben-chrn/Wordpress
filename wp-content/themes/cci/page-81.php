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
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>