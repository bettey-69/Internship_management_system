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
    <section id="intro">

<div class="col-lg-12" style="margin-top: 90px;">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form name="frmRegistration" method="post" enctype="multipart/form-data" action="inse.php">

       
		<div class="row">



			<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label">title</label>
					<input type="text" class="form-control form-control-sm" name="name" value=" <?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
				</div>
			</div>
          	<div class="col-md-6">
				<div class="form-group">
					<label for="">Status</label>
					<select name="status" id="status" class="custom-select custom-select-sm" value=" <?php if(isset($_POST['status'])) echo $_POST['status']; ?>">
						<option>started</option>
						<option>pending</option>
						<option>finished</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row"> 
			<div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Start Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="start_date" value=" <?php if(isset($_POST['start_date'])) echo $_POST['start_date']; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">End Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="end_date" value=" <?php if(isset($_POST['end_date'])) echo $_POST['end_date']; ?>">
            </div>
          </div>
		</div>
        <div class="row">
        
           <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Project Manager</label>
              <input type="text" class="form-control form-control-sm" name="manager" value=" <?php if(isset($_POST['manager'])) echo $_POST['manager']; ?>">
              	            </div>
          </div>
    
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Project Team Members</label><br>
                    <input type="text"  name="name1" value=" <?php if(isset($_POST['name1'])) echo $_POST['name1']; ?>">
                      <input type="text"  name="name2" value=" <?php if(isset($_POST['name2'])) echo $_POST['name2']; ?>">
                                  <input type="text" name="name3" value=" <?php if(isset($_POST['name3'])) echo $_POST['name3']; ?>"><br></br>
                                         <input type="text" name="name4" value=" <?php if(isset($_POST['name4'])) echo $_POST['name4']; ?>">
                                            <input type="text" name="name5" value=" <?php if(isset($_POST['name5'])) echo $_POST['name5']; ?>">
                                               <input type="text" name="name6" value=" <?php if(isset($_POST['name6'])) echo $_POST['name6']; ?>">
              	
              </select>
            </div>
          </div>
        </div>
		<div class="row">
			<div class="col-md-10">
				<div class="form-group">
					
					<label for="" class="control-label">project</label>
					<input type=file name="file">
				
					
				</div>
			</div>
		</div>
      
    	
    	<div class="card-footer border-top border-info">
    		<div class="d-flex w-100 justify-content-center align-items-center">
    			<button class="btn btn-flat  bg-gradient-primary mx-2"  name="save">send</button>
    	
    <a href="mark.php" class="btn btn-warning">view</a>
    		</div>
    	</form>
    	</div>
	</div>
</div>
</section>
<?php
 include('inc/footer.php');

include('inc/scripts.php');
?>