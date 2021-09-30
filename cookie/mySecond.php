<?php
  $uname=$_POST['uName'];
  $flag=0;
  foreach($_COOKIE as $cookiename=>$cookievalue) {
      if ($cookiename==$uname) {
        $i=$cookievalue;
        $flag=1;
        echo "You are visiting this page : ".$i." times";
      }
  }

 if ($flag==0) {
   echo "You're a new visitor, visit our <a href='myFile.html'>home page</a> to register yourself";
 }
?>
