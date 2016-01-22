
<!DOCTYPE html>
<html>
<head>
<title>Party Booking Page</title>
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
<h2>Party booking</h2>
<form action="Partybooking.php" method="post">
<label>Customer Name :</label>
<input id="name" name="CustomerName" placeholder="Customer name" type="text">
<label>Contact No :</label>
<input id="password" name="ContactNo" placeholder="Contact Number" type="text">

<label>Email :</label>
<input id="name" name="Email" placeholder="Email" type="text">
<label>Number of persons :</label>



                      
                     
                      
                      <td><select id="name" name="PersonNumber" required="" type="int">
                              <option value="">Select----------</option>
                              <option value="10">10</option>
                              <option value="15">15</option>
                              <option value="20">20</option>
                               <option value="25">25</option>
                               <option value="30">30</option>
                               
                               <option value="50">50</option>
                               <option value="70">70</option>
                               <option value="100">100</option>
                               <option value="120">120</option>
                               <option value="150">150</option>
                               <option value="170">170</option>
                               <option value="200">200</option>
                               
                               
                               </select>
                          
                      </td>
 

<label>BookingDate :</label>
<input id="name" name="BookingDate" placeholder="Booking date" type="date">

<label>TimeBand :</label>



 <td><select id="name" name="TimeBand" required="" type="text">
                              <option value="">Select----------</option>
                              <option value="10 A.M">10 A.M</option>
                              <option value="1 P.M">1 P.M</option>
                              <option value="3 P.M">3 P.M</option>
                              <option value="6 P.M">6 P.M</option>
                               <option value="8 P.M">8 P.M</option>
                               
                               
                               </select>
                          
                      </td><br><br>



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
            $sql="INSERT INTO booking(CustomerName,ContactNo,Email,PersonNumber,BookingDate,TimeBand)
                VALUES('$_POST[CustomerName]','$_POST[ContactNo]','$_POST[Email]','$_POST[PersonNumber]','$_POST[BookingDate]','$_POST[TimeBand]')";
            
            mysql_query($sql,$con);
            mysql_close($con);
        }
        ?>
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>