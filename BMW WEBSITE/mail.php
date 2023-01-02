<?php
//get data from form  
$name = $_POST['fname'];
$email= $_POST['email'];
$address= $_POST['address'];
$date= $_POST['date'];
$time= $_POST['time'];
$package = $_POST['package'];
$car = $_POST['car'];
$to = "ranges.studio@gmail.com";
$subject = "Customer Request";
$txt ="Name: ". $name . "\r\n  Email: " . $email . "\r\n Address: " . $address. "\r\n Data and Time:" . $date;
$headers = "From: noreply@ranges.tuneups.com" . "\r\n" .
"CC: ranges.studio@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>