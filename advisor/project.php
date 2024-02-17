
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
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="list">
        <colgroup>
          <col width="5%">
          <col width="35%">
          <col width="15%">
          <col width="15%">
          <col width="20%">
          <col width="10%">
        </colgroup>
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th>Project</th>
            <th>Language</th>
            <th>Date Started</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            


  <?php
  $order = 1;
  while($row = mysqli_fetch_object($result)){
    $id = $row->id;
    $name = $row->name;
    $start = $row->start_date;
    $end = $row->end_date;
    $status= $row->status;
  

     ?>
<tr>
     <td> <?php  echo $order;  ?>  </td>
     <td> <?php  echo $name;  ?>  </td>
     <td> <?php  echo $start;  ?>  </td>
     <td> <?php  echo $end;?>  </td>
     <td> <?php  echo $status;?>  </td>
      <td>
              <button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          Action
                        </button>
                        <div class="dropdown-menu" style="">
                          <a class="dropdown-item view_project" href="viewp.php" data-id="2">View</a>
                          <div class="dropdown-divider"></div></div></td>

  
</tr>

     <?php
     $order++;
  }
}
 ?>
 
</table>




   
  <?php
include('include/scripts.php');

include('include/footer.php');
?>
  <!-- Scroll to Top Button-->

   