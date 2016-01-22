<?php

class FoodEntity
{
    public $FoodId;
    public $FoodName;
    public $FoodType;
    public $Price;
   
    public $FoodImg;
  
    
    function __construct($FoodId, $FoodName, $FoodType, $Price,  $FoodImg) {
        $this->FoodId = $FoodId;
        $this->FoodName = $FoodName;
        $this->FoodType = $FoodType;
        $this->Price = $Price;
      
        $this->FoodImg = $FoodImg;
    
    }

}

?>
