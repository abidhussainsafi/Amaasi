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
                    <p>You Select & We'll Ensure Perfection</p>
                </div>
                <!--END OF TITLE HEAD-->
                <div class="col-md-12 selector">
                 <div class="nice-select">
             <p class="current">Menu</p>
             <ul class="list" id="try">
            <li class="option selected" value="1">Menu One</li>
            <li class="option" value="2">Menu Two </li>
            <li class="option" value="3">Menu Three</li>
            <li class="option" value="4">Menu Four</li>
            <li class="option" value="5">Menu Five</li>
            <li class="option" value="6">Menu Six</li>
            <li class="option" value="7">Menu Seven </li>
            <li class="option" value="8">Menu Eight</li>
            <li class="option" value="9">Menu Nine</li>
            <li class="option" value="10">Menu Ten</li>
            <li class="option" value="11">Menu Eleven</li>
            <li class="option" value="12">Menu Twelve</li>
            <li class="option" value="13">Menu Thirteen</li>
            <li class="option" value="14">Menu Fourteen</li>
            <li class="option" value="15">Menu Fifteen</li>
            </ul>
            </div>
            
            <a href="<?php echo SITE_URL;?>tabkhatna-menu" class="btn btn-default">TABKHATNA MENU</a>
            </div><!--END OF COL MD 12-->
        </div><!--END OF CONTAINER-->
        </div><!--END OF OUR MENU-->

    <div class="our_menu_main" id="payMethod">
        <div class="container">
            <div class="menu_list"  id="pay1">
                    <div class="menu_heading">
                    <h1>Arabic Buffet</h1>
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <h1>Salad</h1>
                     <ul class="last">
                        <li><a href="#">Houmous</a></li>
                        <li><a href="#">Moutabal</a></li>
                        <li><a href="#">Fattush</a></li>
                        <li><a href="#">Tuna Salad </a></li>
                        <li><a href="#">Sweet Corn Salad </a></li>
                        <li><a href="#">Beetroot Salad</a></li>
                        <li><a href="#">WARAK ENAB (Vine Leaves)</a></li>
                        <li><a href="#">Arabic Potato Salad</a></li>
                        <li><a href="#">Loubeah Bil Zeat</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Main Course</h1>
                    <ul>
                        <li><a href="#">Grilled Shrimps</a></li>
                        <li><a href="#">Chicken Biryani</a></li>
                        <li><a href="#">Lamb Qouzi</a></li>
                        <li><a href="#">Penne Arbiata</a></li>
                        <li><a href="#">Mix Vegetable Stew (Salonah )</a></li>
                        <li><a href="#">Roasted Potato</a></li>
                        <li><a href="#">Steamed Rice</a></li>
                        <li><a href="#">Steamed Vegetable</a></li>
                    </ul>
                    <h1>  Hot Appetizer</h1>
                     <ul class="last">
                        <li><a href="#">Cheese Sambosah / Meat Kebbeh / Rice Kebbeh</a></li>
                        <li><a href="#">Soup</a></li>
                        <li><a href="#">Lintel Soup</a></li>
                        <li><a href="#">Bread Basket</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Dessert</h1>
                     <ul >
                        <li><a href="#">Umm Ali</a></li>
                        <li><a href="#">Cream Caramel</a></li>
                        <li><a href="#">Rice Pudding</a></li>
                        <li><a href="#">Mohalabeah</a></li>
                        <li><a href="#">Kunafa</a></li>
                        
                    </ul>

                    <h1>  Refreshment</h1>
                     <ul class="last">
                        <li><a href="#">Coffee & Tea</a></li>
                        <li><a href="#">Soft Drinks</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            
            <div class="menu_list"  id="pay2">
                    <div class="menu_heading">
                    <h1>Menu 2</h1>
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <h1>Cold & Hot Mezze</h1>
                     <ul class="last">
                        <li><a href="#">Houmous</a></li>
                        <li><a href="#">Moutabal</a></li>
                        <li><a href="#">Tabouleh</a></li>
                        <li><a href="#">Fattoush</a></li>
                        <li><a href="#">Loubieh bil zeit</a></li>
                        <li><a href="#">Vegetable samosa </a></li>
                        <li><a href="#">Meat  kebbeh </a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Main Course</h1>
                    <ul>
                        <li><a href="#">Lamb  biryani</a></li>
                        <li><a href="#">Mandi chicken</a></li>
                        <li><a href="#">Kofta kebab </a></li>
                        <li><a href="#">Lamb stew with okra </a></li>
                        <li><a href="#">Chicken tikka</a></li>
                        <li><a href="#">Lasagna al forno </a></li>
                    </ul>
                    
                    <h1>Fruit & Dessert</h1>
                     <ul class="last">
                        <li><a href="#">Mouhalabieh</a></li>
                        <li><a href="#">Umm Ali</a></li>
                        <li><a href="#">Custard</a></li>
                        <li><a href="#">Fresh fruit basket</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Beverages</h1>
                     <ul class="last">
                        <li><a href="#">Mineral water</a></li>
                        <li><a href="#">Soft drink</a></li>
                        <li><a href="#">AED. 85 / - Per Head </a></li>
                        <li><a href="#">Minimum  / 50 / Pax</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            
            
            </div><!--END OF MENU LIST-->
            
            <div class="menu_list"  id="pay3">
                    <div class="menu_heading">
                    <h1>Menu Three</h1>
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <h1>Cold Mezze</h1>
                    <ul>
                        <li><a href="#">Houmous</a></li>
                        <li><a href="#">Moutabal</a></li>
                        <li><a href="#">Tabouleh</a></li>
                        <li><a href="#">Fattoush</a></li>
                        <li><a href="#">Stuffed Vine leaves</a></li>
                        <li><a href="#">Potato with lemon garlic</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Hot Selection</h1>
                    <ul>
                        <li><a href="#">Fatayer</a></li>
                        <li><a href="#">Vegetable samosa</a></li>
                        <li><a href="#">Meat kibbeh </a></li>
                    </ul>
                    
                    <h1>Main Course</h1>
                    <ul>
                        <li><a href="#">Chicken biryani</a></li>
                        <li><a href="#">Mandi meat</a></li>
                        <li><a href="#">Samaka harra </a></li>
                        <li><a href="#">Kofta kebab </a></li>
                        <li><a href="#">Shish tawouk </a></li>
                        <li><a href="#">Vegetable noodles </a></li>
                        <li><a href="#">lamb stew with okra  </a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Fruit & Dessert</h1>
                     <ul class="last">
                        <li><a href="#">Mouhalabieh</a></li>
                        <li><a href="#">Assorted french pastries</a></li>
                        <li><a href="#">Umm Ali</a></li>
                        <li><a href="#">Cream caramel </a></li>
                        <li><a href="#">Fresh fruit salad </a></li>
                        <li><a href="#">Steamed Vegetable</a></li>

                    </ul>
                    <h1>Beverages</h1>
                     <ul class="last">
                        <li><a href="#">Mineral water</a></li>
                        <li><a href="#">Soft drinks</a></li>
                        
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            
            
            </div><!--END OF MENU LIST-->
            
            <div class="menu_list"  id="pay4">
                    <div class="menu_heading">
                    <h1>Menu 4</h1>
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <h1>Cold & Hot Mezze </h1>
                     <ul class="last">
                        <li><a href="#">Houmous</a></li>
                        <li><a href="#">Moutabal</a></li>
                        <li><a href="#">Tabouleh</a></li>
                        <li><a href="#">Rocca & beetroot </a></li>
                        <li><a href="#">Bamieh bil zeit </a></li>
                        <li><a href="#">Potato harrah </a></li>
                        <li><a href="#">Fatayer </a></li>
                        <li><a href="#">Cheese samosa  </a></li>
                        <li><a href="#">Vegetable samosa</a></li>
                        <li><a href="#">Meat kebbeh</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Main Course</h1>
                    <ul>
                        <li><a href="#">Chicken biryani</a></li>
                        <li><a href="#">Lamb mandi </a></li>
                        <li><a href="#">Fish machbouse</a></li>
                        <li><a href="#">Kofta kebab </a></li>
                        <li><a href="#">Chicken tikka </a></li>
                        <li><a href="#">Penne  Arabiata  </a></li>
                        <li><a href="#">Lamb stew with okra   </a></li>
                    </ul>
                    
                    <h1> Beverages</h1>
                     <ul class="last">
                        
                        <li><a href="#">Mineral water</a></li>
                        <li><a href="#">Soft drinks</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Fruit & Dessert</h1>
                     <ul class="last">
                        <li><a href="#">Mouhalabieh</a></li>
                        <li><a href="#">Assorted french pastries</a></li>
                        <li><a href="#">Umm Ali</a></li>
                        <li><a href="#">Custard</a></li>
                        <li><a href="#">Fresh fruit salad </a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            
            
            </div><!--END OF MENU LIST-->
            <div class="menu_list"  id="pay5">
                    <div class="menu_heading">
                    <h1>Menu 6</h1>
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <h1>Cold & Hot Mezze </h1>
                     <ul class="last">
                        <li><a href="#">Houmous</a></li>
                        <li><a href="#">Moutabal</a></li>
                        <li><a href="#">Tabouleh</a></li>
                        <li><a href="#">Rocca & beetroot </a></li>
                        <li><a href="#">Bamieh bil zeit </a></li>
                        <li><a href="#">Potato harrah </a></li>
                        <li><a href="#">Fatayer </a></li>
                        <li><a href="#">Cheese samosa  </a></li>
                        <li><a href="#">Vegetable samosa</a></li>
                        <li><a href="#">Meat kebbeh</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Main Course</h1>
                    <ul>
                        <li><a href="#">Lamb  biryani</a></li>
                        <li><a href="#">Chicken with oriental  rice </a></li>
                        <li><a href="#">Fish Sayadieh</a></li>
                        <li><a href="#">Kofta kebab </a></li>
                        <li><a href="#">Shish tawouk</a></li>
                        <li><a href="#">Vegetable noodles</a></li>
                        <li><a href="#">Laban emmo </a></li>
                        <li><a href="#">Stuffed vine leaves & Zucchini</a></li>
                    </ul>
                    
                    <h1> Beverages</h1>
                     <ul class="last">
                        
                        <li><a href="#">Mineral water</a></li>
                        <li><a href="#">Soft drinks</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Fruit & Dessert</h1>
                     <ul class="last">
                        <li><a href="#">Mouhalabieh</a></li>
                        <li><a href="#">Assorted french pastries</a></li>
                        <li><a href="#">Umm Ali</a></li>
                        <li><a href="#">Custard</a></li>
                        <li><a href="#">Fresh fruit salad </a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            <div class="menu_list"  id="pay6">
                    <div class="menu_heading">
                    <h1>Menu 6</h1>
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <h1>Cold Mezze & Salad</h1>
                    <ul>
                        <li><a href="#">Houmous</a></li>
                        <li><a href="#">Moutabal</a></li>
                        <li><a href="#">Tabouleh</a></li>
                        <li><a href="#">Oriental salad</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Fruit & Dessert</h1>
                    <ul>
                        <li><a href="#">Mouhalabieh</a></li>
                        <li><a href="#">Custard</a></li>
                        <li><a href="#">Fresh fruit basket</a></li>
                    </ul>
                    <h1>Beverages</h1>
                    <ul>
                        <li><a href="#">Mineral water</a></li>
                        <li><a href="#">Soft drink</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Main Course</h1>
                     <ul class="last">
                        <li><a href="#">Lamb  biryani</a></li>
                        <li><a href="#">Mandi chicken</a></li>
                        <li><a href="#">Salona vegetable</a></li>
                        <li><a href="#">Chicken tikka</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
            
            
            </div><!--END OF MENU LIST-->
            
            <div class="menu_list"  id="pay7">
                    <div class="menu_heading">
                    <h1>Arabic Buffet 2</h1>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h1>Salad</h1>
                     <ul>
                        <li><a href="#">Houmous</a></li>
                        <li><a href="#">Moutabal</a></li>
                        <li><a href="#">Futtoush</a></li>
                        <li><a href="#">Tuna Salad</a></li>
                        <li><a href="#">Sweet Corn Salad</a></li>
                        <li><a href="#">Beetroot Salad</a></li>
                        <li><a href="#">WARAK ENAB   (VineLeaves) </a></li>
                        <li><a href="#">Arabic Potato Salad</a></li>
                    </ul>
                    <h1> Hot Appetizer</h1>
                     <ul class="last">
                        <li><a href="#">Cheese Sambosah  / Meat Kebbeh / Rice Kebbeh</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Main Course</h1>
                    <ul>
                        <li><a href="#">Chicken Kabssa</a></li>
                        <li><a href="#">Lamb Qouzi</a></li>
                        <li><a href="#">Mix Grilled</a></li>
                        <li><a href="#">Pasta with Tomato </a></li>
                        <li><a href="#">Roasted Potato </a></li>
                        <li><a href="#">Steamed Vegetable</a></li>
                    </ul>
                    <h1> Soup</h1>
                     <ul class="last">
                        <li><a href="#">Lintel Soup</a></li>
                        <li><a href="#">Bread Basket</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-4 col-sm-6">
                    <h1>Dessert</h1>
                     <ul>
                        <li><a href="#">Umm Ali</a></li>
                        <li><a href="#">Cream Caramel</a></li>
                        <li><a href="#">Rice Pudding</a></li>
                        <li><a href="#">Mohalabeah</a></li>
                        <li><a href="#">Kunafa</a></li>
                    </ul>
                    <h1>Refreshment</h1>
                     <ul class="last">
                        <li><a href="#">Mineral Water</a></li>
                        <li><a href="#">Soft Drinks</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            <div class="menu_list"  id="pay8">
                    <div class="menu_heading">
                    <h1>Finger Food 1</h1>
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <h1>Mains</h1>
                     <ul class="last">
                        <li><a href="#">Chicken Sandwiches</a></li>
                        <li><a href="#">Smoked Turkey Sandwiches</a></li>
                        <li><a href="#">Cheese Sandwiches</a></li>
                        <li><a href="#">Hot Dog Roll</a></li>
                        <li><a href="#">Fajita Sandwiches</a></li>
                        <li><a href="#">Mini Chicken Mossakhan </a></li>
                        <li><a href="#">Chicken Zinger Sandwiches</a></li>
                        <li><a href="#">Meat Kebbeh</a></li>
                        <li><a href="#">Rice Kebbeh</a></li>
                        <li><a href="#">Cheese Roll</a></li>
                        <li><a href="#">Spring Roll</a></li>
                        <li><a href="#">Meat Sambossah</a></li>
                        <li><a href="#">Labneh Sandwiches</a></li>
                        <li><a href="#">Halome Cheese Sandwiches</a></li>
                        <li><a href="#">Mini Pizza</a></li>
                        <li><a href="#">Roast Beef with Horseradish</a></li>
                        <li><a href="#">Tuna & Celery Cucumber</a></li>
                        <li><a href="#">Beef Mortadella</a></li>
                        <i>(Choose 6 Items from above)</i>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1> Dessert</h1>
                    <ul>
                        <li><a href="#">Fresh Fruit Salad</a></li>
                        <li><a href="#">Mohalabeah</a></li>
                        <li><a href="#">Chocolate Mohalabeah</a></li>
                        <li><a href="#">Rice Pudding</a></li>
                        <li><a href="#">Ayesh Al Saraya</a></li>
                        <li><a href="#">Kashta Bil Asal</a></li>
                        <li><a href="#">Custard</a></li>
                        <li><a href="#">Mini Muffin</a></li>
                        <li><a href="#">Eclear</a></li>
                        <i>(Choose 3 Items from above)</i>
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Refreshments</h1>
                    <ul class="last">
                        <li><a href="#">Mineral Water </a></li>
                        <li><a href="#">Juices</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            
            <div class="menu_list"  id="pay9">
                    <div class="menu_heading">
                    <h1>Finger Food 2</h1>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h1>Cold Appetizer</h1>
                     <ul class="last">
                        <li><a href="#">Roast Beef with Horseradish</a></li>
                        <li><a href="#">Tuna & Celery Cucumber</a></li>
                        <li><a href="#">Chicken Mousse</a></li>
                        <li><a href="#">Beef Mortadella</a></li>
                        <li><a href="#">Cottage Cheese</a></li>
                        <li><a href="#">Fresh Fruits Sticks</a></li>
                    </ul>
                </div><!--END OF COL MD 4--> 
                <div class="col-md-4 col-sm-6">
                    <h1>Hot Selection</h1>
                    <ul>
                        <li><a href="#">Fish with Tartar Sauce</a></li>
                        <li><a href="#">Chicken Teriyaki</a></li>
                        <li><a href="#">Mini Potato Croquettes</a></li>
                        <li><a href="#">Vegetable Spring Roll</a></li>
                        <li><a href="#">Creamy Mushroom Vol – au – vents</a></li>
                        <li><a href="#">Quiche Loraine</a></li>
                    </ul>
                    <h1> Desserts</h1>
                     <ul class="last">
                        <li><a href="#">Chocolate Brownie</a></li>
                        <li><a href="#">Mini Fruits Tarts</a></li>
                        <li><a href="#">With Chocolate Mousse</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Refreshments</h1>
                     <ul class="last">
                        <li><a href="#">Mineral Water</a></li>
                        <li><a href="#">Soft Drinks</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            <div class="menu_list"  id="pay10">
                    <div class="menu_heading">
                    <h1>Finger Food 3</h1>  
                </div>
                <div class="col-md-4 col-sm-6">
               <h1>Mains</h1>
                     <ul class="last">
                        <li><a href="#">Cold Hors D Oeuvres</a></li>
                        <li><a href="#">Stuffed Mushroom</a></li>
                        <li><a href="#">Vol au Vents Filed with Shrimps cocktail</a></li>
                        <li><a href="#">Cheese Sticks</a></li>
                        <li><a href="#">Vine Leaves</a></li>
                        <li><a href="#">Chicken Mortadella Canapé</a></li>
                        <li><a href="#">English mustard, Pickles Bikinis with Salmon mousse Canapé</a></li>
                        <li><a href="#">Smoked Turkey</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                 <h1>Hot Selection</h1>
                    <ul>
                        <li><a href="#">Falafel with Tahini Sauce</a></li>
                        <li><a href="#">Asian Chicken Satay</a></li>
                        <li><a href="#">Potato Croquettes</a></li>
                        <li><a href="#">Spinach Fatayer </a></li>
                        <li><a href="#">Vegetable Quiche</a></li>
                        <li><a href="#">Meat Samosa</a></li>
                    </ul>
                    <h1>Desserts & Fruits</h1>
                     <ul class="last">
                        
                        <li><a href="#">Strawberry Mouse in Pastry Cup</a></li>
                        <li><a href="#">Chocolate Brownies</a></li>
                        <li><a href="#">Diced Fresh Fruit Cups</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Refreshments</h1>
                     <ul class="last">
                        <li><a href="#">Mineral Water</a></li>
                        <li><a href="#">Soft Drinks</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            <div class="menu_list"  id="pay11">
                    <div class="menu_heading">
                    <h1>International Buffet</h1>  
                </div>
                <div class="col-md-4 col-sm-6">
               <h1>Cold Starter</h1>
                <ul class="last">
                        <li><a href="#">Sliced Tender Roast Beef with Horseradish</a></li>
                        <li><a href="#">Hummus</a></li>
                        <li><a href="#">Fattush</a></li>
                        <li><a href="#">Moutable</a></li>
                        <li><a href="#">Beetroot Salad</a></li>
                        <li><a href="#">Caesar Salad</a></li>
                        <li><a href="#">Sweet Corn Salad</a></li>
                        <li><a href="#">Tuna Salad</a></li>
                        <li><a href="#">German Potato Salad</a></li>
                        <li><a href="#">Dressing</a></li>
                        <li><a href="#">French, Thousand Island & Vinaigrette</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
              <h1>Main Course</h1>
                    <ul>
                        <li><a href="#">Grilled Fish with butter lemon sauce</a></li>
                        <li><a href="#">Butter Chicken (Asian)</a></li>
                        <li><a href="#">Mexicana Chicken</a></li>
                        <li><a href="#">Lamb Qouzi</a></li>
                        <li><a href="#">Mix Grilled</a></li>
                        <li><a href="#">Vegetable Lasagna</a></li>
                        <li><a href="#">Green Peas Stew</a></li>
                        <li><a href="#">Vegetable Fried rice</a></li>
                        <li><a href="#">Sesame Potato</a></li>
                        <li><a href="#">Steamed Vegetable</a></li>
                    </ul>
                    <h1>Desserts</h1>
                    <ul class="last">
                        <li><a href="#">Mini Chocolate Éclairs</a></li>
                        <li><a href="#">Tiramisu</a></li>
                        <li><a href="#">Strawberry Mousse</a></li>
                        <li><a href="#">Mohalabeah</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                    <h1>Refreshments</h1>
                     <ul class="last">
                        <li><a href="#">Mineral Water</a></li>
                        <li><a href="#">Soft Drinks</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            <div class="menu_list"  id="pay12">
                    <div class="menu_heading">
                    <h1>International Buffet 2</h1>  
                </div>
                <div class="col-md-4 col-sm-6">
               <h1>Cold Starter</h1>
                     <ul>
                        <li><a href="#">Smoked Salmon Platter</a></li>
                        <li><a href="#">Beef Bacon Vol – Au Vent</a></li>
                    </ul>
                    <h1> Salad</h1>
                     <ul>
                        <li><a href="#">Hummuse</a></li>
                        <li><a href="#">Moutable</a></li>
                        <li><a href="#">German Potato Salad</a></li>
                        <li><a href="#">Chicken Florida Salad</a></li>
                        <li><a href="#">Sea food Salad</a></li>
                        <li><a href="#">Vine Leaves</a></li>
                        <li><a href="#">Mixed Beans Salad</a></li>
                        <li><a href="#">Beetroot Salad</a></li>
                        <li><a href="#">Rocca Salad</a></li>
                    </ul>
                    <h1>Dressing</h1>
                     <ul class="last">
                        <li><a href="#">(Thousand Island, Lemon Dressing, & Vinaigrette)</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                
                <div class="col-md-4 col-sm-6">
                 <h1>Hot Started</h1>
                    <ul>
                        <li><a href="#">Cheese Roll</a></li>
                        <li><a href="#">Meat Kebbeh</a></li>
                        <li><a href="#">Potato Kebbeh</a></li>
                        <li><a href="#">Spring Roll</a></li>
                        <li><a href="#">Spinach Fatayer</a></li>
                    </ul>
                    <h1>Soup</h1>
                    <ul>
                        <li><a href="#">Broccoli Soup</a></li>
                        <li><a href="#">Bread Basket & Butter</a></li>
                    </ul>
                     <h1>Main Course</h1>
                     <ul class="last">
                        <li><a href="#">Grilled Shrimps</a></li>
                        <li><a href="#">Battered Grill Fish</a></li>
                        <li><a href="#">Sweet and Sour Chicken</a></li>
                        <li><a href="#">Chicken Tikka</a></li>
                        <li><a href="#">Roast Leg of Lamb with Mint Sauce</a></li>
                        <li><a href="#">Lamb Biryani</a></li>
                        <li><a href="#">Mix Grilled</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-4 col-sm-6">
                <h1>Said Dish</h1>
                     <ul>
                        <li><a href="#">Vegetable Stew</a></li>
                        <li><a href="#">Penne Pomodoro</a></li>
                        <li><a href="#">Potato Au Gratin</a></li>
                        <li><a href="#">Vegetable Fried Rice</a></li>
                        <li><a href="#">Steamed Rice</a></li>
                        <li><a href="#">Steamed Vegetable</a></li>
                    </ul>
                    <h1>Desserts & Fruits </h1>
                     <ul>
                        <li><a href="#">Tiramisu</a></li>
                        <li><a href="#">Fresh Fruit Salad</a></li>
                        <li><a href="#">Cream Caramel</a></li>
                        <li><a href="#">Strawberry Mousse</a></li>
                        <li><a href="#">Mini Pastries</a></li>
                    </ul>
                    <h1>Refreshments</h1>
                     <ul class="last">
                        <li><a href="#">Mineral Water</a></li>
                        <li><a href="#">Soft Drinks</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            
            <div class="menu_list"  id="pay13">
                    <div class="menu_heading">
                    <h1>International Buffet 3</h1>  
                </div>
                <div class="col-md-4 col-sm-6">
               <h1>Cold Starter</h1>
                <ul>
                <li><a href="#">Sliced Tender Roast Beef with Horseradish</a></li>
                        <li><a href="#">Hummus</a></li>
                        <li><a href="#">Fattush</a></li>
                        <li><a href="#">Moutable</a></li>
                        <li><a href="#">Beetroot Salad</a></li>
                        <li><a href="#">Caesar Salad</a></li>
                        <li><a href="#">Sweet Corn Salad</a></li>
                        <li><a href="#">Tuna Salad</a></li>
                        <li><a href="#">German Potato Salad</a></li>
                    </ul>
                    <h1>Soup</h1>
                    <ul>
                        <li><a href="#">Mushroom Soup</a></li>
                        <li><a href="#">Bread Basket & Butter</a></li>
                    </ul>
                    <h1>Dressing</h1>
                     <ul class="last">
                        <li><a href="#">(Thousand Island, Lemon Dressing, & Vinaigrette)</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-4 col-sm-6">
                 <h1>Hot Started</h1>
                    <ul>
                        <li><a href="#">Cheese Roll</a></li>
                        <li><a href="#">Meat Kebbeh</a></li>
                        <li><a href="#">Potato Kebbeh</a></li>
                        <li><a href="#">Spring Roll</a></li>                  
                    </ul>
                    
                    <h1>Main Course</h1>
                     <ul class="last">
                        <li><a href="#">Grilled Fish with butter lemon sauce</a></li>
                        <li><a href="#">Butter Chicken (Asian)</a></li>
                        <li><a href="#">Mexicana Chicken</a></li>
                        <li><a href="#">Lamb Qouzi</a></li>
                        <li><a href="#">Mix Grilled</a></li>
                        <li><a href="#">Vegetable Lasagna</a></li>
                        <li><a href="#">Green Peas Stew</a></li>
                        <li><a href="#">Vegetable Fried rice</a></li>
                        <li><a href="#">Sesame Potato</a></li>
                        <li><a href="#">Steamed Vegetable</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-4 col-sm-6">
                 <h1>Desserts</h1>
                     <ul>
                        <li><a href="#">Mini Chocolate Éclairs</a></li>
                        <li><a href="#">Tiramisu</a></li>
                        <li><a href="#">Strawberry Mousse</a></li>
                        <li><a href="#">Mohalabeah</a></li>
                    </ul>
                    
                    <h1>Refreshments</h1>
                     <ul class="last">
                        <li><a href="#">Coffee & Tea</a></li>
                        <li><a href="#">Mineral Water</a></li>
                        <li><a href="#">Soft Drinks</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            <div class="menu_list"  id="pay14">
                    <div class="menu_heading">
                    <h1>Finger Food 3</h1>  
                </div>
                <div class="col-md-4 col-sm-6">
               <h1>Mains</h1>
                <ul>
                <li><a href="#">Mozzarella Cheese & Tomato Skewer</a></li>
                        <li><a href="#">Spinach &Artichoke Stuffed Mushroom</a></li>
                        <li><a href="#">Salmon & Dill Cream Canapés</a></li>
                        <li><a href="#">Deviled Potato</a></li>
                        <li><a href="#">Kebbeh</a></li>
                        <li><a href="#">Rice Kebbeh</a></li>
                        <li><a href="#">Spinach Fatayer</a></li>
                        <li><a href="#">Meat Sambossa</a></li>
                        <li><a href="#">Cheese Roll</a></li>
                        <li><a href="#">Mini Pizza</a></li>
                        <li><a href="#">Mini Zaatar Fatayer</a></li>
                        <li><a href="#">Mini Hot Dog Roll</a></li>
                        <li><a href="#">Shawerma Sandwiches</a></li>
                        <li><a href="#">Mini Chicken Satay with Peanut Butter Sauce</a></li>
                        <li><a href="#">Mini Burger</a></li>
                        <li><a href="#">Mini Chicken Mossakhan</a></li>
                        <li><a href="#">Mini meat Ball with Tomato in Skewer</a></li>
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                <div class="col-md-4 col-sm-6">
                 <h1>Desserts & Fruits</h1>
                     <ul>
                        <li><a href="#">Mini Chocolate Eclear</a></li>
                        <li><a href="#">Mini Tart</a></li>
                        <li><a href="#">Black Forest</a></li>
                        <li><a href="#">Small Fruit Salad Small Cups</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-4 col-sm-6">
                 
                    
                    <h1>Refreshments</h1>
                     <ul class="last">
                        <li><a href="#">Coffee & Tea</a></li>
                        <li><a href="#">Mineral Water</a></li>
                        <li><a href="#">Soft Drinks</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            <div class="menu_list"  id="pay15">
                    <div class="menu_heading">
                    <h1>Finger Food 4</h1>  
                </div>
                <div class="col-md-4 col-sm-6">
               <h1>Mains</h1>
                <ul>
                <li><a href="#">Mozzarella Cheese & Tomato Skewer 100 pcs</a></li>
                        <li><a href="#">Kebbeh</a></li>
                        <li><a href="#">Rice Kebbeh</a></li>
                        <li><a href="#">Spinach Fatayer</a></li>
                        <li><a href="#">Sambosa Labneh</a></li>
                        <li><a href="#">Cheese Rolls</a></li>
                        <li><a href="#">Mini Pizza</a></li>
                        <li><a href="#">Mini Zatar Fatayer</a></li>
                        
                    </ul>
                    
                </div><!--END OF COL MD 4-->
                <div class="col-md-4 col-sm-6">
                 <h1>Main Dish</h1>
                     <ul>
                        <li><a href="#">Shawerma Sandwiches</a></li>
                        <li><a href="#">Mini Chicken Satay with peanut butter</a></li>
                        <li><a href="#">Mini Burger</a></li>
                    </ul>
                </div><!--END OF COL MD 4-->
                <div class="col-md-4 col-sm-6">
                <h1>Desserts</h1>
                     <ul >
                        <li><a href="#">Mini Chocolate Éclair</a></li>
                        <li><a href="#">Black Forest</a></li>
                        <li><a href="#">Fresh Fruit Salad in Cup</a></li>
                    </ul>
                    <h1>Refreshments</h1>
                     <ul class="last">
                      <li><a href="#">Assorted Juice</a></li>
                        <li><a href="#">Fresh Orange Juice</a></li>
                        <li><a href="#">Fresh Lemon Mint</a></li>
                        <li><a href="#">Fresh Carrot Juice</a></li>
                        
                    </ul>
                </div><!--END OF COL MD 4-->
            </div><!--END OF MENU LIST-->
            </div><!--END OF CONTAINER-->
            </div><!--END OF OUR MENU MAIN-->






    <div class="bottom_last">

        <div class="container">

            <h4>Connect with us &amp; We'll make your Event taste Delicious!</h4>

            <!-- <a href="#" class="btn btn-default">RESERVE 20% DISCOUNT</a> -->
            <a href="mailto:info@amassicatering.com" class="btn btn-default green">info@amassicatering.com</a>
            <a href="#" class="btn btn-default"><i class="fa fa-phone"></i>00971 6 559 8887</a>

            <!-- <a href="#" class="btn btn-default"><i class="fa fa-comments-o"></i>LIFE CHAT</a> -->

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

