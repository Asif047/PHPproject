<?php

require ("Model/BookingModel.php");


class BookingController {

    function CreateBookingDropdownList() {
        $bookingModel = new BookingModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                   <p> Please select a ID: </p>
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($bookingModel->GetBookingTypes()) .
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
    
    function CreateBookingTables($types)
    {
        $bookingModel = new BookingModel();
        $bookingArray = $bookingModel->GetBookingByType($types);
        $result = "";
        
        
        foreach ($bookingArray as $key => $booking) 
        {
            $result = $result .
                    "<table class = 'bookingTable'>
                        <tr>
                           
                            
                            
                            <th width = '75px' >BookingId : </th>
                            <td>$booking->BookingId</td>
                        </tr>
                          
                        <tr>
                            <th width = '75px' >Customer Name : </th>
                            <td>$booking->CustomerName</td>
                        </tr>
                        
                        <tr>
                            <th>Contact Number : </th>
                            <td>$booking->ContactNo</td>
                        </tr>
                        
                        <tr>
                            <th>Email : </th>
                            <td>$booking->Email</td>
                        </tr>
                        
                            
                        <tr>
                            <th>No.of Persons : </th>
                            <td>$booking->PersonNumber</td>
                        </tr>
                        
                        <tr>
                            <th>BookingDate : </th>
                            <td>$booking->BookingDate</td>
                        </tr>
                        
                        <tr>
                            <th>TimeBand : </th>
                            <td>$booking->TimeBand</td>
                        </tr>
                        
                    
                        
                                         
                     </table>";
        }        
        return $result;
        
    }

}

?>
