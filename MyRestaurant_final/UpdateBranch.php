
<!DOCTYPE html>
<html>
<head>
<title>Update Branch Page</title>

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
        
        
         if(isset($_POST['BranchId'])&&($_POST['BranchName'])){
             
           $branchId = $_POST['BranchId'];
        $branchName = $_POST['BranchName'];
        
        
        
        $query = "UPDATE branch SET BranchName = '$branchName' WHERE BranchId = '$branchId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
         <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("restaurantdb")or die("Connection Failed");
        
        
        if(isset($_POST['BranchId'])&&($_POST['Location'])){
            $branchId = $_POST['BranchId'];
       
         $location = $_POST['Location'];
        
        
        $query = "UPDATE branch SET Location = '$location' WHERE BranchId = '$branchId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}
        }
        
        ?> 
        
        
        
        
         <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("restaurantdb")or die("Connection Failed");
        
        
        
         if(isset($_POST['BranchId'])&&($_POST['ContactNo'])){
             
              $contactNo = $_POST['ContactNo'];
        
        $query = "UPDATE branch SET ContactNo = '$contactNo' WHERE BranchId = '$branchId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}
         }
       
        
        ?> 
        
        
        
         <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("restaurantdb")or die("Connection Failed");
        
        
          if(isset($_POST['BranchId'])&&($_POST['BranchImg'])){
               $branchId = $_POST['BranchId'];
       
         $branchImg = $_POST['BranchImg'];
         
        
        $query = "UPDATE branch SET BranchImg = '$branchImg' WHERE BranchId = '$branchId'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}
          }
       
        ?> 
        
        
        
        
        
    
    
    
<div id="main">
    

<div id="login">
<h2>Update Branch</h2>
<form action="UpdateBranch.php" method="post"> Branch Id:
    
    <?php
mysql_connect('localhost','root','');

mysql_select_db('restaurantdb');

$sql="SELECT BranchId FROM branch";
$result=  mysql_query($sql);

echo "<select  name='BranchId' type='int'>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['BranchId']."'>".$row['BranchId']."</option>";
}

echo "</select>";
?>
    
    
    
    <form method="post" name="update" action="update.php" />
    Branch Name:   <input type="text" name="BranchName" /> 
    Location:   <input type="text" name="Location" /> 
    Contact No:   <input type="text" name="ContactNo" /> 
    Branch image:   <input type="text" name="BranchImg" /> <br><br>
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