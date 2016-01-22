
<!DOCTYPE html>
<html>
<head>
<title>Update Food Page</title>

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
                          <li><a href="Booking.php">Parties</a>
                            <ul>
                                <li><a href="Booking.php">Show parties</a></li>
                                <li><a href="DeleteBooking.php">Delete parties</a></li>
                            </ul>
                          </li>
                        </ul>

             
             
             
             
            </nav>
                   
                    
                   
  
        
         
        
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("restaurantdb")or die("Connection Failed");
        
        
         if(isset($_POST['FoodId'])&&($_POST['FoodName'])){
             
           $foodId = $_POST['FoodId'];
        $foodName = $_POST['FoodName'];
        
        
        
        $query = "UPDATE food SET FoodName = '$foodName' WHERE FoodId = '$foodId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
         <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("restaurantdb")or die("Connection Failed");
        
        
        if(isset($_POST['FoodId'])&&($_POST['FoodType'])){
            $foodId = $_POST['FoodId'];
       
         $foodType = $_POST['FoodType'];
        
        
        $query = "UPDATE food SET FoodType = '$foodType' WHERE FoodId = '$foodId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}
        }
        
        ?> 
        
        
        
         <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("restaurantdb")or die("Connection Failed");
        
        
          if(isset($_POST['FoodId'])&&($_POST['Price'])){
               $foodId = $_POST['FoodId'];
       
         $price = $_POST['Price'];
         
        
        $query = "UPDATE food SET Price = '$price' WHERE FoodId = '$foodId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}
          }
       
        ?> 
        
        
        
        
         <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("restaurantdb")or die("Connection Failed");
        
        
        
         if(isset($_POST['FoodId'])&&($_POST['FoodImg'])){
             
              $foodImg = $_POST['FoodImg'];
        
        $query = "UPDATE food SET FoodImg = '$foodImg' WHERE FoodId = '$foodId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}
         }
       
        
        ?> 
    
    
    
<div id="main">
    

<div id="login">
<h2>Update Food</h2>
<form action="UpdateFood.php" method="post"> Food Id:
    
    <?php
mysql_connect('localhost','root','');

mysql_select_db('restaurantdb');

$sql="SELECT FoodId FROM food";
$result=  mysql_query($sql);

echo "<select  name='FoodId' type='int'>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['FoodId']."'>".$row['FoodId']."</option>";
}

echo "</select>";
?>
    
    
    
    <form method="post" name="update" action="update.php" />
    Food Name:   <input type="text" name="FoodName" /> 
    Food Type:   <input type="text" name="FoodType" /> 
    Price:   <input type="double" name="Price" /> 
    Food image:   <input type="text" name="FoodImg" /> <br><br>
    <input type="submit" name="Submit" value="update" />
    </form> 
    
    
    
</form> 



</div>
</div>
        
        
        
      
        
        
        
       
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>