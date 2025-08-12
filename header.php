<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Set language attributes dynamically based on WordPress site settings -->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- Set character encoding based on WordPress site settings -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Make the site responsive on all devices -->

    <?php wp_head(); ?>
    <!-- Hook for WordPress and plugins to add scripts, styles, meta tags etc. -->
</head>

<body <?php body_class(); ?>>
<!-- Add dynamic classes to body tag for styling and JS targeting -->
