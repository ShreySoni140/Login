<?php

include('connection.php');

if(isset($_POST['signup']))
{
	$user_name= $_POST['user_name'];

	$mobile_no = $_POST['mobile_no'];

	$email_id = $_POST['email_id'];

	$user_password = $_POST['user_password'];

	$city = $_POST['city'];
	
	$hobbies = $_POST['hobbies'];

	$address = $_POST['address'];

	$dob = $_POST['dob'];

	$conpass = $_POST['conpass'];

	$gender = $_POST['gender'];
if(empty($user_name))
{
	$error = "Please Enter your username";
}
else if(empty($mobile_no))
{
	$error = "Please Enter your mobile no.";
}
else if(empty($email_id))
{
	$error = "Please Enter your Email id";
}
 else if(empty($user_password))
 {
 	$error = "Please Enter your Password";
 }
  
  else if(empty($conpass))
 {
 	$error = "Please Enter your Confirm Password";
 }

 else if(empty($city))
 {
 	$error = "Please Select city";
 }
 
  else if(empty($hobbies))
 {
 	$error = "Please Select Hobbies";
 }

 else if(empty($address))
 {
 	$error = "Please Enter your Address";
 }

 else if(empty($dob))
 {
 	$error = "Please Enter your DOB";
 }

 else if($user_password != $conpass)
 {
 	$error = "Password not Match";
 }
 
 else if(empty($gender))
 {
 	$error = "Please Select Gender";
 }

 if(!isset($error))
 {
 	// insert data in to database

 	$insert = $connect->prepare("INSERT INTO users(user_name,mobile_no,email_id,user_password,city,hobbies,address,dob,gender) VALUES(:user_name,
         :mobile_no,:email_id,:user_password,:city,:hobbies,:address,:dob,:gender)");

 	$insert->bindParam(':user_name', $user_name);
 	$insert->bindParam(':mobile_no',$mobile_no);
 	$insert->bindParam(':email_id',$email_id);
 	$insert->bindParam(':user_password',$user_password);
 	$insert->bindParam(':city',$city);
 	$insert->bindParam(':hobbies',$hobbies);
 	$insert->bindParam(':address',$address);
 	$insert->bindParam(':dob',$dob);
 	$insert->bindParam(':gender',$gender);
 	if($insert->execute())

 	{
 		$success = "You have signup Successfully.....";
 	}

 	else {
 		$error = "Invalid data you have Enter..";
 	}


 }

}

// login 

if(isset($_POST['login']))
{
	$user_name = $_POST['user_name'];

	$user_password = $_POST['user_password'];

	if(empty($user_name))
	{
		$error = "Please Enter username";
	}
	else if(empty($user_password))
	{
		$error = "Please Enter Password";

	}

	if(!isset($error))
	{

		// select username and password from database
   $select = $connect->prepare("SELECT * FROM users WHERE user_name='$user_name' AND user_password='$user_password'");

     $select->setFetchMode(PDO::FETCH_ASSOC);

     $select->execute();

     $row = $select->fetch();

     // if usename and password not match

     if($row['user_name'] !=$user_name AND $row['user_password'] !=$user_password)
     {
     	$error = "USERNAME and PASSWORD INVALID!";
     }
          // if username and password match
     else if($row['user_name'] == $user_name AND $row['user_password'] ==$user_password)
     {
     	// fetch data on profile page

     	$_SESSION['id'] = $row['id'];
     	$_SESSION['user_name'] = $row['user_name'];
     	$_SESSION['mobile_no'] = $row['mobile_no'];
     	$_SESSION['email_id'] = $row['email_id'];
     	
     	

     	$success = "You have login Successfully";

     	header('refresh:2;profile.php');
     }

	}
}

?>
