<!DOCTYPE html>
<html lang="en">
<head>
	<body>
	<title>Contact Me</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"><link href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|VT323" rel="stylesheet">
</head>
<body>
<div class="main">


	<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About Me</a></li>
		<li><a href="blog.php">My Blog</a></li>
		<li><a href="portfolio.php">My Work</a></li>
		<li><a href="contact.php">Contact Me</a></li>
	</ul>

</nav>

<h2>Keep in Touch!</h2>

<form method="post" name="myemailform" action="form-to-email.php">

	<input type="text" class="iform" placeholder="Name">

	<input type="text" type= "email" class="iform" placeholder="Email">

<textarea class="iform" placeholder="Message"></textarea>

<button class="btn">Send</button>
	<?php 
	name = $_POST[name'];
	$visitor_email = $_POST['email'];
    $message = $_POST['message'];
	?>

	<?php
	$email_from = 'jaynellealeman@gmail.com';
	$email_subject = "New Form submission";
	$email_body = "You have received a new message from the user $name.\n"."Here is the message:\n $message".

	?>

</form>

<div class="push">
</div>

<footer class="footer">&#169 Jaynelle Aleman</footer>

</body>
</html>
