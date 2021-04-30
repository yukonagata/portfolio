<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="discription" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Favicon-->
    <link rel="icon" href="<?php echo esc_url( get_theme_file_uri( '/favicon.png' ) ); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_theme_file_uri( '/favicon.png' ) ); ?>">
    <!--noindex-->
    <meta name="robots" content="noindex, nofollow">
    <!--ResetCss-->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!--GoogleFont-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!--AOSanimation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--MyCss-->
    <link rel="stylesheet" href="<?php echo esc_url( get_theme_file_uri( '/css/common.css' ) ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 
    
<!-- 共通部分ここから -->
    <header class="header">
        <a href="<?php echo esc_url(home_url('/')); ?>"><h1 class="header__logo"><?php bloginfo('name'); ?></h1></a>
        <div class="header__container">

