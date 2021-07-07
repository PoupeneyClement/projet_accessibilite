<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php get_stylesheet_uri(); ?>">
</head>

<body><?php /* body_class(); */ ?>
    <?php wp_body_open(); ?>
    <?= get_custom_logo($blog_id) ?>