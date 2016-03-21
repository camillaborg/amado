<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset')?>">
        <meta name="viewport" content="width=device-width">
        <style>html {margin-top: 0;}</style>
        <title>
            <?php
                wp_title('|', true, 'right'); //echoar ut till höger om namnet
                bloginfo('name'); //webpage name
            ?>
        </title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <?php wp_head(); ?>
    </head>

<body>
    <header class="header">
        <img id="show-menu" src="<?php bloginfo('template_directory'); ?>/images/menu_button.png">

        <nav id="desktop-menu" class="main-nav">
           <ul>
               <a href="#about"><li>About</li></a>
               <a href="#cases"><li>Cases</li></a>
               <a href="#contact"><li>Contact</li></a>
           </ul>
        </nav>

        <nav id="menu" class="main-nav">
            <ul>
                <a href="#about"><li>About</li></a>
                <a href="#cases"><li>Cases</li></a>
                <a href="#contact"><li>Contact</li></a>
            </ul>


        </nav>


        <?php if ( get_theme_mod( 'logo' ) ) : ?>
            <a href="<?php bloginfo('wpurl'); ?>">
                <img src="<?php echo get_theme_mod( 'logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display') ); ?>" id="logo">
            </a>


        <?php else : ?>

            <a href="<?php bloginfo('wpurl'); ?>">
                <h1>
                    <?php bloginfo( 'name' ); ?></h1>
                </a>

            <?php endif; ?>
    </header>
