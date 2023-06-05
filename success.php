<?php
	session_start();
	$name= $_SESSION['name'];
	$email = $_SESSION['email'];
	$issue = $_SESSION['issue'];
	$comment = $_SESSION['comment'];
?>

<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content= "width=device-width, initial-scale=1.0">
		<meta name="keyword" content= "contact form, html, css, php, mysql">
		<meta name="description" content= "Contact form using html, php, css">
		<meta name="author" content = "Olayemi John">
		
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		
		<title>Contact Form</title>
	</head>

<body>
	<div role="main">
		<header>
			<h1>Welcome <?= $name ?> </h1>
		</header>
		<p>Please confirm your information below:</p>
		<div id="user_info">
			<p>Name: <?= $name ?> </p>
			<p>E-mail: <?= $email ?>  </p>
			<p>Issue:  <?= $issue ?> </p>
			<p>Comment:  <?= $comment ?> </p>
		</div>
	</div>
</body>
</html>