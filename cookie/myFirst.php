<?php
  $uname=$_POST['uName'];
  setCookie($uname,0,time()+3600);
            // Here you can set time of expiry as you want
?>
