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
        <?php if( have_rows('blog-repeater') ): ?> 
            <?php while( have_rows('blog-repeater') ): the_row(); 
                // vars
                $postImg = get_sub_field('post-img');
                $postTitle = get_sub_field('post-title');
                $postMore = get_sub_field('post-more');
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="blog_post">
                    <div class="post_img">
                        <?php if($postImg): ?>
                        <a href="index.html#"><img src="<?php echo $postImg['url']; ?>" alt="img"></a>
                        <?php endif; ?>
                    </div>
                    <div class="post_content">
                        <div class="post_header">
                            <?php if($postTitle): ?>
                            <h2 class="post_title"><a href="index.html#"><?php echo $postTitle; ?></a></h2>
                            <?php endif; ?>
                            <?php if($postMore): ?>
                            <div class="read_more"><a href="index.html#"><?php echo $postMore; ?></a></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>