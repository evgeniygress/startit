<?php
/*
Template Name: Page Works
*/
?>
<section id="works" class="works">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('portfolio-title'); ?></h2>
            <p><?php the_field('portfolio-description'); ?></p>
        </div>
            <?php if( have_rows('tab-link') ): 

                while( have_rows('tab-link') ): the_row(); 
                    
                    // vars
                    $nav1 = get_sub_field('nav-1');
                    $nav2 = get_sub_field('nav-2');
                    $nav3 = get_sub_field('nav-3');
                    $nav4 = get_sub_field('nav-4');
                    $nav5 = get_sub_field('nav-5');
                    ?>
                    <ul id="filters" class="clearfix text-center">
                        <li><span class="filter active" data-filter="*"><?php echo $nav1; ?></span></li>
                        <li><span class="filter" data-filter=".web"><?php echo $nav2; ?></span></li>
                        <li><span class="filter" data-filter=".art"><?php echo $nav3; ?></span></li>
                        <li><span class="filter" data-filter=".creative"><?php echo $nav4; ?></span></li>
                        <li><span class="filter" data-filter=".wordpress"><?php echo $nav5; ?></span></li>
                    </ul>
                <?php endwhile; ?>
                
            <?php endif; ?>        
        <div id="portfoliolist">
            <?php if( have_rows('tab-content') ): 

                while( have_rows('tab-content') ): the_row(); 
                    
                    // vars
                    $portfolioImg1 = get_sub_field('portfolio-img1');
                    $portfolioText1 = get_sub_field('portfolio-text1');
                    $portfolioImg2 = get_sub_field('portfolio-img2');
                    $portfolioText2 = get_sub_field('portfolio-text2');
                    $portfolioImg3 = get_sub_field('portfolio-img3');
                    $portfolioText3 = get_sub_field('portfolio-text3');
                    $portfolioImg4 = get_sub_field('portfolio-img4');
                    $portfolioText4 = get_sub_field('portfolio-text4');
                    $portfolioImg5 = get_sub_field('portfolio-img5');
                    $portfolioText5 = get_sub_field('portfolio-text5');
                    $portfolioImg6 = get_sub_field('portfolio-img6');
                    $portfolioText6 = get_sub_field('portfolio-text6');
                    $portfolioImg7 = get_sub_field('portfolio-img7');
                    $portfolioText7 = get_sub_field('portfolio-text7');
                    $portfolioImg8 = get_sub_field('portfolio-img8');
                    $portfolioText8 = get_sub_field('portfolio-text8');
                    ?>
            <div class="row">
                <div class="col-md-4 col-lg-3 portfolio web">
                    <div class="portfolio-wrapper"> 
                        <div class="works-img">
                            <a href="<?php echo $portfolioImg1['url']; ?>" data-fancybox="images">
                                <img src="<?php echo $portfolioImg1['url']; ?>" alt="" />
                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php echo $portfolioText1; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 portfolio art creative">
                    <div class="portfolio-wrapper">
                        <div class="works-img">
                            <a href="<?php echo $portfolioImg2['url']; ?>" data-fancybox="images">
                                <img src="<?php echo $portfolioImg2['url']; ?>" alt="" />
                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php echo $portfolioText2; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 portfolio creative wordpress">
                    <div class="portfolio-wrapper">
                        <div class="works-img"> 
                            <a href="<?php echo $portfolioImg3['url']; ?>" data-fancybox="images">
                                <img src="<?php echo $portfolioImg3['url']; ?>" alt="" />
                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php echo $portfolioText3; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 portfolio web creative">
                    <div class="portfolio-wrapper"> 
                        <div class="works-img">
                            <a href="<?php echo $portfolioImg4['url']; ?>" data-fancybox="images">
                                <img src="<?php echo $portfolioImg4['url']; ?>" alt="" />
                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php echo $portfolioText4; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 portfolio web art">
                    <div class="portfolio-wrapper">
                        <div class="works-img"> 
                            <a href="<?php echo $portfolioImg5['url']; ?>" data-fancybox="images">
                                <img src="<?php echo $portfolioImg5['url']; ?>" alt="" />
                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php echo $portfolioText5; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 portfolio art wordpress">
                    <div class="portfolio-wrapper">
                        <div class="works-img"> 
                            <a href="<?php echo $portfolioImg6['url']; ?>" data-fancybox="images">
                                <img src="<?php echo $portfolioImg6['url']; ?>" alt="" />
                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php echo $portfolioText6; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 portfolio creative art">
                    <div class="portfolio-wrapper"> 
                        <div class="works-img">
                            <a href="<?php echo $portfolioImg7['url']; ?>" data-fancybox="images">
                                <img src="<?php echo $portfolioImg7['url']; ?>" alt="" />
                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php echo $portfolioText7; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 portfolio wordpress">
                    <div class="portfolio-wrapper">
                        <div class="works-img"> 
                            <a href="<?php echo $portfolioImg8['url']; ?>" data-fancybox="images">
                                <img src="<?php echo $portfolioImg8['url']; ?>" alt="" />
                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php echo $portfolioText8; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>                
            <?php endif; ?>
        </div>
    </div>
</section>