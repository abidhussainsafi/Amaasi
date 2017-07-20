<?php get_header(); ?>

<div class="main" id="main">

    <div class="container">

        <div class="four_blocks">

            <div class="title_head">

                <?php if(pll_current_language() == 'ar'){?>

                    <h1>مقادير نجاحاتنا</h1>

                    <p>شغفنا بابتكار أفكار جديدة في عالم المأكولات اللذيذة.. يظل دوماً دافعنا الأول!</p>



                <?php  }else{?>

                    <h1>Our Success Ingredients</h1>

                    <p>We believe its Art, not Business & We're Passionate about it</p>

                <?php }?>



            </div>

            <!--END OF TITLE HEAD-->



            <div class="row">

                <?php

                if(pll_current_language() == 'ar'){$ingredient_term = 'home-ar';}else{$ingredient_term = 'home-en';}

                $posts = new WP_Query(array('post_type' => 'ingredients','taxonomy' => 'cat_ingredient', 'term' => $ingredient_term,'posts_per_page'=>4));

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



                        <p><?php echo get_the_content();//get_excerpt_content(get_the_content());?></p>



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

            <div class="title_head1">

                <?php if(pll_current_language() == 'ar'){?>

                    <h1>مهما كانت طبيعة احتفالك نضمن خدمات رفيعة!</h1>

                    <p>كل ما تحتاج إليه خبرة وكفاءة فريقنا في فن إعداد وتقديم الطعام</p>



                <?php  }else{?>

                    <h1>No Matter what the event, We ensure Perfection</h1>

                    <p>For a Scrumptious Event, all you need is our Expertise & Experience</p>

                <?php }?>



            </div>

            <!--END OF TITLE HEAD-->



            <div class="block_eight row">

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.40s">

                    <img src="<?php echo TEMPLATE_PATH;?>images/n1.png" alt="" class="img-responsive"/>

                    <h5><?php if(pll_current_language() == 'ar'){echo 'المؤسسات';}else{echo 'CORPORATES';}?></h5>

                </div>

                <!--END OF COL MD 3-->

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.45s">

                    <img src="<?php echo TEMPLATE_PATH;?>images/n2.png" alt="" class="img-responsive"/>

                    <h5><?php if(pll_current_language() == 'ar'){echo 'المؤتمرات';}else{echo 'CONFERENCES';}?></h5>

                </div>

                <!--END OF COL MD 3-->

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.50s">

                    <img src="<?php echo TEMPLATE_PATH;?>images/n3.png" alt="" class="img-responsive"/>

                    <h5><?php if(pll_current_language() == 'ar'){echo 'أعياد الميلاد';}else{echo 'BIRTHDAYS';}?></h5>

                </div>

                <!--END OF COL MD 3-->

                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.55s">

                    <img src="<?php echo TEMPLATE_PATH;?>images/n4.png" alt="" class="img-responsive"/>

                    <h5><?php if(pll_current_language() == 'ar'){echo 'لقاءات الأعمال';}else{echo 'GALA DINNERS';}?></h5>

                </div>

                <!--END OF COL MD 3-->



                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.60s">

                    <img src="<?php echo TEMPLATE_PATH;?>images/n5.png" alt="" class="img-responsive"/>

                    <h5> <?php if(pll_current_language() == 'ar'){echo 'الحفلات الاجتماعية';}else{echo 'NETWORKING EVENTS';}?></h5>

                </div>

                <!--END OF COL MD 3-->



                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.65s">

                    <img src="<?php echo TEMPLATE_PATH;?>images/n6.png" alt="" class="img-responsive"/>

                    <h5><?php if(pll_current_language() == 'ar'){echo 'حفلات';}else{echo 'PARTIES';}?></h5>

                </div>

                <!--END OF COL MD 3-->



                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.70s">

                    <img src="<?php echo TEMPLATE_PATH;?>images/n7.png" alt="" class="img-responsive"/>

                    <h5><?php if(pll_current_language() == 'ar'){echo 'حفلات الوداع';}else{echo 'FAREWELLS';}?></h5>

                </div>

                <!--END OF COL MD 3-->



                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.75s">

                    <img src="<?php echo TEMPLATE_PATH;?>images/n8.png" alt="" class="img-responsive"/>

                    <h5><?php if(pll_current_language() == 'ar'){echo 'أعراس';}else{echo 'WEDDINGS';}?></h5>

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

                    <?php if(pll_current_language() == 'ar'){?>

                        <h1>استقبل ضيوفك ودعنا نتولى التفاصيل</h1>

                        <p>اننا نعتقد أنه يمكنك أن تستمتع باستقبال ضيوفك وحفلك في حالة كنت تعتمد على شريك موثوق في إدارة احتفالك</p>



                    <?php  }else{?>

                        <h1>We Make it Hassle-free for you</h1>

                        <p>We believe its Art, not Business & We're Passionate about it</p>

                    <?php }?>



                </div>

                <!--END OF TITLE HEAD-->



                <?php

                if(pll_current_language() == 'ar'){$term = 'home-en';}else{$term = 'home-ar';}

                $posts = new WP_Query(array('post_type' => 'hassle','term' => $term,'posts_per_page'=>4,'order'=>'DESC'));

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

            <?php if(pll_current_language() == 'ar'){?>

                <h1>مرحباً بكم إلى<br/>عالم الإبداع والتميز </h1>

                <p>قم بتحميل هذا الكتيب لمعرفة المزيد من التفاصيل عن أماسي</p>

                <input type="submit" class="btn" value="حمّل"/>



            <?php  }else{?>

                <h1>Sneak Peak into our<br/> World of Creativity</h1>

                <p>Download our Brochure to Dig deep into our Business</p>

                 <button type="submit" class="btn" value="download"><a href="<?php echo TEMPLATE_PATH;?>images/Amassi_ProfileEn.pdf" download="Amassi_ProfileEn">Download</a></button>

            <?php }?>





            <ul class="social">

                <li><a href="https://business.facebook.com/AmassiCatering/"><i class="fa fa-facebook-square"></i></a>

                </li>

                <li><a href="https://twitter.com/AmassiCatering"><i class="fa fa-twitter"></i></a>

                </li>

                <li><a href="https://www.instagram.com/amassicatering/"><i class="fa fa-instagram"></i></a>

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

