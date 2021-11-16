<?php
$change = "2021-09-29";
//writing the date()in caps locks gives the actual name of the month and full year 
$to = date("Dd-M-Y", strtotime($change));
echo "the new date format is:  $to (m-d-y)";
