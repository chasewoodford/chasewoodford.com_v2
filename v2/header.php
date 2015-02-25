<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php wp_title(''); ?>
    </title>
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . "/images/favicon.ico"; ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css"; ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <script src="<?php echo get_template_directory_uri() . "/js/modernizr.js"; ?>"></script>

    <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>

<!-- Header
================================================== -->
<?php if ( is_front_page() ) : ?>
<header role="banner" id="home">
<?php endif; ?>

<?php include('nav.php'); ?>

