<?php

//test2.php
//creates, appends current time in a file called dump2.txt
date_default_timezone_set("Asia/Taipei");
$time = date("Y-m-d H:i:s");
$file = "C:/AppServ/www/PHPSampleCodes/testBAT/dump2.txt";
file_put_contents($file,"job2 run on: $time\r\n", FILE_APPEND);

?>