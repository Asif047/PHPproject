<?php

require 'Controller/FoodController.php';
$foodController = new FoodController();

if(isset($_POST['types']))
{
   
    $foodTables = $foodController->CreateFoodTables($_POST['types']);
}
else 
{
   
    $foodTables = $foodController->CreateFoodTables('%');
}


$title = 'Food overview';
$content = $foodController->CreateFoodDropdownList(). $foodTables;

include 'foodinfo.php';
?>
