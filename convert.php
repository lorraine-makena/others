<?php
$date = "29/9/1912 10:37a.m";
//convert data and time to seconds
$sec = strtotime($date);
//convert seconds into specific format
$newdate = date("Y-d-M h:i", $sec);
//append seconds with the time
$newdate = $newdate; #. "00";
//display converted time and date
echo "the new date format is:" . $newdate;
