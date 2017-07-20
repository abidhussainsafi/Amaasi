<?php

/*Template Name: AR Our menu*/

get_header();

the_post();

?>

<script type="text/javascript">
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
             <ul class="list" id="try">
            <li class="option selected" value="1">Menu One</li>
            <li class="option" value="2">Menu Two </li>
            <li class="option" value="3">Menu Three</li>
            <li class="option" value="4">Menu Four</li>
            <li class="option" value="5">Menu Five</li>
            <li class="option" value="6">Menu Six</li>
            <li class="option" value="7">Menu Seven</li>
            <li class="option" value="8">Menu Eight</li>
            <li class="option" value="9">Menu Nine</li>
            <li class="option" value="10">Menu Ten</li>
            </ul>
            </div>
            
            <a href="<?php echo SITE_URL;?>ar/tabkhtna-food-menu/" class="btn btn-default">قائمة طعام "طبخاتنا"</a>
            </div><!--END OF COL MD 12-->
        </div><!--END OF CONTAINER-->
        </div><!--END OF OUR MENU-->
        <div class="clearfix"></div>
        <!-- Start of Menu 1 -->
         <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay1">
            <div class="container">
                    <div class="menu_heading">
                        <h1>القائمة 1</h1>
                    </div>
            </div> 
            <div class="col-md-3 col-sm-6">
                    <h1>المشروبات</h1>
                    <ul>
                        <li><a href="#">مياه معدنية</a></li>
                        <li><a href="#">مشروبات غازية</a></li>
                    </ul>
            </div><!--END OF COL MD 4-->
            <div class="col-md-3 col-sm-6">
                    <h1>فاكهة وحلويات</h1>
                    <ul>
                        <li><a href="#">مهلبية</a></li>
                        <li><a href="#">كاسترد</a></li>
                        <li><a href="#">سلة فاكهة طازجة</a></li>
                    </ul>
            </div><!--END OF COL MD 4-->
                
            <div class="col-md-3 col-sm-6">
                    <h1>الأطباق الرئيسية</h1>
                    <ul>
                        <li><a href="#">برياني لحم غنم</a></li>
                        <li><a href="#">مندي دجاج</a></li>
                        <li><a href="#">يخنه خضار</a></li>
                        <li><a href="#">دجاج تكا</a></li>
                    </ul>
            </div><!--END OF COL MD 4-->
                
            <div class="col-md-3 col-sm-6">
                    <h1>المقبلات الباردة</h1>
                     <ul class="last">
                        <li><a href="#">حمص</a></li>
                        <li><a href="#">متبل</a></li>
                        <li><a href="#">تبولة</a></li>
                        <li><a href="#">سلطة عربية</a></li>
                    </ul>
            </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
       <!-- End of Menu 1 -->
       <!-- Start Menu 2 -->
       <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay2">
                <div class="container">
                    <div class="menu_heading">
                        <h1>قائمة البوفيه العربي</h1>
                    </div>
                </div> 
                
                <div class="col-md-3 col-sm-6">
                    <h1>الحلويات</h1>
                     <ul class="last">
                        <li><a href="#">أم علي</a></li>
                        <li><a href="#"> كريم كراميل</a></li>
                        <li><a href="#">بودنغ الأرز</a></li>
                        <li><a href="#">مهلبية</a></li>
                        <li><a href="#">كنافة</a></li>
                    </ul>
                    <h1>لمرطبات</h1>
                     <ul class="last">
                        <li><a href="#">قهوة وشاي </a></li>
                        <li><a href="#"> مشروبات غازية </a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الأطباق الرئيسية</h1>
                    <ul>
                        <li><a href="#">قريدس مشوي</a></li>
                        <li><a href="#">برياني دجاج </a></li>
                        <li><a href="#">أوزي بلحم الغنم </a></li>
                        <li><a href="#">بيني أرابياتا </a></li>
                        <li><a href="#">يخنة الخضار المشكل (صالونة الخضار) </a></li>
                        <li><a href="#">بطاطا مشوية</a></li>
                        <li><a href="#">أرز محضّر على البخار </a></li>
                        <li><a href="#">خضروات مشكلة محضّرة على البخار </a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>المقبلات الساخنة </h1>
                    <ul>
                        <li><a href="#">سمبوسة بالجبن </a></li>
                        <li><a href="#">كبة اللحم </a></li>
                        <li><a href="#">/ كبة الأرز</a></li>
                    </ul>
                    <h1>الشوربة </h1>
                    <ul>
                        <li><a href="#">شوربة العدس </a></li>
                        <li><a href="#">سلة خبز </a></li>
                        <!-- <li><a href="#">/ كبة الأرز</a></li> -->
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>السلطات </h1>
                    <ul>
                        <li><a href="#">حمص</a></li>
                        <li><a href="#">متبل</a></li>
                        <li><a href="#">فتوش</a></li>
                        <li><a href="#">سلطة تونة </a></li>
                        <li><a href="#">سلطة الذرة الحلوة </a></li>
                        <li><a href="#">سلطة شمندر  </a></li>
                        <li><a href="#">ورق عنب</a></li>
                        <li><a href="#">سلطة البطاطا العربية</a></li>
                        <li><a href="#">لوبيا بالزيت</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
        <!-- End of Menu 2 -->
        <!-- Start Menu 3 -->
       <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay3">
                <div class="container">
                    <div class="menu_heading">
                        <h1>قائمة البوفيه العربي</h1>
                    </div>
                </div> 
                
                <div class="col-md-3 col-sm-6">
                    <h1>الحلويات</h1>
                     <ul class="last">
                        <li><a href="#">أم علي</a></li>
                        <li><a href="#"> كريم كراميل</a></li>
                        <li><a href="#">بودينغ الأرز</a></li>
                        <li><a href="#">مهلبية</a></li>
                        <li><a href="#">كنافة</a></li>
                    </ul>
                    <h1>المرطبات</h1>
                     <ul class="last">
                        <li><a href="#">مياه معدنية </a></li>
                        <li><a href="#"> مشروبات غازية </a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الأطباق الرئيسية</h1>
                    <ul>
                        <li><a href="#">سمك مشوي مع صلصة الليمون بالزبدة </a></li>
                        <li><a href="#">كبسة بالدجاج</a></li>
                        <li><a href="#">أوزي بلحم الغنم </a></li>
                        <li><a href="#">مشاوي مشكلة </a></li>
                        <li><a href="#">باستا بالطماطم </a></li>
                        <li><a href="#">بطاطا مشوية </a></li>
                        <li><a href="#">خضروات مشكلة محضّرة على البخار  </a></li>
                        <li><a href="#">خضروات مشكلة محضّرة على البخار </a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>مقبلات ساخنة </h1>
                    <ul>
                        <li><a href="#">سمبوسة بالجبن  </a></li>
                        <li><a href="#">كبة اللحم </a></li>
                        <li><a href="#">كبة الأرز</a></li>
                    </ul>
                    <h1>الشوربة</h1>
                    <ul>
                        <li><a href="#">حساء العدس  </a></li>
                        <li><a href="#">سلة خبز </a></li>
                       
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>السلطات</h1>
                    <ul>
                        <li><a href="#">حمص</a></li>
                        <li><a href="#">متبل</a></li>
                        <li><a href="#">فتوش</a></li>
                        <li><a href="#">سلطة تونة</a></li>
                        <li><a href="#">سلطة الذرة الحلوة </a></li>
                        <li><a href="#">سلطة شمندر </a></li>
                        <li><a href="#">ورق عنب</a></li>
                        <li><a href="#">سلطة البطاطا العربية </a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
        <!-- End of Menu 3 -->
        <!-- Start Menu 4 -->
       <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay4">
                <div class="container">
                    <div class="menu_heading">
                        <h1>أطباق الخفايف </h1>
                    </div>
                </div> 
                
                <div class="col-md-3 col-sm-6">

                    <h1>المرطبات </h1>
                    <ul>
                        <li><a href="#">مياه معدنية </a></li>
                        <li><a href="#">عصائر</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الحلويات</h1>
                    <ul>
                        <li><a href="#">سلطة الفواكه الطازجة</a></li>
                        <li><a href="#">مهلبية</a></li>
                        <li><a href="#">مهلبية بالشوكولاتة</a></li>
                        <li><a href="#">بودينغ الأرز</a></li>
                        <li><a href="#">قشطة بالعسل</a></li>
                        <li><a href="#">كسترد</a></li>
                        <li><a href="#">ميني مافن</a></li>
                        <li><a href="#">إكلير</a></li>
                        <li><a href="#"><i>(يمكنك اختيار تشكيلة من 3 أطباق)</i></a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                <h1></h1>
                    <ul>
                        
                        <br/>
                        <li><a href="#">لفائف الجبن</a></li>
                        <li><a href="#">سبرنغ رول</a></li>
                        <li><a href="#">سمبوسة اللحم</a></li>
                        <li><a href="#">ساندويتشات لبنة</a></li>
                        <li><a href="#">ساندويتشات جبن حلوم</a></li>
                        <li><a href="#">ميني بيتزا</a></li>
                        <li><a href="#">لحم بقري مشوي مع الفجل الحار</a></li>
                        <li><a href="#">شرائح الخيار بالتونة والكرفس</a></li>
                        <li><a href="#">مورتديلا اللحم البقري</a></li>
                        <li><a href="#"><i>(يمكنك اختيار تشكيلة من 6 أطباق)</i></a></li>
                        
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                 <div class="col-md-3 col-sm-6">
                    <h1>ساندويتشات دجاج</h1>
                    <ul>
                        <li><a href="#">ساندويتشات لحم ديك رومي مدخن</a></li>
                        <li><a href="#">ساندويتشات جبن</a></li>
                        <li><a href="#">لفائف الهوت دوج</a></li>
                        <li><a href="#">ساندويتشات فاهيتا</a></li>
                        <li><a href="#">لفائف مسخن دجاج صغيرة </a></li>
                        <li><a href="#">ساندويتشات زنجر الدجاج</a></li>
                        <li><a href="#">كبة اللحم</a></li>
                        <li><a href="#">كبة الأرز</a></li>
                        
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
        <!-- End of Menu 4-->
        <!-- Start Menu 5 -->
       <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay5">
                <div class="container">
                    <div class="menu_heading">
                        <h1>قائمة المقبلات</h1>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                   
                    <h1>المرطبات</h1>
                    <ul>
                        <li><a href="#">مياه معدنية </a></li>
                        <li><a href="#">مشروبات غازية </a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الحلويات</h1>
                    <ul>
                        <li><a href="#">براونيز الشوكولاتة</a></li>
                        <li><a href="#">تارت الفواكهة الصغيرة</a></li>
                        <li><a href="#">مع موس الشوكولاتة</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>أصناف ساخنة</h1>
                    <ul>
                        <li><a href="#">سمك بصلصة التارتار</a></li>
                        <li><a href="#">دجاج ترياكي</a></li>
                        <li><a href="#">كروكيت البطاطا الصغيرة</a></li>
                        <li><a href="#">سبرنغ رول بالخضار</a></li>
                        <li><a href="#">فطائر فولفون بالفطر الكريمي</a></li>
                        <li><a href="#">كيش لورين</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>مقبلات باردة</h1>
                    <ul>
                        <li><a href="#">لحم بقري مشوي مع الفجل الحار</a></li>
                        <li><a href="#">شرائح الخيار بالتونة والكرفس</a></li>
                        <li><a href="#">صلصة الدجاج</a></li>
                        <li><a href="#">مرتديلا اللحم البقري</a></li>
                        <li><a href="#">جبن قريش</a></li>
                        <li><a href="#">قطع الفواكه الطازجة</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
        <!-- End of Menu 5-->
         <!-- Start Menu 6 -->
       <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay6">
                <div class="container">
                    <div class="menu_heading">
                        <h1>قائمة المقبلات </h1>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                   
                    <h1>المرطبات</h1>
                    <ul>
                        <li><a href="#">مياه معدنية </a></li>
                        <li><a href="#">مشروبات غازية </a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الحلويات والفواكه </h1>
                    <ul>
                        <li><a href="#">موس الفراولة في أكواب المخبوزات</a></li>
                        <li><a href="#">براونيز الشوكولاتة</a></li>
                        <li><a href="#">مكعبات الفواكه الطازجة بالأكواب</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>أصناف ساخنة</h1>
                    <ul>
                        <li><a href="#">فلافل مع صلصة الطحينة</a></li>
                        <li><a href="#">ساتيه الدجاج الآسيوي</a></li>
                        <li><a href="#">كروكيت البطاطا</a></li>
                        <li><a href="#">فطائر السبانخ</a></li>
                        <li><a href="#">كيش الخضار</a></li>
                        <li><a href="#">سمبوسة اللحم</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
                 <div class="col-md-3 col-sm-6">
                    <h1>مقبلات باردة</h1>
                    <ul>
                        <li><a href="#">فطر محشو</a></li>
                        <li><a href="#">فطائر فولفون محشوة بكوكتيل الروبيان</a></li>
                        <li><a href="#">أعواد الجبن</a></li>
                        <li><a href="#">ورق عنب</a></li>
                        <li><a href="#">كانابيه مرتديلا الدجاج</a></li>
                        <li><a href="#">مسطردة إنجليزية، مخللات مع كانابيه موس السلمون</a></li>
                        <li><a href="#">شرائح لحم ديك رومي مدخن</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
        <!-- End of Menu 6-->

        <!-- Start Menu 7 -->
       <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay7">
                <div class="container">
                    <div class="menu_heading">
                        <h1>قائمة البوفيه العالمي </h1>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                    <h1>مقبلات ساخنة</h1>
                    <ul>
                        <li><a href="#">لفائف الجبن </a></li>
                        <li><a href="#">كبة اللحم</a></li>
                        <li><a href="#">كبة البطاطا </a></li>
                        <li><a href="#">سبرنغ رولز</a></li> 
                    </ul>
                    <h1>المرطبات</h1>
                    <ul>
                        <li><a href="#">مياه معدنية</a></li>
                        <li><a href="#">مشروبات غازية</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الشورب</h1>
                    <ul>
                        <li><a href="#">شوربة الفطر</a></li>
                        <li><a href="#">سلة خبز مع الزبدة</a></li>
                        
                    </ul>
                    <h1>الحلويات</h1>
                    <ul>
                        <li><a href="#">ميني إكلير بالشوكولاتة</a></li>
                        <li><a href="#">حلوى التيراميسو</a></li>
                        <li><a href="#">موس الفراولة</a></li>
                        <li><a href="#">مهلبية</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                   
                    <h1>الأطباق الرئيسي</h1>
                    <ul>
                        <li><a href="#">سمك مشوي مع صلصة الليمون والزبدة</a></li>
                        <li><a href="#">دجاج بالزبدة (طبق آسيوي)</a></li>
                        <li><a href="#">دجاج مكسيكي</a></li>
                        <li><a href="#">أوزي بلحم الغنم</a></li>
                        <li><a href="#">مشاوي مشكلة</a></li>
                        <li><a href="#">ازانيا بالخضار</a></li>
                        <li><a href="#">يخنة البازلاء الخضراء</a></li>
                        <li><a href="#">أرز مقلي بالخضار</a></li>
                        <li><a href="#">بطاطا بالسمسم</a></li>
                        <li><a href="#">خضروات مشكلة محضّرة على البخار</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>مقبلات باردة</h1>
                    <ul>
                        <li><a href="#">شرائح اللحم البقري المشوي مع الفجل الحار</a></li>
                        <li><a href="#">حمص</a></li>
                        <li><a href="#">فتوش</a></li>
                        <li><a href="#">متبل</a></li>
                        <li><a href="#">سلطة شمندر</a></li>
                        <li><a href="#">سلطة سيزر</a></li>
                        <li><a href="#">سلطة الذرة الحلوة</a></li>
                        <li><a href="#">سلطة تونة</a></li>
                        <li><a href="#">سلطة البطاطا الألمانية</a></li>
                        <li><a href="#">الصلصة</a></li>
                        <li><a href="#">التتتبيلة الفرنسية، صلصة ثاوزند آيلاند، وصلصة الخل</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
        <!-- End of Menu 7 -->

         <!-- Start Menu 8 -->
       <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay8">
                <div class="container">
                    <div class="menu_heading">
                        <h1>قائمة البوفيه العالمي </h1>
                    </div>
                </div> 
            
                
                <div class="col-md-3 col-sm-6">
                   
                    <h1>أطباق جانبية</h1>
                    <ul>
                        <li><a href="#">يخنة خضار</a></li>
                        <li><a href="#">بيني بومودرو</a></li>
                        <li><a href="#">جراتان البطاطا</a></li>
                        <li><a href="#">أرز مقلي بالخضار</a></li>
                        <li><a href="#">أرز محضّر على البخار </a></li>
                        <li><a href="#">خضروات مشكلة محضّرة على البخار</a></li>
                    </ul>
                    <h1>حلويات وفواكه </h1>
                    <ul>
                        <li><a href="#">تيراميسو</a></li>
                        <li><a href="#"> سلطة الفواكهة الطازجة</a></li>
                        <li><a href="#">كريم كراميل</a></li>
                        <li><a href="#"> موس الفروالة</a></li>
                        <li><a href="#">فطائر صغيرة </a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الشوربة</h1>
                    <ul>
                        <li><a href="#">حساء البروكولي</a></li>
                        <li><a href="#">سلة خبز وزبدة</a></li>
                        
                    </ul>
                    <h1>الأطباق الرئيسية</h1>
                    <ul>
                        <li><a href="#">روبيان مشوي</a></li>
                        <li><a href="#">سمك مشوي بالزبدة</a></li>
                        <li><a href="#">دجاج حلو وحامض</a></li>
                        <li><a href="#">دجاج تكا</a></li>
                        <li><a href="#">فخدة ضأن مشوية مع صلصة النعناع</a></li>
                        <li><a href="#">برياني لحم الضأن</a></li>
                        <li><a href="#">مشاوي مشكلة</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الصلصة</h1>
                    <ul>
                        <li><a href="#">صلصة ثاوزند آيلاند </a></li>
                        <li><a href="#">تتبيلة الليمون</a></li>
                        <li><a href="#">صلصة الخل</a></li>
                        
                    </ul>
                    <h1>مقبلات ساخنة</h1>
                    <ul>
                        <li><a href="#">لفائف الجبن</a></li>
                        <li><a href="#">كبة اللحم</a></li>
                        <li><a href="#">كبة البطاطا</a></li>
                        <li><a href="#">سبرنغ رول</a></li>
                        <li><a href="#">فطائر السبانخ</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>مقبلات باردة</h1>
                    <ul>
                        <li><a href="#">فطائر فولفون بالبيكون البقري</a></li>
                        <li><a href="#">طبق سلمون مدخن</a></li>
                    </ul>
                    <h1>السلطات</h1>
                    <ul>
                        <li><a href="#">حمص</a></li>
                        <li><a href="#">متبل</a></li>
                        <li><a href="#">سلطة البطاطا الألمانية</a></li>
                        <li><a href="#">سلطة دجاج فلوريدا</a></li>
                        <li><a href="#">سلطة المأكولات البحرية</a></li>
                        <li><a href="#">ورق عنب</a></li>
                        <li><a href="#">سلطة فاصوليا مشكلة</a></li>
                        <li><a href="#">سلطة شمندر</a></li>
                        <li><a href="#">سلطة الروكا</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
        <!-- End of Menu 8 -->

        <!-- Start Menu 9 -->
       <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay9">
                <div class="container">
                    <div class="menu_heading">
                        <h1>قائمة البوفيه العالمي </h1>
                    </div>
                </div> 
            <div class="col-md-3 col-sm-6">
                   
                    <h1>الحلويات</h1>
                    <ul>
                        <li><a href="#">ميني إكلير بالشوكولاتة</a></li>
                        <li><a href="#">حلوى التيراميسو</a></li>
                        <li><a href="#">موس الفراولة</a></li>
                        <li><a href="#">مهلبية</a></li>
                        
                    </ul>
                    <h1>المرطبات</h1>
                    <ul>
                        <li><a href="#">قهوة وشاي</a></li>
                        <li><a href="#"> مياه معدنية</a></li>
                        <li><a href="#">مشروبات غازية</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الصلصة</h1>
                    <ul>
                        <li><a href="#">التتبيلة الفرنسية</a></li>
                        <li><a href="#">صلصة ثاوزند آيلاند</a></li>
                        <li><a href="#">صلصة الخل</a></li>
                    </ul>
                    <h1>مقبلات ساخنة</h1>
                    <ul>
                        <li><a href="#">لفائف الجبن </a></li>
                        <li><a href="#">كبة اللحم </a></li>
                        <li><a href="#">كبة البطاطا </a></li>
                        <li><a href="#">سبرنغ رولز</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-3 col-sm-6">
                    <h1>الشوربة</h1>
                    <ul>
                        <li><a href="#">حساء الفطر</a></li>
                        <li><a href="#">سلة خبز مع الزبدة</a></li>
                        
                    </ul>
                    <h1>الأطباق الرئيسية</h1>
                    <ul>
                        <li><a href="#">سمك مشوي مع صلصة الليمون والزبدة</a></li>
                        <li><a href="#">دجاج بالزبدة (طبق آسيوي)</a></li>
                        <li><a href="#">دجاج مكسيكي</a></li>
                        <li><a href="#">أوزي بلحم الغنم</a></li>
                        <li><a href="#">مشاوي مشكلة</a></li>
                        <li><a href="#">ازانيا بالخضار</a></li>
                        <li><a href="#">يخنة البازلاء الخضراء</a></li>
                        <li><a href="#">أرز مقلي بالخضار</a></li>
                        <li><a href="#">بطاطا بالسمسم</a></li>
                        <li><a href="#">خضروات مشكلة محضّرة على البخار</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-3 col-sm-6">
                    <h1>مقبلات باردة</h1>
                    <ul>
                        <li><a href="#">شرائح اللحم البقري المشوي مع الفجل الحار</a></li>
                        <li><a href="#">حمص</a></li>
                        <li><a href="#">فتوش</a></li>
                        <li><a href="#">متبل</a></li>
                        <li><a href="#">سلطة شمندر</a></li>
                        <li><a href="#">سلطة سيزر</a></li>
                        <li><a href="#">سلطة الذرة الحلوة</a></li>
                        <li><a href="#">سلطة تونة</a></li>
                        <li><a href="#">سلطة البطاطا الألمانية</a></li>
                    </ul>
                    
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
        <!-- End of Menu 9 -->
         <!-- Start Menu 10 -->
       <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay10">
                <div class="container">
                    <div class="menu_heading">
                        <h1>قائمة المقبلات   </h1>
                    </div>
                </div> 
            
                
                
                <div class="col-md-3 col-sm-6">
                    <h1>المرطبات</h1>
                    <ul>
                        <li><a href="#">قهوة وشاي</a></li>
                        <li><a href="#">تشكيلة عصائر</a></li>
                        <li><a href="#">عصير البرتقال الطازج</a></li>
                        <li><a href="#">عصير الليمون بالنعناع</a></li>
                        <li><a href="#">عصير جزر طازج</a></li>
                        
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الحلويات والفواكه</h1>
                    <ul>
                        <li><a href="#">ميني إكلير بالشوكولاتة</a></li>
                        <li><a href="#">ميني تارت</a></li>
                        <li><a href="#">قطعة بلاك فورست</a></li>
                        <li><a href="#">أكواب صغيرة من سلطة الفواكهة الطازجة</a></li>
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1></h1>
                    <ul>
                        
                        <li><a href="#">فطائر زعتر صغيرة</a></li>
                        <li><a href="#">لفائف الهوت الدوغ الصغيرة</a></li>
                        <li><a href="#">طبق مقبلات صغيرة</a></li>
                        <li><a href="#">ساندويتشات شاورما</a></li>
                        <li><a href="#">ساتيه الدجاج الصغير مع صلصة زبدة الفول السوداني</a></li>
                        <li><a href="#">ساندويتشات ميني برجر</a></li>
                        <li><a href="#">لفائف مسخن دجاج صغيرة</a></li>
                        <li><a href="#">أعواد كرات اللحم الصغيرة مع شرائح الطماطم</a></li>
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1> درهماً للشخص الواحد</h1>
                    <ul>
                        <li><a href="#">أعواد جبن الموزاريلا والطماطم</a></li>
                        <li><a href="#">فطر محشو بالسبانخ والأرضي شوكي</a></li>
                        <li><a href="#">كانابيه السلمون وكريمة الشبت</a></li>
                        <li><a href="#">بطاطا مشوية</a></li>
                        <li><a href="#">كبة</a></li>
                        <li><a href="#">كبة الأرز</a></li>
                        <li><a href="#">فطائر السبانخ</a></li>
                        <li><a href="#">سمبوسة اللحم</a></li>
                        <li><a href="#">لفائف الجبن</a></li>
                        <li><a href="#">ميني بيتزا</a></li>
                        
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
        <!-- End of Menu 10 -->
         <!-- Start Menu 11 -->
       <div class="our_menu_main" id="payMethod">
            <div class=" container">
            <div class="menu_list" id="pay11">
                <div class="container">
                    <div class="menu_heading">
                        <h1>المقبلات</h1>
                    </div>
                </div> 
            <div class="col-md-3 col-sm-6">
                    <h1> أعواد جبن الموزاريلا مع الطماطم (100 قطعة)</h1>
                    <ul>
                        <li><a href="#">كبة</a></li>
                        <li><a href="#">كبة الأرز</a></li>
                        <li><a href="#">فطائر السبانخ</a></li>
                        <li><a href="#">سمبوسة لبنة</a></li>
                        <li><a href="#">لفائلف الجبن</a></li>
                        <li><a href="#">ميني بيتزا</a></li>
                        <li><a href="#">فطائر زعتر صغيرة</a></li>
                        
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                <div class="col-md-3 col-sm-6">
                    <h1>الأطباق الرئيسية</h1>
                    <ul>
                        <li><a href="#">ساندويتشات شاورما</a></li>
                        <li><a href="#">ساتيه دجاج صغيرة مع زبدة الفول السوداني</a></li>
                        <li><a href="#">ساندويتشات ميني برجر</a></li>
                        
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-3 col-sm-6">
                    <h1>الحلويات</h1>
                    <ul>
                        <li><a href="#">ميني إكلير بالشوكولاتة</a></li>
                        <li><a href="#">قطعة بلاك فورست</a></li>
                        <li><a href="#">كوب سلطة الفواكه الطازجة</a></li>
                    </ul>
                     <h1>المرطبات</h1>
                    <ul>
                        <li><a href="#">قهوة وشاي</a></li>
                        <li><a href="#">كوكتيل عصائر</a></li>
                        <li><a href="#">عصير البرتقال الطازج</a></li>
                        <li><a href="#">عصير الليمون بالنعناع الطازج</a></li>
                        <li><a href="#">عصير الجزر الطازج</a></li>
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
       </div>
        <!-- End of Menu 11 -->





    <div class="bottom_last">

        <div class="container">

            <h4>تواصل معنا لنجعل مناسبتك تجربة متميزة تغمرها أجواء البهجة!</h4>

            <a href="#" class="btn btn-default">info@amassicatering.com</a>

            <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887 </a>



        </div><!--END OF CONTAINER-->

    </div>

    <div class="clearfix"></div>

</div>

<div class="clearfix"></div>
<script type="text/javascript">
$(document).ready(function(e) {
    $('.menu_list').hide(); 
    $("#pay1").show(); 
    $("#try").on('click','li',function (){
        var str = "";
      
        str = $(this).val();
        //alert(str) ; 
        $('.menu_list').hide();  
        $("#pay" + str).show();

    });
}); 
</script>
<?php get_footer(); ?>

