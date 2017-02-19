<?php
	$addres = "marketing@flagmanstudio.com"; /*Your Email*/
	$subject = "Сообщение с сайта Крымской Киномастерской"; /*Issue*/
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 	
	$Email=$_REQUEST['Email'];

	$msg="
	Name: $_REQUEST[Name]
	Email: $_REQUEST[Email]
	Message: $_REQUEST[Message]

	Message sent from website on date  $date, hour: $time.\n

	Message:
	$_REQUEST[Message]";

    mail($addres, $subject, $msg, "From: $Email");
    echo "<div class='alert alert-success'>Спасибо, с вами обязательно свяжутся</div>";

	
?>
