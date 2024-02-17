<?php

include('header.php');
include('footer.php');
 ?>
 <?php
 include('inc/header.php');
include('inc/navbar.php');
?>
<?php
   include ('connection.php');
  ?>
  <?php
if(!empty($_POST["save"])) {
  /* Form Required Field Validation */
  foreach($_POST as $key=>$value) {
    if(empty($_POST[$key])) {
    $error_message = "All Fields are required";
    break;
    }
  }
}
 ?>
  <html>
  <head>
  <style>
  	body{ background-image: url("img/intro-carousel/10.jpg");

  	}
  </style>
</head>
 <section id="intro">

<div class="col-lg-12" style="margin-top: 120px; max-width: 700px; margin-left: 380px;">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action="insert.php" name="frmRegistration" method="post" enctype="multipart/form-data">

       
		<div class="row">



			<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label">Title</label>
					<input type="text" class="form-control form-control-sm" name="name" value=" <?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required >
				</div>
			</div>
			 	<div class="col-md-6">
				<div class="form-group">
					<label for=""> Task Number</label>
					<select name= "tasknu"  class="custom-select custom-select-sm" value=" <?php if(isset($_POST['tasknu'])) echo $_POST['tasknu']; ?>" required >
						<option>Task 1</option>
						<option>Task 2</option>
						<option>Task 3</option>
						<option>Task 4</option>
						<option>Task 5</option>
								<option>Task 6</option>
						<option>End task</option>
					</select>
				</div>
			</div>
		</div>
			<div class="row">

       	<div class="col-md-6">
				<div class="form-group">
					<label for=""> Task Status</label>
					<select name="status" id="status" class="custom-select custom-select-sm" value=" <?php if(isset($_POST['status'])) echo $_POST['status']; ?>" required >
						<option>Started</option>
						<option>On Progress</option>
						<option>Finished</option>
					</select>
				</div>
			</div>
		
		   	<div class="col-md-6">
				<div class="form-group">
					<label for=""> Project Status</label>
					<select name="pstatus" id="status" class="custom-select custom-select-sm" value=" <?php if(isset($_POST['pstatus'])) echo $_POST['pstatus']; ?>" required >
						<option>Started</option>
						<option>On progress</option>
						<option>Finished</option>
					</select>
				</div>
			</div>
		
		<div class="row">
			<div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Start Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="start_date" value=" <?php if(isset($_POST['start_date'])) echo $_POST['start_date']; ?>" required >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">End Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="end_date" value=" <?php if(isset($_POST['end_date'])) echo $_POST['end_date']; ?>" required >
            </div>
          </div>
		</div>
        <div class="row">
        
           <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Project Manager</label>
              <input type="text" class="form-control form-control-sm" name="manager" value=" <?php if(isset($_POST['manager'])) echo $_POST['manager']; ?>" required >
              	            </div>
          </div>
    
     		
			<div class="col-md-12">
			
					
					<label for="" class="control-label">Task</label>
				  <input type="file" name="file" required />
				
					
				
			</div>
		</div>
      
    	
    	<div class="card-footer border-top border-info">
    		<div class="d-flex w-100 justify-content-center align-items-center">
    			<button class="btn btn-flat  bg-gradient-primary mx-2"  name="save">Send</button>

    			<a href="vcomment.php" class="btn btn-flat  bg-gradient-warning mx-2">View Comment</a>
    					<a href="fproject.php" class="btn btn-secondary">Final Project</a>

    	</div>
    	</form>
    	</div>
	</div>
</div>
</section>
</body>
</html>
<?php
 include('inc/footer.php');

include('inc/scripts.php');
?>