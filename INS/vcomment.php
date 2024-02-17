  <?php
include('inc/header.php');

include('inc/navbar.php');
?>
<?php
//session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>
 <section id="intro">

    <div class="col-md-10" style="margin-top: 110px;">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <span><b>Comment:</b></span>
                             </div>
                </div>
        <div class="card-body p-0">
          <div class="table-responsive">
          <table  border="1px "class="table table-condensed m-0 table-hover" style="margin-top: 100px;color:white;>
            <colgroup>
              <col width="5%">
              <col width="25%">
              <col width="30%">
              <col width="15%">
              <col width="15%">
            </colgroup>
            <thead>
          
              <th>Name</th>
              
              <th>Task Status</th>
               <th>Manager</th>  
             <th>Task Number</th>
              <th>Comment</th>
            </thead>
            <tbody>

                <?php
                  $s_query = $con->query("SELECT * FROM `comment`") or die($conn->error);
                  while($s_fetch = $s_query->fetch_array()){  
                ?>
                <tr>
                  <td><?php echo $s_fetch['name']?></td>
                  <td><?php echo $s_fetch['status']?></td>

                    <td><?php echo $s_fetch['manager']?></td>
                  <td><?php echo $s_fetch['task']?></td>
                  <td><?php echo $s_fetch['comment']?></td>
      
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
include('inc/footer.php');

include('inc/scripts.php');
?>
