<?php
//checking results
if(isset($_POST['Check_result'])){
    $mobile = $_SESSION['Mobile'];
//echo "here";
    //echo $_SESSION['Mobile'];
    $query = "SELECT * FROM `students` WHERE `Mobile`='$mobile' ";
    $result = mysql_query($query);
    $row= mysql_fetch_row($result);
    if($row [10]==1)
    {
    header('location:congratulations.php');
    }
    else{
        header('location:sorry.php');
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
  <meta name="description" content="">
  
  <meta name="keyword" content="meca,knowledge,asu">
  <title>MECA</title>
    <link rel="stylesheet" href="css/Home.css">
    <link rel="stylesheet" href="css/normalize.css">
     <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="shortcut icon" href="images/logo.ico">
    
</head>
<body>
    
    
</body>

</html>