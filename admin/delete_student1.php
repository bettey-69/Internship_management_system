<?php
	include'connection.php';
	$conn->query("DELETE FROM `user` WHERE stud_id = '$_REQUEST[id]'") or die($conn->error);
	header('location:view.php');
?>