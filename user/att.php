<?php
session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>
<?php
// THE PHP CODE THAT DEACTIVATE A ROW

if(isset($_GET['abscent'])){
$id = $_GET['abscent'];
$sql = "UPDATE user SET status = 0 WHERE id = $id";
$con->query($sql);
}

// THE PHP CODE THAT ACTIVATE A ROW

if(isset($_GET['present'])){
$id = $_GET['present'];
$sql = "UPDATE user SET status = 1 WHERE id = $id";
$con->query($sql);
}


 ?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="regcss.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<meta http-equiv="refresh" content="30">
</head>

<body>
	
	<div class="container">
<?php
$qr = "SELECT * FROM user";
$result = $con->query($qr);
$row = mysqli_num_rows($result);
if($row==0){
	echo "EMPTY TABLE";
}
else{
	?>
	
	<center> <b>student attendance </b></center>
<table class="table">
	<thead>
 <th> Order </th>
 <th> firstname </th>
 <th> lastname</th>
 <th> department </th>
 <th> attendance</th>
 
	</thead>
	<?php
	$order = 1;
	while($row = mysqli_fetch_object($result)){
		$id = $row->id;
	$firstname = $row->firstname;
		$lastname = $row->lastname;

		$department = $row->department;
		$attendance=$row->status;


		if($attendance==1){
			$stat =  "<b style=\"color:green\"> present </b>";
		}
		else{
			$stat =  "<b style=\"color:brown\"> abscent </b>";
		}
     ?>
<tr>
	   <td> <?php  echo $order;  ?>  </td>
		 <td> <?php  echo $firstname;  ?>  </td>
		 <td> <?php  echo $lastname;  ?>  </td>
		 <td> <?php  echo $department;  ?>  </td>
		 
		 <?php
     if($attendance == 0) {
		  ?>
		 <td> <a href="att.php?present=<?php echo $id; ?>"> <button class="btn btn-success">  present  </button>   </a> </td>
       <?php
		 } else {
			  ?>
		 <td> <a href="att.php?abscent=<?php echo $id; ?>"> <button class="btn btn-dark">  Abscent  </button>   </a> </td></tr>
	  <?php }
			  ?>

		 <?php
		 $order++;
	}
}
 ?>

<table >
<tr>
<td>date</td>
<td><input type="date"></td> <td></td> <td><input type="submit"  class="btn btn-secondary" name="save"></td></tr>

 </tr>
 </table> 
</table>
</form>
</div>
</body>
</html>