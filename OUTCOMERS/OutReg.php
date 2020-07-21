<?php 

	session_start();
	//connect to database using mysqli  --
	$db=mysqli_connect("localhost","root","","meca register");
	// data i need to submit 
	$name = $email = $year= $reason= $knowing = $uni ="";
	//error messages
	$nameErr = $emailErr =$yearErr= $reasonErr = $knowingErr= $uniErr ="";

	//check connection 

				//////////////////////////////////////////////////
		///////////////////////////////////////////////////
		///////////////////////////////////////////

				//error message
			    echo "Error: Unable to connect to MySQL." . PHP_EOL;

			   //error code
			    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			    //error discription
			    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			    exit;
				}







	else{

			if(isset($_POST['submit']))
			{ 
				// check data is correct
					// get data
					if (empty($_POST["name"]))
					{$nameErr = "Name is required";}
					else{
						$name = test_input($_POST["name"]);
						// check if name only contains letters and whitespace
					    if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
					    {
					      $nameErr = "Only letters and white space allowed"; 
					  	}
					}

					if(empty($_POST["email"])){
						$emailErr = "E-mail is required";	
					}else{
						$email = test_input($_POST["email"]);
						// check if e-mail address is well-formed
					    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
					     {
					      $emailErr = "Invalid email format"; 
					     }

					     //check the email is not used
					     ///////////////////////////////////////////////////////
					     ////////////////////////////////////////////////////////
					     /////////////////////////////////////////
					    
					}

					if (empty($_POST["uni"]))
					{$uniErr = "university is required";}
					else{
						$uni = test_input($_POST["uni"]);
						
					}





					if(empty($_POST["year"])){
						$yearErr = "year is required";
					}else{
						$year =test_input($_POST["year"]);
					}


					if(empty($_POST["reason"])){
						$reasonErr = "tell us the reason";
					}else{
						$reason =test_input($_POST["reason"]);
					}


					if(empty($_POST["knowing"])){
						$knowingErr = "how do you know us ?";
					}else{
						$knowing =test_input($_POST["knowing"]);
					}




					if( empty($nameErr) && empty( $emailErr) &&empty($yearErr)&& empty( $reasonErr )&& empty( $knowingErr)&&empty( $uniErr) )
					{
						//no error create user

						
						//query string 
						$insert="INSERT INTO accounts(name ,email, uni ,year,reason ,knowing ) VALUES ('$name' ,'$email' ,'$uni' , '$year' , '$reason' ,'$knowing')";
						//inserting 
						 $in=mysqli_query($db,$insert);
					      if ($in)
					      {
					       
					      
					      //unique property    not required in this case
					      $_SESSION['username']=$username;
					      
					                          
					      //redirect
					      header("location:     ");
					      //////////////////////////////////////////////////////////////////////////
					      ///////////////////////////////////////////////////////////////////////////
					      //////////////////////////////////////////////////////////////////////////

					      //register message


					      }
					      else {

					       //failed message
					          echo "Error: " . $insert . "<br>" . mysqli_error($db); 
					          
					      }
						

					}
					else
					{
					   //error	
					}


				   	 
				     
				     
				     
				     
				     


				  

			}
		}






		// define data handling fun
		function test_input($data) {
			//trim spaces
		  $data = trim($data);
	  		//undo slash char due to special chars
		  $data = stripslashes($data);
		    //encode special char
		  $data = htmlspecialchars($data);

		  return $data;
		}


?>



<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- external style sheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- googlefonts -->
<link href="https://fonts.googleapis.com/css?family=Amaranth|Kavivanar|Quicksand" rel="stylesheet">
</head>
<body>

	<!-- whole page   -->
	<div class=" page container-fluid  ">
		<div class="row qq" >
			<!-- form area  -->
			<div class="  reg  col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8" >
				<div class="container-fluid ">
					<div class="row">

						<form  target=""  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							
							<fieldset>

									 <legend >
                                        <!-- insert meca logo -->
									 	<img src="   " width="60" height="60" class=" " alt="">

									 	<span class="text" style="font-weight:lighter;font-size: 110%;">O</span>ur <span class="text" style="font-weight:lighter;font-size: 110%;">M</span>eca
									</legend>

									<div class="input-group col-xs-offset-2 col-xs-8">
					    			<label class="text" >Your Name : </label><br>

									<input type="text" name="name"  class="form-control" placeholder="Enter Your Full Name" autofocus required>
									<br><label class="tex" ><?php echo $nameErr;?> </label><br>
									
									</div>

									<div class="input-group  col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">

										<label class="text" >E-Mail : </label><br>

											<input type="email" name="email" class="form-control" placeholder="Enter Your E-Mail" required value="<?php echo $email;?>">
											<br><label class="tex" ><?php echo $emailErr;?> </label><br>
									</div>

									<div class="input-group  col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">

										<label class="text" >University : </label><br>

											<input type="text" name="uni" class="form-control" placeholder="Choose Your University" required  value="<?php echo $uni;?>">

											<br><label class="tex" ><?php echo $uniErr;?> </label><br>
									</div>

									<div class="input-group  col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">

										<label class="text" >Year : </label><br>

											

											 <select  id="Id_Year" class="form-control" name="year" required>
										      <option  autofocus value="first">First year</option>
										      <option value="second">Second year </option>
										      <option value="third">Third year</option>
										      <option value="forth">Forth year </option>
										      <option value="fifth">Fifth year </option>

										    </select>

										    <br><label class="tex" ><?php echo $yearErr;?> </label><br>
									</div>

									<div class="input-group  col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">

										<label class="text" > Reason of coming  : </label><br>

											<textarea type="text" name="reason" class="form-control" placeholder="Write the reason of your coming ?..." required value="<?php echo $reason;?>"></textarea>
											<br><label class="tex" ><?php echo $reasonErr;?> </label><br>
									</div>



									<div class="input-group  col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">

										<label  class="text">How do you know meca ?</label> <br>

											<textarea  name="knowing"  class="form-control" placeholder="How do you know meca ?..."   required value="<?php echo $knowing;?>"></textarea><br>
											<br><label class="tex" ><?php echo $knowingErr;?> </label><br>
									</div>




									 <div class="input-group col-xs-offset-3  col-xs-6 col-sm-offset-3  col-sm-6 col-md-offset-3  col-md-6 col-lg-offset-3  col-lg-6 ">
									 	<input class=" text btn btn-default btn-block"  name="submit" type="submit" value="Submit">
									 </div>


									
					  


							</fieldset>
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
