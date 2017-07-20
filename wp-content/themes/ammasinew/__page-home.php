<?php get_header(); ?>
<div class="main" id="main">
    <div class="container">
        <div class="four_blocks">
            <div class="title_head">
                <h1>Our Success Ingredient</h1>

                <p>Its Art, not Business & We're Passionate about it</p>
            </div>
            <!--END OF TITLE HEAD-->

            <div class="row">
                <?php
                $posts = new WP_Query(array('post_type' => 'ingredients','taxonomy' => 'cat_ingredient', 'term' => 'home-en','posts_per_page'=>4));
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
                        <!--END OF TOP IMAGES-->
                        <h3><?php echo get_the_title();?></h3>

                        <p><?php echo get_excerpt_content(get_the_content());?></p>

                    </div>
                    <!--END OF INNER BLOCKS-->
                </div>
                <?php
                }
                wp_reset_query();
                ?>
            </div>
            <!--END OF ROW-->
        </div>
        <!--END OF FOUR BLOCKS-->
    </div>
    <!--END OF CONTAINER--->

    <div class="clearfix"></div>

    <div class="parallex parallax-window" data-parallax="scroll" data-image-src="<?php echo TEMPLATE_PATH;?>images/paralex.jpg">
        <div class="container">
            <div class="title_head">
                <h1>No Matter what the event, We ensure Perfection</h1>

                <p>For a Scrumptious Event, all you need is our Expertise & Experience</p>
            </div>
            <!--END OF TITLE HEAD-->

            <div class="block_eight row">
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.40s">
                    <img src="<?php echo TEMPLATE_PATH;?>images/n1.png" alt="" class="img-responsive"/>
                    <h5>CORPORATE</h5>
                </div>
                <!--END OF COL MD 3-->
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.45s">
                    <img src="<?php echo TEMPLATE_PATH;?>images/n2.png" alt="" class="img-responsive"/>
                    <h5>CONFERENCES</h5>
                </div>
                <!--END OF COL MD 3-->
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.50s">
                    <img src="<?php echo TEMPLATE_PATH;?>images/n3.png" alt="" class="img-responsive"/>
                    <h5>BIRTHDAYS</h5>
                </div>
                <!--END OF COL MD 3-->
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.55s">
                    <img src="<?php echo TEMPLATE_PATH;?>images/n4.png" alt="" class="img-responsive"/>
                    <h5>GALA DINNERS</h5>
                </div>
                <!--END OF COL MD 3-->

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.60s">
                    <img src="<?php echo TEMPLATE_PATH;?>images/n5.png" alt="" class="img-responsive"/>
                    <h5> NETWORKING EVENTS</h5>
                </div>
                <!--END OF COL MD 3-->

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.65s">
                    <img src="<?php echo TEMPLATE_PATH;?>images/n6.png" alt="" class="img-responsive"/>
                    <h5>PARTIES</h5>
                </div>
                <!--END OF COL MD 3-->

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.70s">
                    <img src="<?php echo TEMPLATE_PATH;?>images/n7.png" alt="" class="img-responsive"/>
                    <h5>FAREWELLS</h5>
                </div>
                <!--END OF COL MD 3-->

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.75s">
                    <img src="<?php echo TEMPLATE_PATH;?>images/n8.png" alt="" class="img-responsive"/>
                    <h5>WEDDINGS</h5>
                </div>
                <!--END OF COL MD 3-->
            </div>
            <!--END OF ROW-->
        </div>
        <!--END OF CONTAINER-->
    </div>
    <!--END OF PARRALEX-->

    <div class="bottom_two_blocks">

        <div class="col-md-7 col-lg-push-1">
            <div class="row services">
                <div class="title_head">
                    <h1>We Make it Hassle-free for you</h1>

                    <p>We believe its Art, not Business & We're Passionate about it</p>
                </div>
                <!--END OF TITLE HEAD-->

                <?php

                $posts = new WP_Query(array('post_type' => 'hassle','lang' => 'en','term' => 'home-en','posts_per_page'=>4,'order'=>'ASC'));
                while ( $posts->have_posts() )
                {
                $posts->the_post();
                ?>

                <div class="col-md-3 col-sm-6">
                    <div class="block">
                        <?php the_post_thumbnail( 'original', array( 'class' => 'img-responsive' ) );?>
                        <p><?php echo get_the_title();?></p>
                    </div>
                    <!--END OF BLOCK-->
                </div>
                <?php
                }
                wp_reset_query();
                ?>
            </div>
            <!--END OF SERVICES-->
        </div>
        <!--END OF COL MD 8-->
        <div class="col-md-4 col-lg-push-1 broucher">
            <h1>Sneak Peak into our<br/> World of Creativity</h1>

            <p>Download our Brochure to Dig deep into our Business</p>
            <input type="submit" class="btn" value="download"/>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
        <!---END OF COL MD 4-->
    </div>
    <!--END 0F BOTTOM TWO BLOCK--->
</div>
<!--main-->
<div class="clearfix"></div>
<?php get_footer(); ?>
