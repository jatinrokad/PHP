<?php
session_start();
include 'connection.php';

if(isset($_POST['login']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];

	$sql="SELECT * FROM register where name='$name' and password='$password'";

	$result=mysqli_query($con,$sql);

	$count=mysqli_num_rows($result);

	if ($count==1) {
		while ($row=mysqli_fetch_assoc($result)) {
			
			$_SESSION['id']=$row['No'];

		}
		echo "<script>
				window.location='profile.php';
			</script>";
	}
	else {
        echo "<script>alert('Wrong Combination. Check them again');
			window.location='index.php';
		</script>";
    }
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Register Form</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    <script language="JavaScript" type="text/javascript" src="validate.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-12 col-md-12 col-md-6 col-md-6">
			<form role="form" action="" method="post">
			  <div class="form-group">
			    <label for="name">Name:</label>
			    <input type="txt" class="form-control" id="name" name="name">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd" name="password">
			  </div>
			  <button type="submit" class="btn btn-default" name="login">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>
