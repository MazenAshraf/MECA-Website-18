<?php include('CodeServer.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  
  <meta name="keyword" content="meca,knowledge,asu">
  <title>MECA</title>
    <link rel="stylesheet" href="css/Home.css">
    <link rel="stylesheet" href="css/normalize.css">
     <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="shortcut icon" href="images/logo.ico">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <script src="js/navshrink.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Audiowide|Concert+One|Exo+2|Hanuman|Jura|Montserrat|Oxygen|Titillium+Web" rel="stylesheet">
<!-- bootstrap links -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--                    mai links             -->
<!-- nav shrink -->

<script src="js/navshrink.js"></script>
<link rel="shortcut icon" type="icon" href="images/logo.ico">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <!--navbar-dark bg-dark dol kano fl class 3shan ydolo el loon el dark grey-->
 <!--Header-->

   <nav  class="navbar navbar-dark bg-dark navbar-expand-lg " style="padding: 25px;  right: 0; left: 0; top: 0; position: fixed;  margin-bottom: 0px; z-index: 1;padding:0;height:auto">

    <!--meca logo-->
   <img src="images/logo.ico" width="140" height="60" alt="MECA">

   <!--collapse button-->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
<!--end of button-->

<!-- nav items-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: 'Merriweather', serif; font-size: 20px; padding-left: 20px; ">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="Homesign.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="historysign.php">History</a>
      </li>
       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="aboutsign.php">About</a>
      </li>

       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;" >
        <a class="nav-link"  href="Trusteesign.php">Trustees's Board</a>
      </li>
       

     <li class="nav-item dropdown" style="padding-left: 10px; padding-right: 10px;position:absolute;right:8%" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" src="$name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
            <?php echo"Welcome";?>
            <?php echo $_SESSION["Name"]; ?>
        </a> 

        <!--end of nav items-->
      

      <!--Sign in & sign Up Drop Down Menu//-->
       <div  class="dropdown-menu" id="dd" aria-labelledby="navbarDropdown" style="padding: 10px;">
                <form method="post" action="CodeServer.php">
         <!-- <button onclick="document.getElementById('id01').style.display='block';document.getElementById('dd').style.display='block';" class="w3-btn w3-dark-grey" style="font-size:17px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px; margin-top: 5%; width: 100%;">Change Password</button> -->
       
            <button class="w3-btn w3-dark-grey" style="font-size:17px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-top: 5%; width: 100%;" name="logout" >Log Out</button>
</form>
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4" style="border: 2px solid white;
    border-radius: 20px; overflow: hidden;">
    <header class="w3-container w3-red w3-display-container" style="background-color: grey !important; margin-bottom: 20px; height: 52px !important;"> 
      <span onclick="document.getElementById('id01').style.display='none';document.getElementById('dd').style.display='';" class="w3-button w3-xlarge w3-display-topright w3-hover-red w3-hover-opacity">&times;</span>
      <h2 style="text-align: center; margin-top: 1%; font-family: 'Montserrat', sans-serif;">Change Password</h2>
    </header>
    <div class="w3-container">
          <form>
 <div class="form-group" style="margin-left: 20%;">
      <label for="inputState" style="color:black; font-size: 22px; font-weight: 500;" >Current Password:</label>
<input type="text" name="">
    </div>
     <div class="form-group" style="margin-left: 20%;">
      <label for="inputState" style="color:black; font-size: 22px; font-weight: 500; letter-spacing: 2.95px;" >New Password:</label>
<input type="text" name="">
    </div> 
     <div class="form-group" style="margin-left: 20%;">
      <label for="inputState" style="color:black; font-size: 22px; font-weight: 500;" >Confirm Password:</label>
<input type="text" name="">
    </div> 
        <button onclick="document.getElementById('id01').style.display='none'" type="Submit" class="btn btn-warning btn-lg" style="margin-bottom: 20px; background-color: white;border: 2px solid orange;
    border-radius: 7px; color: orange; font-weight: 600; width: 30%; margin-left: 35%;">Submit</button>
    </form>
    </div>
  </div>
</div>
        </div>
      </li>
     
    </ul>

  </div>
</nav>
<!--end of header-->
<!--header -->
<div class="video-container">
  <div class="layer">
    <div class="intro">
           <h1 style="color: orange !important;">MECA</h1>
           <p><span>A</span> <span>C</span>all <span>F</span>or <span>C</span>hange <span>A</span>gents</p>
       </div>
  </div>
  <video autoplay loop poster="images/academy.jpg">
    <source src="videos/video.mp4" type="video/mp4" />
  </video>
</div>
<!-- header -->
<div style="height: 650px;"></div> 

     <!--                                                YLF                                                           -->

<div class="ylf" style="background-color: #424242; width: 100% ; padding: 20px; overflow: hidden;">
              <div class=" col-lg-4  col-md-4 col-ms-10 col-xs-10 offset-ms-1 offset-xs-1 ylf" style="float: left; margin-top: 50px;" >
            <p style="color: white;
            font-weight: 400;
letter-spacing: 1px;
font-size: 20px;
line-height: 220%;">YLF “Youth Leaders Foundation” is a Non-Profit Organization that seeks potential leaders in all Egyptian Universities to help improve their skills through “Leadership Program”, all you have to do to enter the program is to pass the International Certified Assessments to measure your leadership competencies.</p>
         <a href="http://www.ylf-eg.org/apply-now/"><button onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-dark-grey" style="font-size:17px;padding:12px 35px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-left: 20%; margin-top: 5%; margin-bottom: 20px;">APPLY NOW!</button></a>
          </div>
          <div class="col-lg-6 col-md-6 col-ms-10  col-xs-10 offset-ms-1 offset-xs-1 yif"  style="float: left;">
  <img  src="YIF.jpg" style="height:auto;width:850px; margin-right: 20px !important;">
  </div>
</div>



<!--                                               event                                               -->
<form   method="post" action="CodeServer.php">
<div class="event" style="background-color: white; padding-top: 20px;">
  <div class="row" style="width: 100% !important;">
    <div class="info col-lg-4  col-md-4 col-ms-10 col-xs-10 offset-ms-1 offset-xs-1">

      <div class="slogan">
          <p> <span>W</span>here <span>H</span>eroes <br> <span>A</span>re <span>M</span>ade</p>
      </div>


       <div class="middle">
            <div class="text">Discover</div>
        </div>

        <div class="disc">
            <p>MECA Academy is the first of its kind to take place in the faculty of engineering ASU, the first academy was in 2007.
            The Academy intends to provide real life  simulation to the business world observed in any of the leading companies in Egypt.Sessions are conducted by experts from the company's different departments.</p>

<p></p>
</div>
</div>
      
      
      
<div class="eventimage col-lg-6 col-md-6 col-ms-10  col-xs-10 offset-ms-1 offset-xs-1  ">
  <img class="img-fluid" src="images/academy2.jpg" style="height: 700px;">
 
</div>
</div>
</div>

<!-- form slots -->
    
    </form>
<!-- event -->
<!-- social media notification-->

    
<div class="container" class="notification" style="margin-bottom: 30px">

    <div class="row">
    <!-- facebook notification -->
    <div class="col-lg-5 col-md-10 col-xs-10 col-ms-10 offset-ms-1 offset-xs-1  " style="margin-right:8%">
      <div class="facebook-notifiction" class="" style="display: flex; float: center; ">
         <div class="container-section feed">
    <div class="text-left" style="width: 490px;">
      <h4 style="color: #4267b2;"><strong>Facebook</strong></h4>
      <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/MECAEgypt/" data-tabs="timeline" data-width="490" data-height="500" data-hide-cover="true" data-small-header="true" data-adapt-container-width="true" data-show-facepile="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=543000012530907&amp;container_width=517&amp;height=500&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2FMECAEgypt%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline&amp;width=490"><span style="vertical-align: bottom; width: 490px; height: 500px;"><iframe name="f398602b7beefe" width="490px" height="500px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.4/plugins/page.php?adapt_container_width=true&amp;app_id=543000012530907&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FhsBwMj6iLmk.js%3Fversion%3D42%23cb%3Df1f40dba1172e84%26domain%3Dmecaegypt.org%26origin%3Dhttp%253A%252F%252Fasuracingteam.org%252Ffde359369bb98c%26relation%3Dparent.parent&amp;container_width=517&amp;height=500&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2FMECAEgypt%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline&amp;width=600" style="/*border: none*/; visibility: visible; width: 600px; height: 500px !important;" class=""></iframe></span></div>
</div>
        </div>
        </div>
        </div>
<!--twitter notification-->
<div id="twitter-widget-holder">
<div class="col-lg-5 col-md-10 col-xs-10 col-ms-10 offset-ms-1 offset-xs-1 offset-md-1 offset-lg-1" style="padding: 0px !important;margin-left:1% !important;">
      <div  class="twitter-notification" style="width: 500px; display: flex; align-items: right;">
          <div class="twitter" style="width: 600px;">
          <h4 style="color: #9fd6ff;"><strong>Twitter</strong></h4>
    <a class="twitter-timeline" href="https://twitter.com/MECAEgypt?ref_src=twsrc%5Etfw data-chrome=" scrollbar>Tweets by MECAEgypt</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      </div>
    

  </div>
</div>
</div>
</div>
<!-- end of social media notification-->
<!--footer-->
 <div class="footer">
 <div class="container">
<div class="row">
<div class="social-media-links" class="col-md-4" style="display: flex; align-items: center; ">
      <a class="link" href='https://www.facebook.com/MECAEgypt'><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
      <a class="link" href='https://twitter.com/MECAEgypt'><i class="fa fa-twitter-square fa-2x fa-fw"></i></a>
      <a class="link" href='https://www.youtube.com/user/MECAEgypt'><i class="fa fa-youtube-play fa-2x fa-fw"></i></a>
      <a class="link" href='https://www.instagram.com/MECAEgypt/'><i class="fa fa-instagram fa-2x fa-fw"></i></a>
  </div>
</div>

   <br><br>
<!--copywrites-->
    <div class="row">
      <div class="copywrites" class="col-md-4" style="display: flex; align-items: center; font-family: Georgia;">
        © MECA'18 Developed by MECA IT Committee
      </div>
    </div>
  </div>
</div>
<!--End of footer-->
<!-- <script type="text/javascript" src="js/site.js"></script> -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>