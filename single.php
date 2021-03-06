<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2><?php the_title();?></h2>
        </div>
    </div>
    <div class="row">
       <div class="col-6">
        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">
        <?php endif;?>
        </div>
        <div class="col-6">
            <?php if (have_posts()) : while(have_posts()) : the_post();?>

                <?php the_content();?>

            <?php endwhile; endif;?>
        </div>
    </div>
</div>


<?php get_footer();?>