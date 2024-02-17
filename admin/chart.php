<?php
include('include/header.php');


include('include/navbar.php');
?>
<?php
  $con = mysqli_connect("localhost","root","","inms");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'no_student'],
         <?php
         $sql = "SELECT * FROM chart";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['year']."',".$result['no_student']."],";
          }

         ?>
        ]);

        var options = {
          title: 'percentage of intern student in oromiaICT'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
           <div class="container-fluid">


                    <!-- DataTales Example -->
            <div class="card shadow mb-4">
                      <!--  <div class="card-header py-3">-->
                        
                        <div class="card-body">
                          <div id="piechart" style="width: 900px; height: 500px;"></div>
              

</div>

                </div>
            </div>
        
  
  <?php
include('include/scripts.php');

include('include/footer.php');
?>
  <!-- Scroll to Top Button-->
