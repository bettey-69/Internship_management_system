
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


    <div class="container-fluid page-body-wrapper">
          <div class="content-wrapper">
    <div class="col-md-10" style="margin-top: 130px;">
    
        <div class="card-header">
          <span><b>project:</b></span>
                             </div>
                </div>
        <div class="card-body p-0">
          <div class="table-responsive">
          <table class="table table-condensed m-0 table-hover" style="color:white;" border=1px>
            <colgroup>
              <col width="5%">
              <col width="25%">
              <col width="30%">
              <col width="15%">
              <col width="15%">
            </colgroup>
            <thead>
    
              <th>name</th>
              <th>pstatus</th>
              <th>start_date</th>
               <th>end_date</th>
                <th>manager</th>
                 <th>team member</th>
                  <th>project</th>
              
              
            </thead>
            <tbody>

                <?php
                  $s_query = $con->query("SELECT * FROM `fp`") or die($conn->error);
                  while($s_fetch = $s_query->fetch_array()){  
                ?>
                <tr>
                  <td><?php echo $s_fetch['name']?></td>
                  <td><?php echo $s_fetch['status']?></td>
                  <td><?php echo $s_fetch['start_date']?></td>
                    <td><?php echo $s_fetch['end_date']?></td>
                  <td><?php echo $s_fetch['manager']?></td>
                
<td><ul><li>
                            
                            <?php echo $s_fetch['name1']?> 
                      </li><li>
                              <?php echo $s_fetch['name2']?> 
                          </li>
                            <li>
                            <?php echo $s_fetch['name3']?>
                          </li>
                           <li>
                            <?php echo $s_fetch['name4']?> 
                          </li>
                           <li>
                              <?php echo $s_fetch['name5']?> 
                          </li>
                           <li>
                              <?php echo $s_fetch['name6']?> 
                          </li>
                      </ul>
              
        </td>
                 

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


          </div>
    </div>
  
  <?php
include('inc/scripts.php');

include('inc/footer.php');
?>
  <!-- Scroll to Top Button-->

   