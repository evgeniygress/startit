<?php
/*
Template Name: Page Services
*/
?>
<section id="services" class="services pt-10">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('services-title'); ?></h2>
            <p><?php the_field('services-text'); ?></p>
        </div>
        <div class="row">
            <?php if( have_rows('services-bloks') ): ?> 
            <?php while( have_rows('services-bloks') ): the_row(); 
                // vars
                $count = get_sub_field('service-count');
                $link = get_sub_field('service-link');
                $linkDescription = get_sub_field('service-link-description');
                $content = get_sub_field('service-description');
            ?>           
            <div class="col-lg-4 col-md-6">
                <div class="servicebox">
                    <div class="srv_desc">                       
                        <?php if($count): ?>
                           <h5 class="count"><?php echo $count; ?></h5>
                        <?php endif; ?>
                        <?php if($link): ?>
                           <h4><a href="<?php echo $link; ?>"><?php echo $linkDescription; ?></a></h4>
                        <?php endif; ?>
                        <?php if($content): ?>
                            <p><?php echo $content; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>