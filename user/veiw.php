<?php
session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="regcss.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<meta http-equiv="refresh" content="30">
</head>

<body>


<?php
$qr = "SELECT * FROM user";
$result = $con->query($qr);
$row = mysqli_num_rows($result);
if($row==0){
	echo "EMPTY TABLE";
}
else{
	?>
	<?php
// THE PHP CODE THAT DELETE A ROW
if(isset($_GET['delete'])){
$id = $_GET['delete'];
$sql = "DELETE FROM user WHERE id=$id";
$con->query($sql);
}
?>
	<center> <b>list of student</b></center>
<table class="table">
	<thead>
 <th> Order </th>
 <th>first Name </th>
  <th>last Name </th>
 <th> Email </th>
 <th> Username </th>
 <th> gender</th>
 <th> universtiy</th>
 <th> language</th>
<th> department</th>


 <th colspan="2"> Manage student </th>
	</thead>
	<?php
	$order = 1;
	while($row = mysqli_fetch_object($result)){
		$id = $row->id;
		$firstname = $row->firstname;
		$lastname = $row->lastname;

		$Email = $row->email;
		$Username = $row->username;
		$gender= $row->gender;
		$universtiy = $row->universtiy;
		$language = $row->language;
		$department = $row->department;

     ?>
<tr>
	   <td> <?php  echo $order;  ?>  </td>
		 <td> <?php  echo $firstname;  ?>  </td>
		 <td> <?php  echo $lastname;  ?>  </td>

		 <td> <?php  echo $Email;  ?>  </td>
		 <td> <?php  echo $Username;?>  </td>
		 <td> <?php  echo $gender;?>  </td>
		 <td> <?php  echo $universtiy;  ?>  </td>
		 <td> <?php  echo $language;  ?>  </td>
		 <td> <?php  echo $department;?></td>

		 <td> <a href="veiw.php?delete=<?php echo $id; ?>"> <button class="btn btn-danger">  Delete </button> </a> </td>
		 <td> <a href="edit.php?edit=<?php echo $id; ?>"> <button class="btn btn-primary"> Edit  </button> </a> </td>

</tr>

		 <?php
		 $order++;
	}
}
 ?>
 <tr>
   <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><td></td></td><td> <a href="adm.php"> <button class="btn btn-primary"> back</button> </a> </td></tr>
</table>
</body>
</html>
