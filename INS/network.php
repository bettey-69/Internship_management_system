
  <?php
include('inc/header.php');

include('inc/navbar.php');
?>

 
<?php
if(!empty($_POST["insert_button"])) {
  /* Form Required Field Validation */
  foreach($_POST as $key=>$value) {
    if(empty($_POST[$key])) {
    $error_message = "All Fields are required";
    break;
    }
  }
 

  /* Email Validation */
  if(!isset($error_message)) {
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $error_message = "Invalid Email Address";
    }
  }

  /* Validation to check if gender is selected */
  if(!isset($error_message)) {
  if(!isset($_POST["gender"])) {
  $error_message = " All Fields are required";
  }
  }

  /* Validation to check if Terms and Conditions are accepted */
  if(!isset($error_message)) {
    if(!isset($_POST["terms"])) {
    $error_message = "Accept Terms and Conditions to Register";
    }
  }

  
  }

?>

<html>
<head>

 <style>
      

.error-message {
  margin-top: 30px;
  padding: 50px 20px;
  background: #fff1f2;
  border: #ffd5da 1px solid;
  color: #d6001c;
  border-radius: 4px;
}
.success-message {
  padding: 7px 10px;
  background: #cae0c4;
  border: #c3d0b5 1px solid;
  color: #027506;
  border-radius: 4px;
}
.demo-table {
  background: white;
  width: 70%;
  border-spacing: initial;
  
  word-break: break-word;
  table-layout: auto;
  line-height: 1.8em;
  color: #333;
  border-radius: 4px;
  padding: 20px 40px;
    text-align: center;
    margin:center;
    margin-top: 86px;
}

@keyframes animate 
{
  0%
  {
    transform: rotate(0deg);
  }
  100%
  {
    transform: rotate(360deg);
  }
}
.demo-table td {
  padding: 15px 0px;
  margin-top: 2px;
 margin-left: 3px;
align-content: center;
}
.btnRegister {
  padding: 10px 30px;
  background-color: #3367b2;
  border: 0;
  color: #FFF;
  cursor: pointer;
  border-radius: 4px;
  margin-left: 10px;
}
</style>


</head>
 <section id="intro">
   
      <div class="box">
  <form name="frmRegistration" method="post" enctype="multipart/form-data" action="insert.php">
<table border="0" width="500" align="center" class="demo-table" style="margin-top: 120px;" >
<?php if(!empty($success_message)) { ?> 
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?> 
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>group_name</td>
<td><input type="text" class="demoInputBox" name="group_name" minlength="3" maxlength="16" value=" <?php if(isset($_POST['company_name'])) echo $_POST['group_name']; ?>" required ></td>
</tr>
<tr>
<td>member</td>
<td><input type="text" class="demoInputBox" name="name1"minlength="3" maxlength="16"  value="<?php if(isset($_POST['name1'])) echo $_POST['name1']; ?>" required ></td>
<td>
<input type="text" class="demoInputBox" name="name2"minlength="3" maxlength="16"  value="<?php if(isset($_POST['name2'])) echo $_POST['name2']; ?>" required ></td></tr>
<tr><td></td><td>

<input type="text" class="demoInputBox" name="name3"minlength="3" maxlength="16"  value="<?php if(isset($_POST['name3'])) echo $_POST['name3']; ?>" required ></td><td>

<input type="text" class="demoInputBox" name="name4"minlength="3" maxlength="16"  value="<?php if(isset($_POST['name3'])) echo $_POST['name4']; ?>" required ></td>
</tr>
<tr>
<td>project</td>
<td><select name="project" class="demoInputBox" minlength="3" maxlength="16" value="<?php if(isset($_POST['project'])) echo $_POST['project']; ?>" required > 
    
        <option>network</option> 
 <option>C#</option>
        <option>java</option>  
        <option>python</option>  
        <option>web</option>  
        <option>android</option>  
    </select>  </td>

</tr>
<tr>
<td>project title</td>
<td><input type="text" class="demoInputBox" name="title"minlength="3" maxlength="16"  value="<?php if(isset($_POST['title'])) echo $_POST['title']; ?>" required ></td>

<tr>
<td>Upload report:</td>
<td>
   <input type="file" name="file" />
</td>
</tr>
<tr>
<td >
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="insert_button" value="submit" class="btnRegister" required ></td>
</tr>
</table>
  </form>
  </div>
      
    
    </section>
       <?php
include('inc/scripts.php');

include('inc/footer.php');
?>
</html>