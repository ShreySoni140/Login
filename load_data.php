 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "login");  
 $output = '';  
 if(isset($_POST["city_id"]))  
 {  
      if($_POST["city_id"] != '')  
      {  
           $sql = "SELECT * FROM users WHERE city = '".$_POST["city_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM users";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["user_name"].'</div></div>';  
      }  
      echo $output;  
 }  
 ?>  