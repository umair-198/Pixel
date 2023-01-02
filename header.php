<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pixal - Creative Multipurpose Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--Corporate 1 Header Section-->
<?php get_template_part( 'template-parts/header/nav' ); ?>