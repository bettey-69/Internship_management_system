<?php
//session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>

<?php
if(isset($_POST['register'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$gender= $_POST['gender'];
	$language = $_POST['language'];
	$username = $_POST['username'];
	$universtiy= $_POST['universtiy'];
	$department= $_POST['department'];

	$query = "INSERT INTO user(`firstname`,`lastname`,`email`,`gender`,`language`,`Username`,`universtiy`,`department`) VALUES('$firstname','$lastname','$email','$gender','$language','$username','$universtiy','$department')";
    $res = $con->query($query);
    if($res){
    	echo "Inserted";
    }else{
    	echo "Wrong!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
   
</head>

	<title> </title>
	

<body >
 <div class="container-fluid">


                    <!-- DataTales Example -->
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        
                        <div class="card-body">


<h3><i class="fa-solid fa-user-plus"></i> ADD STUDENT</h3> <hr>
<form method="POST" >
<table cellspacing="10" cellpadding="10">
	<tr> <td class="left key"> First Name </td>  
		<td><input type="text" name="firstname" class="form-control" required></td> 
        <td class="left key"> language</td>  
		<td> <select name="language" class="form-control">  
          <option value="web"> web</option>
          <option value="android">android</option>
          <option value="python">python</option>
		</select></td> 
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

<?php
include'adm.php'
?>

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

	 <td> </td> <td> <a href="veiw.php" class="btn btn-primary"> veiw student</a> </td> </tr>
		
</table>
</form>
</div>
</div>
</div>
</div>
</div>
  </div>
          

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">

                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</body>
</html>
