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
   $sql = "SELECT * FROM user WHERE stud_id = $id";
   $result = $con->query($sql);
  while($row = mysqli_fetch_object($result)){
    $id = $row->stud_id;
    $firstname = $row->firstname;
    $lastname = $row->lastname;

   $email = $row->email;
    $Username = $row->username;
    $gender= $row->gender;
    $universtiy = $row->universtiy;
    $department = $row->department;
   }
   ?>



  <div class="registration">

 
<h2>Edit Student Information</h2>
  <form method="POST" action="">
  <table border="0" cellspacing="5" cellpadding="10" width="98%" style="margin:2px;">
  <tr>
  <td> firstName </td>
  <td> <input type="text" name="firstname" value="<?php echo $firstname;  ?>" required> </td> 
    <td>lastName </td>
  <td> <input type="text" name="lastname" value="<?php echo $lastname;  ?>" required> </td> </tr>
  <td> Email </td>
  <td> <input type="email" name="email" value="<?php echo $email;  ?>"required> </td> 
  <td> username </td>
  <td> <input type="text" name="username" value="<?php echo $Username;  ?>" required> </td></tr>
   <td> gender </td>
  <td> <input type="text" name="gender" value="<?php echo $gender;  ?>" required> </td>
     <td> universtiy </td>
  <td> <input type="text" name="universtiy" value="<?php echo $universtiy;  ?>" required> </td></tr>
     <td> department</td>
 <td> <input type="text" name="department" value="<?php echo $department;  ?>" required> </td>


  <td> </td> <td> <button class="btn btn-primary" name="edit"> SAVE CHANGES</button> </td>
  </tr>
  </table>
  </form>
  </div>

<?php
// TO EDIT THE VALUE OF THE SELECTED STUDENT_
if(isset($_POST['edit'])){
 
     $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];

     $email = $_POST['email'];
     $username = $_POST['username'];
       $gender = $_POST['gender'];
         $language = $_POST['language'];
           $department= $_POST['department'];

  $query = "UPDATE user SET firstname = '$firstname',lastname='$lastname' ,email='$email', username='$username',gender='$gender',language='$language',department='$department' WHERE stud_id=$id";
    $res = $con->query($query);
// header("location:view.php");
}
 ?>



<?php
include('include/scripts.php');

include('include/footer.php');
?>