<?php session_start(); ?>
<?php
$score = $_SESSION['score'];
unset($_SESSION['score']);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Quizzer</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>You're Done!</h2>
			<p>Congrats! You have completed the test</p>
			<p>Final Score: <?php echo $score; ?></p>
			<a href="question.php?n=1" class="start">Take Again</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright copy:2014, PHP Quizzer
	</footer>
</body>
</html>