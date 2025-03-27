<?php

include "../pages/conn.php";
// using for qrcode 
include 'phpqrcode/qrlib.php';
// 

session_start();

?>

<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <title>Admin Pages | Requested Records</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="codedthemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/bus.png" type="image/x-icon" />
 <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link" />
<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="../assets/fonts/feather.css" />
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../assets/fonts/material.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="../assets/css/style-preset.css" />

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
   <!-- for the icon boost  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="../dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="../assets/images/bus.png" alt="" class="logo " height="50px"  width="50px"/> <b>Driver Trip</b> 
        </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Dashboard</label>
          <i class="ti ti-dashboard"></i>
        </li>
        <li class="pc-item">
          <a href="../dashboard/index.php" class="pc-link"
            ><span class="pc-micon"><i class="ti ti-dashboard"></i></span><span class="pc-mtext">Default</span></a
          >
        </li>

        <li class="pc-item pc-caption">
          <label>Elements</label>
          <i class="ti ti-apps"></i>
        </li>
        <li class="pc-item">
          <a href="../other/users.php" class="pc-link">
            <span class="pc-micon"><i class="bi bi-person-lines-fill"></i></span>
            <span class="pc-mtext">Users</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="./drivers.php" class="pc-link">
            <span class="pc-micon"><i class="bi bi-people"></i></span>
            <span class="pc-mtext">Drivers</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="./vehicles.php" class="pc-link">
            <span class="pc-micon"><i class="bi bi-bus-front"></i></span>
            <span class="pc-mtext">Vehicles</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="./trip.php" class="pc-link">
            <span class="pc-micon"><i class="bi bi-geo-alt"></i></span>
            <span class="pc-mtext">Trips</span>
          </a>
        </li>
        
        <li class="pc-item">
          <a href="./financial.php" class="pc-link">
            <span class="pc-micon"><i class="bi bi-bar-chart"></i></span>
            <span class="pc-mtext">Financial</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="./mentainace.php" class="pc-link">
            <span class="pc-micon"><i class="bi bi-wrench"></i> </span>
            <span class="pc-mtext">Mentainance</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="./logsactivity.php" class="pc-link">
            <span class="pc-micon"><i class="bi bi-clock-history"></i></span>
            <span class="pc-mtext">logs</span>
          </a>
        </li>
      


        <li class="pc-item pc-caption">
          <label>Pages</label>
          <i class="ti ti-news"></i>
        </li>

        <li class="pc-item pc-caption">
          <label>Other</label>
          <i class="ti ti-brand-chrome"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"><i class="ti ti-menu"></i></span><span class="pc-mtext">Menu levels</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          
     
      <div class="w-100 text-center">
        <div class="badge theme-version badge rounded-pill bg-light text-dark f-12"></div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"><!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <li class="pc-h-item header-mobile-collapse">
      <a href="#" class="pc-head-link head-link-secondary ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link head-link-secondary ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a
        class="pc-head-link head-link-secondary dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="mb-0 d-flex align-items-center">
            <i data-feather="search"></i>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ." />
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input type="search" class="form-control" placeholder="Search here. . ." />
        <button class="btn btn-light-secondary btn-search"><i class="ti ti-adjustments-horizontal"></i></button>
      </form>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link head-link-secondary dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-bell"></i>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <a href="#!" class="link-primary float-end text-decoration-underline">Mark as all read</a>
          <h5>
            All Notification
            <span class="badge bg-warning rounded-pill ms-1">01</span>
          </h5>
        </div>
        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <div class="list-group list-group-flush w-100">
            <div class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="user-avtar bg-light-success"><i class="ti ti-building-store"></i></div>
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">3 min ago</span>
                  <h5>Store Verification Done</h5>
                  <p class="text-body fs-6">We have successfully received your request.</p>
                  <div class="badge rounded-pill bg-light-danger">Unread</div>
                </div>
              </div>
            </div>
            <div class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar" />
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">10 min ago</span>
                  <h5>Joseph William</h5>
                  <p class="text-body fs-6">It is a long established fact that a reader will be distracted</p>
                  <div class="badge rounded-pill bg-light-success">Confirmation of Account</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="text-center py-2">
          <a href="#!" class="link-primary">Mark as all read</a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
        <span>
          <i class="ti ti-settings"></i>
        </span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <h4>
            Good Morning,
            <span class="small text-muted"><?php if($_SESSION) {print_r($_SESSION['username']);} ?></span>
          </h4>
          <p class="text-muted">Project Admin</p>
          <hr />
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 280px)">
            <div class="upgradeplan-block bg-light-warning rounded">
              <h4>Explore full code</h4>
              <p class="text-muted">Buy now to get full access of code files</p>
              <a href="https://codedthemes.com/item/berry-bootstrap-5-admin-template/" target="_blank" class="btn btn-warning">Buy Now</a>
            </div>
            <hr />
            <a href="../application/account-profile-v1.html" class="dropdown-item">
              <i class="ti ti-settings"></i>
              <span>Account Settings</span>
            </a>
            <a href="../application/social-profile.html" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>Social Profile</span>
            </a>
            <a href="../pages/login-v1.html" class="dropdown-item">
              <i class="ti ti-logout"></i>
              <span>Logout</span>
            </a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
</div>
</header>
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col">
                <div class="page-header-title">
                  <h5 class="m-b-10">View Abaut Request For Trips</h5>
                </div>
              </div>
              <div class="col-auto">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Basic UI</a></li>
                  <li class="breadcrumb-item" aria-current="page">Requested</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ Typography ] start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Pending Request</h5>
                <p>
                  <span class="badges">Pending</span>
                  this section it contain some information about pending Request for Requested for trips  
                </p>
              </div>
              <div class="card-body pc-component">
                <!-- [unp approved request in trip that are pending ] -->
                 <table class="table table-hover">
                 <thead>
                    <th>
                      <td>#id</td>
                      <td>Full Name</td>
                      <td>Request Date</td>
                      <td>Status </td>
                      <td>Action </td>
                    </th>
                  </thead>
                
                 <?php
                  $sqlpending= "SELECT * FROM `request_for_trip` WHERE status = 'pending'";
                  $resultpending =  $conn->query($sqlpending);
                   while($rows1 = $resultpending->fetch_array()){
                    $rowid = $rows1[0];
                    ?>
                    <tbody>
                  <tr>
                    
                    <td>  </td>
                    
                    <td><?php echo $rows1[1];?> </td>
                    <td><?php echo $rows1[2];?></td>
                    <td><?php echo $rows1[3];?></td>
                    <td style='color: orange;'><?php  echo $rows1[4];?></td>
                    <td>
                      <?php
 /// for delete 
                               echo "<a href='./requestaccept_declined/acceptrequest.php?id=$rowid'  onclick='return confirm(Are you sure you want to delete this user?);'>
                                  <i class='bi bi-check-circle' style ='color: green;'></i></a>";
                               echo "<a href='./requestaccept_declined/deleterequest.php?id=$rowid' >
                                <i class='bi bi-x-circle' style='color: red;'></i></a>";    
                      ?>
                    </td>
                 </tr>
                </tbody>
                    <?php

                   }
                 ?>
                

</table>

                  <!-- [unp approved request in trip that are pending ] -->
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Veiw Approved  Request </h5>
                <p>
                  <span class="badges">Approved</span>
                  this section it contain some information about Approved Request for Requested for trips  
                </p>
              </div>
              <div class="card-body pc-component">
                 <!-- [unp approved request in trip that are approved  ] -->
                 <table class="table table-hover">
                 <thead>
                    <th>
                      <td>#id</td>
                      <td>Full Name</td>
                      <td>Request Date</td>
                      
                      <td>Status </td>
                      <td>Download</td> 
                      <td>Action </td>
                    </th>
                  </thead>
                
                 <?php
                  $sqlpending= "SELECT * FROM `request_for_trip` WHERE status = 'approved'";
                  $resultpending =  $conn->query($sqlpending);
                   while($rows1 = $resultpending->fetch_array()){
                    $rowid = $rows1[0];

                    //  user name using qrcode 
                    // $username = 
                     $username = $rows1[2];
                     $status = $rows1[4];

                     // data from qrcode 

                     $data = "Username:\n$username\nApproved Name:\n$status";
                     $file = "qrphoto/approved_qrcode$rowid.png";
                     
                     QRcode::png($data,$file,QR_ECLEVEL_L , 10 ,2 );

                    ?>
                    <tbody> 
                  <tr>
                    
                    <td>  </td>
                    
                    <td><?php echo $rows1[1];?> </td>
                    <td><?php echo $rows1[2];?></td>
                    <td><?php echo $rows1[3];?></td>
                    <td style ='color: green;' ><?php  echo $rows1[4];?></td>
                    <td>
                      <a href="<?php echo $file;?>" download class="">
                        <i class="bi bi-download"></i> 
                     </a></td>
                    <td>
                      <?php
 /// for delete 
                echo "<a href='./requestaccept_declined/acceptrequest.php?id=$rowid'  onclick='return confirm(Are you sure you want to delete this user?);'>
              <i class='bi bi-check-circle' style ='color: green;'></i></a>";
              echo "<a href='./requestaccept_declined/deleterequest.php?id=$rowid' >
              <i class='bi bi-x-circle' style='color: red;'></i></a>";    
      
                      ?>
                    </td>
                 </tr>
                </tbody>
                    <?php

                   }
                 ?>

</table>

                  <!-- [unp approved request in trip that are approved  ] -->
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Veiw Declined  Request </h5>
                <p>
                  <span class="badges">Declined </span>
                  this section it contain some information about Declined Request for Requested for trips  
                </p>
              </div>
              <div class="card-body pc-component">
                 <!-- [unp approved request in trip that are approved  ] -->
                 <table class="table table-hover">
                 <thead>
                    <th>
                      <td>#id</td>
                      <td>Full Name</td>
                      <td>Request Date</td>
                      <td>Status </td>
                      <td>Action </td>
                    </th>
                  </thead>
                
                 <?php
                  $sqlpending= "SELECT * FROM `request_for_trip` WHERE status = 'declined'";
                  $resultpending =  $conn->query($sqlpending);
                   while($rows1 = $resultpending->fetch_array()){
                    $rowid = $rows1[0];
                    ?>
                    <tbody>
                  <tr>
                    
                    <td>  </td>
                    
                    <td><?php echo $rows1[1];?> </td>
                    <td><?php echo $rows1[2];?></td>
                    <td><?php echo $rows1[3];?></td>
                    <td style='color: red;'><?php  echo $rows1[4];?></td>
                    <td>
                      <?php
 /// for delete 
                     echo "<a href='./requestaccept_declined/acceptrequest.php?id=$rowid'  onclick='return confirm(Are you sure you want to delete this user?);'>
                     <i class='bi bi-check-circle' style ='color: green;'></i></a>";
                      echo "<a href='./requestaccept_declined/deleterequest.php?id=$rowid' >
                    <i class='bi bi-x-circle' style='color: red;'></i></a>";      
                      ?>
                    </td>
                 </tr>
                </tbody>
                    <?php

                   }
                 ?>
                

</table>

                  <!-- [unp approved request in trip that are approved  ] -->
              </div>
            </div>
          </div>
          
          
          
          
         
          <!-- [ Typography ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col-sm-6 my-1">
            <p class="m-0">
              Berry &#9829; crafted by Team
              <a href="https://isonic0788.github.io/myProject_one/" target="_blank">Ebedi</a></p>
          </div>
          <div class="col-sm-6 ms-auto my-1">
            <ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
              <li class="list-inline-item"><a href="../index.html">Home</a></li>
              <li class="list-inline-item"><a href="https://codedthemes.gitbook.io/berry-bootstrap/" target="_blank">Documentation</a></li>
              <li class="list-inline-item"><a href="https://codedthemes.support-hub.io/" target="_blank">Support</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
 <!-- Required Js -->
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/icon/custom-font.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/theme.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>

   
<script>
  layout_change('light');
</script>
   
<script>
  font_change('Roboto');
</script>
 
<script>
  change_box_container('false');
</script>
 
<script>
  layout_caption_change('true');
</script>
   
<script>
  layout_rtl_change('false');
</script>
 
<script>
  preset_change('preset-1');
</script>


  </body>
  <!-- [Body] end -->
</html>
