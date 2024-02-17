
<?php include ('include/header.php'); ?>

<?php include ('include/navbar.php'); ?>

<?php
	if(isset($_POST["btnsubmit"]))
	{
		include "connection.php";
		
		$date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
               		
		$query = "select *from `user` ";
		$result = mysqli_query($con,$query)or die("select error");
		while($rec = mysqli_fetch_array($result))
		{
			$mno = $rec["stud_id"];
			if(isset($_POST[$mno]))
			{
				$query1 = "INSERT INTO  `attendance`(`stud_id` ,  `date` ,  `attendance`) VALUES('$mno','$date','1')";
			}
			else
			{
				$query1 = "INSERT INTO  `attendance`(`stud_id` ,  `date` ,  `attendance`) VALUES('$mno','$date','0')";
			}
			mysqli_query($con,$query1)or die("insert error".$mno);
			print "<script>";
			print "alert('Attendance get successfully....');";
			print "self.location='getattendance.php';";
			print "</script>";
		}
		
		
			
		
	}
	else
	{
		header("Location:index.php");
	}
?>
<

<?php include ('include/footer.php'); ?>

<?php include ('include/scripts.php'); ?>