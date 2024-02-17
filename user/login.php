<?php
session_start();
include 'connection.php';
$msg = "";
?>

<?php
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

    
    $pwd = md5($password);

  $query = "SELECT * FROM signup WHERE username = '$username' AND password = '$pwd'";
      $result = $con->query($query);
      
      while($row = mysqli_fetch_array($result)){
      	     $id = $row['id'];
      	     $role = $row['role'];
      	     $usename = $row['username'];
               $status= $row['status'];
      }

   $_SESSION['username'] = $username;

  $row = mysqli_num_rows($result);
 if($row>0){
 	if($role == 'Admin'){
        if($status == 0){
          $msg = "Sorry, You are deactivated!";
        }else{
          header("Location:adm.php");
        }
 	}

 	else if ($role == 'Director'){
        if($status == 0){
          $msg = "Sorry, You are deactivated!";
          header("Location:index.php");
        }else{
          header("Location:director.php");
        }
 	}

    else if ($role == 'student'){
        if($status == 0){

          $msg = "Sorry, You are deactivated!";
          header("Location:index.php");
        }else{
          header("Location:student.php");
        }
 	}

 }else{

 	     $msg =  "Username or password incorrect";
 	 	header("Location:index.php");
 }
}
?>
