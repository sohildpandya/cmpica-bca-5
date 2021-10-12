<?php
$total = count($_FILES['upload']['name']);  // Getting a size of array for upload File control

for( $i=0 ; $i < $total ; $i++ ) {
	$tmpFilePath = $_FILES['upload']['tmp_name'][$i];   // Temporary file path for the said element of array $i
	$newFilePath = "uploads/" . $_FILES['upload']['name'][$i];  // Permenant file path for the said element of array $i
	if(move_uploaded_file($tmpFilePath, $newFilePath)) {
		echo "<font color='red'>".$_FILES['upload']['name'][$i]."</font> uploaded successfully<br/>";
	}
	else {
		echo "Error in uploading ".$_FILES['upload']['name'][$i];
	}
	
}
?>
