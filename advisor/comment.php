
 <?php
 include('include/header.php');
include('include/navbar.php');
?>
<?php
   include ('connection.php');
  ?>

  <?php

      if(isset($_POST['send'])){
      	$n = $_POST['name'];
      	$status = $_POST['status'];
      	
      	$mn = $_POST['manager'];
      		$task= $_POST['task'];
      	
      	$des= $_POST['comment'];
     


      
    
      	$query = "INSERT INTO comment(`name`,`status`,`manager`,`task`,`comment`) VALUES('$n','$status','$mn','$task','$des')";
      	
        	$result = $con->query($query);
      		if($result){
      			echo"inserted";
      		}else{
      		echo"wrong";
      		}
      	}
      
 ?>
 <div class="container-fluid page-body-wrapper">
          <div class="content-wrapper">


<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action="comment.php"  method="POST">

       
		<div class="row">



			<div class="col-md-6">
			<div class="form-group">
					<label for="" class="control-label">title</label>
					<input type="text" class="form-control form-control-sm" name="name">
			</div>
			</div>
          	<div class="col-md-6">
				<div class="form-group">
					<label for="">Status</label>
					<select name="status" id="status" class="custom-select custom-select-sm">
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
               <label for="" class="control-label">Project Manager</label>
               <input type="text" class="form-control form-control-sm" name="manager">
          </div>
          </div>
    
        <div class="col-md-6">
         <div class="form-group">
              <label for="" class="control-label">task nummber</label>
              <input type="text" class="form-control form-control-sm" name="task">
          </div>
          </div>
		<div class="row">
			<div class="col-md-10">
				<div class="form-group">
					
					<label for="" class="control-label">comment</label>
					<textarea name="comment" id="" cols="45" rows="10" class="summernote form-control">
				
					</textarea>
			</div>
			</div>
	  	</div>
      </div>
    	
    	<div class="card-footer border-top border-info">
    	<div class="d-flex w-100 justify-content-center align-items-center">
    	
    	
    <button name="send" class="btn btn-warning">send</button>
    		</div>
    	</div>
    	</form>
    	</div>
	</div>
</div>
</div>
</div>
<?php
include('include/footer.php');

include('include/scripts.php');
?>