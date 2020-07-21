<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
$start=$_SESSION['start'];
$random_received=array();
$random_received=$_SESSION['random_q'];
$selected=array();
$selected[0]=5;
	if(!isset($_SESSION['score']))
	{
		$sections_score=array();
		$sections_score[1]=0;
		$sections_score[2]=0;
		$sections_score[3]=0;
        $sections_score[4]=0;
        $sections_score[5]=0;
        $sections_score[6]=0;
		$_SESSION['score']=$sections_score;
	}
	if(isset($_POST['submit'])||isset($_POST['next']))
	{
                 $qwe=1;
                 while($qwe<=4)
                 {
                    $selected[$qwe]=$_POST[''.$random_received[$qwe]];
//                     echo $_POST[''.$random_received[$qwe]];
                         
                   $qwe=$qwe+1;
                   $start=$start+1;

                 }
$_SESSION['choicess']=$selected;


		//$selected_choice = $_POST['choice'];
		$number = $_POST['number'];
		$next = $number + 1;

//		//get total number of questions
//		$query = "SELECT * FROM `questions`";
//		$result = mysql_query($query);
//		$total = mysql_num_rows($result);

		//get correct choice
        $K=1;
        $h=4;//number of questions of para
        if($number==5||$number==6)
        {
            $h=3;
        }
		while($k<=$h)
        {
            
                $no_q = $random_received[$K];
//echo $no_q;
                $query = "SELECT * FROM `choices` WHERE `question_number`='$no_q' AND `is_correct`=1";
                //get result
                $result = mysql_query($query);
                //get row
                $row = mysql_fetch_array($result);
            
			//header('location: final.php');
		  
                    if($row['id'] == $selected[$K] && $selected[$K]!='')
                        {
                            // //answer is correct
                            $sections_score=$_SESSION['score'];
                            $sections_score[$number]=$sections_score[$number]+1;
                            $_SESSION['score']=$sections_score;
                        }
                $K=$K+1;
            
        }


		if ($number ==6) {
                header('location: final.php');
        }
		else
		{
			unset($_SESSION['random_q']);
            unset($_SESSION['current_para']);
            unset($_SESSION['choicess']);
			header('location: question.php?n='.$next);
		}
	}
?>