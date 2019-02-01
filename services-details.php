<?php
/*
Template Name: Services-details
Template Post Type: post, page, services
*/
?>
<?php get_header('post'); ?>

        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="singlepage-details-content">
                        <div class="service-details-img">
                            <img src="<?php the_field('service-details-img'); ?>" alt="img">
                        </div>
                        <div class="service-details">
                            <div class="full_content">
                                <h6><?php the_field('service-details-title'); ?></h6>
                                <h2 class="project_title"><?php the_field('develop-text'); ?></h2>
                                <p><?php the_field('services-text-first'); ?></p>
                                <p><?php the_field('services-text-second'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="service_post-inner">
                        <h2 class="project_title">Offers in the service</h2>
                        <div class="service_post-list">

                        <?php
                        $posts = get_posts( array(
                            'numberposts' => 0,
                            'post_type'   => 'services',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                            <div class="service_post">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="service_post-img">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="service_post-content">
                                            <div class="service_post-header">
                                                <h4><?php the_title(); ?></h4>
                                            </div>
                                            <div class="service_post-text">
                                                <p><?php the_content(); ?>.</p>
                                            </div>
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

            <section id="team" class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="team_member">
                                        <img src="images/team/team1.jpg" alt="img">
                                        <div class="team_member_inner">
                                            <h4>Logan Doe</h4>
                                            <h6>Manager</h6>
                                            <p>Ut enim ad minima veniam dol um exercitationem enim. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="team_member">
                                        <img src="images/team/team2.jpg" alt="img">
                                        <div class="team_member_inner">
                                            <h4>John Doe</h4>
                                            <h6>Manager</h6>
                                            <p>Ut enim ad minima veniam dol um exercitationem enim. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="section-title">
                                <h2>Service Experts</h2>
                                <p>Lorem ipsum dolor sit amet ut dolor cons ectet ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="testimonials" class="testimonials testimonials2">
                <div class="container">
                    <div class="section-title">
                        <h2>Service Testimonial</h2>
                        <p>Lorem ipsum dolor sit, consectet ipsum dolor sit</p>
                    </div>
                    <div class="owl-carousel owl-theme testimonial_carousel2">
                        
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
                                                        <li><a href="services-details.html#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="services-details.html#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="services-details.html#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="services-details.html#"><i class="fa fa-skype"></i></a></li>
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
