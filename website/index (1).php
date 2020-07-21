<?php include 'database.php'; ?>
<?php
//	$query = "SELECT * FROM `questions`";
//	$result = mysql_query($query);
//	$total = mysql_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Quizzer</title>
          <script type = "text/javascript" >

   function preventBack(){window.history.forward();}

    setTimeout("preventBack()", 0);

    window.onunload=function(){null};

</script>
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
			<h2>Test your PHP knowledge</h2>
			<p class="noselect" style="  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none;">This is a muliple choice quiz to test your knowledge of php</p>
			<ul>
				<li><strong>Number of Qusetions: </strong>15<?php //echo $total; ?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong>30<?php //echo 0.5*$total; ?> Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright copy:2014, PHP Quizzer
        </div>
	</footer>

<script type="text/javascript"> $(document).keyup(function(e){
  if(e.keyCode == 44) return false;
}); </script>
</body>
</html>