<section id="slider" class="slider_1" style="background-image: url(<?php the_field('background-slider'); ?>);">
    <div class="slider">
        <div class="container">
            <div class="slide-content">
                <h6 class="sub_heading"><?php the_field('slider-title'); ?></h6>
                <h6><?php the_field('Background'); ?></h6>
                <div class="typing_content">
                    <h2 class="heading">
                        <?php the_field('heading'); ?> <span class="typed-element">Carrby</span>
                    </h2>
                    <div class="typed-strings">
                        <p><?php the_field('first-string'); ?></p>
                        <p><?php the_field('second-string'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll_btn"><a href="index.html#about"><i class="fa fa-angle-down"></i></a></div>
        <div class="section-shape">
            <img src="<?php bloginfo( 'template_url' )?>/images/shape1.png" alt="shape image">
        </div>
    </div>
</section>