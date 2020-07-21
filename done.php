<?php session_start(); ?>
<?php include'database.php';?>

<!--
//UPDATE  `users` SET  `email` =  'mazenashraf@Live.com' WHERE CONVERT(  `name` USING utf8 ) =  'Mazen Ashraf Mohamed' AND CONVERT(  `email` USING utf8 ) =  'mazenashraf@Live.co' AND  `mobile` =1001331887 AND  `section1` =0 AND  `section2` =0 AND  `section3` =0 AND  `section4` =0 AND  `Test` =1 LIMIT 1 ;
//echo $mobile1;
 
            // $query1 = "UPDATE `users` SET `section1`=6 AND `section2`=6 AND `section3`=6 AND `section4`=7  WHERE `mobile` =$mobile1 ";
//DELETE FROM Customers
//WHERE CustomerName='Alfreds Futterkiste';
-->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Quizzer</title>
	<link rel="stylesheet" type="text/css" href="css/ques.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>Meca Quiz</h1>
		</div>
	</header>
	<main>
		<div class="container" id="middle">
			<h2>You've already Done your quiz !</h2>
            <p>Stay tuned for your result ;) </p>
			
		</div>
	</main>
	<footer>
		<div class="container">
			Developed by IT committee
        </div>
	</footer>
</body>
</html>