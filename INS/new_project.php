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

      if(isset($_POST['save'])){
      	$n = $_POST['name'];
      	$status = $_POST['status'];
      	$start = $_POST['start_date'];
      	$end = $_POST['end_date'];
      	$mn = $_POST['manager'];
      	$un1 = $_POST['name1'];
      		$un2 = $_POST['name2'];
      			$un3 = $_POST['name3'];
      				$un4 = $_POST['name4'];
      					$un5 = $_POST['name5'];
      						$un6 = $_POST['name6'];
      	$des= $_POST['description'];
     


      
    
      	$query = "INSERT INTO network(`name`,`status`,`start_date`,`end_date`,`manager`,`name1`,`name2`,`name3`,`name4`,`name5`,`name6`,`description`) VALUES('$n','$status','$start','$end','$mn','$un1','$un2','$un3','$un4','$un5','$un6','$des')";
      	
        	$result = $con->query($query);
      		if($result){
      			echo"inserted";
      		}else{
      		echo"wrong";
      		}
      	}
      
 ?>
 <section id="intro">

<div class="col-lg-10"style="margin-top: 120px; margin-left:114px;">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action=""  method="POST">
			<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label">Title</label>
					<input type="text" class="form-control form-control-sm" name="name">
				</div>
			</div>
          	
			
		</div>
		<div class="row"> 
			<div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Start Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="start_date">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">End Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="end_date">
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
              <label for="" class="control-label">Project Team Members</label><br>
                    <input type="text"  name="name1">
                           <input type="text"  name="name2"><br></br>
                                  <input type="text" name="name3">
                                         <input type="text" name="name4"><br></br>
                                            <input type="text" name="name5">
                                               <input type="text" name="name6">
              	
              </select>
            </div>
          </div>
        </div>
		<div class="row">
			<div class="col-md-10">
				<div class="form-group">
					
					<label for="" class="control-label">Description</label>
					<textarea name="description" id="" cols="5" rows="10" class="summernote form-control">
				
					</textarea>
				</div>
			</div>
		</div>
      
    	
    	<div class="card-footer border-top border-info">
    		<div class="d-flex w-100 justify-content-center align-items-center">
    			<button class="btn btn-flat  bg-gradient-primary mx-2"  name="save">Save</button>
    	
    <a href="addtask.php" class="btn btn-warning">addtask</a>
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