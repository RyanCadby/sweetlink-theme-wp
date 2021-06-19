<?php
/**
 * The template for displaying contact modal
 *
 * @package WordPress
 * @subpackage sl-theme
 * @since Sweet Link 1.0
 */
/* print contact form modal */

global $sl_admin_active;

?>
<section id="contact-modal-section" class="<?= $sl_admin_active ?>">
    <div class="contact-modal-wrap">
        <div class="container">
            <button id="contact-modal-close">
                <i class="fas fa-times"></i>
            </button>
            <div class="row row-contact pt-6">
                <div class="col col-12 col-md-6 col-email">
                    <p>Don't like forms?</p>
                    <a href="mailto:ryan@sweetlinkstudio.com" class="contact-email h3">Ryan@SweetLinkStudio.com</a>
                </div>
                <div class="col col-12 col-md-6 col-form">
                    <?php echo do_shortcode('[contact-form-7 id="30" title="Contact form 1"]'); ?>
                </div>
            </div>
            <div class="row row-social">
                <div class="col col-12">
                    <p class="p-sm">Social</p>
                    <div class="social-cont">
                        <a href="https://facebook.com" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="https://facebook.com" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="https://facebook.com" class="social-link"><i class="fab fa-tiktok"></i></a>
                        <a href="https://facebook.com" class="social-link"><i class="fab fa-youtube"></i></a>
                        <a href="https://facebook.com" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://facebook.com" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>