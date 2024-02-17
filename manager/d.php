
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
          <div class="row">
            <div class="col-md-12 grid-margin">

          <div class="row">
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today’s project</p>
                      <p class="fs-30 mb-2">two</p>
                      <p> (90 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total task</p>
                      <p class="fs-30 mb-2">12</p>
                      <p>(90days)</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of student</p>
                      <p class="fs-30 mb-2">34</p>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of user</p>
                      <p class="fs-30 mb-2">4</p>
                      </p>
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
include('include/footer.php');

include('include/scripts.php');

?>
