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
$qr = "SELECT * FROM network";
$result = $con->query($qr);
$row = mysqli_num_rows($result);
if($row==0){
  echo "EMPTY TABLE";
}
else{

?>

    <div class="container-fluid page-body-wrapper">
          <div class="content-wrapper">
        <?php
  
  while($row = mysqli_fetch_object($result)){
    $id = $row->id;
    $name = $row->name;
     $des = $row->description;

    $start = $row->start_date;
    $end = $row->end_date;
    $status= $row->status;
    $manager= $row->manager;
$name1=$row->name1;
$name2=$row->name2;
$name3=$row->name3;
$name4=$row->name4;
$name5=$row->name5;
$name6=$row->name6;

     ?>


            <h1 class="m-0">View Project</h1>
    
            <hr class="border-primary">
   
    <section class="content">
      <div class="container-fluid">
         <div class="col-lg-12">
  <div class="row">
    <div class="col-md-12">
      <div class="callout callout-info">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-6">
              <dl>
                <dt> <b class="border-bottom border-primary">Project Name</b></dt>
                  <dd> <?php  echo $name;  ?>  </dd>

              
                   <dt><b class="border-bottom border-primary">Description</b></dt>

        <dd> <?php  echo $des;  ?>  </dd>
                           </dl>
            </div>
            <div class="col-md-6">
              <dl>
                <dt><b class="border-bottom border-primary">Start Date</b></dt>
                     <dd> <?php  echo $start;  ?>  </dd>
                      </dl>
              <dl>
                <dt><b class="border-bottom border-primary">End Date</b></dt>
                          <dd> <?php  echo $end;    ?>  </dd>
  
        
              </dl>
              <dl>
                <dt><b class="border-bottom border-primary">Status</b></dt>
                <dd> <?php  echo $status;    ?>  </dd>

              </dl>
              <dl>
                <dt><b class="border-bottom border-primary">Project Manager</b></dt>
                <dd> <?php  echo $manager;?>  </dd>
            
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-2">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <span><b>Team Member/s:</b></span>
          <div class="card-tools">
            <!-- <button class="btn btn-primary bg-gradient-primary btn-sm" type="button" id="manage_team">Manage</button> -->
          </div>
        </div>
        <div class="card-body">
          <ul class="users-list clearfix">
                            <li>
                              <?php  echo $name1;?> 
                          </li>
                            <li>
                               <?php  echo $name2;?> 
                          </li>
                            <li>
                               <?php  echo $name3;?> 
                          </li>
                           <li>
                              <?php  echo $name4;?>  
                          </li>
                           <li>
                               <?php  echo $name5;?> 
                          </li>
                           <li>
                               <?php  echo $name6;?> 
                          </li>
                      </ul>
        </div>
      </div>
    </div>


     
     <?php
}
}
     ?>

    <div class="col-md-8">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <span><b>Task List:</b></span>
                             </div>
                </div>
        <div class="card-body p-0">
          <div class="table-responsive">
          <table class="table table-condensed m-0 table-hover">
            <colgroup>
              <col width="5%">
              <col width="25%">
              <col width="30%">
              <col width="15%">
              <col width="15%">
            </colgroup>
            <thead>
          
              <th>name</th>
              <th>tasknumber</th>
              <th>taskStatus</th>
               <th>projectStatus</th>
                <th>start date</th>
                 <th>end date</th>
                  <th>manager</th>
              <th>task</th>
            </thead>
            <tbody>

                <?php
                  $s_query = $con->query("SELECT * FROM `task_list`") or die($conn->error);
                  while($s_fetch = $s_query->fetch_array()){  
                ?>
                <tr>
                  <td><?php echo $s_fetch['name']?></td>
                  <td><?php echo $s_fetch['tasknu']?></td>
                  <td><?php echo $s_fetch['status']?></td>
                    <td><?php echo $s_fetch['pstatus']?></td>
                  <td><?php echo $s_fetch['start_date']?></td>
                  <td><?php echo $s_fetch['end_date']?></td>
                  <td><?php echo $s_fetch['manager']?></td>

                                    

                  <td><a href="../ins/upload/<?php echo $s_fetch['file']?>" target="_blank" download><?php echo $s_fetch['file']?></a></td>
      
                </tr>
                <?php
                  }
                ?>
                              <tr>
                          </tr>
                          </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>

    <?php
include('include/scripts.php');

include('include/footer.php');
?>