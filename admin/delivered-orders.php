<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Riro Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <!-- <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php">RIRO</a>
          <a class="sidebar-brand brand-logo-mini" href="index.php">RIRO</a>
          
        </div> -->
        
        <ul class="nav">
          <!-- Profile -->
          <li class="nav-item profile">
              <div class="profile-desc">
                  <div class="profile-pic">
                      <div class="count-indicator">
                          <img class="img-xs rounded-circle" src="assets/images/favicon.png" alt="">
                          <span class="count bg-success"></span>
                      </div>
                      <div class="profile-name">
                          <h5 class="mb-0 font-weight-normal">Riro Admin</h5>
                      </div>
                  </div>
              </div>
          </li>
      
          <!-- Navigation Category -->
          <li class="nav-item nav-category">
              <span class="nav-link">Navigation</span>
          </li>
      
          <!-- Dashboard -->
          <li class="nav-item menu-items">
              <a class="nav-link" href="index.php">
                  <span class="menu-icon">
                      <i class="mdi mdi-speedometer"></i>
                  </span>
                  <span class="menu-title">Dashboard</span>
              </a>
          </li>
      
          <!-- Website Management Dropdown -->
          <li class="nav-item menu-items">
              <a class="nav-link" data-toggle="collapse" href="#website-management" aria-expanded="false" aria-controls="website-management">
                  <span class="menu-icon">
                      <i class="mdi mdi-laptop"></i>
                  </span>
                  <span class="menu-title">Website Management</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="website-management">
                  <ul class="nav flex-column sub-menu">
                  <!-- <li class="nav-item"> <a class="nav-link" href="slider.php">Slider</a></li> -->
              <li class="nav-item"> <a class="nav-link" href="gallery.php">Gallery</a></li>
              <li class="nav-item"> <a class="nav-link" href="privacy-policy.php">Privacy Policy</a></li>
              <li class="nav-item"> <a class="nav-link" href="refund-policy.php">Refund Policy</a></li>
              <li class="nav-item"> <a class="nav-link" href="terms-of-use.php">Terms of use</a></li>
                  </ul>
              </div>
          </li>
      
          <!-- Product Management Dropdown -->
          <li class="nav-item menu-items">
              <a class="nav-link" data-toggle="collapse" href="#product-management" aria-expanded="false" aria-controls="product-management">
                  <span class="menu-icon">
                      <i class="mdi mdi-laptop"></i>
                  </span>
                  <span class="menu-title">Product Management</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="product-management">
                  <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="category.php">Category</a></li>
              <li class="nav-item"> <a class="nav-link" href="subcategory.php">Sub category</a></li>
              <li class="nav-item"> <a class="nav-link" href="Products.php">Product</a></li>
                  </ul>
              </div>
          </li>
      
          <!-- Order Management Dropdown -->
          <li class="nav-item menu-items">
              <a class="nav-link" data-toggle="collapse" href="#order-management" aria-expanded="false" aria-controls="order-management">
                  <span class="menu-icon">
                      <i class="mdi mdi-laptop"></i>
                  </span>
                  <span class="menu-title">Order Management</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="order-management">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="new-orders.php">New Orders</a></li>
                      <li class="nav-item"> <a class="nav-link" href="shipped-orders.php">Shipped Orders</a></li>
                      <li class="nav-item"> <a class="nav-link" href="delivered-orders.php">Delivered Orders</a></li>
                  </ul>
              </div>
          </li>
      </ul>
      
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.php -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
              
              
              
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/favicon.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Riro Admin</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            
                
            
          
            
            
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Delivered Orders</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                           
                            <th> #  </th>
                            <th> Order No. </th>
                            <th> User </th>
                            <th> Billing Address </th>
                            <th> Purchase Date </th>
                            <th> Payment Id </th>
                            <th> Details </th>

                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $q = "select * from user_address where status='Delivered'";
                        $res = select($q);
                        $i = 1;
                        foreach ($res as $row) {
                          ?>
                          <tr>
                            
                          <td><?php echo $i++ ?></td>
                            <td> <?php echo $row['user_address_id']; ?> </td>
                            <td><?php echo  $row['first_name']; ?><?php echo  $row['last_name']; ?></td>
                            <td> <?php echo $row['address']; ?> </td>
                            <td> <?php echo $row['act_date']; ?> </td>
                            <td> <?php echo $row['payment_id']; ?> </td>
                            <td> <?php echo $row['payment_status']; ?> </td>
                            <td><td>
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#detailsModal" data-id="<?php echo $row['user_address_id'];?>">Details</button>


                                <p class="mt-3" style="color: #00d25b;">Delivered ✅</p>
                            </td>
                          </tr>
                        
                          <?php } ?>
                      
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="modalContainer"></div>
            <script>
                // Load modal content  using JavaScript
                fetch('modals/order-details.php')
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('modalContainer').innerHTML = data;
                    });
            </script>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.php -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Riro.com 2023</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Designed by <a href="https://ictglobaltech.com/" target="_blank">ICT Global Tech</a></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>