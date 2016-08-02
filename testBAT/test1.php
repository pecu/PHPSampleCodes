<?php

//test1.php
//creates, appends current time in a file called dump1.txt
date_default_timezone_set("Asia/Taipei");
$time = date("F j, Y, g:i a");
$file = "C:/AppServ/www/PHPSampleCodes/testBAT/dump1.txt";
file_put_contents($file,"job1 run on: $time\r\n", FILE_APPEND);

?>