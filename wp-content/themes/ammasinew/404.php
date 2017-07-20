<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="main" id="main">
	<div class="container">
		<div class="about">

                <div class="col-md-8 col-md-push-2">

                    <p><?php the_content();?></p>

                </div><!--END OF COL MD 8-->

            </div><!--END OF ABOUT-->
	</div>
</div>

	

<?php
// get_sidebar( 'content' );
// get_sidebar();
get_footer();
