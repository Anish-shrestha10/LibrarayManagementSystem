<!DOCTYPE html>
<html lang="en">
<head>
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style>
	
	#main_content{
		padding: 50px;
		background-color: #464444;
		color:white;
	}
	#side_bar{
		background: black;
		color:white;
		padding: 100px;
		width: 300px;
		height: 450px;
	}
	marquee{
		color:white;
	}
</style>
</head>
<body background="./book-shelves.png" >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-header">
			<a class="navbar-brand" href="index.php">
				<img src="./logo.png" width=70px height=70px> Gladstone Academy</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
        <li class="nav-item active">
            <a class="nav-link" href="admin/index.php">Admin Login</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="index.php">User Login</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="signup.php">Register</a>
        </li>
        </ul>
    </div>
    </nav>
    <br>

	<br>
    <div class="row">
		<div class="col-md-4" id="side_bar">
		<img src="./Library2.jpg " width=270px height=300px>
		</div>
		<div class="col-md-8" id="main_content">
			<center><h3><u>User Registration Form</u></h3></center>
			<form action="register.php" method="post">
            <div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>

                <div class="form-group">
					<label for="name">Address:</label><br>
					<textarea cols="40" rows="3" name="address" class="fornm-control" ></textarea>
				</div>
				<button type="submit" name="register" class="btn btn-primary">Register</button> 
			</form>
        </div>
    </div>
</body>
</html>