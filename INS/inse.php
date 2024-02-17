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
 
$sql="INSERT INTO fp (name,status,start_date,end_date,manager,name1,name2,name3,name4,name5,name6,file)
VALUES
( '$_POST[name]','$_POST[status]','$_POST[start_date]','$_POST[end_date]','$_POST[manager]','$_POST[name1]','$_POST[name2]','$_POST[name3]','$_POST[name4]','$_POST[name5]','$_POST[name6]','$fname')";
 
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
header('location:fproject.php');
 
mysqli_close($con);

?>

</body>
</html>
 