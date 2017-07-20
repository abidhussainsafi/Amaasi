<?php get_header();
the_post();
?>
<div class="main" id="main">
        <div class="container">
            <div class="four_blocks">
                <div class="title_head_privacy">
                    <h1><?php the_title();?></h1>
                    
                </div>
                <!--END OF TITLE HEAD-->
                <div class="privacy">
                    <div class="col-md-12">
                        <?php the_content();?>
                    </div><!--END OF COL MD 8-->
                </div><!--END OF ABOUT-->
                
            </div>
            <!--END OF FOUR BLOCKS-->
        </div>
        <!--END OF CONTAINER--->

        <div class="clearfix"></div>

<?php get_footer(); ?>

