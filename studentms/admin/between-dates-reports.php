<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Trang Báo cáo giữa các ngày</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Báo cáo giữa các ngày </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Báo cáo tiến độ</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Báo cáo giữa các ngày</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Báo cáo giữa các ngày</h4>
                   
                    <form class="forms-sample" method="post" action="between-date-reprtsdetails.php">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Từ ngày:</label>
                        <input type="date" class="form-control" id="fromdate" name="fromdate" value="" required='true'>
                      </div>
                     <div class="form-group">
                        <label for="exampleInputName1">Đến ngày:</label>
                        <input type="date" class="form-control" id="todate" name="todate" value="" required='true'>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Nộp</button>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php }  ?>