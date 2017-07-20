<?php

/*Template Name: AR Tabkhatna*/

get_header();

the_post();

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
                    <h1>قائمتنا</h1>
                </div>
                <!--END OF TITLE HEAD-->
                
                <div class="col-md-12 selector">
                 <div class="nice-select">
             <p class="current">القائمة</p>
             <ul class="list">
            <li class="option selected">Menu One</li>
            <li class="option">Menu Two </li>
            <li class="option">Menu Three</li>
            <li class="option">Menu Four</li>
            </ul>
            </div>
            
            <a href="#" class="btn btn-default">قائمة طعام "طبخاتنا"</a>
            </div><!--END OF COL MD 12-->
        </div><!--END OF CONTAINER-->
        </div><!--END OF OUR MENU-->
        <div class="clearfix"></div>
        <div class="container">
        <div class="menu_heading">
                    <h1>طبخاتنا</h1>
                    <p>نجمع في قوائم طعام "طبخاتنا" أطيب الأطباق من المطبخ العربي الأصيل، إنها الأطباق التي عادة ما قام أجدادنا<br> بتقديمها في المناسبات الاجتماعية ولا زالت لا تغيب
عن موائدنا في المناسبات والأعياد واللقاءات الاجتماعية، وعند اجتماع العائلة أو الأصدقاء، إنها <br>تجمع أطيب المأكولات معاً والمذاقات الأصيلة التي توارثناها عبر الأجيال،
وهذه الطبخات رغم أنها تقدم في الكثير من المطاعم ولكن مع أماسي يبقى المذاق متفرد ..<br> إنه ذاك المذاق الأصيل تماماً.
إليكم أطيب الأطباق العربية التي قام كبار الطهاتنا بإعدادها طبقاً للأصول.</p>
<p><span>تمتع بأطيب الأطباق العربية التي لا يوجد لها في مثيل في أنحاء المدينة.</span></p>
                </div>
        
        </div> <!--END OF CONTAINER--->
            <div class="new_menu color_ful">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6 col-sm-push-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m1.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 col-sm-pull-6 menu_detail padding_45">
                            <h2>برياني دجاج أو لحم أو سمك</h2>
                            <p>هو إسـم يُطلق في شبه قارة الهند على الأرز الذي يُطهى بطرق مخصـوصـة وتُسـتخدم في طهيه بهـارات البريـاني الهنديّة. البرياني نشأ في الهند حيث يوجد اصناف محلية متعددة من هذا الطبق الشعبي ليست فقط في جنوب آسيا ولكن أيضا في الشرق الأوسط
والبهارات والتوابل المستخدمة في البرياني و تشمل : السمن والبازلاء والفول والكمون والقرنفل والهيل والقرفة وأوراق الغار والكزبرة وأوراق النعناع والزنجبيل والبصل والثوم.، و العنصر الرئيسي الذي يصاحب التوابل هو اللحم البقري والدجاج والماعز والضأن، أو الروبيان. يقدم الطبق  مع تشاتني  أو سلطة لبن زبادي، كورما، الكاري أو طبق من الباذنجا
</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/ma2.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail padding_45">
                            <h2>كبسة دجاج أو لحم</h2>
                            <p>الكبسة من الوجبات الاساسية التي اشتهرت بها السعودية ولكن تم تداولها علي مستوي العديد من البلاد المختلفه واصبحت من الوجبات الشعبية في العديد من الاماكان والعناصر الاساسية في الكبسة هما الارز واللحم وتختلف من مكان لاخر عن طريق اضافة او حذف عناصر معينه وايضا تختلف باختلاف استخدام الدجاج او اللحم مع الارز </p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6 col-sm-push-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/ma3.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail  col-sm-pull-6 padding_45">
                            <h2>فريكه دجاج أو لحم</h2>
                            <p>الفريكة هي عبارة عن القمح المحمص او المشوي ولها اسماء عديدة حسب كل بلد فهي فريكة في الشام وفريك في مصر وقرة خرمان في العراق،تطبخ الفريكة باللحم او الدجاج بعد تنقيتها من الشوائب وتقدم كثيرا في المناسبات والعزومات وطريقة طبخها تشبه طريقة طبخ البرغل حيث يضاف لها ماء الدجاج او اللحم كما انها تشرب الكثير من السمن.. تؤكل عادة مع اللبن.

</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/ma4.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail padding_45">
                            <h2>مفتول او مغربيه بالدجاج أو باللحم</h2>
                            <p>يعد المفتول من الوصفات الشعبية الفلسطينية الشهيرة لاحتوائه على العديد من الفيتامينات والمعادن المهمة للصحة يحتوي المفتول على البروتين الضروري لبناء العضلات.
حيث يتم طبخ اللحم او الدجاج والبصل والحمص بقدر 
خاص تعلوه قاعده لمصفاه محكمه الاغلاق ويتم
وضع حبات المفتول بها لتنضج على بخار اللحم ويضاف فوقه البصل المتبل بالكمون 
وزيت الزيتون 
ويقدم مع يخنه الحمص والبصل
</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6 col-sm-push-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/ma5.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail col-sm-pull-6 padding_45">
                            <h2>مقلوبة دجاج</h2>
                            <p>المقلوبه طبق من اشهر الاطباق الفلسطينيه التي تشتهر بها مدينه القدس عن باقي المدن
وهي محضرة من الدجاج المطهومع الارز مضافا اليه الخضار المقليه البطاطا والقرنبيط
والباذنجان مزينة بالوز والكاجو والصنوبر المحمص</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/ma6.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail padding_45">
                            <h2>المسخن الفلسطيني </h2>
                            <p>المسخن اكله فلسطينه مميزه بطعمها وهي عباره عن دجاج مشوي متبل بالسماق البلدي
الذيذ. يقدم مع البصل المقلي بزيت الزيتون وخبز الطابون الطازج والصنوبر المقلي . بامكانكم
الاختيار بين الحجمين 2 او 4 دجاجات.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6 col-lg-push-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/ma7.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail col-lg-pull-6 padding_45">
                            <h2>مندي الدجاج</h2>
                            <p>مندي طبق تقليدي حضرمي اشتهر به اهل محافظة حضرموت شرق اليمن و منتشر في أنحاء
الجزيرة العربية وأقطار عربية مختلفة مثل الأردن ومصر وسورية وفلسطين و السعودية ودول
الخليج عامة.الفكرة من المندي هي أن ينضج اللحم بالحرارة و أن يندى الدهن على اللحم و ما
تلاه من الأرز. تحتوي وجبة المندي على دجاج, احم.سمك أو روبيات متبلة بالبهارات المميزة
وتطهى مع الأرز.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/ma8.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail padding_45">
                            <h2>صياديه سمك </h2>
                            <p>تشتهر المناطق التي تقع على الساحل بالأكلات البحرية وعلى رأسها الصيادية؛ فالسمك من
الوجبات التي يجب المداومة على أكلها وإطعامها للأطفال، فهو غنيّ بالأحماض الأمينية
أوميغا 3 الضرورية لحماية الدماغ وزيادة نشاطه، وتختلف طرق تحضير الصيادية من منطقة إلى
أخرى حسب المذاق الذي يفضّله سكانها.
وتحضر الصيادية من سمك. أرز باسمتي, بصل وتوابل مميزة مطهوة على نار هادئة حتى تنضج.
تقدم ساخنة مع صلصة بقدونسية ومزينة ببصل مقلي مقرمش ومكسرات محمصة.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6 col-lg-push-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/ma9.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail col-lg-pull-6 padding_45">
                            <h2>محاشي كوسا وورق عنب</h2>
                            
                            <p>تعدّ المحاشي من ألذّ الأطباق التي يمكن تحضيرها للعائلة في يوم العطلة، ومن أهمّ
الخضروات التي تستخدم في المحاشي هي الكوسا؛ حيث يمكن تحضير محشي الكوسا مع
صلصلة الطماطم الغنيّة، أو يمكن إضافته مع محشي ورق العنب اللذيذ، يحشى الكوسا وورق
العتب بالأرز ولحم الغنم المفروم .ثم تطهى على نار هادئة. يقدم الطبق مع لبن زبادي</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu padding">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/ma10.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail padding_45">
                            <h2>دجاج محشي  </h2>
                           
                            <p>الدجاج المحشي من الاطباق الفلسطينيه المميزه وهو طبق محضر من دجاج محشي بالارز والجزر
والبازيلاء مشوي بالفرن ويقدم فوق الارز ومزين بمكسرات محمصة, يقدم مع سلطة .</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6 col-lg-push-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m11.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail col-lg-pull-6 padding_45">
                            <h2>خروف محشي (كامل)</h2>
                            <p>الخروف المحشي من المأكولات التي اشتهر بها المطبخ العربي، وغالباً ما يتواجد الخروف
المحشي في المناسبات والاحتفالات.
ويحضر الخاروف المحشي من خاروف كامل يدهن بالتوابل ولبنالزبادي, محشو ارز ولحم غتم ثم
يحمر على نار هادئة, يقدم على الأرز ويزين بالمكسرات المحمصة.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m12.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail padding_45">
                            <h2>ديك رومي محشي </h2>
                            <p>ديك رومي تم شويه في الفرن علي نار هادئة محشو باللحمة، يتم تقديمة مع الرز والخضار
وتتوجه المكسرات يقدم في للاحتفال بالمناسبات والأعياد.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
            
            <div class="new_menu color_ful">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6 col-lg-push-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m13.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail col-lg-pull-6 padding_45">
                            <h2>منسف أردني</h2>
                            <p>تشتهر الاردن بطعامها المميز ومن اهمها المنسف حيث يعد الطبق المميز في الاردن وتقدم
كوجبه رئيسيه في جميع المناسبات. وهي عبار عن لحم غنم مطهو بالجميد ويقدم مع الارز
وخبز الصاج المميز ويزين باللوز والصنوبر</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU Color Ful-->
            
            <div class="new_menu">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <img src="<?php echo TEMPLATE_PATH;?>images/m14.jpg" alt="" class="img-responsive">
                        </div><!--END OF COL MD 5-->
                        
                        <div class="col-md-6 menu_detail padding_45">
                            <h2>أوزي صرر </h2>
                            <h4>(السرر المقرمشة)</h4>
                            <p>طبق شامي أصيل، إنه عبارة عن زر ولحمة يتم حشوها في المعجنات لتصبح فطاير محشوة
ومقرمشة، تتميز بطعمها اللذيذ، ويتم إعداد الرز ولحمة الخروف والخضار أولاً ونضع عليها
التوابل العربية ذات النكهات الواضحة، وبعد ذلك يتم حشوها داخل قطع العجين المستديرة مع
قليل من السمنة والبيض على قطع العجين من فوق حتى تأخذ اللون الذهبي عند شوائها في
الفرن وتقدم مع سلطة اللبن بالثوم.</p>
                            
                        </div><!--END OF COL MD 5-->
                    </div><!--END OF ROW-->
                
                </div> <!--END OF CONTAINER--->
            
            </div><!--END OF NEW MENU-->
       
        
        
 <div class="bottom_last">
        <div class="container">
            <h4>تواصل معنا لنجعل مناسبتك تجربة متميزة تغمرها أجواء البهجة!</h4>
            <a href="#" class="btn btn-default">info@amassicatering.com</a>
            <a href="#" class="btn btn-default">00971 6 559 8887 <i class="fa fa-phone"></i></a>
            
        </div><!--END OF CONTAINER-->  
    </div><!--END OF BOTTOM LAST-->
        <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>

</div>

<div class="clearfix"></div>

<?php get_footer(); ?>

