<?php
include('include/header.php');

include('include/navbar.php');
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
	  <div class="main-panel">
          <div class="content-wrapper">
         
		<div id = "sidecontent" class = "well pull-right">

		        <div id = "sidecontent" class = "well pull-right">
				<div class = "alert alert-info">students project</div>
				

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
																	
  <?php
include('include/scripts.php');

include('include/footer.php');
?>
