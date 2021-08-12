<?php 
/* Template Name: Services */ 

get_header();
?>

<section class="section-child-hero">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-6">
                <h1><?php the_field('hero_title'); ?></h1>
                <p><?php the_field('hero_description'); ?></p>
            </div>
        </div>
    </div>
    
    <div class="hero-right">
        <?php for($i = 0; $i <= 13; $i++): ?>
            <div id="child-pattern-<?= $i ?>" class="child-hero-bg-pattern pattern-<?= $i ?>">
                <svg id="child-hero-svg" class="child-hero-svg-bg" width="100%" height="30px" viewBox="0 0 30 1" preserveAspectRatio="xMidYMid meet"  xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="bg" patternUnits="userSpaceOnUse" viewBox="0 0 37 30" width="3" height="2">
                            <path width="37" height="30" fill-rule="evenodd" clip-rule="evenodd" d="M29.2022 4.10227L29.2022 4.50227C32.1022 2.70227 35.6022 0.802269 36.2022 1.50227C36.9126 2.21263 36.3965 2.78282 35.857 3.37879C35.4851 3.78958 35.1022 4.21263 35.1022 4.70227C35.1022 5.36288 35.5871 5.81135 36.023 6.21452C36.379 6.5437 36.7022 6.84268 36.7022 7.20227C36.7022 7.62971 36.3413 7.96693 35.9623 8.32105C35.5433 8.71255 35.1022 9.1247 35.1022 9.70227C35.1022 10.1574 35.4788 10.6125 35.8496 11.0606C36.3749 11.6954 36.8885 12.316 36.3022 12.9023C35.7022 13.5023 32.2022 11.6023 29.3022 9.80227L29.3022 10.2023C29.2022 12.1023 27.7022 13.7023 25.7022 13.7023L11.2022 13.7023C9.30222 13.7023 7.70222 12.1023 7.70222 10.2023L7.70222 9.90227C4.80222 11.6023 1.30222 13.5023 0.702216 12.9023C0.0617954 12.2619 0.573829 11.6892 1.11347 11.0857C1.50073 10.6526 1.90222 10.2036 1.90222 9.70227C1.90222 9.04166 1.41732 8.59319 0.981403 8.19002C0.625481 7.86084 0.302215 7.56186 0.302215 7.20227C0.302215 6.83405 0.641183 6.5082 1.00708 6.15646C1.43613 5.74401 1.90222 5.29597 1.90222 4.70227C1.90222 4.25101 1.53196 3.81657 1.16428 3.38516C0.635708 2.76496 0.112456 2.15101 0.702215 1.50227C1.30222 0.90227 4.80222 2.80227 7.70222 4.60227L7.70222 4.20227C7.70222 2.20227 9.30222 0.70227 11.2022 0.70227L25.7022 0.702269C27.7022 0.602269 29.2022 2.20227 29.2022 4.10227ZM19.8022 5.70222L20.6022 5.70222C21.0022 5.70222 21.4022 6.10222 21.4022 6.50222L21.4022 8.80222C21.4022 10.5022 20.0022 11.9022 18.3022 11.9022L12.8022 11.9022C11.1022 11.9022 9.70224 10.5022 9.70224 8.80222L9.70224 5.50222C9.70224 3.80222 11.1022 2.40222 12.8022 2.40222L15.6022 2.40222C15.8022 2.40222 15.9022 2.80222 15.7022 2.90222C15.3022 3.20222 14.9022 3.70222 14.8022 4.30222C14.8022 4.40222 14.7022 4.60222 14.5022 4.60222L13.2022 4.60222C12.3022 4.60222 11.6022 5.30222 11.6022 6.20222L11.6022 8.10222C11.6022 9.00222 12.3022 9.70222 13.2022 9.70222L17.4022 9.70222C18.3022 9.70222 19.0022 9.00222 19.0022 8.10222L19.0022 6.60222C19.0022 6.10222 19.4022 5.70222 19.8022 5.70222ZM16.3022 8.70222L17.1022 8.70222C17.5022 8.70222 17.8022 8.30222 17.8022 7.90222L17.8022 6.20222C17.8022 5.30222 18.5022 4.60222 19.4022 4.60222L23.6022 4.60222C24.5022 4.60222 25.2022 5.30222 25.2022 6.20222L25.2022 8.10222C25.2022 9.00222 24.5022 9.70222 23.6022 9.70222L22.3022 9.70222C22.1022 9.70222 22.0022 9.90222 22.0022 10.0022C21.9022 10.6022 21.5022 11.1022 21.1022 11.4022C20.9022 11.5022 21.0022 11.9022 21.2022 11.9022L24.1022 11.9022C25.8022 11.9022 27.2022 10.5022 27.2022 8.80222L27.2022 5.60222C27.2022 3.90222 25.8022 2.50222 24.1022 2.50222L18.6022 2.50222C16.9022 2.50222 15.5022 3.90222 15.5022 5.60222L15.5022 7.90222C15.5022 8.30222 15.9022 8.70222 16.3022 8.70222Z" fill="#0A1931"/>
                        </pattern>
                    </defs>
                    <rect width="1000" x="0" height="1" fill="url(#bg)"/>
                </svg>
            </div>
        <?php endfor; ?>
    </div>
</section>


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
                            '<div class="col col-12 col-md-8">' . 
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
                                    '<div class="col col-12 col-md-6">'. 
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
                                        '<p class="tool-text">' . get_sub_field('text') . '</p>' .
                                    '</li>';
                                endwhile;
                                $services .= '</ul>';
                            endif;

                            $services .= '</div>'; // end left col

                            $services .= '<div class="col col-12 col-md-4"><div class="service-image-cont">'. 
                            // get_the_post_thumbnail($id, 'full') . 
                            '</div>' . // end col
                            '</div>' . // end col
                            '</div>'; // end row

                            $services .= '<div class="service-img-repeat-cont" id="service-img-' . $service_count . '">' . get_the_post_thumbnail($id, 'full') . '</div>';
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