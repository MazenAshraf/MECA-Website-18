<?php

$target = mktime(0, 0, 0, 2, 10, 2017) ;
$today = time () ;
$difference =($target-$today) ;
$days =(int) ($difference/86400) ;
print "Our event will occur in $days days";



?>
<script type="text/javascript">
            setInterval(function()
            {
                var xmlhttp= new XMLHttpRequest();
                xmlhttp.open("GET","response.php",false);
                xmlhttp.send(null);
                document.getElementById("response").innerHTML=xmlhttp.responseText;
            },1000);
        </script>