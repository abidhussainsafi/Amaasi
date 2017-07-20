<?php

get_header(); ?>

<div class="main cont" id="main">

    <div class="container">

        <div class="title_head">

            <h1><?php echo get_post_meta(get_the_ID(),'first_section_meta_title',true);?></h1>

            <p><?php echo get_post_meta(get_the_ID(),'first_section_meta_description',true);?></p>

        </div>

        <!--END OF TITLE HEAD-->



        <div class="row contact_us">

            <div class="col-md-5">

                <div class="left_area">

                    <div class="row">

                        <div class="col-md-6 contact_info">

                            <h3>Contact Us</h3>

                            <p><span>Sharjah, UAE, P.O.BOX 82628 </span></p>

                            <p><span>t:</span> +971 6 559 8887</p>

                            <p><span>f:</span> +971 6 559 8760</p>

                            <p><span>e:</span> <a href="mailto:info@amassicatering.com"> info@amassicatering.com</a></p>

                        </div><!--END OF COL MD 6-->



                        <div class="col-md-6 s_media">

                            <h3>Follow Us</h3>

                            <ul class="social">

                                <li><a href="https://business.facebook.com/AmassiCatering/"><i class="fa fa-facebook-square"></i></a>

                </li>

                <li><a href="https://twitter.com/AmassiCatering"><i class="fa fa-twitter"></i></a>

                </li>

                <li><a href="https://www.instagram.com/amassicatering/"><i class="fa fa-instagram"></i></a>
</li>
                            </ul>

                        </div><!--END OF COL MD 6-->



                    </div><!--END OF ROW-->



                    <div class="enquiry_form">

                        <h3>Enquiry Form</h3>

                        <?php echo do_shortcode('[contact-form-7 id="45" title="Contact form 1"]');?>



                    </div><!--END OF ENQUIRY FORM-->

                </div><!--END OF LEFT AREA--->

            </div><!--END OF COL MD 5-->



            <div class="col-md-7">

                <div class="map">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5175781855805!2d103.8121813143157!3d1.4630813616098008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da135b8b550a27%3A0x68a2a981d0fbb059!2sAmmani+Catering+Pte+Ltd!5e0!3m2!1sen!2s!4v1464585224674" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div><!--END OF MAP-->

            </div><!--END OF COL MD 7-->

        </div>

        <!--END OF ROW-->

    </div>

    <!--END OF CONTAINER--->



    <div class="clearfix"></div>



    <div class="bottom_last">

        <div class="container">

            <h4>Connect with us & We'll make your Event taste Delicious!</h4>

            <a href="#" class="btn btn-default">info@amassicatering.com</a>
            <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887</a>

        </div><!--END OF CONTAINER-->

    </div><!--END OF BOTTOM LAST-->



</div>

<div class="clearfix"></div>

<?php get_footer(); ?>

