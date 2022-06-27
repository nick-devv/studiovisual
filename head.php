<!DOCTYPE HTML>
<html lang="pt">

<head>
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="Copyright" content="Copyright <?php bloginfo('name'); ?> 2021. Todos direitos reservados.">

    <meta name="title" content="Home">
    <meta name="description" content="<?php bloginfo('name'); ?> | <?php wp_title(''); ?>">
    <meta property="og:description" content="<?php bloginfo('name'); ?> | <?php wp_title(''); ?>"/>
    <meta property="og:type" content="website" />

    <link rel="icon" defer href="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/favicon.ico">

    <!-- Header Wordpress -->
    <?php wp_head(); ?>

    <!-- vendor  -->
    <!-- slick  -->
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/vendor/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/vendor/slick.css"></noscript>
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/vendor/slick-theme.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/vendor/slick-theme.css"></noscript>

    <!-- main -->
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/main.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/main.min.css"></noscript>

    <style>
        html {
            margin-top: 0 !important;
        }
    </style>
</head>
