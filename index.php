<?php include('process.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login And Signup With PHP MYSQL PDO</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<br>
	<br>
	<div class="container" align="center">
		<?php if(isset($error)) { ?>
		<div class="alert alert-danger">
			<?php echo $error; ?>
			
		</div>
		<?php } else if(isset($success)){ ?>
		<div class="alert alert-success">
			<?php echo $success; ?>
			
		</div>
		<?php } ?>
		
	</div>
	<div class="container" align="center">
		<h1>Login With PHP MYSQL PDO</h1>
		<p>If you have not registered <a href="signup.php" style="color: red;">Click here</a></p>
		<div class="row">
			<div class="col-sm-12">
				<form method="post">
				<label>Username</label>
				<input type="text" name="user_name" placeholder="Enter User Name" id="t" class="form-control">
				<label>Password</label>
				<input type="password" name="user_password" placeholder="Enter your Password" class="form-control" id="t">
				<br>
				<input type="submit" name="login" value="login" class="btn btn-danger bnt-xs" >
				</form>
			</div>
			<style>
				#t {
					height: 30px;
					width: 220px;
				}
			</style>
			
		</div>
		
	</div>

</body>
</html>