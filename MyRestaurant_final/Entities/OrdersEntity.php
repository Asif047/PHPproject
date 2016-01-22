<?php

class OrdersEntity
{
    public $OrderId ;
    public $CustomerName;
    public $Address ;
    public $ContactNo ;
   
    public $FoodName ;
    public $Quantity;
    
    public $FoodName2 ;
    public $Quantity2;
    
    public $FoodName3 ;
    public $Quantity3;
    
  
    
    public $BranchName;
    
    public $OrderDate;
   
    
    function __construct($OrderId,$CustomerName, $Address, $ContactNo, $FoodName ,$Quantity, $FoodName2 ,$Quantity2, $FoodName3 ,$Quantity3,$BranchName,$OrderDate)
    {
        $this->OrderId = $OrderId;
        $this->CustomerName = $CustomerName;
        $this->Address = $Address;
        $this->ContactNo = $ContactNo;
      
        $this->FoodName= $FoodName;
         $this->Quantity= $Quantity;
        
         
         $this->FoodName2= $FoodName2;
         $this->Quantity2= $Quantity2;
         
         $this->FoodName3= $FoodName3;
         $this->Quantity3= $Quantity3;
         
        $this->BranchName = $BranchName;
        
         $this->OrderDate = $OrderDate;
     
    
    }

}

?>
