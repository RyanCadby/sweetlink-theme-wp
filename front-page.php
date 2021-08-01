<?php get_header();?>

<section class="py-0">
    <div class="container hero-container">
        <div class="hero-wrap">
            <div class="hero-pattern-cont">
                <!-- https://stackoverflow.com/questions/45833366/horizontally-repeating-svg-pattern -->
                <?php for($i = 0; $i <= 20; $i++): ?>
                <div id="pattern-<?= $i ?>" class="hero-bg-pattern pattern-<?= $i ?>">
                    <svg id="hero-svg" class="hero-svg-bg" width="100%" height="100%" viewBox="0 0 1 1" preserveAspectRatio="xMidYMid meet"  xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="bg" patternUnits="userSpaceOnUse" viewBox="0 0 37 30" width="3" height="2">
                                <path width="37" height="30" fill-rule="evenodd" clip-rule="evenodd" d="M29.2022 4.10227L29.2022 4.50227C32.1022 2.70227 35.6022 0.802269 36.2022 1.50227C36.9126 2.21263 36.3965 2.78282 35.857 3.37879C35.4851 3.78958 35.1022 4.21263 35.1022 4.70227C35.1022 5.36288 35.5871 5.81135 36.023 6.21452C36.379 6.5437 36.7022 6.84268 36.7022 7.20227C36.7022 7.62971 36.3413 7.96693 35.9623 8.32105C35.5433 8.71255 35.1022 9.1247 35.1022 9.70227C35.1022 10.1574 35.4788 10.6125 35.8496 11.0606C36.3749 11.6954 36.8885 12.316 36.3022 12.9023C35.7022 13.5023 32.2022 11.6023 29.3022 9.80227L29.3022 10.2023C29.2022 12.1023 27.7022 13.7023 25.7022 13.7023L11.2022 13.7023C9.30222 13.7023 7.70222 12.1023 7.70222 10.2023L7.70222 9.90227C4.80222 11.6023 1.30222 13.5023 0.702216 12.9023C0.0617954 12.2619 0.573829 11.6892 1.11347 11.0857C1.50073 10.6526 1.90222 10.2036 1.90222 9.70227C1.90222 9.04166 1.41732 8.59319 0.981403 8.19002C0.625481 7.86084 0.302215 7.56186 0.302215 7.20227C0.302215 6.83405 0.641183 6.5082 1.00708 6.15646C1.43613 5.74401 1.90222 5.29597 1.90222 4.70227C1.90222 4.25101 1.53196 3.81657 1.16428 3.38516C0.635708 2.76496 0.112456 2.15101 0.702215 1.50227C1.30222 0.90227 4.80222 2.80227 7.70222 4.60227L7.70222 4.20227C7.70222 2.20227 9.30222 0.70227 11.2022 0.70227L25.7022 0.702269C27.7022 0.602269 29.2022 2.20227 29.2022 4.10227ZM19.8022 5.70222L20.6022 5.70222C21.0022 5.70222 21.4022 6.10222 21.4022 6.50222L21.4022 8.80222C21.4022 10.5022 20.0022 11.9022 18.3022 11.9022L12.8022 11.9022C11.1022 11.9022 9.70224 10.5022 9.70224 8.80222L9.70224 5.50222C9.70224 3.80222 11.1022 2.40222 12.8022 2.40222L15.6022 2.40222C15.8022 2.40222 15.9022 2.80222 15.7022 2.90222C15.3022 3.20222 14.9022 3.70222 14.8022 4.30222C14.8022 4.40222 14.7022 4.60222 14.5022 4.60222L13.2022 4.60222C12.3022 4.60222 11.6022 5.30222 11.6022 6.20222L11.6022 8.10222C11.6022 9.00222 12.3022 9.70222 13.2022 9.70222L17.4022 9.70222C18.3022 9.70222 19.0022 9.00222 19.0022 8.10222L19.0022 6.60222C19.0022 6.10222 19.4022 5.70222 19.8022 5.70222ZM16.3022 8.70222L17.1022 8.70222C17.5022 8.70222 17.8022 8.30222 17.8022 7.90222L17.8022 6.20222C17.8022 5.30222 18.5022 4.60222 19.4022 4.60222L23.6022 4.60222C24.5022 4.60222 25.2022 5.30222 25.2022 6.20222L25.2022 8.10222C25.2022 9.00222 24.5022 9.70222 23.6022 9.70222L22.3022 9.70222C22.1022 9.70222 22.0022 9.90222 22.0022 10.0022C21.9022 10.6022 21.5022 11.1022 21.1022 11.4022C20.9022 11.5022 21.0022 11.9022 21.2022 11.9022L24.1022 11.9022C25.8022 11.9022 27.2022 10.5022 27.2022 8.80222L27.2022 5.60222C27.2022 3.90222 25.8022 2.50222 24.1022 2.50222L18.6022 2.50222C16.9022 2.50222 15.5022 3.90222 15.5022 5.60222L15.5022 7.90222C15.5022 8.30222 15.9022 8.70222 16.3022 8.70222Z" fill="#0A1931"/>
                            </pattern>
                        </defs>
                        <rect width="2000" x="-1000" height="1" fill="url(#bg)"/>
                    </svg>
                </div>
                <?php endfor; ?>
            </div>
            
            <div class="row hero-copy-cont">
                <div class="col col-12 col-md-8">
                    <div class="hero-text-cont">
                        <h1 class="d-xl"><?php the_field('hero_text'); ?></h1>
                    </div>
                </div>
                <div class="col col-12 col-md-4"></div>
            </div>
        </div>
        
        
    </div>
</section>

<section class="section-portfolio bg-primary">
    <div class="container">
        <div class="row row-portfolio-title">
            <div class="col col-12">
                <h2 class="text-white"><?php the_field('portfolio_title'); ?></h2>
            </div>
        </div>
        <div class="row row-portfolio-cards">
            <?php 
            $portfolio_items = get_field('portfolio_items');
            if( $portfolio_items ):
                $card = '';
                foreach( $portfolio_items as $portfolio_item ):
                    $portfolio_image = get_the_post_thumbnail($portfolio_item, 'large', array('class' => 'portfolio-image'));
                    $portfolio_title = get_the_title($portfolio_item);
                    $portfolio_category = get_the_category($portfolio_item);
                    
                    $card .= 
                    '<div class="col col-12 col-md-6">' .
                    '<a class="portfolio-card">'. 
                    '<div class="portfolio-card-content">'.
                    $portfolio_image .
                    '<p class="portfolio-descriptoin">' . $portfolio_title . '</p>' . 
                    '<h3 class="portfolio-title">' . $portfolio_category[0]->name . '</h3>'. 
                    '</div>'.
                    '</a>' .
                    '</div>';
                endforeach;
                echo $card;
            endif;
            ?>
        </div>
    </div>
</section>

<section class="section-average py-0">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-average">
                <div class="average-cont" data-animate="0">
                    <div class="average-strike"></div>
                    <p class="average-text h1-d1">Satisfactory</p>
                </div>
                <div class="average-cont" data-animate="0">
                    <div class="average-strike"></div>
                    <p class="average-text h1-d1">Average</p>
                </div>
                <div class="average-cont" data-animate="0">
                    <div class="average-strike"></div>
                    <p class="average-text h1-d1">Sufficient</p>
                </div>
                <div class="average-cont" data-animate="0">
                    <div class="average-strike"></div>
                    <p class="average-text h1-d1">Good&nbsp;Enough</p>
                </div>
                <div class="average-cont" data-animate="0">
                    <div class="average-strike"></div>
                    <p class="average-text h1-d1">Mediocre</p>
                </div>
                <div class="average-cont" data-animate="0">
                    <div class="average-strike"></div>
                    <p class="average-text h1-d1">Vanilla</p>
                </div>
            </div>
        </div>
        <div class="row row-dont-do py-5">
            <div class="col col-12">
                <h1 class="text-center h1-d1"><span>DON'T DO</span> <span>"mediocre"</span> <span>Let's Make Something</span></h1>
            </div>
        </div>
        <!-- <div class="row py-5">
            <div class="col col-12">
                <h1 class="text-center h1-d1">We work hard to deliver products that make you want to say</h1>
            </div>
        </div> -->
        <div class="row row-sweet">
            <div class="col col-12">
                <!-- <div class="sweet-cont">
                    <p class="p-sweet">Sweet</p>
                </div>
                <div class="sweet-cont">
                    <p class="p-sweet sweet-slide">Sweet!</p>
                </div>
                <div class="sweet-cont">
                    <p class="p-sweet sweet-slide">Sweet!</p>
                </div>
                <div class="sweet-cont">
                    <p class="p-sweet sweet-slide">Sweet!</p>
                </div>
                <div class="sweet-cont">
                    <p class="p-sweet sweet-slide">Sweet!</p>
                </div>
                <div class="sweet-cont">
                    <p class="p-sweet sweet-slide">Sweet!</p>
                </div>
                <div class="sweet-cont">
                    <p class="p-sweet sweet-slide">Sweet!</p>
                </div> -->
                <p class="p-sweet">Sweet!</p>
                <p class="p-sweet sweet-slide">Sweet!</p>
                <p class="p-sweet sweet-slide">Sweet!</p>
                <p class="p-sweet sweet-slide">Sweet!</p>
                <p class="p-sweet sweet-slide">Sweet!</p>
                <p class="p-sweet sweet-slide">Sweet!</p>
                <p class="p-sweet sweet-slide">Sweet!</p>
                <div class="sweet-spacer"></div>
            </div>
        </div>
    </div>
</section>

<section class="section-services">
    <div class="container">
        <div class="row row-services">
            <div class="col col-12">
                <?php echo
                    '<h2>' . get_field('services_title') . '</h2>';
                ?>
            </div> 
        </div>
        <div class="row">
            <div class="col col-12 col-md-5">
                <?php the_field('services_copy');?>
            </div>
            <div class="col col-12 col-md-3">
                <?php echo
                '<h3>' . get_field('design_title') . '</h3>';
                if( have_rows('design_items') ):
                    $design_echo = '<ul class="design-list">';
                    while( have_rows('design_items') ): the_row();
                        $design_echo .= '<li class="design-item">' . get_sub_field('item') . '</li>';
                    endwhile;
                    $design_echo .= '</ul>';
                    echo $design_echo;
                endif;
                ?>
            </div>
            <div class="col col-12 col-md-4">
                <?php echo 
                '<h3>' . get_field('development_title') . '</h3>';
                if( have_rows('development_items') ):
                    $dev_echo = '<ul class="dev-list">';
                    while(have_rows('development_items') ): the_row();
                        $dev_echo .= '<li class="dev-item">' . get_sub_field('item') . '</li>';
                    endwhile;
                    $dev_echo .= '</ul>';
                    echo $dev_echo; 
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta');?>




<?php get_footer();?>
