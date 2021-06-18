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
            <div class="contact-modal-close-cont">
                <button id="contact-modal-hide">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="row">
                <div class="col col-12 col-md-6">
                    <p>Don't like forms?</p>
                    <a href="mailto:ryan@sweetlinkstudio.com" class="contact-email">Ryan@SweetLinkStudio.com</a>
                </div>
                <div class="col col-12 col-md-6">
                    <?php echo do_shortcode('[contact-form-7 id="30" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
