<?php

echo "this is the php script";

if(empty($_POST['submit']))
{
	echo "Form is not submitted! from php";
	exit;
}
if(empty($_POST["name"]) ||
	empty($_POST["email"]) ||
	empty($_POST["phone"]) ||
	empty($_POST["message"]))
	{
		echo "Please fill the form from php";
		exit;
	}
	
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

mail( 'kitc12322@gmail.com' , 'New form submission' , 
"New form submission: Name: $name, Email: $email, Phone: $phone, Message: $message");

// header('Location: thank-you.html');

?>