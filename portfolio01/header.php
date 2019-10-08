<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Martin`s Portfolio</title> 
    <?php wp_head();?>
</head>
<body id="mig">
    <header class="banner">
       <img class="logo" src="<?php bloginfo("template_directory");?>/img/logo7.png" alt="">
       <?php
       wp_nav_menu(

        array(

            "theme:location" => "top-menu",
            "container" => "ul",
            "menu_class" => "navigation",

        )


        );?>
    <!-- 
       <ul class="navigation">
            <li><a href="./forside.html"><p>Mig</p></a></li>
            <li><a href="./projekter.html"><p>Projekter</p></a></li>
            <li><a href="./cv.html"><p>CV</p></a></li>
        </ul>
    -->
        <img src="<?php bloginfo("template_directory");?>/img/burger.png" alt="menu" width="30" class="burgerMenuIcon">
    </header>
