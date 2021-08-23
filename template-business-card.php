<?php 
/* Template Name: Business Card */ 

get_header();
?>

<section class="section-business-card">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <a class="btn btn-primary" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/ryan-cadby.vcf">
                    <i class="fas fa-address-book"></i> <span>Download My Contact Info</span>
                </a>
                <a class="btn btn-primary" href="<?php echo $GLOBALS['local_env'] ?>/portfolio">
                    <i class="fas fa-eye"></i> <span>View Web Design Portfolio</span>
                </a>
                <a class="btn btn-primary" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/ryan-cadby.vcf">
                    <i class="fas fa-question"></i> <span>Request A Free Website Consultation</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>