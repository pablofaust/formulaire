<?php
	session_start();
?><!DOCTYPE html>
<html class="no-js" lang="es_ES">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link type="text/css" rel="stylesheet" href="css/style.css" />
  <link type="text/css" rel="stylesheet" href="css/boostrap.css" />
  <title>Formulaire</title>

</head>

<body>



<div class="container">

	<div class="starter-template">

		<?php if(array_key_exists('errors', $_SESSION)): ?>
			<div class="alert alert-danger">
				<?= implode('<br>', $_SESSION['errors']); ?>
			</div>
		<?php endif; ?>


		<form action="post_contact.php" method="POST">
			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						<label for="inputname">Votre nom</label>
						<input type="text" name="nom" class="form-control" id="inputname">
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<label for="inputemail">Votre email</label>
						<input type="text" name="mail" class="form-control" id="inputemail">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<label for="inputmessage">Votre message</label>
						<textarea id="inputmessage" name"message" class="form-control">
						</textarea>
			</div>
			<button type="submit" class="btn btn-primary">Envoyer</button>
		</form>
	</div>
</div>