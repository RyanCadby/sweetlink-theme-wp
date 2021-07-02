    
<?php get_template_part('template-parts/contact', 'modal', array());?>


<section class="section-footer">
    <div class="container">
        <div class="row">
            <!-- about info --> 
            <div class="col col-12 col-md-6 col-logo">
                <div class="footer-logo-cont">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/dist/images/sl-logo-text-navy.svg'; ?>" alt="Sweet Link Studio Logo with text" class="footer-logo">
                </div>
                <p>Don't be shy, say hi!</p>
                <a href="mailto:ryan@sweetlinkstudio.com" class="footer-email">ryan@sweetlinkstudio.com</a>
            </div>

            <!-- footer nav -->
            <div class="col col-12 col-md-4 col-nav">
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
            <div class="col col-12 col-md-2 col-social">
                <ul class="social-list">
                    <li class="social-item">
                        <a href="https://twitter.com" class="social-link social-twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="social-item">
                        <a href="https://linkedin.com" class="social-link social-linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li class="social-item">
                        <a href="" class="social-link social-instagram"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="social-item">
                        <a href="" class="social-link social-youtube"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="social-item">
                        <a href="" class="social-link social-tiktok"><i class="fab fa-tiktok"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


   

<?php wp_footer(); ?>


</body>
</html>