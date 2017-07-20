<?php
/*Template Name: AR Speciality*/
get_header();
the_post();
?>
<div class="main" id="main">

    <div class="specaility padding_40">
        <div class="container">
            <div class="title_head">
                <h1><?php echo get_post_meta(get_the_ID(),'first_section_meta_title',true);?></h1>
            </div>
            <!--END OF TITLE HEAD-->

            <div class="col-lg-8 col-lg-push-2">
                <p><?php echo get_post_meta(get_the_ID(),'first_section_meta_description',true);?> </p>

                <a href="<?php echo SITE_URL;?>sr/food-menu" class="btn btn-default">تفاصيل القائمة</a>
            </div><!--END OF COL MD 8-->
            <div class="clearfix"></div>
            <div class="item_slider">

                <ul id="flexiselDemo1">
                    <?php
                    $posts = new WP_Query(array('post_type' => 'tabkhatna','taxonomy' => 'cat_tabkhatna', 'term' => 'our-specialties-ar','posts_per_page'=>20,'order'=>'ASC'));
                    while ( $posts->have_posts() )
                    {
                    $posts->the_post();
                    ?>
                    <li>
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail( 'original', array( 'class' => 'img-responsive' ) );
                        }
                        ?>
                        <h2><?php echo get_the_title();?></h2>
                    </li>
                        <?php
                    }
                    wp_reset_query();
                    ?>
                </ul>

            </div><!--END OF ITEM SLIDER-->
        </div><!--END OF CONATINER-->
    </div><!--END OF SCPECIALITY--->

    <div class="container">
        <div class="four_blocks">
            <div class="title_head">
                <h1><?php echo get_post_meta(get_the_ID(),'second_section_meta_title',true);?></h1>
                <p><?php echo get_post_meta(get_the_ID(),'second_section_meta_description',true);?>!</p>
            </div>
            <!--END OF TITLE HEAD-->

            <div class="row">
                <?php
                $posts = new WP_Query(array('post_type' => 'ingredients','taxonomy' => 'cat_ingredient', 'term' => 'our-specialties','posts_per_page'=>4));
                while ( $posts->have_posts() )
                {
                    $posts->the_post();
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="inner_blocks">
                            <div class="top_img">
                                <?php the_post_thumbnail( 'original', array( 'class' => 'img-responsive' ) );?>
                                <small><?php echo wp_get_attachment_image(get_post_meta(get_the_ID(),'small_image',TRUE),'','',array( 'class' => 'img-responsive' ));  ?></small>
                            </div>
                            <!--END OF TOP <?php echo TEMPLATE_PATH; ?>images-->
                            <h3><?php echo get_the_title();?></h3>
                            <p><?php echo get_excerpt_content(get_the_content());?></p>
                            <!--
                          <input type="submit" class="btn" value="اقرأ أكثر" /> -->
                        </div>
                        <!--END OF INNER BLOCKS-->
                    </div>
                    <?php
                }
                wp_reset_query();
                ?>
                <!--END OF COL MD 3-->
            </div>
            <!--END OF ROW-->
        </div>
        <!--END OF FOUR BLOCKS-->
    </div>
    <!--END OF CONTAINER--->
    <div class="bottom_last">
        <div class="container">
            <h4>تواصل معنا لنجعل مناسبتك تجربة متميزة تغمرها أجواء البهجة!</h4>
            <a href="#" class="btn btn-default">info@amassicatering.com</a>
            <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887 </a>

        </div><!--END OF CONTAINER-->
    </div>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
