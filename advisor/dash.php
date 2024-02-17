<?php
include('include/header.php');

include('include/navbar.php');

?><html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Task Management System</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- SweetAlert2 -->


  <link rel="stylesheet" href="assets/dist/css/styles.css">
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
 
</head>



    <div class="container-fluid page-body-wrapper">
          <div class="content-wrapper">
    
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <!-- Info boxes -->
 <div class="col-12">
          <div class="card">
            <div class="card-body">
              
            </div>
          </div>
  </div>
  <hr>
          
      <div class="row">
        <div class="col-md-8">
        <div class="card card-outline card-success">
          <div class="card-header">
            <b>Project Progress</b>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0 table-hover">
                <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>
                <thead>
                  <th>#</th>
                  <th>Project</th>
                  <th>Progress</th>
                  <th>Status</th>
                  <th></th>
                </thead>
                <tbody>
                                  <tr>
                      <td>
                         1                      </td>
                      <td>
                          <a>
                              internship management system                         </a>
                          <br>
                          <small>
                              Due: 2022-01-20                          </small>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 80.00%">
                              </div>
                          </div>
                          <small>
                              80.00% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class='badge badge-info'>On-Progress</span>                      </td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="viewp.php">
                              <i class="fas fa-folder">
                              </i>
                              View
                        </a>
                      </td>
                  </tr>
                                  <tr>
                      <td>
                         2                      </td>
                      <td>
                          <a>
                             cafe management system                         </a>
                          <br>
                          <small>
                              Due: 2020-12-31                          </small>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                              </div>
                          </div>
                          <small>
                              50% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class='badge badge-primary'>on-progress</span>                      </td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="">
                              <i class="fas fa-folder">
                              </i>
                              View
                        </a>
                      </td>
                  </tr>

                                  <tr>
                      <td>
                         3                     </td>
                      <td>
                          <a>
                             employee management system                         </a>
                          <br>
                          <small>
                              Due: 2020-2-31                          </small>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                              </div>
                          </div>
                          <small>
                              20% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class='badge badge-primary'>on-progress</span>                      </td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="">
                              <i class="fas fa-folder">
                              </i>
                              View
                        </a>
                      </td>
                  </tr>
                                </tbody>  
              </table>
            </div>
          </div>
        </div>
        </div>
        <div class="col-md-4">
          <div class="row">
          <div class="col-12 col-sm-6 col-md-12">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3>2</h3>

                <p>Total Projects</p>
              </div>
              <div class="icon">
                <i class="fa fa-layer-group"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-12">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3>4</h3>
                <p>Total Tasks</p>
              </div>
              <div class="icon">
                <i class="fa fa-tasks"></i>
              </div>
            </div>
          </div>
      </div>
        </div>
      </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
    </div>
  </div>
>
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="assets/plugins/toastr/toastr.min.js"></script>
<!-- Switch Toggle -->
<script src="assets/plugins/bootstrap4-toggle/js/bootstrap4-toggle.min.js"></script>
<!-- Select2 -->
<script src="assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- dropzonejs -->
<script src="assets/plugins/dropzone/min/dropzone.min.js"></script>
<script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- DateTimePicker -->
  <script src="assets/dist/js/jquery.datetimepicker.full.min.js"></script>
  <!-- Bootstrap Switch -->
<script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
 <!-- MOMENT -->
<script src="assets/plugins/moment/moment.min.js"></script>
    <?php
include('include/scripts.php');

include('include/footer.php');
?>
