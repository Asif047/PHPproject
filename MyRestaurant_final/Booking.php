<?php

require 'Controller/BookingController.php';
$bookingController = new BookingController();

if(isset($_POST['types']))
{
    
    $bookingTables = $bookingController->CreateBookingTables($_POST['types']);
}
else 
{
   
    $bookingTables = $bookingController->CreateBookingTables('%');
}


$title = 'Parties overview';
$content = $bookingController->CreateBookingDropdownList(). $bookingTables;

include 'bookinginfo.php';
?>
