<?php

/**

 * The Header for our theme

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */

?><!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) & !(IE 8)]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="shortcut icon" href="http://localhost:8081/amassi/favicon.ico" />
    <meta name="viewport" content="width=device-width">

    <title><?php wp_title('|', true, 'right'); ?></title>



    <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH; ?>css/bootstrap.css"/>

    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>css/animate.css">

    <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH; ?>css/font-awesome.min.css"/>

    <link rel="stylesheet" href="<?php echo TEMPLATE_PATH; ?>css/nice-select.css">

    <script type='text/javascript' src='<?php echo TEMPLATE_PATH; ?>js/jquery.js'></script>

<!--    wp css files-->
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php echo SITE_URL;?>wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.4.2' type='text/css' media='all' />

    <link rel='stylesheet' id='twentyfourteen-lato-css'  href='https://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C900%2C300italic%2C400italic%2C700italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />


    <?php if(pll_current_language() == 'ar'){?>

        <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH; ?>arcss/style.css"/>

    <?php }else{?>

        <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH; ?>style.css"/>

    <?php }?>

    <?php //wp_head();?>

<!--    End of wp Css files-->

    <script type="text/javascript">

        jQuery(document).ready(function ($) {

            function validateEmail(email) {

                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                return re.test(email);

            }

            $(".reserve_Form").submit(function (event) {

                event.preventDefault();

                $('.ajax-loading').show();

                if (!validateEmail($('#reserve_email').val())) {



                    $('#er4').html('Please enter valid Email');

                    return false;

                }


                var values = $(".reserve_Form").serialize();



                $.ajax({

                    url: '<?php echo AJAX_URL;?>',

                    type: "post",

                    data: values,

                    success: function (ret) {

                     $('.ajax-loading').hide();

                        if (ret) {

                            alert('Email has been sent successfully.Thanks.');

                        } else {

                            var url = window.location.href;

                            window.location.href = url;

                        }

                    },

                    error: function () {

                        $("#resulterr").html('There is error while submit');

                    }

                });

            });


            $(".offer_form").submit(function (event) {

                event.preventDefault();

                if ($('#fname').val() == '' && $('#email').val() == '' && $('#phone').val() == '') {

                    $('#er1').html('Enter your Full Name');

                    $('#er2').html('Enter your Email address');

                    $('#er3').html('Enter your phone number');

                    return false;

                } else if ($('#fname').val() == '') {

                    $('#er1').html('Enter your Full Name');

                    $('#er2').html('');

                    $('#er3').html('');

                    return false;

                } else if ($('#email').val() == '') {

                    $('#er1').html('');

                    $('#er2').html('Enter your Email address');

                    $('#er3').html('');

                    return false;

                }else if (!validateEmail($('#email').val())) {

                    $('#er1').html('');

                    $('#er2').html('Please enter valid Email');

                    $('#er3').html('');

                    return false;

                }else if ($('#phone').val() == '') {

                    $('#er1').html('');

                    $('#er2').html('');

                    $('#er3').html('Enter your phone number');

                    return false;

                }

                $('.ajax-loading').show();

                var values = $(".offer_form").serialize();

                $.ajax({

                    url: '<?php echo AJAX_URL;?>',

                    type: "post",

                    data: values,

                    success: function (ret) {

                        $('#er1').html('');

                        $('#er2').html('');

                        $('#er3').html('    ');

                     $('.ajax-loading').hide();

                        if (ret) {

                            alert('Email has been sent successfully.Thanks.');

                        } else {

                            var url = window.location.href;

                            window.location.href = url;

                        }

                    },

                    error: function () {

                        $("#resulterr").html('There is error while submit');

                    }

                });

            });

        });

    </script>

</head>



<body>

<div class="ajax-loading"></div>

<?php

global $post;

$tax_terms = get_terms('cat_headersection');

$slug = get_post($post)->post_name;

if (is_home()){

?>

<div class="header" style="background:url(<?php echo TEMPLATE_PATH; ?>images/banner.jpg);">

    <?php }else{ ?>

    <div class="header inner_header" style="background:url(<?php the_post_thumbnail_url(); ?>) 0px -50px;;">

     <?php }?>

        <div class="container">

            <div class="top_bar">

                <?php

                $translations = pll_the_languages(array('raw'=>1));

                if(pll_current_language() == 'ar'){?>

                    <div class="language pull-right">

                        <div class="dropdown">

                            <button onclick="location.href = '<?php echo $translations['en']['url'];?>';" class="btn btn-default dropdown-toggle" type="button"

                                    id="dropdownMenu1" data-toggle="dropdown"

                                    aria-haspopup="true" aria-expanded="true">

                                EN

                                <span class="caret"></span>

                            </button>

                        </div>

                    </div>

                    <div class="call pull-left">

                        <p><i class="fa fa-phone"></i> +971 6 559 8887</p>

                    </div>

                <?php  }else{?>

                    <div class="language pull-left">

                        <div class="dropdown">

                            <button onclick="location.href = '<?php echo $translations['ar']['url'];?>';" class="btn btn-default dropdown-toggle" type="button"

                                    id="dropdownMenu1" data-toggle="dropdown"

                                    aria-haspopup="true" aria-expanded="true">

                                AR

                                <span class="caret"></span>

                            </button>

                        </div>

                    </div>

                    <div class="call pull-right">

                        <p><i class="fa fa-phone"></i> +971 6 559 8887</p>

                    </div>

                <?php }?>

                <!--END OF CALL-->

            </div>

            <!--END OF TOP BAR--->

            <div class="clearfix"></div>



            <!--BY DEFAULT IT WILL BE HIDE, AND WILL SHOW ON SMALL SCREEN---->

            <div class="res_logo">

                <?php if(pll_current_language() == 'ar'){?>

                    <img src="<?php echo TEMPLATE_PATH; ?>images/logo-ar.png" alt="Ammasi"/>

                <?php  }else{?>

                    <img src="<?php echo TEMPLATE_PATH; ?>images/logo.png" alt="Ammasi"/>

                <?php }?>
                </a>

            </div>

            <!--END OF RES LOGO--->

            <div id='cssmenu' class="menu">

                <ul>

                    <?php

                    wp_nav_menu(array(

                        'container' => '',

                        'items_wrap' => '%3$s',

                        'theme_location' => 'headerleft'

                    ));

                    ?>

                    <li class="logo">



                    </li>

                    <?php

                    wp_nav_menu(array(

                        'container' => '',

                        'items_wrap' => '%3$s',

                        'theme_location' => 'headerright'

                    ));

                    ?>

                </ul>

                <div class="main_logo">

                    <a href='<?php echo SITE_URL; ?>'>

                        <?php if(pll_current_language() == 'ar'){?>

                            <img src="<?php echo TEMPLATE_PATH; ?>images/logo-ar.png" alt="Amassi Catering"/>

                        <?php  }else{?>

                            <img src="<?php echo TEMPLATE_PATH; ?>images/logo.png" alt="Amassi Catering"/>

                        <?php }?>

                    </a>

                </div>

            </div>

            <!--END OF CSS MENU-->



            <div class="clearfix"></div>





            <?php if (is_home()) {

                    ?>

                    <div class="banner_text">

                        <?php if(pll_current_language() == 'ar'){?>

                            <h1>عندما تلتقي الأصالة والمذاقات اللذيذة مع أجواء الاحتفالات الراقية!</h1>

                            <h4>الأمر لا يتعلق فقط بإعداد أطباق رائعة المذاق بل يمتد لترك انطباعات لا تنسى لدى ضيوف مناسباتك الاجتماعية واحتفالات شركتك</h4>



                        <?php  }else{?>

                            <h1>Redefining the art of catering</h1>

                            <h4>Its not just about food but the complete experience. we take a holistic approach!</h4>

                        <?php }?>



                        <ul>

                            <?php if(pll_current_language() == 'ar'){?>

                                <li><i class="fa fa-dot-circle-o"></i>الشركات</li>

                                <li><i class="fa fa-dot-circle-o"></i>المناسبات الاجتماعية</li>

                                <li><i class="fa fa-dot-circle-o"></i>أعياد الميلاد</li>

                                <li><i class="fa fa-dot-circle-o"></i>رحلات اليخوت</li>

                                <li><i class="fa fa-dot-circle-o"></i>الأعراس</li>



                            <?php  }else{?>

                                <li><i class="fa fa-dot-circle-o"></i>corporate</li>

                                <li><i class="fa fa-dot-circle-o"></i>social gathering</li>

                                <li><i class="fa fa-dot-circle-o"></i>birthdays</li>

                                <li><i class="fa fa-dot-circle-o"></i>parties</li>

                                <li><i class="fa fa-dot-circle-o"></i>gala dinners</li>

                                <li><i class="fa fa-dot-circle-o"></i>conferences</li>

                            <?php }?>

                        </ul>

                    </div>

                <?php if(pll_current_language() == 'ar'){?>

                    <div class="col-md-12">

                        <div class="on_banner_form">

                            <div class="caption_form">

                                <h2>20%<small>خصم</small></h2>

                                <p>على الطلب</p>

                                <p>للمجموعات</p>

                            </div>

                            <!--END OF CAPTION FORM-->

                            <div class="inner_form" >

                                <h4>سجل لتحصل على خصم</h4>



                                <form method="post" action="" name="reserve_Form" id="reserve_Form" class="offer_form">

                                    <input type="hidden" name="action" value="offer_form"/>

                                    <div style="float:right;width:240px;">

                                        <span style="color:red;" id="er1"></span>

                                        <input type="text" name="fname" id="fname" placeholder="الاسم" class="form-control">

                                    </div>

                                    <div style="float:right;width:240px;">

                                        <span style="color:red;" id="er2"></span>

                                        <input type="text" name="email" id="email" placeholder="البريد الإلكتروني" class="form-control">

                                    </div>

                                    <div style="float:right;color:#fff;width:240px;">

                                        <span style="color:red;" id="er3"></span>

                                        <input type="text" name="phone" id="phone" placeholder="الهاتف" class="form-control">

                                    </div>

                                    <input type="submit" name="submit" class="btn" value="أرسل" />

                                </form>



                                <?php //echo do_shortcode('[contact-form-7 id="85" title="Reserve form"]');

                                ?>

                            </div>

                            <!--END OF INNER FORM-->



                        </div>

                        <!--END OF ON BANNER FORM-->

                    </div>



                <?php  }else{?>

                    <div class="col-md-12">

                        <div class="on_banner_form">

                            <div class="caption_form">

                                <h2>20%

                                    <small>Off</small>

                                </h2>

                                <p>Special</p>



                                <p>Offer</p>

                            </div>

                            <!--END OF CAPTION FORM-->

                            <div class="inner_form" style="float: left;">

                                <h4>Signup to reserve the discount offer</h4>



                                <form method="post" action="" name="reserve_Form"

                                      id="reserve_Form" class="offer_form">

                                    <input type="hidden" name="action" value="offer_form"/>



                                    <div style="float:left;width:240px;">

                                        <span style="color:red;" id="er1"></span>

                                        <input type="text" name="fname" id="fname"

                                               placeholder="Full Name" class="form-control">

                                    </div>

                                    <div style="float:left;width:240px;">

                                        <span style="color:red;" id="er2"></span>

                                        <input type="text" name="email" id="email"

                                               placeholder="Email Address" class="form-control">

                                    </div>

                                    <div style="float:left;width:240px;">

                                        <span style="color:red;" id="er3"></span>

                                        <input type="text" name="phone" id="phone"

                                               placeholder="Phone Number" class="form-control">

                                    </div>

                                    <input type="submit" name="submit" class="btn" value="Send">

                                </form>



                                <?php //echo do_shortcode('[contact-form-7 id="85" title="Reserve form"]');

                                ?>

                            </div>

                            <!--END OF INNER FORM-->



                        </div>

                        <!--END OF ON BANNER FORM-->

                    </div>

                <?php }?>



                    <div class="clearfix"></div>

                    <div class="arrow_down">

                        <a href="#main"><i class="fa fa-angle-down"></i></a>

                    </div>

                    <!--END OF ARROW DOWN-->

                    <?php

            }

            ?>

        </div>

        <!--END OF CONTAINER-->

        <?php if (is_home()) { ?>

        <?php if(pll_current_language() == 'ar'){?>

            

        <?php  }else{?>

            

            <?php }?>





        <?php }else{?>

            <div class="banner_text inner_page">

                <h1><?php echo get_post_meta(get_the_ID(),'header_title',true);?></h1>

                <h4><?php echo get_post_meta(get_the_ID(),'header_sub_title',true);?></h4>



            </div>

            <div class="col-md-12">

                <div class="on_banner_two_btn">

                    <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887</a>&nbsp;&nbsp;&nbsp;
                    <a href="mailto:info@amassicatering.com" class="btn btn-default green">info@amassicatering.com</a>
                    

                </div><!--END OF ON BANNER TWO BTN-->

                <!--END OF ON BANNER FORM-->

            </div>

            <div class="clearfix"></div>

       <?php  } ?>

    </div>

    <!--/Header---->

    <div class="clearfix"></div>

