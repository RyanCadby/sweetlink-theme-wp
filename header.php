<! DOCTYPE html>
<html lang="en">
   
    <head>
        <?php wp_head();?>
    </head>
    
<body <?php body_class();?>>


<header class="sticky-top">
    <div class="container nav-cont">
        <nav class="navbar navbar-expand-lg navbar-light">
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