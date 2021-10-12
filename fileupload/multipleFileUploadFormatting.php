<?php
$total = count($_FILES['upload']['name']);
echo "<h1>Bulk File Upload Report</h1>";
echo "<table border=1>";
echo "<tr>";
echo "<td bgcolor='yellow' align='center'>Sr. No.</td>";
echo "<td bgcolor='yellow' align='center'>File Name</td>";
echo "<td bgcolor='yellow' align='center'>Status</td>";
echo "</tr>";

for( $i=0 ; $i < $total ; $i++ ) {
	$tmpFilePath = $_FILES['upload']['tmp_name'][$i];
	$newFilePath = "uploads/" . $_FILES['upload']['name'][$i];

	echo "<tr>";
	echo "<td align='center'>".($i+1)."</td>";
	echo "<td align='center'>".$_FILES['upload']['name'][$i]."</td>";
	
	
	if(move_uploaded_file($tmpFilePath, $newFilePath)) {
		

		echo "<td align='center'><font color='green'>Sucessful</font></td>";
		echo "</tr>";
	}
	else {
		echo "<td align='center'><font color='red'>Error</font></td>";
		echo "</tr>";

	}
}
echo "<table>";	
?>
