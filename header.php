<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php the_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
    <meta http-equiv="content-language" content="en-us" />
    <?php wp_head() ;?>
</head>

<!-- START BODY -->
<body <?php body_class(); ?>>


<header class="sticky-top bg-primary">
    <div class="container nav-cont bg-primary">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar navbar-brand" href="<?= get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/dist/images/sl-logo-text-h-white.svg'; ?>" alt="Sweet Link Studio Logo"></a>

            <?php
                $nav_args = array(
                    'theme_location' => 'top-menu',
                    'container' => 'div',
                    'container_class' => 'navbar-link-container navbar-collapse collapse justify-content-end',
                    'menu_class' => 'navbar-nav',
                    'container_id' => 'navbarSupportedContent',
                );
                wp_nav_menu($nav_args);
            ?>
        </nav>
    </div>
</header>