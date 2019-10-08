<?php

function load_stylesheets(){

    wp_register_style("font", get_template_directory_uri() ."https://fonts.googleapis.com/css?family=Be+Vietnam|Noto+Serif&display=swap",
    array(), 1,"all");
    wp_enqueue_style("font");

    wp_register_style("mainstyle", get_template_directory_uri() ."/styling/main.css",
    array(), 1,"all");
    wp_enqueue_style("mainstyle");

    wp_register_style("query", get_template_directory_uri() ."/styling/query.css",
    array(), 1,"all");
    wp_enqueue_style("query");

}
add_action("wp_enqueue_scripts","load_stylesheets");



// load scripts

function addjs(){

    wp_register_script("javascriptmain", get_template_directory_uri() . "/javascript/forside_options.js",array() , 1, 1, 1);
    wp_enqueue_script("javascriptmain");

}
add_action("wp_enqueue_scripts","addjs");


add_theme_support("menus");


register_nav_menus(

    array(
       "top-menu" => __("Top Menu","theme"),
         )

);




