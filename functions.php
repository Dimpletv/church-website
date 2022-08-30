<?php

//adding the CSS and JS files

function sj_setup(){
    wp-enqueue_style('google-fonts', //fonts.googleapis.com/css?family=Roboto&display=swap);
    wp-enqueue_style('google-fonts', //fonts.googleapis.com/css?family=Berkshire+Swash&display=swap);
    wp-enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all))
    wp-enqueue_style('bootstrap', get_stylesheet_uri('/css/bootstrap.css'), NULL, microtime(), all))
    wp-enqueue_style('font-awesome', get_stylesheet_uri('/css/font-awesome.css'), NULL, microtime(), all))
    wp-enqueue_style('jquery-ui', get_stylesheet_uri('https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css'), NULL, microtime(), all))
    
    wp-enqueue_script('jquery.min', get_theme_file_uri('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'), NULL, microtime(), false))
    wp-enqueue_script('jquery-ui', get_theme_file_uri('ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'), NULL, microtime(), false))

    wp-enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.js'), NULL, microtime(), true);
    wp-enqueue_script('jquery.min', get_theme_file_uri('/js/jquery.min.js'), NULL, microtime(), true);
    wp-enqueue_script('dycalendar.min', get_theme_file_uri('/js/dycalendar.min.js'), NULL, microtime(), true);
    wp-enqueue_script('default', get_theme_file_uri('/js/default.js'), NULL, microtime(), true);
}

add_action('wp_scripts', sj_setup);



?>