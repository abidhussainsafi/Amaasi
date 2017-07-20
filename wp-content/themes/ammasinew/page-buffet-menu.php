<?php
get_header();
the_post();
?>
<div class="main" id="main">
    <div class="our_menu padding_40">
        <div class="container">
            <div class="title_head">
                <h1>Our Menu</h1>
                <p>No one Understands & Maintains the Elegance</p>
            </div>
            <!--END OF TITLE HEAD-->

            <div class="col-md-12 selector">
                <div class="nice-select">
                    <p class="current">International Menu</p>
                    <ul class="list">
                        <li class="option selected">Menu One</li>
                        <li class="option">Menu Two </li>
                        <li class="option">Menu Three</li>
                        <li class="option">Menu Four</li>
                    </ul>
                </div>

                <a href="#" class="btn btn-default">TABKHATNA MENU</a>
            </div><!--END OF COL MD 12-->
        </div><!--END OF CONTAINER-->
    </div><!--END OF OUR MENU-->
    <div class="clearfix"></div>

    <div class="menu_color padding_40">
        <div class="container">
            <div class="menu_scrroller">
                <div class="menu_heading">
                    <h1>Cold Mezze</h1>
                </div><!--END OF MENU HEADING-->

                <ul id="flexiselDemo2">
                    <?php
                    $posts = new WP_Query(array('post_type' => 'buffet','lang' => 'en','taxonomy' => 'cat_buffet', 'term' => 'cold-mezze'));
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
                            <p><?php echo get_the_content();?></p>
                        </li>
                    <?php }  wp_reset_query();?>
                </ul>
            </div><!--END OF MENU SCROLLER-->
        </div><!--END OF CONTAINER-->

    </div><!--END OF MENU COLOR --->

    <div class="menu_colorless padding_40">
        <div class="container">
            <div class="menu_scrroller">
                <div class="menu_heading">
                    <h1>Main Course</h1>
                </div><!--END OF MENU HEADING-->

                <ul id="flexiselDemo3">
                    <?php
                    $posts = new WP_Query(array('post_type' => 'buffet','lang' => 'en','taxonomy' => 'cat_buffet', 'term' => 'main-course'));
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
                            <p><?php echo get_the_content();?></p>
                        </li>
                    <?php }  wp_reset_query();?>
                </ul>
            </div><!--END OF MENU SCROLLER-->
        </div><!--END OF CONTAINER-->

    </div><!--END OF MENU COLORLESS --->

    <div class="menu_color2 padding_40">
        <div class="container">
            <div class="menu_scrroller">
                <div class="menu_heading">
                    <h1>Desserts & Fruits</h1>
                </div><!--END OF MENU HEADING-->

                <ul id="flexiselDemo4">
                    <?php
                    $posts = new WP_Query(array('post_type' => 'buffet','lang' => 'en','taxonomy' => 'cat_buffet', 'term' => 'desserts-fruits'));
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
                            <p><?php echo get_the_content();?></p>
                        </li>
                    <?php }  wp_reset_query();?>
                </ul>
            </div><!--END OF MENU SCROLLER-->
        </div><!--END OF CONTAINER-->

    </div><!--END OF MENU COLOR --->

    <div class="container">
        <div class="refreshment padding_40">
            <div class="row">

                <div class="col-md-15 col-sm-3">
                    <div class="refresh_four_blocks">
                        <h1>Refreshments</h1>
                    </div><!--END OF COL SM 3-->
                </div>

                <div class="col-md-15 col-sm-3">
                    <div class="refresh_four_blocks">
                        <img src="<?php echo TEMPLATE_PATH;?>images/water.png" alt="" class="img-responsive"/>
                        <h3>Mineral Water</h3>
                        <p>No one Understands</p>
                    </div><!--END OF REFRESH HEADING-->
                </div><!--END OF COL SM 3-->

                <div class="col-md-15 col-sm-3">
                    <div class="refresh_four_blocks">
                        <img src="<?php echo TEMPLATE_PATH;?>images/drink.png" alt="" class="img-responsive"/>
                        <h3>Soft Drinks</h3>
                        <p>No one Understands</p>
                    </div><!--END OF REFRESH HEADING-->
                </div><!--END OF COL SM 3-->

                <div class="col-md-15 col-sm-3">
                    <div class="refresh_four_blocks">
                        <img src="<?php echo TEMPLATE_PATH;?>images/tea.png" alt="" class="img-responsive"/>
                        <h3>Tea</h3>
                        <p>No one Understands</p>
                    </div><!--END OF REFRESH HEADING-->
                </div><!--END OF COL SM 3-->

                <div class="col-md-15 col-sm-3">
                    <div class="refresh_four_blocks">
                        <img src="<?php echo TEMPLATE_PATH;?>images/coffee.png" alt="" class="img-responsive"/>
                        <h3>Coffee</h3>
                        <p>No one Understands</p>
                    </div><!--END OF REFRESH HEADING-->
                </div><!--END OF COL SM 3-->


            </div><!--END OD ROW-->
        </div><!--END OF REFRESHMENT--->
        <!--END OF FOUR BLOCKS-->
    </div>
    <!--END OF CONTAINER--->
    <div class="bottom_last">
        <div class="container">
            <h4>Connect with us &amp; We'll make your Event taste Delicious!</h4>
            <a href="#" class="btn btn-default">RESERVE 20% DISCOUNT</a>
            <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887</a>
            <a href="#" class="btn btn-default"><i class="fa fa-comments-o"></i>LIFE CHAT</a>
        </div><!--END OF CONTAINER-->
    </div>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
