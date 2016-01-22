<?php

require ("Entities/BookingEntity.php");


class BookingModel {

    
    function GetBookingTypes() {
        require 'Credentials.php';

        
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT BookingId FROM booking") or die(mysql_error());
        $types = array();

        
        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        
        mysql_close();
        return $types;
    }

    
    function GetBookingByType($BookingId) {
        require 'Credentials.php';

           
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM booking WHERE BookingId LIKE '$BookingId'";
        $result = mysql_query($query) or die(mysql_error());
        $bookingArray = array();

        
        while ($row = mysql_fetch_array($result)) {
            $BookingId=$row[0];
            $CustomerName = $row[1];
            $ContactNo = $row[2];
            $Email = $row[3];
            
            $PersonNumber = $row[4];
           
            $BookingDate = $row[5];
            
            $TimeBand = $row[6];
            

            
            $booking = new BookingEntity($BookingId, $CustomerName, $ContactNo, $Email,$PersonNumber,$BookingDate,$TimeBand);
            array_push($bookingArray, $booking);
        }
        
        mysql_close();
        return $bookingArray;
    }

}

?>
