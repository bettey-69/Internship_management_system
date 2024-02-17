
<?php



$con = mysqli_connect("localhost","root","","inms");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }
 
mysqli_select_db($con, "inms");

 
$sql="INSERT INTO network (feedback,mark)
VALUES
( '$_POST[feedback]','$_POST[mark]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
 
mysqli_close($con);

?>

 ?>
