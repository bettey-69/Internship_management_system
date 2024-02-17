<?php
$msg = "";
?>

  <?php
include('include/header.php');

include('include/navbar.php');
?>
<?php
//session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>


  <?php

      if(isset($_POST['signup'])){
      	$fn = $_POST['fname'];
      	$ln = $_POST['lname'];
      	$email = $_POST['email'];
      	$gender = $_POST['gender'];
      	$role = $_POST['role'];
      	$un = $_POST['username'];
      	$pw = $_POST['password'];
      	$conf = $_POST['confirm'];
         $status=$_POST['status'];


      	if($pw!=$conf){
      		$msg =  "Password must match!";
      		header("Location:signup.php");
      	}else{
          $encpwd = md5($pw);
      	$query = "INSERT INTO signup(`fname`,`lname`,`email`,`gender`,`role`,`username`,`password`,`status`) VALUES('$fn','$ln','$email','$gender','$role','$un','$encpwd','1')";
      	
        	$result = $con->query($query);
      			//header("Location:user/index.php");
      	
      	}
      }
 ?>
<div class="register">
<h3><center>ADD USER</center> </h3> <hr>
<form method="POST" >
<table cellspacing="10" cellpadding="10">
	<tr> <td class="left key"> First Name </td>  
		<td><input type="text" name="fname" class="form-control" required></td> 
        <td class="left key"> Role </td>  
		<td> <select name="role" class="form-control">  
          <option value="Admin"> Admin</option>
          <option value="Manager"> director</option>
            <option value="Manager"> Advisor</option>
         
		</select></td> 
	</tr>
	<tr> <td class="left key"> Last Name </td>  
		<td><input type="text" name="lname" class="form-control" required></td> 
        <td class="left key"> Username </td>
        <td><input type="text" name="username" class="form-control" required></td>
	</tr>


    <tr> <td class="left key"> Email </td>  
		<td><input type="text" name="email" class="form-control" required></td> 
        <td class="left key"> Password </td>
        <td><input type="password" name="password" class="form-control" required></td> 
	</tr>

	<tr> <td class="left key"> Gender </td>  
		<td> <select name="gender" class="form-control">  
          <option value="Male"> Male</option>
          <option value="Female"> Female</option>
		</select></td> 
        <td class="left key"> Confirm </td>
        <td><input type="password" name="confirm" class="form-control"  required></td> 
	</tr>

	<tr> <td> </td> <td> </td>
        <td> </td>
        <td></td> 
	</tr>



	<tr> <td> </td> <td> <button class="btn btn-primary" name="signup"><i class="fa-solid fa-briefcase-medical"></i>  Submit Information</button> </td> <td> </td> 
		
</table>
</form>
</div>


  <?php
include('include/scripts.php');

include('include/footer.php');
?>
