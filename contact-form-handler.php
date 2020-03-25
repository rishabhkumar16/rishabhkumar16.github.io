<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['messsage'];
$subject = $_POST['subject'];

$to= "rishabhkumar.jsrair@gmail.com";
$headers = "From: ".$visitor_email;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($to,$subject,$txt,$headers);
header("Location: index.html?mailsent")
}
?>
