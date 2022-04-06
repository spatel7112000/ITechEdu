<?php include('includes/config.php');
session_regenerate_id(true);
if (!isset($_SESSION['login']) || $_SESSION['login'] !==true){
    header("location: login.php");
}
?>
<?php 


    if(isset($_POST['Post'])) {
        
        $BName = mysqli_real_escape_string($conn, $_POST['BName']);
        $AName = mysqli_real_escape_string($conn, $_POST['AName']);
        $Author = $_FILES["Author"]["name"];
        move_uploaded_file($_FILES["Author"]["tmp_name"], "Images/Author/". $_FILES["Author"]["name"]);
        $Thumb = $_FILES["Thumb"]["name"];
        move_uploaded_file($_FILES["Thumb"]["tmp_name"], "Images/Blog_Thumbnail/". $_FILES["Thumb"]["name"]);
        $content = mysqli_real_escape_string($conn, $_POST['content']);

        $insertquery = "insert into tblblog(BName,AName,Author,Thumb,content) values('$BName','$AName','$Author','$Thumb','$content')";
        $res = mysqli_query($conn,$insertquery);

        if($res){
            ?>
            <script>alert("BlogPost Successfully")</script>
            <?php  
            die();
        }else{
            ?>
            <script>alert("Failed To Post a Blog")</script>
            <?php
        }

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
   <script src="assets/ckeditor/ckeditor.js"></script>
  <script src="assets/ckfinder/ckfinder.js"></script>
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
        <li class="menu-list active">
          <a href="#"><i class="fa-brands fa-blogger-b"></i>
            <span>Blog <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="addblog.php">Add</a> </li>
            <li><a href="manageblog.php">Manage</a> </li>
          </ul>
        </li>
        <li><a href="manageuser.php"><i class="fa-solid fa-user-gear"></i><span> User</span></a>
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
      <!-- breadcrumbs -->
      <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb my-breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Blog</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
      </nav>
      <!-- //breadcrumbs -->
      <!-- cards -->
      <section class="template-cards">
        <!-- Card Columns -->
        

         <!-- forms -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Add <span>Blog</span></h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputCourse" class="input__label">Blog</label>
                            <input type="text" class="form-control input-style" placeholder="Blog Title" name="BName" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLesson" class="input__label">Author</label>
                            <input type="text" class="form-control input-style" placeholder="Author Name" name="AName" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleThumbnail" class="input__label">Author Image</label><br>
                        
                      <div class="custom-file">
                            <input type="file" class="custom-file-input" name="Author" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>
                      </div>
                       <div class="form-group">
                            <label for="exampleThumbnail" class="input__label">Thumbnail</label><br>
                        
                      <div class="custom-file">
                            <input type="file" class="custom-file-input" name="Thumb" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>
                      </div>
                       <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Insert Blog</label>
                            <textarea type="text" name="content" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email"></textarea>
                           
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4" name="Post">Post</button>
                    </form>
                     <script>
                      var content=CKEDITOR.replace('content');
                      CKFinder.setupCKEditor( content );
                    </script>
                </div>
            </div>
            <!-- //forms -->


        <!-- /Grid Columns -->

      </section>
      <!-- //cards -->

    </div>
    <!-- //content -->
  </div>
  <!-- main content end-->
  </section>

  <!-- footer Start Here -->
<?php include('includes/footer.php');?>
<!-- footer End Here -->

