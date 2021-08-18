<?php 
/* Template Name: Services */ 

get_header();
?>

<?php get_template_part('template-parts/child', 'header', array());?>




<?php 
$args = array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$posts = get_posts($args);

?>

<section class="section-services">
    <div class="container">

                <?php
                if($posts):
                    $services = '';
                    $service_count = 1;
                    foreach ( $posts as $post ):
                        setup_postdata($post);
                        $id = get_the_ID();
                        $services .= '<div class="row row-services" id="row-service-' . $service_count . '">' . 
                        '<div class="col col-12 col-md-8 order-2 order-md-1">' . 
                        '<h2 class="service-title" id="title-' . $service_count . '">' . $post->post_title . '</h2>';

                        // build tags
                        if( have_rows('tags', $id) ):
                            $services .= '<div class="row row-service-items"><div class="col col-12">';
                            $services .= '<ul class="services-list">';
                            while( have_rows('tags', $id) ): the_row();
                                $services .= '<li class="service-item">' . get_sub_field('text') . '</li>';
                            endwhile;
                            $services .= '</div></ul></div>';
                        endif;

                        // build featured tags
                        if( have_rows('featured_tags', $id) ):
                            $services .= '<div class="row row-services-featured">';
                            while( have_rows('featured_tags', $id) ): the_row();
                                $services .= 
                                '<div class="col col-12">'. 
                                    '<p class="p-bg">' . get_sub_field('title') . '</p>' . 
                                    '<p>' . get_sub_field('description') . '</p>' .
                                '</div>';
                            endwhile;
                            $services .= '</div>';
                        endif;

                        // build featured tags
                        if( have_rows('tools', $id) ):
                            $services .= '<ul class="tool-list">';
                            while( have_rows('tools', $id) ): the_row();
                                $services .= 
                                '<li class="tool-item">'. 
                                    wp_get_attachment_image( get_sub_field('icon', 'full', array('class', 'tool-icon')) ) . 
                                    '<p class="tool-text p-sm">' . get_sub_field('text') . '</p>' .
                                '</li>';
                            endwhile;
                            $services .= '</ul>';
                        endif;

                        $services .= '</div>'; // end left col

                        $services .= '<div class="col col-12 col-md-4 order-1 order-md-2"><div class="service-image-cont">'. 
                        get_the_post_thumbnail($id, 'full') . 
                        '</div>' . // end col
                        '</div>' . // end col
                        '</div>'; // end row

                        // $services .= '<div class="service-img-repeat-cont" id="service-img-' . $service_count . '">' . get_the_post_thumbnail($id, 'full') . '</div>';
                        ++$service_count;


                    endforeach;
                    wp_reset_postdata();
                    echo $services;
                endif;
                ?>
    </div>
</section>

<?php get_template_part('template-parts/cta');?>
<?php get_footer();?>