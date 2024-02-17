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
   $id = $_GET['edit'];
   $sql = "SELECT * FROM signup WHERE id = $id";
   $result = $con->query($sql);
  while($row = mysqli_fetch_object($result)){
    $id = $row->id;
    $firstname = $row->fname;
    $lastname = $row->lname;

   $email = $row->email;
  
    $gender= $row->gender;
      $role = $row->role;
     $Username = $row->username;
   }
   ?>
  <div class="registration">

 
<h2>Edit User Information</h2>
  <form method="POST" action="">
  <table border="0" cellspacing="5" cellpadding="10" width="98%" style="margin:2px;">
  <tr>
  <td> firstName </td>
  <td> <input type="text" name="fname" value="<?php echo $firstname;  ?>" required> </td> 
    <td>lastName </td>
  <td> <input type="text" name="lname" value="<?php echo $lastname;  ?>" required> </td> </tr>
  <td> Email </td>
  <td> <input type="email" name="email" value="<?php echo $email;  ?>"required> </td> 
  
   <td> gender </td>
  <td> <input type="text" name="gender" value="<?php echo $gender;  ?>" required> </td></tr>
     <td> role</td>
  <td> <input type="text" name="role" value="<?php echo $role;?>" required> </td></tr>
    <td> username </td>
  <td> <input type="text" name="username" value="<?php echo $Username;  ?>" required> </td></tr>

  <td> </td> <td> <a><button class="btn btn-primary" name="edit" href="e.php">SAVE CHANGES</button> </a></td>
  </tr>
  </table>
  </form>
  </div>

<?php
// TO EDIT THE VALUE OF THE SELECTED STUDENT_
if(isset($_POST['edit'])){
 
     $fname= $_POST['fname'];
    $lastname = $_POST['lname'];
     $email = $_POST['email'];
     $gender = $_POST['gender'];
    $role = $_POST['role'];
   $username = $_POST['username'];


  $query = "UPDATE signup SET fname='$fname',lname='$lastname' ,email='$email',gender='$gender',role='$role',username='$username' WHERE id=$id";
    $result = $con->query($query);
// header("location:view.php");
}
 ?>


<?php
include('include/scripts.php');

include('include/footer.php');
?>