<?php
/*
Template Name: Page Blog
*/
?>
<section id="blog" class="blog">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('blog-title'); ?></h2>
            <p><?php the_field('blog-description'); ?></p>
        </div>
        <div class="row">
            <?php
            $posts = get_posts( array(
                'numberposts' => 0,
                'post_type'   => 'article',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="blog_post">
                        <div class="post_img">
                            <a href="index.html#"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="post_content">
                            <div class="post_header">
                                <h2 class="post_title"><a href="index.html#"><?php the_title() ?></a></h2>
                                <div class="read_more"><a href="index.html#"><?php the_content(); ?></a></div>
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
</section>