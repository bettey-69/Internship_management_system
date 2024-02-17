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

<center>list of student</center>
<table class="table" style="margin-top: 80px; max-width: 300px; max-height: 200px;" border=2px>
	<thead>
 <th> Order </th>
 <th>first Name </th>
  <th>last Name </th>
 <th> Email </th>
 <th> Username </th>
 <th> gender</th>
 <th> universtiy</th>

<th> department</th>
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
