
<?php 
if ( get_field('enable_testimonials') ):
    if( have_rows('testimonials', 'option') ):
?>


<section class="section-testimonials">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div id="testimonialCarousel" class="carousel slide carousel-testimonials" data-interval="false">
                    <?php 
                        $i = 0;
                        $slider_print = '';
                        $slider_indicator = '';
                        while( have_rows('testimonials', 'option') ): the_row();
                            if( $i == 0 ):
                                $slider_active = 'active';
                            else:
                                $slider_active = '';
                            endif;
                            // $slider_indicator .= '<li data-target="#testimonialCarousel" data-slide-to="' . $i . '" class="' . $slider_active . '"></li>';
                            $slider_print .= '<div class="carousel-item ' . $slider_active . '">' . 
                            '<p class="testimonial-description">' . get_sub_field('testimonial') . '</p>' . 
                            '<div class="testimonial-meta">' .
                            '<div class="testimonial-headshot"><p>' . get_sub_field('letter') . '</p></div>' .
                            '<div class="testimonial-author">' .
                            '<p class="author">' . get_sub_field('author') . '</p>' . 
                            '<p class="author-title p-sm">' . get_sub_field('title') . '</p>' .
                            '<p class="author-company p-sm">' . get_sub_field('company') . '</p>' .
                            '</div>' .
                            '</div>' .
                            '</div>';
                            ++$i;
                        endwhile;
                    ?>

                    <ol class="carousel-indicators">
                        <?php echo $slider_indicator; ?>
                    </ol>

                    <div class="carousel-inner">
                        <?php echo $slider_print; ?>
                    </div>
                    <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left text-primary"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                        <i class="fas fa-chevron-right text-primary"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; endif; ?>