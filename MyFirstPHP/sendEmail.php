<?php

include('header.php');

include('link.php');

$username = $_POST["username"];
$userpass = $_POST["password"];
$useremail = $_POST["email"];

$setSQL = "INSERT INTO `admin`(`user`, `pass`, `pri`, `email`) VALUES ('" . $username . "','" . $userpass . "',0,'" . $useremail . "')";

//echo $setSQL;

mysql_query($setSQL);

$getIDSQL = "SELECT id FROM `admin` WHERE `user` = '" . $username . "' AND `pass` = '" . $userpass . "'";

$result = mysql_query($getIDSQL);
$userID = mysql_fetch_assoc($result);

include('mailer.php');

$url = "http://localhost/PHPSampleCodes/MyFirstPHP/idcheck.php?id=" . $userID["id"];
$ahref = "<a href=\"" . $url . "\">" . $url . "</a>";
$htmlurl = "<table><tr><td>welcome and please link the following url</td><td>" . $ahref . "</td></tr></table>";

$mail->Body = $htmlurl;
$mail->AddAddress($useremail);

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 
$url = "index.php";

?>

   <div id="main">
        <div class="content wrap clearfix">
        	<div class="column-a left">
        	Please Check your e-mail <?php echo $useremail; ?>
        	</div>
        </div>
    </div>
 
</body>
</html>