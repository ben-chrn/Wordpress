<?php
//Blabla

add_action('widgets_init','test_add_sidebar');
function test_add_sidebar()
{
    register_sidebar(array(
        'id' => 'my_custom_zone',
        'name' => 'Zone supérieure',
        'description' => 'Apparait en haut du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}

add_action('init', 'test_add_menu');
function test_add_menu(){
	register_nav_menu('main_menu','Menu Principal' );
}

?>