    
<?php 
if( !is_page('contact') ){
    get_template_part('template-parts/contact', 'modal', array());
}
?>



<section class="section-footer">
    <div class="container">
        <div class="row mb-2">
            <!-- about info --> 
            <div class="col col-12 col-sm-6 col-logo">
                <div class="footer-logo-cont mb-1 mb-md-2">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/dist/images/sl-logo-text-navy.svg'; ?>" alt="Sweet Link Studio Logo with text" class="footer-logo">
                </div>
                <p class="m-0">Don't be shy, say hi!</p>
                <a href="mailto:ryan@sweetlinkstudio.com" class="footer-email link">ryan@sweetlinkstudio.com</a>
            </div>

            <!-- footer nav -->
            <div class="col col-6 col-sm-5 col-nav">
                <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
                    <nav class="footer-navigation">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                                'menu_class'     => 'footer-menu',
                                'depth'          => 1,
                            )
                        );
                        ?>
                    </nav><!-- .footer-navigation -->
                <?php endif; ?>
            </div>

            <!-- social links -->
            <div class="col col-6 col-sm-1 col-social">
                <ul class="social-list">
                    <?php 
                        if( have_rows('contact_information', 'option') ):
                            while( have_rows('contact_information', 'option') ): the_row();
                                if( have_rows('social_media') ):
                                    $social_print = '';
                                    while( have_rows('social_media') ): the_row();
                                        $social_print .= '<li class="social-item">';
                                        $social_print .= '<a href="' . get_sub_field('url') . '" class="social-link" target="_blank"><i class="fab ' . get_sub_field('platform') . '"></i></a>';
                                        $social_print .= '</li>';
                                    endwhile;
                                    echo $social_print;
                                endif;
                            endwhile;
                        endif;
                    ?>
                </ul>
            </div>
        </div> <!-- end row -->
        <div class="row mb-2">
            <div class="col col-12">
                <div class="hr"></div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col col-12">
                <p class="copyright mb-0 p-sm">All Rights Reserved &copy; Sweet Link Studio <?php echo date('Y'); ?></p>
            </div>
        </div>
    </div> <!-- end container -->
</section>


   

<?php wp_footer(); ?>


</body>
</html>