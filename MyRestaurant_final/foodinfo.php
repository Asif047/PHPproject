<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css"/> 
            <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
          
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="gereric.css" rel="stylesheet" type="text/css"/>
        
        
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="restaurant.php">Food info</a></li>
                    <li><a href="Branch.php">Branches</a></li>
                    <li><a href="Orderform.php">Order</a></li>
                    <li><a href="Partybooking.php">PartyBooking </a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                   <!-- <li><a href="admin.php">AdminPanel </a></li>  -->
                   
                    
                   
                </ul>
            </nav>
            
            <div id="content_area">
                
                
                
                 

                
                
                <div id="sliderFrame">
        <div id="slider">
            
            
		
	<!-- 	Append this section to change the images -->
            <a href="http://www.facebook.com" target="_blank">  <!--This image is having a link on it.Use <a href="www.link.com" /a> -->
                <img src="FoodImg/restaurant1.jpg" alt="Welcome to Aram Ayesh Restaurant" class="imgcenter" />
            </a>
			
        <img src="FoodImg/restaurant2.jpg" alt="" class="imgcenter" />
        <img src="FoodImg/restaurant3.jpg" alt="Party booking system" class="imgcenter" />
        <img src="FoodImg/food1.jpg" alt="Charming Chinese food" class="imgcenter" />
        <img src="FoodImg/food2.jpg" alt="Tasty Thai food" class="imgcenter"/>
        <img src="FoodImg/food3.jpg" alt="Beautiful Bangladeshi food" class="imgcenter"/>
       
	   </div>
        <div id="htmlcaption" style="display: none;">
            
        </div>
    </div>

    <div class="div2">
       
    </div>
                <br><br>
                <?php echo $content; ?>
                
            </div>
            
            <h1 id="P_center">Location & Contact info</h1>
<p id="P_center" >
    
    Aram Ayesh restaurant<br>
    Dhanmondi-13,Dhaka<br>
    Contact no. : 01677190809,<br>01673900900
</p>
    
           <footer>
                <font size="4" color="black">copyright@2015. All rights are reserved </font>

            </footer>
            
            
        </div>
    </body>
</html>
