<?php

$link = mysql_connect("localhost", "temp","temp");

if(!$link) die("mysql connection error - " . mysql_errno());

if(!mysql_select_db("accounter")) die("cannot connect database - " . mysql_errno());

require './tools/pageControl.php';

$pageCtr = new pageControl;

?>