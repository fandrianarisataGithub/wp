<?php
function mon_theme_supports(){
    add_theme_support('title_tag');
    add_theme_support('post-thumbnails');
}

function mon_theme_add_bootswatch_lumen(){
    wp_register_style("lumen", "https://bootswatch.com/4/sandstone/bootstrap.min.css");
    wp_enqueue_style('lumen');
    wp_deregister_script("jquery");
    wp_register_script("bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", ["popop", "jquery"], null, true); // bootstrap dépend de jquery et popop
    wp_register_script("popop", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", [], null, true);
    wp_register_script("jquery","https://code.jquery.com/jquery-3.2.1.slim.min.js", [], null, true); // true = in_footer
    
    wp_enqueue_script("bootstrap");
}

add_action("after_setup_theme", "mon_theme_supports");
add_action("wp_enqueue_scripts", "mon_theme_add_bootswatch_lumen");