<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css"  >

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
	
</style>
<body  background="./book-shelves.png">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				
				<a class="navbar-brand" href="index.php"><img src="./logo.png" width=70px height=70px> Gladstone Academy
				</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link nav-dark" href="admin/index.php" >Admin Login</a>
		      </li>
		      
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">User Login</a>
		      </li>
              <li class="nav-item">
		        <a class="nav-link" href="signup.php"></span>Register</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<br><br>

	<div class="row">
		<div class="col-md-4" id="side_bar">	
			<img src="./Library2.jpg " width=270px height=300px>
		</div>
		<div class="col-md-8" id="main_content">
			<center><h3><u>User Login Form</u></h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="email">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button> 
			</form>
            <?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['id'] =  $row['id'];
								header("Location: user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>

</body>
</html>
