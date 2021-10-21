<?php
// get the q parameter from URL
$q = $_REQUEST["q"];
$file = fopen("demo.csv","r");
$j=0;
$hint="";
echo "<strong>";
while (!feof($file)) // Reading up to the end of the file
{        
	$array=fgetcsv($file);	// Getting first row as an array
	$myF=$array[1];
	if ($q !== "") {
		$q = strtolower($q);
		$len=strlen($q);
		if ($q==substr(trim($array[1]),0,$len)) {
			$j++;
			$hint.="<br>".$array[1]." ".$array[0];
		}
	}
}
echo $hint === "" ? "no suggestion" : $hint;
echo "<strong>";
echo "<br><br><font color='red'>".$j." matches found</font>";
?>
