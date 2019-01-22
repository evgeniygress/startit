<?php
/**
    Template Name: services
    Template Post Type: services  
**/
?>
<section id="services" class="services pt-10">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('services-title'); ?></h2>
            <p><?php the_field('services-text'); ?></p>
        </div>
        <div class="row">
            <?php
            $posts = get_posts( array(
                'numberposts' => 0,
                'post_type'   => 'services',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="servicebox">
                            <div class="srv_desc">                       
                                <h5 class="count"><?php the_excerpt(); ?></h5>
                                <h4><a href="<php the_permalink() ?>"><?php the_title() ?></a></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
            <?php
            }

            wp_reset_postdata(); // сброс
            ?>
        </div>
    </div>
</section>