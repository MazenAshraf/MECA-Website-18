<?php 
 $number = (int) $_GET['n'];
$y=0;

    

 if($number==5){
                     $x=rand(1,2);
                     $query4="SELECT * FROM `Para`WHERE `para_no`= $x";
                     $para=mysql_query($query4);
                         while($row=mysql_fetch_array($para)){ 
                             echo "<h3><strong>Read the paragraph and answer accordingly:</strong></h3> ";
                           // echo"Read the paragraph and answer accordingly:";
                            echo "<br>";
                            echo $row['para_text']; 
                            echo "<br>";
                            $i=$row['question_no'];

                         }
                         $q=2;
                }

//show questions

            $random_q[$q_number]=$i;
        $query = "SELECT * FROM `questions` WHERE `question_number` = '$i'";
        //get result
        $result = mysql_query($query);
        $question = mysql_fetch_array($result);
                echo $q_number.'-';
        echo $question['text'] ;
                echo "\n";
      



//check if there is image

$check_Image=$question['images'];
                if($check_Image!=''){
               echo '  
                         <tr>  
                              <td>  
                                  <img src="data:image/jpg;base64,'.base64_encode($question['images'] ).'" height="200" width="200" class="img-thumnail" />  
                              </td>  
                         </tr>  
                     ';  
                }
?>
 <form method="post" action="process.php">
        <ul class="choices">
            
            
          <?php
                    //get choices
                    
          $query = "SELECT * FROM `choices` WHERE `question_number`='$i'";
          //get results
          $choices = mysql_query($query); ?>
          <?php while($row = mysql_fetch_array($choices)): ?>
          <li><input type="radio" name="<?php echo $i; ?>" value="<?php echo $row['id']; ?>">
            <?php echo $row['text'];?>
                        
                        <?php $check_Image=$row['Images'];
                        if($check_Image!=''){
                         echo '  
                         <tr>  
                              <td>  
                                  <img src="data:image/jpg;base64,'.base64_encode($row['Images'] ).'" height="200" width="200" class="img-thumnail" />  
                              </td>  
                         </tr>  
                        ';                            
                        }
                        ?> 
                        
          </li>
        <?php endwhile; ?>
        </ul>
<?php 
      if($number==5){
                        $i++;
                        $q_number++;
                        $q++;
                    }
          
      $_SESSION['random_q']=$random_q;
                  


                  //showing the same questions if the user refresh the page
                  if(isset($_SESSION['random_q']))
                  {  
                  $random_q=$_SESSION['random_q'];           
      while ($q<=4): ?>
            <p>
      <?php
                $i=$random_q[$q_number];
        $query = "SELECT * FROM `questions` WHERE `question_number` = '$i'";
        //get result
        $result = mysql_query($query);
        $question = mysql_fetch_array($result);
                echo $q_number.'-';
        echo $question['text'] ;
                echo "\n";
                ?></p>
            
<!--                //check if there is image in this question or not-->
               <p><?php $check_Image=$question['images'];
                if($check_Image!=''){
               echo '  
                         <tr>  
                              <td>  
                                  <img src="data:image/jpg;base64,'.base64_encode($question['images'] ).'" height="200" width="200" class="img-thumnail" />  
                              </td>  
                         </tr>  
                     ';  
                }
        ?></p>
        </form>
<form method="post" action="process.php">
        <ul class="choices">
          <?php   //get choices
                     
          $query = "SELECT * FROM `choices` WHERE `question_number`='$i'";
          //get results
          $choices = mysql_query($query); ?>
          <?php while($row = mysql_fetch_array($choices)): ?>
          <li><input type="radio" name="<?php echo $i; ?>" value="<?php echo $row['id']; ?>">
            <?php echo $row['text'];?>
                        
                        <?php $check_Image=$row['Images'];
                        if($check_Image!=''){
                         echo '  
                         <tr>  
                              <td>  
                                  <img src="data:image/jpg;base64,'.base64_encode($row['Images'] ).'" height="200" width="200" class="img-thumnail" />  
                              </td>  
                         </tr>  
                        ';                            
                        }
                        ?> 
                        
          </li>
        <?php endwhile; ?>
        </ul>
                
                <?php
                $q_number++;
                $q++;
                ?>
                    <?php endwhile; ?>
                                    <?php
                $_SESSION['random_q']=$random_q;
                  }   
                      $y++;
                }         ?>
        <input type="submit" name="submit" value="submit">
        <input type="hidden" name="number" value="<?php echo $number; ?>">
      </form>