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
$sql = "DELETE FROM user WHERE stud_id=$id";
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

<th> department</th>


 <th colspan="2"> Manage student </th>
	</thead>
	<?php
	$order = 1;
	while($row = mysqli_fetch_object($result)){
		$id = $row->stud_id;
		$firstname = $row->firstname;
		$lastname = $row->lastname;

		$Email = $row->email;
		$Username = $row->username;
		$gender= $row->gender;
		$universtiy = $row->universtiy;
	
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
		 
		 <td> <?php  echo $department;?></td>

		 <td> <a href="view.php?delete=<?php echo $id; ?>"> <button class="btn btn-danger">  Delete </button> </a> </td>
		<td> <a href="edit.php?edit=<?php echo $id; ?>"> <button class="btn btn-primary"> Edit  </button> </a> </td>

</tr>

		 <?php
		 $order++;
	}
}
 ?>
 
</table>

  <?php
include('include/scripts.php');

include('include/footer.php');
?>
