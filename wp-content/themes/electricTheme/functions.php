<?php

function theme_settup(){
    register_nav_menu('topMenu',_('Menu chính'));
}
add_action('init','theme_settup');