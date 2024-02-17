
<?php
include('include/header.php');

include('include/navbar.php');

?>
<?php
//session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>
    <div class="container-fluid page-body-wrapper">
          <div class="content-wrapper">


    <div class="col-md-10">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <span><b>Task List:</b></span>
                             </div>
                </div>
        <div class="card-body p-0">
          <div class="table-responsive">
          <table class="table table-condensed m-0 table-hover" style="margin-top: 80px; max-width: 300px; max-height: 200px;" border=0px>
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
              <th>comment</th>
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

       <td> <a href="comment.php" class="btn btn-warning">send</a></td>
      
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

          </div>
    </div>
  
  <?php
include('include/scripts.php');

include('include/footer.php');
?>
  <!-- Scroll to Top Button-->

   