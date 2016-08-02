<?php
include ("header.php");
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=big5">
	<title></title>
	<link rel="stylesheet" href="icon.css">
</head>
<?php
include('link2.php');

$getIDSQL = "SELECT COUNT(*) FROM `userdata`";
$result = mysql_query($getIDSQL);
$getCount = mysql_fetch_assoc($result);
$allDataNo = $getCount["COUNT(*)"];



$printData = "SELECT * FROM `userdata` WHERE `id`=$allDataNo";
$print = mysql_query($printData);
$row =  mysql_fetch_assoc($print);
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
<?php
echo "<h2>"."Please confirm your information"."</h2>";

echo "<tr>";
echo "<td>". "<h3>" ."Name:". $row['name']."<h3>" . "</td>"."<br>";
echo "<td>" ."<h3>" . "English Name:".$row['english_name']."<h3>". "</td>"."<br>";
echo "<td>" . "<h3>" ."Birthday". $row['birthday']."<h3>". "</td>"."<br>";
echo "<td>" . "<h3>" ."Passport Numbers:". $row['passportnum']."<h3>". "</td>"."<br>";
echo "<td>" . "<h3>" ."Phone:". $row['phone']."<h3>". "</td>"."<br>";
echo "<td>" ."<h3>" . "Address:".$row['address']."<h3>". "</td>"."<br>";
echo "<td>" . "<h3>" . "E-mail:".$row['email']."<h3>". "</td>"."<br>";
echo "</tr>";
?>

<?php
include("footer.php");
?>
