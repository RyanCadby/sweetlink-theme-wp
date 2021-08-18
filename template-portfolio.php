<?php 
/* Template Name: Portfolio */ 

get_header();
?>

<?php get_template_part('template-parts/child', 'header', array());?>


<section class="section-portfolio">
    <div class="container">
        <div class="row">
            <?php 
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => -1
                );
                $posts = get_posts($args);
                $portfolio_print = '';
                foreach( $posts as $post ):
                    $portfolio_category = get_the_category($post->ID);
                    $portfolio_ext_link = get_field('external_link', $post->ID);
                    $portfolio_ext_link_print = '';
                    if( $portfolio_ext_link ){
                        $portfolio_ext_link_print = 
                        '<div class="portfolio-link">' .
                        '<a href="' . $portfolio_ext_link . '" target="_blank" class="portfolio-ext-link p-sm">Visit Site <i class="fas fa-external-link-alt"></i></a>' .
                        '</div>';
                    }
                    $portfolio_print .= '<div class="col col-12 col-md-6">' . 
                        '<div class="portfolio-card">' .
                            get_the_post_thumbnail($post->ID, 'full', array('class' => 'portfolio-image')) . 
                            '<div class="portfolio-info">' . 
                                $portfolio_ext_link_print . 
                                '<div class="portfolio-description">' .
                                    '<p>' . $post->post_title . '</p>' . 
                                    '<h3>' . $portfolio_category[0]->name . '</p>' .
                                '</div>' . 
                            '</div>' .
                        '</div>' .
                    '</div>';
                endforeach;
                echo $portfolio_print;
                ?>
        </div>
    </div>
</section>





<?php get_template_part('template-parts/testimonials');?>
<?php get_template_part('template-parts/cta');?>


<?php get_footer();?>