<?php

require ("Entities/FoodEntity.php");


class FoodModel {

    
    function GetFoodTypes() {
        require 'Credentials.php';

        
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT FoodType FROM FOOD") or die(mysql_error());
        $types = array();

       
        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        
        mysql_close();
        return $types;
    }

    
    function GetFoodByType($type) {
        require 'Credentials.php';

         
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM FOOD WHERE FoodType LIKE '$type'";
        $result = mysql_query($query) or die(mysql_error());
        $foodArray = array();

        
        while ($row = mysql_fetch_array($result)) {
            $FoodId=$row[0];
            $FoodName = $row[1];
            $FoodType = $row[2];
            $Price = $row[3];
           
            $FoodImg = $row[4];
            

           
            $food = new FoodEntity($FoodId, $FoodName, $FoodType, $Price,  $FoodImg);
            array_push($foodArray, $food);
        }
        
        mysql_close();
        return $foodArray;
    }

}

?>
