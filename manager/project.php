
<?php
include('include/header.php');

include('include/navbar.php');

?>
<?php
//session_start();
include 'connection.php';
//echo "Connected, and database selected!"
?>
  


    
       <div class="main-panel">
          <div class="content-wrapper">
         
    <div id = "sidecontent" class = "well pull-right">

          
        <div class = "alert alert-info">final project
        
                             
                
        <div class="card-body p-0">
          <div class="table-responsive">
          <table class="table table-condensed m-0 table-hover" style="" border=1px>
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
</div>





          </div>
    </div>
  </div>
  
  <?php
include('include/scripts.php');

include('include/footer.php');
?>
  <!-- Scroll to Top Button-->

   