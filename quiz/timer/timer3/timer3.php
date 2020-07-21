<html>
<body>
<head>
  <meta charset="utf-8">
  <title>PHP Quizzer</title>
  <style>
div {
    width: 70%;
    padding: 20px;
    border: 5px solid gray;
    margin: 50px; 
    font-family: arial;
  font-size: 30px;
 text-align: center;

}

</style>
</head>


<div id="countdown"></div>
<div id="notifier"></div>

<script type="text/javascript">

(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  }

  function toMinuteAndSecond( x ) {
    return "Timeleft: " + Math.floor(x/60) + " minutes :" + (x=x%60 ) + " seconds";
  }

  function setTimer( remain, actions ) {
    var action;
    (function countdown() {
       display("countdown", toMinuteAndSecond(remain));
       if (action = actions[remain]) {
         action();
       }
       if (remain > 0) {
         remain -= 1;
         setTimeout(arguments.callee, 1000);
       } else {
        document.write("time end");
       }

    })(); // End countdown
  }

  setTimer(20, {
    
  });
})();


</script>
</body>
</html>