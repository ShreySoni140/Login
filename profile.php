<?php

 session_start();

 if(empty($_SESSION['user_name']))
 {
 	header('location:index.php');
 }
$connect = mysqli_connect("localhost", "root", "", "login");  
 function fill_brand($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM city";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["city_id"].'">'.$row["city_name"].'</option>';  
      }  
      return $output;  
 }  
 function fill_product($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM users";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3">';  
           $output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["user_name"].'';  
           $output .=     '</div>';  
           $output .=     '</div>';  
      }  
      return $output;  
 }  
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROFILE INDEX</title>

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
	<h1 style="color: #1919B7;">WELCOME USER</h1>
	<div align="right">
		<a href="logout.php" class="btn btn-danger">Logout</a><br><br><br>
		
	</div>
	<table class="table table-bordered">
		<thead>
			<tr class="danger">
				
				<th>User Name</th>
				<th>Mobile No</th>
				<th>Email id</th>
				
			</tr>
		</thead>
		
			<tr class="warning">
				<td><?php echo $_SESSION['user_name']; ?></td>
				<td><?php echo $_SESSION['mobile_no']; ?></td>
				<td><?php echo $_SESSION['email_id']; ?></td>
			</tr>
		
		
	</table>
	<br/>
	<br/>
	 <div class="container">  
                <h3>  
                     <select name="city" id="city">  
                          <option value="">Show All Product</option>  
                          <?php echo fill_brand($connect); ?>  
                     </select>  
                     <br /><br />  
                     <div class="row" id="show_data">  
                          <?php echo fill_product($connect);?>  
                     </div>  
                </h3>  
           </div>  
	  <table class="table table-bordered">
		<thead>
			<tr class="danger">
				
				<th>User Name</th>
				<th>Mobile No</th>
				<th>Email id</th>
				
			</tr>
		</thead>
		<tbody>
			
				<?php 	
						$query="select user_name,mobile_no,email_id from users";
						$d = $connect->query($query);
						foreach ($d as $data) {
				?>	
				<tr class="warning">		
						
				<td><?php echo $data['user_name']; ?></td>
				<td><?php echo $data['mobile_no']; ?></td>
				<td><?php echo $data['email_id']; ?></td>
				</tr>
				<?php
				} 
				?> 
			
		</tbody>
		
	</table>
</div>
<script>  
 $(document).ready(function(){  
      $('#city').change(function(){  
           var city_id = $(this).val();  
           $.ajax({  
                url:"load_data.php,packing_outward_location_pallet_loaddata.php",  
                method:"POST",  
                data:{city_id:city_id},  
                success:function(data){  
                     $('#show_data').html(data);  
                }  
           });  
      });  
 });  
 </script> 
</body>
</html>
