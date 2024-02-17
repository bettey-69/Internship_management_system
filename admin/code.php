
<?php
//session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>


<?php
// TO EDIT THE VALUE OF THE SELECTED STUDENT
if(isset($_POST['edit'])){
     $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];

     $email = $_POST['email'];
     $username = $_POST['username'];
       $gender = $_POST['gender'];
         $language = $_POST['language'];
           $department= $_POST['department'];

  $query = "UPDATE user SET firstname = '$firstname',lastname='$lastname' ,email='$email', username='$username',gender='$gender',language='$language',department='$department' WHERE id=$id";
    $res = $con->query($query);
  header("location:view.php");
}
 ?>
