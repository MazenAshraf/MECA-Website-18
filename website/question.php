<?php include'database.php';?>
<?php session_start(); ?>
<?php
//set section number
	$number = (int) $_GET['n'];



	// //get question
	// $query = "SELECT * FROM `questions` WHERE `question_number` = '$number'";
	// //get result
	// $result = mysql_query($query);
	// $question = mysql_fetch_array($result);




	//get total number of questions
//	$query = "SELECT * FROM `questions`";
//	$result= mysql_query($query);
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
			<div class="current">Section <?php echo $number; ?> of 3</div>
			<p class="question"><?php
			//get question
                if($number==1)
                {
                    $min=1;
                    $max=5;
                    
                }
                else if($number==2){
                 $min=6;
                    $max=10;
                }
                else if($number==3){
                    $min=11;
                    $max=16;
                }
                $i=rand($min, $max);
                
                $q_number=1;
                
                $_SESSION['start']=$i;
                
             $random_q=array();
			while ($q_number<=4): ?>
            
			<?php
                $random_q[$q_number]=$i;
				$query = "SELECT * FROM `questions` WHERE `question_number` = '$i'";
				//get result
				$result = mysql_query($query);
				$question = mysql_fetch_array($result);
                echo $q_number.'-';
				echo $question['text'] ;
				?></p>
			<form method="post" action="process.php">
				<ul class="choices">
					<?php 	//get choices
                     
					$query = "SELECT * FROM `choices` WHERE `question_number`='$i'";
					//get results
					$choices = mysql_query($query); ?>
					<?php while($row = mysql_fetch_array($choices)): ?>
					<li><input type="radio" name="<?php echo $i; ?>" value="<?php echo $row['id']; ?>">
						<?php echo $row['text'];?>
					</li>
				<?php endwhile; ?>
				</ul>
                
                <?php
                $i=rand($min, $max);
                $u=1;
                while($u<=$q_number)
                {    
                    if($i==$random_q[$u])
                    {
                        $i=rand($min, $max);
                        $u=0;
                    }
                    
                    
                    $u=$u+1;
                    
                }
                
                $q_number++;
                
                
                
                
                
                
                
//                $i++;
                ?>
								<?php endwhile; ?>
                <?php
                $_SESSION['random_q']=$random_q;
                ?>
				<input type="submit" name="submit" value="submit">
				<input type="hidden" name="number" value="<?php echo $number; ?>">
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			copyright @2014
        </div>
	</footer>
    
</body>
</html>