<?php
function mon_theme_supports(){
    add_theme_support('title_tag');
}

add_action("after_setup_theme", "mon_theme_supports");