
<!DOCTYPE html>
<html>
<head>
<title>Order food page</title>
<link rel="stylesheet" type="text/css" href="Styles/Stylesheet3.css" />

 <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
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
                   
                    
                   
             
    
    
    
<div id="main">

<div id="login">
<h2>Order Food</h2>
<form action="Orderform.php" method="post">
<label>Customer Name :</label>
<input id="name" name="CustomerName" placeholder="Customer name" type="text">
<label>Address :</label>
<input id="password" name="Address" placeholder="Address" type="text">

<label>Contact No :</label>
<input id="name" name="ContactNo" placeholder="Contact Number" type="text">

<br><br>

<label>Food Name :</label><br>



<?php
mysql_connect('localhost','root','');

mysql_select_db('restaurantdb');

$sql="SELECT FoodName FROM food";
$result=  mysql_query($sql);

echo "<select  name='FoodName' type='text'>   <option value = ' ' ></option>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['FoodName']."'>".$row['FoodName']."</option>";
}

echo "</select>";
?><br><br>


<label>Quantity(food1) :</label>
<input id="name" name="Quantity" placeholder="Quantity" type="int">

<br><br>





<label>Food Name2 :</label><br>



<?php
mysql_connect('localhost','root','');

mysql_select_db('restaurantdb');

$sql="SELECT FoodName FROM food";
$result=  mysql_query($sql);

echo "<select  name='FoodName2' type='text'>   <option value = ' ' ></option>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['FoodName']."'>".$row['FoodName']."</option>";
}

echo "</select>";
?><br><br>


<label>Quantity(food2) :</label>
<input id="name" name="Quantity2" placeholder="Quantity" type="int">

<br><br>





<label>Food Name3 :</label><br>



<?php
mysql_connect('localhost','root','');

mysql_select_db('restaurantdb');

$sql="SELECT FoodName FROM food";
$result=  mysql_query($sql);

echo "<select  name='FoodName3' type='text'>   <option value = ' ' ></option>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['FoodName']."'>".$row['FoodName']."</option>";
}

echo "</select>";
?><br><br>


<label>Quantity(food3) :</label>
<input id="name" name="Quantity3" placeholder="Quantity" type="int">


       
<br><br><label>N.B:Sir you can't order more than 3 foods at a time</label>  <br><br> 
                          
                      
   <label>OrderDate :</label>
<input id="name" name="OrderDate" placeholder="Order date" type="date">                   
                      
                      
<br><br><br><label>Branch Name :</label><br>

<?php
mysql_connect('localhost','root','');

mysql_select_db('restaurantdb');

$sql="SELECT BranchName FROM branch";
$result=  mysql_query($sql);

echo "<select   name='BranchName' type='text'>";

while($row=  mysql_fetch_array($result))
{
    echo "<option  value='".$row['BranchName']."'>".$row['BranchName']."</option>";
}

echo "</select>";
?>




<br><br>

<input name="submit" type="submit" value=" Submit ">
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
            $sql="INSERT INTO orders(CustomerName,Address,ContactNo,FoodName,Quantity,FoodName2,Quantity2,FoodName3,Quantity3,BranchName,OrderDate)
                VALUES('$_POST[CustomerName]','$_POST[Address]','$_POST[ContactNo]','$_POST[FoodName]','$_POST[Quantity]','$_POST[FoodName2]','$_POST[Quantity2]','$_POST[FoodName3]','$_POST[Quantity3]','$_POST[BranchName]','$_POST[OrderDate]')";
            
            mysql_query($sql,$con);
            mysql_close($con);
        }
        ?>
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>