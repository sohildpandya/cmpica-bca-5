<?php
	$query=$_GET['ask'];

	$hint="";

	$file = fopen("demo1.csv","r");

	while (!feof($file)) {
		$array=fgetcsv($file);
		if ($query==$array[0]) {
			$hint.="<font face='arial' color='#A9333A'>".$array[0]."</font>";
			$hint.=" <font face='arial' color='#FF0075'>".$array[1]."</font>";

			if ($array[2]<60) {
				$hint.="<br>"."&#128553;"."&#128553;"."&#128553;". " Your attendance is very poor (<font color='#04009A'>".$array[2]."</font>),  <input type='button' value='Mail' />";

			}
			else {
$hint.="<br>"."&#128079;"."&#128079;"."&#128079;". " Your attendance is very good (<font color='#CF0000'>".$array[2]."</font>). Keep it up.";

			}
		}
	}

	echo $hint == "" ? "No Record Found" : $hint;
?>
