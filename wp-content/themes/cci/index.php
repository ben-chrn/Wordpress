<?php

get_header();

?>
<h3>Derniers articles</h3>
<ul>
<?php
	$recentposts = new WP_Query();
	$recentposts->query('showposts=10');
?>
<?php
while($recentposts->have_posts()) : $recentposts->the_post(); ?>
<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
<?php endwhile; ?>
</ul>