<?php get_header();

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

                            $posts = new WP_Query(array('post_type' => 'ammslider','taxonomy' => 'cat_slide', 'term' => 'corporate-en'));

                            while ( $posts->have_posts() )

                            {

                            $posts->the_post();

                            ?>

                            <li>

                                <div class="col-md-6 col-sm-6">

                                    <?php the_post_thumbnail( 'original', array( 'class' => 'img-responsive' ) );?>

                                </div><!--END OF COL MD 6-->

                                <div class="col-md-5 col-sm-6">

                                    <h3><?php echo get_the_title();?></h3>

                                    <p><?php echo get_the_content();?></p>

                                    <div class="bottom_detail">

                                <p><span><?php echo get_post_meta(get_the_ID(),'description_sub_title',true);?></span></p>

                                        <a href="#" class="btn"><i class="fa fa-phone"></i>00971 6 559 8887</a>

            <a href="mailto:info@amassicatering.com" class="btn"><i class="fa fa-envelope"></i>info@amassicatering.com</a>

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



    <div class="parallex corporate_patalex parallax-window" data-parallax="scroll" data-image-src="<?php echo TEMPLATE_PATH;?>images/inner_paralex.jpg">

        <div class="container">

            <div class="title_head">

                <h1><?php echo get_post_meta(get_the_ID(),'second_section_meta_title',true);?></h1>

                <p><?php echo get_post_meta(get_the_ID(),'second_section_meta_description',true);?></p>

            </div>

            <!--END OF TITLE HEAD-->



            <div class="block_eight row inner_right_block">

                <?php

                $posts = new WP_Query(array('post_type' => 'parallax','lang' => 'en','taxonomy' => 'cat_parallax', 'term' => 'corporate-en','order'=>'ASC'));

                $i=4;

                while ( $posts->have_posts() )

                {

                    $posts->the_post();

                    ?>

                    <div class="col-md-4 col-sm-6 wow fadeInUp"  data-wow-delay="0.<?php echo $i;?>0s">

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

                <div class="col-md-3">
<div class="block_one_of_four" style="background:url( <?php echo TEMPLATE_PATH;?>images/bottom_1.jpg) -50px 0px;">
                <div class="inner">
                    <p>MAIN COURSE</p>
                    </div><!--END OF INNER-->
                </div>
                    <!--END OF BLOCK ONE OF FOUR-->

                </div><!--END OF COL MD 3-->



                <div class="col-md-6">
<div class="block_center_of_one" style="background:url(<?php echo TEMPLATE_PATH;?>images/bottom_2.jpg) -102px -100px;">
                    <div class="inner">
                    <p>COLD MEZZE</p>
                    </div><!--END OF INNER-->
                    </div>
                    

                    <div class="block_center_of_two" style="background:url(<?php echo TEMPLATE_PATH;?>images/bottom_3.jpg) 0px -56px;">
                    <div class="inner">
                    <p>DESSERTS AND FRUITS</p>
                    </div><!--END OF INNER-->
                    </div><!--END OF BLOCK CENTER OF ONE-->

                </div><!--END OF COL MD 6-->



                <div class="col-md-3">
<div class="block_one_of_four" style="background:url(<?php echo TEMPLATE_PATH;?>images/bottom_4.jpg) -50px 0px; ">
                <div class="inner">
                    <p>HOT MEZZE</p>
                    </div><!--END OF INNER-->
                </div>
                    <!--END OF BLOCK ONE OF FOUR-->

                </div><!--END OF COL MD 3-->



            </div><!--END OF ROW-->



        </div><!--END OF BLOCK 4-->

    </div><!--END OF CONTAINER-->



    <div class="bottom_last">

        <div class="container">

            <h4>Connect with us & We'll make your Event taste Delicious!</h4>

            <!-- <a href="#" class="btn btn-default">RESERVE 20% DISCOUNT</a> -->
            <a href="mailto:info@amassicatering.com" class="btn btn-default green">info@amassicatering.com</a>

            <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887</a>

            <!-- <a href="#" class="btn btn-default"><i class="fa fa-comments-o"></i>LIVE CHAT</a> -->

        </div><!--END OF CONTAINER-->

    </div><!--END OF BOTTOM LAST-->



</div>

<!--main-->

<div class="clearfix"></div>

<?php get_footer(); ?>

