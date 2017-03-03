<?php session_start(); ?>
<?php include 'connection.php';?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    <script language="JavaScript" type="text/javascript" src="validate.js">
    </script>
</head>

<body>
<?php 

if(isset($_SESSION['id'])) :

$id = $_SESSION['id'];

 $query="SELECT * FROM `register` WHERE No=$id";
        $res=mysqli_query($con,$query);
       
            while($row=mysqli_fetch_assoc($res))
            {
            	echo '<div class="container">';
            	echo "hi"." ".$row['name']." ".'<a href="logout.php">Logout</a>';
            	echo '</div>';
 ?>
 <div class="container">

 <table class="table" style="width:60%;border:1px solid;" >
  <tr>
    <td>Name</td>
    <td><?php echo $row['name']; ?></td> 
  </tr>
  <tr>
    <td>E-mail</td>
    <td><?php echo $row['email']; ?></td> 
  </tr>
  <tr>
    <td>Password</td>
    <td><?php echo $row['password']; ?></td> 
  </tr>
  <tr>
    <td>City</td>
    <td><?php echo $row['city']; ?></td> 
  </tr>
  <tr>
    <td>Mobile</td>
    <td><?php echo $row['mobile']; ?></td> 
  </tr>
  <tr>
    <td>Hobby</td>
    <td><?php echo $row['hobby']; ?></td> 
  </tr>
  <tr>
    <td>Sex</td>
    <td><?php echo $row['sex']; ?></td> 
  </tr>
 </table>
</div>
<?php 
}
endif;
 ?>
 <?php
if(empty($_SESSION))
	{
		echo "session expired";
		echo "<script>
			window.location='index.php';
			</script>";
	}
 ?>
</body>
</html>
