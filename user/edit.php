<?php
session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>

<!DOCTYPE html>
<html>
<head>
	<title> EDITING STUDENTS DATA</title>
  <link rel="stylesheet" type="text/css" href="reggcss.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">

</head>
<body>
  <div class="registration">

  <?php
   $id = $_GET['edit'];
   $sql = "SELECT * FROM user WHERE id = $id";
   $result = $con->query($sql);
  while($row = mysqli_fetch_object($result)){
    $id = $row->id;
    $firstname = $row->firstname;
    $lastname = $row->lastname;

   $email = $row->email;
    $Username = $row->username;
    $gender= $row->gender;
    $universtiy = $row->universtiy;
    $language = $row->language;
    $department = $row->department;
   }
   ?>
<h2>edit detail of student</h2>
  <form method="POST" action="">
  <table border="0" cellspacing="5" cellpadding="10" width="98%" style="margin:2px;">
  <tr>
  <td> firstName </td>
  <td> <input type="text" name="firstname" value="<?php echo $firstname;  ?>" required> </td> </tr>
    <td>lastName </td>
  <td> <input type="text" name="lastname" value="<?php echo $lastname;  ?>" required> </td> </tr>
  <td> Email </td>
  <td> <input type="email" name="email" value="<?php echo $email;  ?>"required> </td> </tr>
  <td> username </td>
  <td> <input type="text" name="username" value="<?php echo $Username;  ?>" required> </td></tr>
   <td> gender </td>
  <td> <input type="text" name="gender" value="<?php echo $gender;  ?>" required> </td></tr>
     <td> universtiy </td>
  <td> <input type="text" name="universtiy" value="<?php echo $universtiy;?>" required> </td></tr>
     <td> language </td>
  <td> <input type="text" name="language" value="<?php echo $language;  ?>" required> </td></tr>
     <td> department</td>
 <td> <input type="text" name="department" value="<?php echo $department;  ?>" required> </td></tr>


  <td> </td> <td> <button class="btn btn-primary" name="edit"> SAVE CHANGES</button> </td>
  </tr>
  </table>
  </form>
  </div>
</body>
</html>
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
  header("location:veiw.php");
}
 ?>
