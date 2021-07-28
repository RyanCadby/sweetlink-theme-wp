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
<body <?php body_class();?>>
<?php /* Template Name: Coming Soon*/ ?>

    <style>
        .container-fluid{
            background-image: url('<?php echo get_stylesheet_directory_uri();?>/dist/images/coming-soon.png');
            background-repeat: repeat;
            background-position: center;
        }
    </style>

    <div class="container-fluid" style="height: 100vh">
        
    </div>


<?php wp_footer(); ?>


</body>
</html>