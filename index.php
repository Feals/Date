<?php
$presentTime = new DateTime();
$destinationTime = new DateTime('04/26/2023 12:00 PM');

var_dump($presentTime);
var_dump($destinationTime);

echo "Date actuel : " . $presentTime->format('m/d/Y g:i A') ."<br>"; 
echo "Date de destination : " . $destinationTime->format('m/d/Y h:i A') ."<br><br><br>"; 


echo "Date actuel: " . $presentTime->format("M d Y A g:i ") ."<br>"; 
echo "Date de destination  : " .$destinationTime->format("M d Y A h:i") ."<br><br><br>"; 

$interval = $presentTime->diff($destinationTime);
echo "Time inteval : " . $interval->format("%y years, %m months, %d days, %h hours, %i minutes") . "<br><br><br>"; 


$timestampPresentTime = strtotime($presentTime->format('m/d/Y g:i A'));
echo $timestampPresentTime. '<br />'; 

$timestampDestinationTime = strtotime($destinationTime->format('m/d/Y h:i A'));
echo $timestampDestinationTime. '<br />'; 

$intervalInTimestamp = $timestampDestinationTime - $timestampPresentTime;
echo $intervalInTimestamp. '<br />'; 

$intervalInMinutes = $intervalInTimestamp / 60;
echo $intervalInMinutes;