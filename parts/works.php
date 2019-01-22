<?php
/**
    Template Name: portfolio
    Template Post Type: portfolio  
**/
?>
<section id="works" class="works">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('portfolio-title'); ?></h2>
            <p><?php the_field('portfolio-description'); ?></p>
        </div>
        <?php
            $terms = get_terms( 'portfolio' );

            if( $terms && ! is_wp_error($terms) ){
                echo('<ul id="filters" class="clearfix text-center">');
                foreach( $terms as $term ){
                    $my_term = $term->name;
                    echo('<li>');
                    echo ('<span class="filter" data-filter=').('"').('.'). $my_term .('">'). $term->description .('</span>');
                    echo('</li>');
                }
                echo('</ul>');
            }
        ?>      
        <div id="portfoliolist">
            <div class="row">
            <?php
            $posts = get_posts( array(
                'numberposts' => 0,
                'post_type'   => 'portfolio',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>
                <div class="col-md-4 col-lg-3 <?php
                    $term_list = wp_get_post_terms( get_the_ID(), 'portfolio', array('fields' => 'names') );
                        for ($i = 0; $i <= count($term_list); $i++)
                        {
                            echo $term_list[$i]." ";
                          }
                         ?>">
                    <div class="portfolio-wrapper"> 
                        <div class="works-img">
                            <a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="images"><?php the_post_thumbnail('portfolio-thumb'); ?></a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }

            wp_reset_postdata(); // сброс
            ?>
            </div>
        </div>
    </div>
</section>