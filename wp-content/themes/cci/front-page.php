<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">

<?php

get_header();

?>
<h3>Derniers articles</h3>
<ul>
<?php

	$recentposts = new WP_Query();
	$recentposts->query('category_name=events');
?>
<?php
while($recentposts->have_posts()) : $recentposts->the_post(); ?>
<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
<?php endwhile; ?>
</ul>

<a class="twitter-timeline" href="https://twitter.com/NicolasDuverger" data-widget-id="591196336944500736">Tweets de @NicolasDuverger</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script src="http://snapwidget.com/js/snapwidget.js"></script>
<iframe src="http://snapwidget.com/in/?u=bmFsdXBlbG9tdW5kb3xpbnwxMjV8M3wzfHxub3w1fGZhZGVJbnxvblN0YXJ0fHllc3x5ZXM=&ve=230415" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>