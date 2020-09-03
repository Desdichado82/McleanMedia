mail.php
<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$objet = $_POST['objet']
$message = $_POST['message'];
$formcontent= "From : $name \n Message: $message";
$recipient = "Mclean_1982@hotmail.com";
$subject = #Contact Form";
$mailheader = "From:$email /r/n";
$mail($recipient,$subject,$formcontent,$mailheader)or die ("Error!");
echo "Merci!"."-"."<a href='index.html' style='text-decoration:none;color:#39ff14;'>Retour </a>";
?>
