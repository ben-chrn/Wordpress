<?php

get_header('header.php');

if ( have_posts() ) {
	while ( have_posts() ) {

		?><div><?php
		the_post();
		?><a href="<?php the_permalink(); ?>"><?php the_title( $before='<h1>', $after='</h1>', $echo =true); ?></a>
		<p class="postmetadata"><?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>   </p>

		<p><?php the_excerpt();?></p></div><?php
	}	
}

get_sidebar();

get_footer('footer.php');

?>