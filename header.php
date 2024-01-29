<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<div id="site-container">
    <nav id="top-navi">
        <?php wp_nav_menu([ 'theme_location' => 'primary' ]); ?>
    </nav>
    <header id="site-header">
        <h1><?php bloginfo('name'); ?></h1>
    </header>