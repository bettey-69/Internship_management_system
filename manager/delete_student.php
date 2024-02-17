<?php
	include'connection.php';
	$conn->query("DELETE FROM `fill_details` WHERE id = '$_REQUEST[id]'") or die($conn->error);
	header('location:viewapply.php');
?>