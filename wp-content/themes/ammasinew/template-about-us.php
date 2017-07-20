<?php

/*Template Name: AR Aboutus*/

get_header();

the_post();

?>

<div class="main" id="main">

    <div class="container">

        <div class="four_blocks">

            <div class="title_head">

                <h1>فريقنا.. سر قوتنا وتفوقنا</h1>



                <p>أسباب متنوعة تشتمل على المعرفة والخبرة والابتكار هي التي تساعدنا على التفوق</p>

            </div>

            <!--END OF TITLE HEAD-->



            <div class="about">

                <div class="col-md-8 col-md-push-2">

                   <?php the_content();?>

                </div><!--END OF COL MD 8-->

            </div><!--END OF ABOUT-->

        </div>

        <!--END OF FOUR BLOCKS-->

    </div>

    <br/><br/>

    <!--END OF CONTAINER--->



    <div class="clearfix"></div>



    <div class="about_main">

        <div class="container">

            <div class="title_head">

                <h1><?php echo get_post_meta(get_the_ID(),'title',true);?></h1>

            </div>

            <!--END OF TITLE HEAD-->

            <div class="col-md-8 col-lg-push-2 about_text">

                <p><?php echo get_post_meta(get_the_ID(),'description',true);?></p>



            </div><!--END OF SOURCE SECTION-->

        </div>

    </div><!--END OF CONTAINER--->

    <div class="bottom_last">

        <div class="container">

            <h4>تواصل معنا لنمنح مناسباتك مذاقاً لذيذاً</h4>

            <a href="#" class="btn btn-default">info@amassicatering.com</a>

            <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887</a>

            <!-- <a href="#" class="btn btn-default"><i class="fa fa-comments-o"></i>دردشة مباشرة</a> -->

        </div><!--END OF CONTAINER-->

    </div><!--END OF BOTTOM LAST-->

</div><!--END OF ABOUT MAIN-->

<div class="clearfix"></div>

<?php get_footer(); ?>

