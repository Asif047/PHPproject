<?php

require ("Model/FoodModel.php");


class FoodController {

    function CreateFoodDropdownList() {
        $foodModel = new FoodModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                   <p> Please select a type: </p>
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($foodModel->GetFoodTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    function CreateFoodTables($types)
    {
        $foodModel = new FoodModel();
        $foodArray = $foodModel->GetFoodByType($types);
        $result = "";
        
       
        foreach ($foodArray as $key => $food) 
        {
            $result = $result .
                    "<table class = 'foodTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$food->FoodImg' /></th>
                            
                            
                            <th width = '75px' >FoodId : </th>
                            <td>$food->FoodId</td>
                        </tr>
                          
                        <tr>
                            <th width = '75px' >Name : </th>
                            <td>$food->FoodName</td>
                        </tr>
                        
                        <tr>
                            <th>Type : </th>
                            <td>$food->FoodType</td>
                        </tr>
                        
                        <tr>
                            <th>Price : </th>
                            <td>$food->Price</td>
                        </tr>
                        
                    
                        
                                         
                     </table>";
        }        
        return $result;
        
    }

}

?>
