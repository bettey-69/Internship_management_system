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
if(isset($_POST['register'])){
	$stud_num=$_POST['stud_num'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$gender= $_POST['gender'];

	$username = $_POST['username'];
	$universtiy= $_POST['universtiy'];
	$department= $_POST['department'];

	$query = "INSERT INTO user(`stud_num`,`firstname`,`lastname`,`email`,`gender`,`language`,`Username`,`universtiy`,`department`) VALUES('$stud_num','$firstname','$lastname','$email','$gender','$language','$username','$universtiy','$department')";

    $res = $con->query($query);
    if($res){
    	echo "Inserted";
    }else{
    	echo "Wrong!";
    }
}
?>


<h3><center> ADD STUDENT</center></h3> <hr>
        <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">     


<form method="POST" >
<table cellspacing="10" cellpadding="10">
	<tr> <td class="left key"> stud num </td>  
		<td><input type="text" name="stud_num" class="form-control" required></td> 

	 <td class="left key"> First Name </td>  
		<td><input type="text" name="firstname" class="form-control" required></td> 
     
	</tr>
	<tr> <td class="left key"> Last Name </td>  
		<td><input type="text" name="lastname" class="form-control"required></td> 
        <td class="left key"> Username </td>
        <td><input type="text" name="username" class="form-control"  required></td>
	</tr>


    <tr> <td class="left key"> Email </td>  
		<td><input type="text" name="email" class="form-control"  required></td> 
        <td class="left key"> universtiy </td>
        <td><input type="text" name="universtiy" class="form-control" required></td> 
	</tr>



	<tr> <td class="left key"> Gender </td>  
		<td> <select name="gender" class="form-control">  
          <option value="Male"> Male</option>
          <option value="Female"> Female</option>
		</select></td> 
        <td class="left key">department </td>
        <td><input type="text" name="department" class="form-control" required></td> 
	</tr>

	<tr> <td> </td> <td> </td>
        <td> </td>
        <td></td> 
	</tr>



	<tr> <td> </td> <td> <button class="btn btn-primary" name="register"><i class="fa-solid fa-briefcase-medical"></i>  Submit Information</button> </td> 

	 

		
</table>
</form>
</div>
</div>




  <?php
include('include/scripts.php');

include('include/footer.php');
?>
