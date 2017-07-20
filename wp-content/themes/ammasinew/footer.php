<div class="footer">
    <div class="container">
        <ul>
            <?php
            wp_nav_menu( array(
                'container'       => '',
                'items_wrap' => '%3$s',
                'theme_location' => 'footermenu'
            ) );
            ?>
        </ul>
        <p>Amassicatering.com | © Copyrights 2016 | Powered by: 7gmedia</p>
    </div>
    <!--END OF CONTAINER--->
</div>
<!--END OF FOOTER--->
<a href="#" id="back-to-top" title="Back to top">&uarr;</a>


<script type='text/javascript' src='<?php echo TEMPLATE_PATH;?>js/jquery.js'></script>
<script src="<?php echo TEMPLATE_PATH;?>js/jquery.nice-select.js"></script>
<script>
    jQuery(document).ready(function($) {
        $('select').niceSelect();
    });
</script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>js/bootstrap.min.js"></script>
<script src="<?php echo TEMPLATE_PATH;?>js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>js/parallax.js"></script>
<script src="<?php echo TEMPLATE_PATH;?>js/script.js"></script>
<script>
    new WOW().init();
</script>
<script src="<?php echo TEMPLATE_PATH;?>js/jquery.easing.min.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_PATH;?>js/custom.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>js/jquery.flexisel.js"></script>
<script src="<?php echo TEMPLATE_PATH;?>js/responsiveslides.min.js"></script>
<script>
    $(function(){
        $(".offer .icon").click(function(){
            $(".offer_detail").toggle(600);
        });
    });
</script>
<script type='text/javascript' src='<?php echo SITE_URL;?>wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript' src='<?php echo SITE_URL;?>wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.4.2'></script>
<?php //wp_footer();?>
</body>

</html>