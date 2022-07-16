<?php
add_theme_support ( 'menus' );

function register_my_menu() {
	register_nav_menu('primary',__( 'Primary' ));
}

add_action('init', 'register_my_menu');

?>
