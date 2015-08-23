<?php
    $print7="";
	$c=mysqli_connect("localhost","root","","test");
	$n="upload/broucher/.pdf";
	move_uploaded_file($_FILES["file"]["tmp_name"], $n);
	$str="INSERT INTO upload(file_name) VALUES ('$n')";
	mysqli_query($c,$str);
?>
