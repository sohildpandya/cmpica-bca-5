<?php
$file = fopen("myData.csv","r");

 while (!feof($file)) 
    {        
	$array=fgetcsv($file);
	$to=$array[3];
	$msg="<font color='blue' style='font-family: arial;'>";
	$msg.="Dear ".$array[1]."<br>";
	$msg.="<br>We're happy to show you your result. You next semester is going to start from <strong>Dec. 20, 2021</strong>";
	$msg.="<br>";
	$msg.="<h3>Your Result</h3>";
	$msg.="<br><strong>Student ID :</strong> ";
	$msg.=$array[0];
	$msg.="<br><strong>Subject - 1:</strong> ";
	$msg.=$array[4];
	$msg.="<br><strong>Subject - 2:</strong> ";
	$msg.=$array[5];
	$msg.="<br><strong>Subject - 3:</strong> ";
	$msg.=$array[6];
	$msg.="<br><strong>Subject - 4:</strong> ";
	$msg.=$array[7];
	$msg.="<br><hr>";
	$msg.="<br><strong>Total:</strong> ";
	$msg.=($array[4]+$array[5]+$array[6]+$array[7]);
	$msg.="<br><strong>Percentage:</strong> ";
	$msg.=($array[4]+$array[5]+$array[6]+$array[7])/4;
	$msg.="</font>";
	$msg.="<br><br>--CMPICA, CHARUSAT";
	$msg.="<br><a href='www.charusat.ac.in'>www.charusat.ac.in</a><br><hr>";
	//echo $msg;

	 $sub = "Mid Semester Result - ".$array[0];
	$headers=$headers = 'Content-Type: text/html; charset=utf-8' . "\r\n";
  	 if (mail($to,$sub,$msg,$headers))
	      echo $array[0]." - Mail is sent successfully.<br>";
	  else
	      echo $array[0]."<font color='red'> Your Mail is not sent. Try Again.</font><br>";
    }
  

fclose($file);
?>
