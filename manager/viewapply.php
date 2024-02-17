<?php
include('include/header.php');
include('include/navbar.php');



?>
<?php
//session_start();
include 'connect.php';
//echo "Connected, and database selected!"
?>	
<?php
// THE PHP CODE THAT DELETE A ROW
if(isset($_GET['delete'])){
$id = $_GET['delete'];
$sql = "DELETE FROM fill_details WHERE id=$id";
$conn->query($sql);
}
?>

       <div class="main-panel">
          <div class="content-wrapper">
         
		<div id = "sidecontent" class = "well pull-right">
				<div class = "alert alert-info">apply student</div>
				
				<button style = "display:none;" type = "button" id = "cancel_student" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
				<br />
				<br />
				<div class="scrollmenu">


				<div id = "s_table" class = "panel panel-default">
					<div  class = " panel-heading">	
						<table id = "table" class = "table table-bordered">
							<thead>
								<tr>
									<th>company name</th>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Email</th>
									<th>Gender</th>
									<th>letter</th>
									<th colspan="3">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$s_query = $conn->query("SELECT * FROM `fill_details`") or die($conn->error);
									while($s_fetch = $s_query->fetch_array()){	
								?>
								<tr>
									<td><?php echo $s_fetch['company_name']?></td>
									<td><?php echo $s_fetch['first_name']?></td>
									<td><?php echo $s_fetch['last_name']?></td>
									<td><?php echo $s_fetch['email']?></td>
									<td><?php echo $s_fetch['gender']?></td>

                                    
									<td><a href="../ins/upload/<?php echo $s_fetch['file']?>" target="_blank" download><?php echo $s_fetch['file']?></a></td>

							<form action="viewapply.php" method="POST">
								<td><input type="hidden" name="id" value="<?php echo $s_fetch['id'];?>">
									<td><input type="submit" name="approve" class="btn btn-primary"value="approve">
										<td><input type="submit" name="reject" class="btn btn-secondary"value="reject">
			

							
						</form>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
										</div>	
										</div>
									</div>

		</div>

	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<?php
   if(isset($_POST['approve'])){
   	$id=$_POST['id'];

  $query = "UPDATE fill_details SET status = 'approve' WHERE id='$id' ";
    $res = $conn->query($query);
    echo'<script type="text/javascript">';
    echo'alert("approved");';
    echo'window.location.href="viewapply.php"';
    echo'</script>';
   }
  if(isset($_POST['reject'])){
   	$id=$_POST['id'];

  $query = "UPDATE fill_details SET status = 'reject' WHERE id='$id' ";
    $res = $conn->query($query);
    echo'<script type="text/javascript">';
    echo'alert("reject");';
    echo'window.location.href="viewapply.php"';
    echo'</script>';
   }



	?>
	
</script>
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/sidebar.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/jquery.dataTables.min.js"></script>
<script src = "js/script.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200)
						.css('display', 'block');
					$('.pic_hide').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

</div>




  <?php
include('include/scripts.php');

include('include/footer.php');
?>
