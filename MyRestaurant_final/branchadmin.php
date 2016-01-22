
<!DOCTYPE html>
<html>
<head>
<title>Insert Branch Page</title>

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
                   
                    
                   
             
    
    
    
<div id="main">

<div id="login">
<h2>Insert Branch</h2>
<form action="branchadmin.php" method="post">
<label>BranchName :</label>
<input id="name" name="BranchName" placeholder="branchname" type="text">
<label>Location :</label>
<input id="password" name="Location" placeholder="Location" type="text">

<label>ContactNo :</label>
<input id="name" name="ContactNo" placeholder="Contact number" type="double">
<label>BranchImg :</label>
<input id="password" name="BranchImg" placeholder="image address" type="text"><br><br>

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
            $sql="INSERT INTO branch(BranchName,Location,ContactNo,BranchImg)
                VALUES('$_POST[BranchName]','$_POST[Location]','$_POST[ContactNo]','$_POST[BranchImg]')";
            
            mysql_query($sql,$con);
            mysql_close($con);
        }
        ?>
        
        <footer>
            <font size="4" color="black"> copyright@2015. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>