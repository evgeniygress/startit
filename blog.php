<?php
/*
Template Name: Blog
Template Post Type: post, page, article
*/
?>
<?php get_header('post'); ?>

        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-8 main-content">
                            <div class="blog-list">

                            <?php
                                $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
                                $args = array(
                                    'post_type'      => 'article',
                                    'posts_per_page' => '4',
                                    'paged'          => $paged,
                               );
                               $blog_posts = new WP_Query( $args );
                            if ($blog_posts->have_posts() ){ while ($blog_posts->have_posts() ){ $blog_posts->the_post(); ?>
                                <article class="blog_post">
                                    <div class="post_header">
                                        <h4 class="post_cat">Category : <a href="<?php the_permalink() ?>"><?php the_terms( '', 'article' ) ?></a></h4>
                                        <h2 class="post_title"><a href="blog.html#"><?php the_title(); ?></a></h2>
                                    </div>
                                    <div class="post_img">
                                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-thumb'); ?></a>
                                    </div>
                                    <div class="post_content">
                                        <div class="post_intro">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>

                                        <div class="post_footer">
                                            <ul class="post_meta">
                                                <li><span class="author"><img src="images/blog/author.jpg" alt="author"> By <a href="blog.html#"><?php the_author(); ?></a></span></li>
                                                <li><span class="date"><a href="blog.html#"><?php the_date('j F Y'); ?></a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>  
                                <?php } //end while ?>
                                <div class="pagination-div">
                                    <?php the_posts_pagination(); ?>
                                </div>
                            <?php } // end if 
                            wp_reset_query();
                            ?>
                                
                            </div>

                        </div>

                        <div class="col-md-5 col-lg-4 sidebar">

                            <div id="search-2" class="widget widget_search">
                                <div class="sidebar_search">
                                    <form class="sidebar_search_form" action="http://wpthemebooster.com/demo/themeforest/html/carrby/search.php">
                                        <input type="text" name="search" class="form-control" placeholder="Search">
                                        <button type="submit" class="form-control form-control-submit"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div id="recent-posts-2" class="widget widget_recent_posts">
                                <h4 class="widget_title"><span>Recent Posts</span></h4>
                                <div class="sidebar_recent_posts">
                                    <ul class="recent_posts_list">
                                        <li>
                                            <img src="images/blog/post-thumb-1.jpg" alt="insta">
                                            <div class="post_content">
                                                <h6><a href="blog.html#">Get the best quote for your service</a></h6>
                                                <p class="date">08 June, 2018</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/blog/post-thumb-2.jpg" alt="insta">
                                            <div class="post_content">
                                                <h6><a href="blog.html#">Get the best quote for your service</a></h6>
                                                <p class="date">15 May, 2018</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/blog/post-thumb-3.jpg" alt="insta">
                                            <div class="post_content">
                                                <h6><a href="blog.html#">Get the best quote for your service</a></h6>
                                                <p class="date">12 April, 2018</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div id="archives-1" class="widget widget_archive">
                                <h4 class="widget_title"><span>Archives List</span></h4>
                                <div class="sidebar_archive">
                                    <ul class="archive_list">
                                        <li><a href="blog.html#">December 2017</a></li>
                                        <li><a href="blog.html#">January 2018</a></li>
                                        <li><a href="blog.html#">March 2018</a></li>
                                        <li><a href="blog.html#">June 2018</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div id="categories-2" class="widget widget_categories">
                                <h4 class="widget_title"><span>Categories</span></h4>
                                <div class="sidebar_categories">
                                    <ul class="category_list">
                                        <?php
                                            $categories = get_categories(array(
                                                'taxonomy' => 'article',
                                                'order' => 'ASC'
                                            ));
                                            foreach( $categories as $category ){
                                                echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </li> ';
                                            }
                                            ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-lg-5">
                            <div class="contact-info">
                                <div class="contact-info-details">
                                    <h4>Phone</h4>
                                    <p>+ 123 - 456 -789,   + 987 - 654 - 321</p>
                                </div>
                                <div class="contact-info-details">
                                    <h4>Address</h4>
                                    <p>RK road, United states of America</p>
                                </div>
                                <div class="contact-info-details">
                                    <h4>E-mail</h4>
                                    <p>carrbyagency@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-lg-7">
                            <div class="contact-form-two">
                                <div class="contact-title">
                                    <h3>Drop Us a line</h3>
                                    <form class="appoint-form-two" action="http://wpthemebooster.com/demo/themeforest/html/carrby/register.php" method="post">
                                        <div class="form-container">
                                            <div class="row">
                                                <div class="col-sm-6 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-6">
                                                    <div class="submit-btn">
                                                        <input type="submit" name="submit" class="btn" value="send mail">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-6">
                                                    <ul class="top-social list-inline">
                                                        <li><a href="blog.html#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="blog.html#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="blog.html#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="blog.html#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- End Main Wrapper-->

<?php get_footer(); ?>
