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
		<div class="col-md-12 col-md-12 col-md-5 col-md-5">
			<form role="form" action="insert.php" method="post">
			  <div class="form-group">
			    <label for="name">Name:</label>
			    <input type="txt" class="form-control" id="name" name="name">
			  </div>
			  <div class="form-group">
			    <label for="email">Email:</label>
			    <input type="email" class="form-control" id="email" name="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd" name="password">
			  </div>
			  <div class="form-group">
			    <label for="mobile">Mobile:</label>
			    <input type="txt" class="form-control" id="mobile" name="mobile">
			  </div>
			  <div class="form-group">
				  <label for="city">City:</label>
				  <select class="form-control" id="city" name="city">
				    <option>Ahmedabad</option>
				    <option>Rajkot</option>
				    <option>Jasdan</option>
				    <option>Baroda</option>
				  </select>
				</div>
			  <div class="form-group">
			    <label for="hobby">Hobby:</label><br>
						<label class="checkbox-inline"><input type="checkbox" name="hobby[]" value="cricket"/>Cricket </label>
						<label class="checkbox-inline"><input type="checkbox" name="hobby[]" value="reading"/>Reading </label>
						<label class="checkbox-inline"><input type="checkbox" name="hobby[]" value="programing"/>Programing </label>
			  </div>
			  <div class="form-group">
			    <label for="sex">Sex:</label><br>
					  <label class="radio-inline"><input type="radio" name="sex" value="male">Male</label>
					  <label class="radio-inline"><input type="radio" name="sex" value="female">Female</label>
				</div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>
