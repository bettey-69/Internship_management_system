<?php
   session_start();
   include ('connection.php');
   $msg = "";
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
      		if($result){
      			header("Location:user/index.php");
      		}else{
      			$msg = "Something goes wrong";
      			header("Location:signup.php");
      		}
      	}
      }status
 ?>