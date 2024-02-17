<?php
include('include/header.php');

include('include/navbar.php');
include 'connection.php';
?>
<?php
//session_start();
include 'connect.php';
//echo "Connected, and database selected!"
?><style>
	div.scrollmenu {
  background-color: ;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: 
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: wheat;
}

	</style>

		        <div id = "sidecontent" class = "well pull-right">
				<div class = "alert alert-info">students project</div>
				
				<button style = "display:none;" type = "button" id = "cancel_student" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
				<br />
				<br />
					<div class="scrollmenu">
				<div id = "s_table" class = "panel panel-default">
				<div  class = " panel-heading">	
			<table id = "table" class = "table table-bordered">
							<thead>
								<tr>

								<th>groupname</th>
									<th>name1</th>
									<th>name2</th>
									<th>name3</th>
                                    <th>name4</th>

									<th>project</th>
									<th>title</th>
									<th>report</th>
									<th>feedback</th>
									<th>totalmark</th>
									

								</tr>
							</thead>
							<tbody>
								<?php
									$s_query = $conn->query("SELECT * FROM `network`") or die($conn->error);
									while($s_fetch = $s_query->fetch_array()){	
								?>
								<tr>
									<td><?php echo $s_fetch['group_name']?></td>
									<td><?php echo $s_fetch['name1']?></td>
									<td><?php echo $s_fetch['name2']?></td>
									<td><?php echo $s_fetch['name3']?></td>
										<td><?php echo $s_fetch['name4']?></td>
									<td><?php echo $s_fetch['project']?></td>
										<td><?php echo $s_fetch['title']?></td>
									<td><a href="../ins/upload/<?php echo $s_fetch['file']?>" target="_blank" download><?php echo $s_fetch['file']?></a></td>
									<form method="POST" action="viewnetwork.php">
	
	                            	<td><input type="text" name="feedback" class="demoInputBox">
                                <td><input type="text" name="mark" class="demoInputBox">
		                          <td><input type="submit" name="send" value="send">
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
   if(isset($_POST['send'])){


   	$feedback= $_POST['feedback'];
	$mark= $_POST['mark'];
	$query = "INSERT INTO network (`feedback`,`mark`) VALUES('$feedback','$mark')";

    $res = $conn->query($query);
}
?>

	
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
<script type = "text/javascript">
	$(document).ready(function(){
		$('.id').on('click', function(){
			$id = $(this).attr('name');
			$('.delete_student').on('click', function(){
				window.location = 'delete_student.php?id=' + $id;
			});
		});
	});
</script>




  <?php
include('include/scripts.php');

include('include/footer.php');
?>
