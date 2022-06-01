<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
    <meta http-equiv="content-language" content="en-us" />
    <?php 
    if( strlen($GLOBALS['local_env']) < 1 ){
        echo '<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-21K0C5CSY4"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag(\'js\', new Date());
        
          gtag(\'config\', \'G-21K0C5CSY4\');
        </script>';
    } 
    ?>
    <?php wp_head() ;?>
</head>

<!-- START BODY -->
<body <?php body_class(); ?>>

<?php if( !is_page('bc-contact') ): ?>
    <header class="sticky-top bg-primary">
        <div class="container nav-cont bg-primary">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar navbar-brand" href="<?= get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/dist/images/sl-logo-text-h-white.svg'; ?>" alt="Sweet Link Studio"></a>
                <button id="navbar-mobile" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times d-none"></i>
                </button>

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
<?php endif; ?>