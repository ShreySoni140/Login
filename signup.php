<?php  include('process.php'); ?>

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
		<?php } else if(isset($success)) { ?>
		<div class="alert alert-success">
			<?php echo $success; ?>
			
		</div>
		<?php } ?>
		
	</div>
	<div class="container" align="center">
		<h1>SIGNUP With PHP MYSQL PDO</h1>
		<p>If you have already registered <a href="index.php" style="color: red;">Click here</a></p>
		<div class="row">
			<div class="col-sm-12">
				<form method="post">
				<label>Username</label>
				<input type="text" name="user_name" placeholder="Enter User Name" id="t" class="form-control">
				<label>Mobile No</label>
				<input type="text" class="form-control" name="mobile_no" placeholder="Enter your mobile no" id="t">
				<label>Email</label>
				<input type="text" class="form-control" name="email_id" placeholder="Enter Email id" id="t">
				<label>Password</label>
				<input type="password" name="user_password" placeholder="Enter your Password" class="form-control" id="t">
				<label>Confirm Password</label>
				<input type="password" name="conpass" placeholder="Enter your Confirm assword" class="form-control" id="t">
				<select name="city" id="t" class="form-control" style="margin-top: 10px">
                                    <option value="">City</option>
                                    <option value="5">Surat</option>
                                    <option value="6">Anand</option>
                                   
                                </select>
                <select name="hobbies" id="t" class="form-control" style="margin-top: 10px">
                                    <option value="">hobbies</option>
                                    <option value="dance">dance</option>
                                    <option value="sing">sing</option>
                                   
                                </select>
                <select name="gender" id="t" class="form-control" style="margin-top: 10px">
                                    <option value="">Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                   
                                </select>
                <label>Address</label>
				<input type="text" class="form-control" name="address" placeholder="Enter Address" id="t">
				<label>DOB</label>
				<input type="text" class="form-control" name="dob" placeholder="Enter DOB" id="t">
				<br>
				<input type="submit" name="signup" value="signup" class="btn btn-danger bnt-xs" >
				
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