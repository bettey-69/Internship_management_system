<html>
<body>
<?php
$con = mysqli_connect("localhost","root","","inms");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }
 
mysqli_select_db($con, "inms");
$fname = time().'_'.$_FILES['file']['name'];
$loc = './upload/';
$move = move_uploaded_file($_FILES['file']['tmp_name'], $loc.$fname);
if(!$move) exit;
// $fname = '';
 
$sql="INSERT INTO task_list (name,tasknu,status,pstatus,start_date,end_date,manager,file)
VALUES
( '$_POST[name]','$_POST[tasknu]','$_POST[status]','$_POST[pstatus]','$_POST[start_date]','$_POST[end_date]','$_POST[manager]','$fname')";
 
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
header('location:file_uploading/in.php?success');
 
mysqli_close($con);

?>

</body>
</html>
 