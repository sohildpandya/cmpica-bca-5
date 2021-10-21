<?php
	$query=$_GET['ask'];
	$hint="";
	$count=0;
	$file = fopen("demo.csv","r");
	while (!feof($file)) {
		$array=fgetcsv($file);	
		$first_name=$array[1];
		$last_name=$array[0];
		if ($query==substr(trim($first_name), 0, strlen($query))) {
			$hint.="<br><strong><font color='red'>".substr(trim($first_name),0,strlen($query))."</font></strong><em>".substr(trim($first_name), strlen($query)).$last_name."</em>";
			$count++;
		}		
	}
	echo $hint == "" ? "No Suggestion" : $hint;
	echo "<br><br><font color='red'>".$count." Matches are found</font>";
?>
