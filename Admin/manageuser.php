<?php include('includes/config.php');
session_regenerate_id(true);
if (!isset($_SESSION['login']) || $_SESSION['login'] !==true){
    header("location: login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Collective Admin Panel a Flat Bootstrap Responsive Website Template | Home :: W3Layouts</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="index.php">Collective</a></h1>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
    <!-- //image logo -->

    <div class="logo-icon text-center">
      <a href="index.php" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li><a href="index.php"><i class="fa-solid fa-chart-line"></i><span> Dashboard</span></a>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa-solid fa-book-open-reader"></i>
            <span>Course <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="addcourse.php">Add</a> </li>
            <li><a href="managecourse.php">Manage</a> </li>
          </ul>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa-brands fa-blogger-b"></i>
            <span>Blog <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="addblog.php">Add</a> </li>
            <li><a href="manageblog.php">Manage</a> </li>
          </ul>
        </li>
        <li class="active"><a href="manageuser.php"><i class="fa-solid fa-user-gear"></i><span> User</span></a>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa-brands fa-battle-net"></i>
            <span>Admin <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="addadmin.php">Add</a> </li>
            <li><a href="manageadmin.php">Manage</a> </li>
          </ul>
        </li>
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
  <!-- header-starts -->
  <div class="header sticky-header">

    <!-- profilebar Start Here -->
<?php include('includes/profilebar.php');?>
<!-- profilebar End Here -->

  </div>
  <!-- //header-ends -->

   <!-- main content start -->
<div class="main-content">

<!-- content -->
<div class="container-fluid content-top-gap">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item" aria-current="page">User</li>
      <li class="breadcrumb-item active" aria-current="page"><a href="manageuser.php">Manage</a></li>
    </ol>
  </nav>
  <div class="welcome-msg pt-3 pb-4">
    <h1>Hi <span class="text-primary"><?php echo $_SESSION['AdminID'] ?></span>, Welcome back</h1>
    <p>Very detailed & featured admin.</p>
  </div>

  
  <!-- modals -->
  <section class="template-cards">
    <div class="card">
      <div class="cards__heading">
        <h3>Manage <span>User</span></h3>
      </div>
          <div class="col-lg-12">
            <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                    <table id="bootstrap-data-table-export" class="table table-striped table-hover">
                                          <thead>
                                              <tr>
                                                  <th>UID</th>
                                                  <th>UserID</th>
                                                  <th>EmailID</th>
                                                  <th>RegDate</th>
                                                  <th>UpdationDate</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                                                       <?php
             $selectquery = "select * from tbluser";
             $query = mysqli_query($conn,$selectquery);
             $nums = mysqli_num_rows($query);
 
             while ($res = mysqli_fetch_array($query)){
                 ?>

                                         
              <tr>
                  <td>#ID-<?php echo $res['UID']; ?></td>
                  <td><?php echo $res['UserID']; ?></td>
                  <td><?php echo $res['EmailID']; ?></td>
                  <td><?php echo $res['RegDate']; ?></td>
                  <td><?php echo $res['UpdationDate']; ?></td>
                  <td><span class="badge badge-primary">
                  <a href="updateuser.php?UID=<?php echo $res['UID']; ?>" style="color: white;">Update</a></span>&nbsp;<span class="badge badge-danger">
                      <a href="delete/deleteuser.php?UID=<?php echo $res['UID']; ?>">Remove</a></span>
              </td>
              </tr>
                                            

   <?php
 
           }
 
           ?> 

                                      </table>
                                  </div>
                              </div>
                          </div>
                          <!-- /# card -->
                      </div>
                      <!-- /# column -->
                  </div>
                  <!-- /# row -->

  </section>
  <!-- //modals -->

</div>
<!-- //content -->
</div>
<!-- main content end-->
</section>

<!-- footer Start Here -->
<?php include('includes/footer.php');?>
<!-- footer End Here -->
