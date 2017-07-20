<?php

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

            <div class="about">

                <div class="col-md-8 col-md-push-2">

                    <p><?php the_content();?></p>

                </div><!--END OF COL MD 8-->

            </div><!--END OF ABOUT-->



        </div>

        <!--END OF FOUR BLOCKS-->

    </div>

    <!--END OF CONTAINER--->



    <div class="clearfix"></div>



    <div class="about_main">

        <div class="container">

            <div class="title_head">

                <h1><?php echo get_post_meta(get_the_ID(),'second_section_meta_title',true);?></h1>

            </div>

            <!--END OF TITLE HEAD-->

            <div class="col-md-8 col-lg-push-2 about_text">

                <p><?php echo get_post_meta(get_the_ID(),'second_section_meta_description',true);?></p>

                <!-- <p class="padding_15"><span>Send us your resume</span></p> -->



                <!-- <div class="source_section padding_35 col-md-8 col-lg-push-2"> -->

                    <!-- <div class="file"> -->

                        <!-- <input type="button" class="btn"  id="get_file" value="Browse File" /> -->

                        <!-- <input type="file" id="my_file"> -->

                    <!-- </div>END OF FILE -->



                    <!-- <input type="submit" class="btn-default btn" value="Send" /> -->

                </div><!--END OF SOURCE SECTION-->

            </div>

        </div><!--END OF CONTAINER--->

    </div><!--END OF ABOUT MAIN-->





    <div class="bottom_last">

        <div class="container">

            <h4>Connect with us & We'll make your Event taste Delicious!</h4>

            <a href="#" class="btn btn-default">info@amassicatering.com</a>

            <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887</a>

            <!-- <a href="#" class="btn btn-default"><i class="fa fa-comments-o"></i>LIFE CHAT</a> -->

        </div><!--END OF CONTAINER-->

    </div><!--END OF BOTTOM LAST-->



</div>

<div class="clearfix"></div>

<?php get_footer(); ?>

