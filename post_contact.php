<?php
$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
	$errors['name'] = "Vous n'avez pas renseigné votre nom";
 }
 
if(!array_key_exists('mail', $_POST) || $_POST['mail'] == ''){
	$errors['mail'] = "Vous n'avez pas renseigné votre e-mail";
 }
 if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
	$errors['message'] = "Vous n'avez pas renseigné de contenu";
 }

if(!empty($errors)){
	session_start();
	$_SESSION['errors'] = $errors;
	header('Location: index.php');
}else{

	$message = $_POST['message'];
	$headers = 'FROM: site@local.dev';
	mail('pabfaust@gmail.com', "Contact via Ouest Drapeaux", $message, $headers);
}