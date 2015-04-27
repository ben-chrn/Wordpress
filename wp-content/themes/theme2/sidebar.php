<?php include(TEMPLATEPATH . '/searchform.php'); ?>
<?php get_calendar();?>
<?php wp_list_categories('sortcolumn=name&optioncount=1&hierarchical=0');
wp_list_pages();
wp_get_archives('type=monthly');
