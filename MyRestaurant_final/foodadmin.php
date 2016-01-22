
<!DOCTYPE html>
<html>
<head>
<title>Insert Food page</title>

<link rel="stylesheet" type="text/css" href="Styles/StyleSheet4.css" />
<link rel="stylesheet" type="text/css" href="Styles/Stylesheet3.css" />

 <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
 
 
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
                          <li><a href="#">Parties</a>
                            <ul>
                                <li><a href="Booking.php">Show parties</a></li>
                                <li><a href="DeleteBooking.php">Delete parties</a></li>
                            </ul>
                          </li>
                        </ul>

             
             
             
            </nav>
                   
                    
                   
             
    
    
    
<div id="main">

<div id="login">
<h2>Insert Food</h2>
<form action="foodadmin.php" method="post">
<label>FoodName :</label>
<input id="name" name="FoodName" placeholder="foodname" type="text">
<label>Type :</label>
<input id="password" name="FoodType" placeholder="Type" type="text">

<label>Price :</label>
<input id="name" name="Price" placeholder="Price" type="double">
<label>FoodImg :</label>
<input id="password" name="FoodImg" placeholder="image address" type="text"><br><br>

<input name="submit" type="submit" value=" Insert ">
<span><?php  ?></span>
</form>
</div>
</div>
        
        
        <?php
        if(isset($_POST['submit']))
        {
            $con=  mysql_connect("localhost","root","");
            
            if(!$con)
            {
                die("can not connect".mysql_error());
            }
            
            mysql_select_db("restaurantdb",$con);
            $sql="INSERT INTO food(FoodName,FoodType,Price,FoodImg)
                VALUES('$_POST[FoodName]','$_POST[FoodType]','$_POST[Price]','$_POST[FoodImg]')";
            
            mysql_query($sql,$con);
            mysql_close($con);
        }
        ?>
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>