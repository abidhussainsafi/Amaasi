<?php

/*Template Name: AR Social Gathering*/

get_header();

the_post();

?>

<div class="main" id="main">

    <div class="container">

        <div class="four_blocks">

            <div class="title_head">

                <h1><?php echo get_post_meta(get_the_ID(),'first_section_meta_title',true);?></h1>

                <p><?php echo get_post_meta(get_the_ID(),'first_section_meta_description',true);?></p>

            </div>

            <!--END OF TITLE HEAD-->



            <div class="row">







                <div class="scrolling_text">

                    <div  id="top" class="callbacks_container">

                        <ul class="rslides" id="slider4">

                            <?php

                            $posts = new WP_Query(array('post_type' => 'ammslider','taxonomy' => 'cat_slide', 'term' => 'social-gathering','order'=>'ASC'));

                            while ( $posts->have_posts() )

                            {

                            $posts->the_post();

                            ?>

                            <li>

                                <div class="col-md-6 col-sm-6 col-sm-push-6">

                                    <?php the_post_thumbnail( 'original', array( 'class' => 'img-responsive' ) );?>

                                </div><!--END OF COL MD 6-->

                                <div class="col-md-6 col-sm-6  col-sm-pull-6">

                                    <h3><?php echo get_the_title();?></h3>

                                    <p><?php echo get_the_content();?></p>


                                    <div class="bottom_detail">

                             <p><span><?php echo get_post_meta(get_the_ID(),'description_sub_title',true);?></span></p>
                                        
                                        <a href="#" class="btn"><i class="fa fa-phone"></i>00971 6 559 8887</a>

                                        <a href="#" class="btn"><i class="fa fa-comments-o"></i>دردشة مباشرة</a>

                                    </div><!--END OF BOTTOM DETAIL-->

                                </div><!--END OF COL MD 6-->

                            </li>

                            <?php

                            }

                            wp_reset_query();

                            ?>





                        </ul>

                    </div><!--END OF CALLBACKS CONTAINER-->

                </div><!--END OF SCROLLING TEXT-->





            </div>

            <!--END OF ROW-->

        </div>

        <!--END OF FOUR BLOCKS-->

    </div>

    <!--END OF CONTAINER--->



    <div class="clearfix"></div>



    <div class="parallex parallax-window" data-parallax="scroll" data-image-src="<?php echo TEMPLATE_PATH;?>images/social_paralex.jpg">

        <div class="container">

            <div class="title_head1">

                <h1><?php echo get_post_meta(get_the_ID(),'second_section_meta_title',true);?></h1>

                <p><?php echo get_post_meta(get_the_ID(),'second_section_meta_description',true);?></p>

            </div>

            <!--END OF TITLE HEAD-->



            <div class="block_eight row inner_right_block">

                <?php

                $posts = new WP_Query(array('post_type' => 'parallax','taxonomy' => 'cat_parallax', 'term' => 'social-gathering','order'=>'ASC'));

                $i=4;

                while ( $posts->have_posts() )

                {

                    $posts->the_post();

                    ?>

                    <div style="min-height: 300px;" class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.<?php echo $i;?>0s">

                        <?php the_post_thumbnail( 'original', array( 'class' => 'img-responsive' ) );?>

                        <h5><?php echo get_the_title();?></h5>



                        <p><?php echo get_the_content();?></p>

                    </div>

                    <?php

                    $i++;

                }

                wp_reset_query();

                ?>





            </div>

            <!--END OF ROW-->

        </div>

        <!--END OF CONTAINER-->

    </div>

    <!--END OF PARRALEX-->



    <div class="container">

        <div class="block_four">

            <div class="title_head">

                <h1><?php echo get_post_meta(get_the_ID(),'third_section_meta_title',true);?></h1>

                <p><?php echo get_post_meta(get_the_ID(),'third_section_meta_description',true);?></p>

            </div>

            <!--END OF TITLE HEAD-->

            <div class="row">

                <div class="col-md-3 col-sm-push-9">

                    <div class="block_one_of_four" style="background:url(<?php echo TEMPLATE_PATH;?>images/s_block1.jpg);">

                        <div class="inner">

                            <p>أطباق كبير الطهاة  </p>

                        </div><!--END OF INNER-->

                    </div><!--END OF BLOCK ONE OF FOUR-->

                </div><!--END OF COL MD 3-->



                <div class="col-md-6">

                    <div class="block_center_of_one" style="background:url(<?php echo TEMPLATE_PATH;?>images/s_block2.jpg);">

                        <div class="inner">

                            <p>وصفات صحية</p>

                        </div><!--END OF INNER-->

                    </div><!--END OF BLOCK CENTER OF ONE-->



                    <div class="block_center_of_two" style="background:url(<?php echo TEMPLATE_PATH;?>images/s_block3.jpg);">

                        <div class="inner">

                            <p>نكهات آسيوية</p>

                        </div><!--END OF INNER-->

                    </div><!--END OF BLOCK CENTER OF ONE-->

                </div><!--END OF COL MD 6-->



                <div class="col-md-3 col-sm-pull-9">

                    <div class="block_one_of_four" style="background:url(<?php echo TEMPLATE_PATH;?>images/s_block4.jpg);">

                        <div class="inner">

                            <p>منصات شواء </p>

                        </div><!--END OF INNER-->

                    </div><!--END OF BLOCK ONE OF FOUR-->

                </div><!--END OF COL MD 3-->



            </div><!--END OF ROW-->



        </div><!--END OF BLOCK 4-->

    </div><!--END OF CONTAINER-->



    <div class="bottom_last">

        <div class="container">

            <h4>تواصل معنا لنمنح مناسباتك مذاقاً لذيذاً!</h4>

            <a href="#" class="btn btn-default">info@amassicatering.com</a>

            <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887</a>



        </div><!--END OF CONTAINER-->

    </div><!--END OF BOTTOM LAST-->



</div>

<div class="clearfix"></div>

<?php get_footer(); ?>

