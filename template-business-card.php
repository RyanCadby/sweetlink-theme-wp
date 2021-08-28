<?php 
/* Template Name: Business Card */ 

get_header();
?>

<section class="section-business-card bg-primary">
    <div class="container">
        <div class="row row-title">
            <div class="col col-10 offset-1">
                <p class="p-bg text-white"><span class="h1">Hi! I'm Ryan,</span></br> a website designer and developer eager to help you build a website that generates revenue.</p>
            </div>
        </div>
        <div class="row row-btns">
            <div class="col col-10 offset-1 col-btns">
                <a class="btn btn-secondary btn-bc-contact" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/ryan-cadby.vcf">
                    <i class="fas fa-address-book"></i> <span>Download My Contact Info</span>
                </a>
            </div>
            <div class="col col-10 offset-1 col-btns">
                <a class="btn btn-secondary btn-bc-contact" href="<?php echo $GLOBALS['local_env']; ?>/denver-web-design-company/">
                    <i class="fas fa-eye"></i> <span>View Web Design Portfolio</span>
                </a>
            </div>
            <div class="col col-10 offset-1 col-btns">
                <a class="btn btn-secondary btn-bc-contact" href="<?php echo $GLOBALS['local_env']; ?>/talk-to-a-web-designer/">
                    <i class="fas fa-question"></i> <span>Request A Free Website Consultation</span>
                </a>
            </div>
            <div class="col col-10 offset-1 col-btns">
                <a class="btn btn-secondary btn-bc-contact" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/ryan-cadby.vcf">
                    <i class="fas fa-phone"></i> <span>Talk With A Web Designer</span>
                </a>
            </div>
            <div class="col col-10 offset-1 col-btns">
                <a class="btn btn-secondary btn-bc-contact" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/ryan-cadby.vcf">
                    <i class="fas fa-envelope"></i> <span>Email Us</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>