<?php

get_header();

?>

<script>

    $(document).ready(function() {

        $(".clickmenu").on("click", function( e ) {



            e.preventDefault();



            $("body, html").animate({

                scrollTop: $( $(this).attr('href') ).top

            }, 600);



        });

    });



</script>

<div class="main" id="main">
    <div class="our_menu padding_40">
        <div class="container">
            <div class="title_head">
                    <h1>Our Menu</h1>
                    <p>You Select &amp; We Ensure Perfection</p>
                </div>
                <!--END OF TITLE HEAD-->
                
                <div class="col-md-12 selector">
                 <div class="nice-select">
             <p class="current">Chicken or,Lamb Maftoul </p>
             <ul class="list">
             <li class="option">Chicken,lamb or ﬁsh Biryani </li>
            <li class="option">Chicken,or Lamb Kabsa</li>
            <li class="option">Chicken,Lamb freekeh</li>
            <li class="option focus selected">Chicken or,Lamb Maftoul </li>
            <li class="option">Chicken Makloubeh</li>
            <li class="option">Chicken Mossakhan</li>
            <li class="option">Chicken or Lamb mandi</li>
            <li class="option">Fish Sayadiyeh </li>
            <li class="option">Stuffed Zucchini and vine leaves</li>
            <li class="option">Whole Stuffed Turkey</li>
            <li class="option">Jordanian Mansaf</li>
            <li class="option">Ouzi Surar (Crispy Packages)</li>
            </ul>
            </div>
            
            <a href="<?php echo SITE_URL;?>tabkhatna-menu" class="btn btn-default">TABKHATNA MENU</a>
            </div><!--END OF COL MD 12-->
        </div><!--END OF CONTAINER-->
        </div><!--END OF OUR MENU-->
        <div class="clearfix"></div>
        <div class="container">
        <div class="menu_heading">
                    <h1>Tabkhatna</h1>
                    <p>Treat your taste buds with authentic Arabic cuisine as we bring you our exclusive menu! Tabkhatna has been specifically designed to bring together all the scrumptious Arabic meals - savory delight that we bet won't find in the entire UAE. We present you the dishes that signify the taste of Arabic world with hand-picked recipes of our experienced chefs. 
                    Delight your taste buds with the most scrmptious food in town!.</p>
                </div>
        
        </div> <!--END OF CONTAINER--->
            <!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu  padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5 col-lg-push-7">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m2.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail col-lg-pull-5">
                            <h2>Chicken or Lamb Kabsa</h2>
                            <p>Kabsa is a dish from Yemen and Saudi Arabia, where it is commonly regarded as a national dish. Though Kabsa is believed to be indigenous to Yemen, it is often served  across the region. The spices used in kabsa to infuse the basmati rice are black pepper, cardamom, saffron, cinnamon, black lime, bay leaves and nutmeg. The main ingredient that accompanies the spices is the meat. Chicken , lamb or ﬁsh kabsa are among the most popular. All ingredients are cooked together to give an exotic taste</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m3.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail">
                            <h2>Chicken or Lamb freekeh</h2>
                            <p>It is an ancient Arabian dish derived from Levantine and related cuisines of North Africa. It is made of green wheat and cooked in chicken or lamb stock. \served with garlic yoghurt and cucumber salad and garnished with roasted nuts</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5 col-lg-push-7">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m4.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail col-lg-pull-5">
                            <h2>Chicken or lamb Maftoul</h2>
                            <p>Maftoul or consists of wheat granules that are rolled up into small pellets. A special two-in-one steamer is used to prepare this dish. The bottom steamer includes the water, salt, spices (cumin, cinnamon) and chick peas while the top steamer includes the Maftoul. Olive oil and onions are added in the top steamer with the maftoul.Once the Maftoul has been cooked, it is placed into a large plate and olive oil is rubbed onto the Maftoul, It is served with onion, and chickpea) sauce.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m5.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail">
                            <h2>Chicken Makloubeh</h2>
                            <p>Makloubeh is a well known Palestinian dish which became a popular dish across the levant. Makloubeh consists of layers of chicken, vegetables, eggplant and cauliflower topped with rice,all cooked together with aromatic spices. Makloubeh is served with garlic yoghurt and cucumber salad </p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5 col-lg-push-7">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m6.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail col-lg-pull-5">
                            <h2>Chicken Mossakhan </h2>
                            <p>Mosakhan (Palestinian style) featured half a chicken perched on a broad base of Arabic bread taboon topped with sautéed onions and pine nuts, sprinkled with Summac and olive oil. Mosakhan is usually served with Yoghurt</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m7.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail">
                            <h2>Chicken or Lamb mandi</h2>
                            <p>Mandi is a traditional Yemeni dish from Hadhramaut, it is usually made from rice,  meat (lamb or chicken), and a mixture of spices. The meat used is usually a young and small sized lamb to enhance the taste further. our recipe is simply delicious</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5 col-lg-push-7">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m8.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail col-lg-pull-5">
                            <h2>Fish Sayadiyeh </h2>
                            <p>One of  the tastiest  Lebanese/ Arabic dishes is Sayadiyeah, it is basically a great way to incorporate ﬁsh into our diet specially for those who are not big ﬁsh fans, Its made of ﬁsh, basmati rice, spices and onions all cooked together to give it that aromatic taste, it is usually garnished with fried onions and served with Tahini and parsley sauce</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m9.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail">
                            <h2>Stuffed Zucchini and vine leaves</h2>
                            <h4>(Arabic Style)</h4>
                            <p>The zucchinis are much  smaller and sweeter; you can cut them in half if you like , they are then stuffed with rice and lamb meat, slow cooked together. The dish is served warm with a bowl of yoghurt on the side.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5 col-lg-push-7">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m10.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail col-lg-pull-5">
                            <h2>Stuffed chicken  </h2>
                            <h4>(Palestinian style chicken) </h4>
                            <p>Roast Chicken stuffed with rice,carrots and green peas. Served on a bed of rice , garnished with roasted nuts and accompanied by salad.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m11.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail">
                            <h2>Whole Lamb qouzi</h2>
                            <p>Tender-roasted  lamb stuffed with herbs , spices, rice , ground lamb meat and nuts served on a bed of rice and garnished with roasted nuts and parsley. It is  deﬁnitely the highlight of any traditional  gathering.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5 col-lg-push-7">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m12.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail col-lg-pull-5">
                            <h2>Whole Stuffed Turkey  </h2>
                            <p>Slow roasted turkey until white and dark meat are cooked evenle, drain the stock , then stuff the turkey with rice and mixed vegetables. Serve with sautéed vegetables for special occasions garnished with roasted nuts </p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m13.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail">
                            <h2>Jordanian Mansaf</h2>
                            <p>Mansaf is a traditional Levantine Arab dish made of lamb cooked in a sauce of fermented dried yogurt (Jameed)and served on a bed of rice, and garnished with roasted nuts. It is the national dish of Jordan, and can also be found in Palestine, Iraq, Syria and Saudi Arabia.The name of the dish comes from the term "large tray" or "large dish".</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu padding_30">
                <div class="container">
                    <div class="col-md-10 col-lg-push-1">
                        <div class="col-md-5 col-lg-push-7">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m14.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-7 menu_detail col-lg-pull-5">
                            <h2>Ouzi  Surar </h2>
                            <h4>(Crispy Packages)</h4>
                            <p>The Ouzi Surar is a dish of Lebanese origin as the name suggests are nothing more than "packages rice and meat." It is very typical in family meals and to say it tastes delicious. The  dish is prepared  with rice cooked with mixed vegetables wrapped in phyllo pastry, battered with ghee and egg mix then slow roasted in the oven. Served warm with garlic yoghurt and cucumber salad.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
       
        
        
<div class="bottom_last">
        <div class="container">
            <h4>Connect with us &amp; We'll make your Event taste Delicious!</h4>
            <a href="mailto:info@amassicatering.com" class="btn btn-default">info@amassicatering.com</a>
            <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887</a>
            
        </div><!--END OF CONTAINER-->  
    </div>
        <div class="clearfix"></div>
    </div>

<div class="clearfix"></div>

<?php get_footer(); ?>

