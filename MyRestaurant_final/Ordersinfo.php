<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet4.css" />
        
        <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css"/> 
            <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
          
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="gereric.css" rel="stylesheet" type="text/css"/>
        
        
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            
            
             <div id="profile">

<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
        
            
            <nav id="navigation">
                
                
                
                                            <ul id="drop-nav">
                                                <li><a href="foodadmin.php">Food Zone</a>
                               <ul>
                                   <li><a href="foodadmin.php">Insert food</a></li>
                                   <li><a href="DeleteFood.php">Delete food</a></li>
                                   <li><a href="UpdateFood.php">Update food</a></li>
                                </ul>
                              </li>
                              <li><a href="branchadmin.php">Branch Zone</a>
                                <ul>
                                    <li><a href="branchadmin.php">Insert branch</a></li>
                                    <li><a href="DeleteBranch.php">Delete branch</a></li>
                                    <li><a href="UpdateBranch.php">Update branch</a></li>
                                </ul>
                              </li>
                              <li><a href="Orders.php">Orders</a>
                                <ul>
                                    <li><a href="Orders.php">Show orders</a></li>
                                    <li><a href="DeleteOrder.php">Delete orders</a></li>

                                </ul>
                              </li>
                              <li><a href="Booking.php">Parties</a>
                                <ul>
                                    <li><a href="Booking.php">Show parties</a></li>
                                    <li><a href="DeleteBooking.php">Delete parties</a></li>
                                </ul>
                              </li>
                            </ul>

                
                
                
                
            </nav>
            
            <div id="content_area">
                
                
                
                 

                
                
                

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
