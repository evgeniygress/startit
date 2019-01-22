<?php
/*
Template Name: Page Contact
*/
?>
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="contact-info">
                    <div class="contact-info-details">
                        <h4>Phone</h4>
                        <p><?php the_field('phone', 'option'); ?></p>
                    </div>
                    <div class="contact-info-details">
                        <h4>Address</h4>
                        <p><?php the_field('address', 'option'); ?></p>
                    </div>
                    <div class="contact-info-details">
                        <h4>E-mail</h4>
                        <p><?php the_field('email', 'option'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 offset-lg-1">
                <div class="contact-form-two">
                    <div class="contact-title">
                        <h3>Drop Us a line</h3>
                        <form class="appoint-form-two" action="http://wpthemebooster.com/demo/themeforest/html/carrby/register.php" method="post">
                            <div class="form-container">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="submit-btn">
                                            <input type="submit" name="submit" class="btn" value="send mail">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <ul class="top-social list-inline">
                                            <?php if( have_rows('social-link', 'option') ): ?> 
                                            <?php while( have_rows('social-link', 'option') ): the_row(); 
                                                // vars
                                                $facebookIcon = get_sub_field('facebook');
                                                $googleIcon = get_sub_field('google');
                                                $twitterIcon = get_sub_field('twitter');
                                                $skypeIcon = get_sub_field('skype');
                                            ?>
                                            
                                            <li><a href="<?php echo $facebookIcon; ?>"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="<?php echo $googleIcon; ?>"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="<?php echo $twitterIcon; ?>"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $skypeIcon; ?>"><i class="fa fa-skype"></i></a></li>
                                            <?php endwhile; ?>
                                            <?php endif; ?>
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