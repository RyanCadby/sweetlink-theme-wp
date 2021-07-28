<?php
/**
 * The template for displaying call to action
 *
 * @package WordPress
 * @subpackage sl-theme
 * @since Sweet Link 1.0
 */
?>

<section class="section-cta py-3 py-sm-4 py-md-5">
    <div class="container">
        <img id="cta-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/sl-logo-white-stroke.svg" alt="Sweet Link Logo White">
        <div class="row justify-content-center">  
            <div class="col col-12 col-sm-8 col-md-6">
                <?php
                global $post;
                $cta_page_id = $post->ID;
                $enable_cta = get_field('enable_cta', $cta_page_id);
                if( $enable_cta ):
                    if( have_rows('cta_details') ):
                        $cta_echo = '';
                        while( have_rows('cta_details') ): the_row();
                            $cta_title = get_sub_field('title');
                            $cta_btn_text = get_sub_field('button_text');
                            $cta_btn_link = get_sub_field('button_link');
                            $cta_echo = '<div class="cta-text-cont">' . $cta_title . '</div>' . 
                            '<a class="btn btn-outline" href="' . $cta_btn_link . '"><span>' . $cta_btn_text . '<span></a>';
                        endwhile;
                        echo $cta_echo;
                    endif;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>