<?php 
/* Template Name: Contact */ 

get_header();
?>

<section class="section-contact">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-10 col-md-8 offset-0 offset-sm-1 offset-md-2">
                <h1><?php the_field('hero_title'); ?></h1>
                <div class="contact-description-cont mb-2">
                    <?php the_field('hero_description'); ?>
                </div>

                <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>