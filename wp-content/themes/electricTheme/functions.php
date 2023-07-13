<?php 
function theme_setup() {
    register_nav_menu('topMenu', 'Menu chính');
}
add_action('init', 'theme_setup');



