<?php
/*
Template Name: Portfolio-details
Template Post Type: post, page, portfolio
*/
?>
<?php get_header('post'); ?>

        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="singlepage-details-content">
                        <div class="portfolio-details-img">
                            <img src="images/portfolio/portfolio-details.jpg" alt="img">
                        </div>
                        <?php
                        $posts = get_posts( array(
                            'numberposts' => 1,
                            'post_type'   => 'portfolio',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                            <div class="portfolio-details">
                                <div class="full_content">
                                    <h6><?php the_title(); ?></h6>
                                    <h2 class="project_title">Mobile Interface for shoe.corp</h2>
                                    <p><?php the_content(); ?></p>
                                </div>
                                <div class="portfolio-content-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>    
                        <?php
                        }
                        wp_reset_postdata(); // сброс
                        ?>
                    </div>
                </div>
            </section>

            <section class="video-banner">
                <div class="container">
                    <div class="video-content">Video presentation <span class="video_btn"><a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><i class="ion-ios-play"></i></a></span> About the project</div>
                </div>
            </section>

            <section class="project_desc">
                <div class="container">
                    <div class="section-title">
                        <h2>Project Description</h2>
                        <p>Lorem ipsum dolor sit, consectet ipsum dolor sit</p>
                    </div>
                    <div class="project_desc_inner">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="desc_txt">
                                    <p>Ut enim ad mini ma veniam, quis nostrum exercitati onem cop in orate loorem commosequatur? Quis aut em vel eum iuredilor veniam, quis nostruction dolorsequatur? Quis autem vel eumyi Quis autem vel eum iure veniam lorem quis nostru iure.Ut enim ad minima veniam</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="desc_txt">
                                    <p>Ut enim ad mini ma veniam, quis nostrum exercitati onem cop in orate loorem commosequatur? Quis aut em vel eum iuredilor veniam, quis nostruction dolorsequatur? Quis autem vel eumyi Quis autem vel eum iure veniam lorem quis nostru iure.Ut enim ad minima veniam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project_desc_bottom">
                    <div class="container">
                        <div class="project_info_grid">
                            <div class="info_grid">
                                <h5>Client</h5>
                                <p>Adevertising corp.</p>
                            </div>
                            <div class="info_grid">
                                <h5>Product</h5>
                                <p>Mobile Handset</p>
                            </div>
                            <div class="info_grid">
                                <h5>Destination</h5>
                                <p>Singapore</p>
                            </div>
                            <div class="info_grid">
                                <h5>Date</h5>
                                <p>05 January 2018</p>
                            </div>
                            <div class="info_grid">
                                <h5>Cost</h5>
                                <p>$3000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="testimonials" class="testimonials testimonials1">
                <div class="container">
                    <div class="owl-carousel owl-theme testimonial_carousel">
                        <?php
                            $posts = get_posts( array(
                                'numberposts' => 0,
                                'post_type'   => 'testimonial',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>
                        <div class="item">
                            <div class="testibox">
                                <div class="testi-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="testi-content">
                                    <ul>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                    </ul>
                                    <p><?php the_content(); ?></p>
                                    <h4><?php the_title(); ?></h4>
                                    <h6><?php the_category(); ?></h6>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        wp_reset_postdata(); // сброс
                        ?>
                        <div class="item">
                            <div class="testibox">
                                <div class="testi-img">
                                    <img src="images/testimonial/reviewer-1.png" alt="">
                                </div>
                                <div class="testi-content">
                                    <ul>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star-half"></i></li>
                                    </ul>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accntium oloremque laudantium, totam rem aperiam, eaque ipsa ab illo inventore veritatis et quasi rchitecto beatae vitae dictaexplicabo. Nemo enim voluptatem quia.Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    <h4>Jeny Doe</h4>
                                    <h6>CEO, Advertising Corp</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testibox">
                                <div class="testi-img">
                                    <img src="images/testimonial/reviewer-1.png" alt="">
                                </div>
                                <div class="testi-content">
                                    <ul>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star-half"></i></li>
                                        <li><i class="ion-ios-star-outline"></i></li>
                                    </ul>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accntium oloremque laudantium, totam rem aperiam, eaque ipsa ab illo inventore veritatis et quasi rchitecto beatae vitae dictaexplicabo. Nemo enim voluptatem quia.Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    <h4>Jeny Doe</h4>
                                    <h6>CEO, Advertising Corp</h6>
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
                                                        <li><a href="portfolio-details.html#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="portfolio-details.html#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="portfolio-details.html#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="portfolio-details.html#"><i class="fa fa-skype"></i></a></li>
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
