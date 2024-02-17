<?php
$msg = "";
?>
<!DOCTYPE html>
<html>
<head>
	<title> SIGN UP FOR AN ACCOUNT</title>
	<meta http-equiv="refresh" content="30">
	<link rel="icon" type="image/jpg" href="Image/php.jpg">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	
	 
</head>
<body>

<div class="register">
<h3><i class="fa-solid fa-user-plus"></i> CREATE A NEW ACCOUNT </h3> <hr>
<form method="POST" action="create.php">
<table cellspacing="10" cellpadding="10">
	<tr> <td class="left key"> First Name </td>  
		<td><input type="text" name="fname" class="form-control" placeholder="Ex: John" required></td> 
        <td class="left key"> Role </td>  
		<td> <select name="role" class="form-control">  
          <option value="Admin"> Admin</option>
          <option value="Manager"> director</option>
          <option value="Employee">student</option>
		</select></td> 
	</tr>
	<tr> <td class="left key"> Last Name </td>  
		<td><input type="text" name="lname" class="form-control" placeholder="Ex: Abuye" required></td> 
        <td class="left key"> Username </td>
        <td><input type="text" name="username" class="form-control" placeholder="Ex: johnny20" required></td>
	</tr>


    <tr> <td class="left key"> Email </td>  
		<td><input type="text" name="email" class="form-control" placeholder="Ex: jack@gmail.com" required></td> 
        <td class="left key"> Password </td>
        <td><input type="password" name="password" class="form-control" placeholder="Ex: january@2022" required></td> 
	</tr>

	<tr> <td class="left key"> Gender </td>  
		<td> <select name="gender" class="form-control">  
          <option value="Male"> Male</option>
          <option value="Female"> Female</option>
		</select></td> 
        <td class="left key"> Confirm </td>
        <td><input type="password" name="confirm" class="form-control" placeholder="Ex: january@2022" required></td> 
	</tr>

	<tr> <td> </td> <td> </td>
        <td> </td>
        <td></td> 
	</tr>



	<tr> <td> </td> <td> <button class="btn btn-primary" name="signup"><i class="fa-solid fa-briefcase-medical"></i>  Submit Information</button> </td> <td> </td> 
		<td> <a href="index.php" class="btn btn-secondary"> <i class="fa-solid fa-arrow-rotate-left"></i>  Back to Login </a> </td></tr>
</table>
</form>
</div>
<center> <?php echo $msg; ?> </center>

</body>
</html>