
<!DOCTYPE html>
<html>
<head>
<title>Delete Booking Page</title>

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
        
        
        if(isset($_POST['BookingId'])){
       $id = $_POST['BookingId'];
       
        
     
        $query = "delete from booking where BookingId = '".$id."'";
        
        
        if(mysql_query($query)){ echo "deleted";} else{ echo "fail";} 
        
        }
       ?>
    
    
    
<div id="main">
    

<div id="login">
<h2>Delete Booking</h2>
<form action="DeleteBooking.php" method="post"><p> Id: </p>
    
    <?php
mysql_connect('localhost','root','');

mysql_select_db('restaurantdb');

$sql="SELECT BookingId FROM booking";
$result=  mysql_query($sql);

echo "<select  name='BookingId' type='int'>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['BookingId']."'>".$row['BookingId']."</option>";
}

echo "</select>";
?>
    
    <br><br>
    
    <input name="Submit" type="submit" value="delete record" /> 
</form> 



</div>
</div>
        
        
        
      
        
        
        
       
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html><?php


