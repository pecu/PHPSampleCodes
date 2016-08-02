<?php
include('link.php');
$user_name=$_POST['user_name'];
$user_uid=$_POST['user_uid'];
$user_pass=$_POST['user_pass'];
$user_adress=$_POST['user_adress'];
$user_phone=$_POST['user_phone'];
$user_email=$_POST['user_email'];
$sql="select count(*) FROM user2 WHERE user_uid='".$user_uid."'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);


$addno=$row['count(*)'];
/*
echo $addno;
*/
if ($addno==1){
	$url = "sing.php";
	echo "<script type='text/javascript'>";
	echo "alert('此帳號有人申請喔，請重新申請');";
	echo "window.location.href='$url'";
	echo "</script>"; 
}
/*
$sql="select * FROM user2  ORDER BY id  desc LIMIT 1 ";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$lastid=$row['user_id'];
echo "<br>".$lastid;
*/
$sql="INSERT INTO `user2` (`user_name`, `user_uid`, `user_pass`, `user_phone`, `user_adress`, `user_email`, `user_pri`) VALUES ('".$user_name."', '".$user_uid."', '".$user_pass."', '".$user_phone."', '".$user_adress."', '".$user_email."', '0') ";
mysql_query($sql);

$sql="select id from user2 where user_uid='".$user_uid."' and user_pass='".$user_pass."'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);

include('mailer.php');
$url="http://localhost/pro_drink/idcheck.php?id=".$row['id'];
$ahref = "<a href=\"" . $url . "\">" . $url . "</a>";
$htmlurl = "<table><tr><td>welcome and please link the following url</td><td>" . $ahref . "</td></tr></table>";
$mail->Body = $htmlurl;
$mail->AddAddress($user_email);
 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 
$url = "index.php";
echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";

?>