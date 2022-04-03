<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
    <title>
        <?php
        echo get_bloginfo ('name');
        if(!is_front_page() || !is_home()) {
            echo wp_title ('>');
        }
        ?>
    </title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="main">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div> 
            <!-- End of logo -->
            <!-- WP fixar min nav -->
            <nav class="main">
                <?php wp_nav_menu(); ?>
            </nav> <!-- End of nav.main -->
        </header><!-- End of header.main -->

        