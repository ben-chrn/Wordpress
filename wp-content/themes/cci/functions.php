<?php

add_action('init', 'cci_add_menu');
function cci_add_menu(){
	register_nav_menu('main_menu','Main Menu' );
}