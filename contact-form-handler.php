<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['messsage'];
$subject = $_POST['subject'];

$email_from = 'PORTFOLIO 2.0';
$email_subject = "New Message";
$email_body = "You have received an e-main from \n\n"
                "User Name: $name .\n\n".
                "User Email: $visitor_email .\n\n".
                "User Subject: $subject .\n\n".
                "User Message: $message .\n";

$to= "rishabhkumar.jsrair@gmail.com";
$headers = "From: $email_from \r\n";
$headers ="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: index.html?mailsent")
}
?>
