<?php
/*
Template Name: Page About
Template Post Type: about
*/
?>
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <?php if( have_rows('about-first-row', 'option') ): ?> 
            <?php while( have_rows('about-first-row', 'option') ): the_row(); 
                // vars
                $aboutTitle = get_sub_field('about-title');
                $aboutTitleText = get_sub_field('about-title-text');
            ?>
            <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <h2><?php echo $aboutTitle; ?></h2>
                    <p><?php echo $aboutTitleText; ?></p>
                </div>
                
                <div class="about_content_box box-left">
                    <?php if( have_rows('row-repeater') ): ?> 
                    <?php while( have_rows('row-repeater') ): the_row(); 
                        // vars
                        $aboutTextBlock = get_sub_field('about-text-block');
                        $aboutImgBlock = get_sub_field('about-img-block');
                    ?>
                    <div class="about_txt_box">
                        <p><?php echo $aboutTextBlock; ?></p>
                    </div>
                    <div class="about_img_box">
                        <img src="<?php echo $aboutImgBlock['url']; ?>" alt="<?php echo $aboutImgBlock['alt'] ?>">
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="col-lg-6 col-md-6">
                <div class="about_content_box box-right">
                    <?php if( have_rows('about-second-row', 'option') ): ?> 
                    <?php while( have_rows('about-second-row', 'option') ): the_row(); 
                        // vars
                        $secondRowImg1 = get_sub_field('second-row-img1');
                        $secondRowImg2 = get_sub_field('second-row-img2');
                        $SecondRowText1 = get_sub_field('second-row-text1');
                        $SecondRowText2 = get_sub_field('second-row-text2');
                    ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="about_img_box">
                                <img src="<?php echo $secondRowImg1['url']; ?>" alt="<?php echo $secondRowImg1['alt'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_img_box">
                                <img src="<?php echo $secondRowImg2['url']; ?>" alt="<?php echo $secondRowImg2['alt'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="about_txt_box">
                        <p><?php echo $SecondRowText1; ?></p>
                        <p><?php echo $SecondRowText2; ?></p>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>