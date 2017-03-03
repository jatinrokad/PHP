<?php

include "connection.php";

$name=$_POST[name];
$email=$_POST[email];
$password=$_POST[password];
$mobile=$_POST[mobile];
$city=$_POST[city];
$hobby=implode(',', $_POST['hobby']);
$sex=$_POST[sex];


$ins="INSERT INTO `register`(`name`, `email`, `password`, `mobile`, `city`, `hobby`, `sex`) VALUES ('$name','$email','$password','$mobile','$city','". $hobby ."','$sex')";


	$que=mysqli_query($con,$ins);
	echo "<script>alert('Admin inserted Successful...');
				window.location='index.php';
		</script>";

?>
