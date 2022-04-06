<!-- DBConnect Start Here -->
<?php include('includes/config.php');?>
<!-- DBConnect End Here -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ITechEdu an Education Category Bootstrap Responsive Website Template - Home : W3Layouts</title>
    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

</head>

<body>
    <!--header-->
    
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1><a class="navbar-brand" href="admin/index.php">
                        ITech<span class="sub-log">E</span>du
                    </a></h1>
                <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <nav class="mr-auto ml-lg-5">
                       
                    </nav>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="services.php">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->

                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>

         <?php if (isset($_SESSION['login'])) : ?>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <button style="background: #f35b04;color: white; border-radius: 10px 30px;"><a class="nav-link" href="logout.php"><?php echo $_SESSION['EmailID'] ?></a></button>
                        </li>
                    </ul>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>

<?php else : ?>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <button style="background: #f35b04;color: white; border-radius: 10px 30px;"><a class="nav-link" href="login.php">Login</a></button>
                        </li>
                    </ul>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
<?php endif; ?>
    <!--/header-->

  <div class="inner-banner">
    <section class="w3l-breadcrumb">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Courses</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- about page about section -->
  <!--/courses-->
  <section class="w3l-blogpost-content w3l-courses py-5">
    <div class="container py-md-5">
      <div class="header-title mb-md-5 mb-4">
        <span class="sub-title">Top Courses</span>
        <h3 class="hny-title text-left"> Popular Courses</h3>
      </div>
      <div class="row">
        
        <?php          
         $selectquery = "select * from tblcourse order by rand()";
               $query = mysqli_query($conn,$selectquery);
               $nums = mysqli_num_rows($query);
                while ($res = mysqli_fetch_array($query)){
         ?>

        <div class="col-lg-4 col-md-6 mt-5">
          <div class="card">
            <div class="card-header p-0 position-relative">
              <a href="blogpage.php">
                <img class="card-img-bottom d-block radius-image-full" src="Admin/Images/Course_Thumbnail/<?php echo $res['Thumb']; ?>" alt="Card image cap">
              </a>
            </div>
            <div class="card-body blog-details">
              <p class="price-review">$99.00</p>
              <a href="blogpage.php" class="blog-desc mt-2"><?php echo $res['Course']; ?></a>
              <div class="course-meta mt-1">
                <div class="meta-item course-lesson">
                  <span class="fa fa-file-code-o"></span>
                  <span class="meta-value"> <?php echo $res['Topic']; ?> </span>
                </div>
                <div class="meta-item course-students">
                  <span class="fa fa-user-o"></span>
                  <span class="meta-value"> <?php echo $res['Lesson']; ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php } ?>
        
      

      </div>
      <div class="course-button mt-lg-4 text-center">
      <a href="contact.html" class="btn btn-style btn-primary pt-lg-3 mt-sm-5 mt-4">Start Today <span
          class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
        </div>
    </div>
  </section>
  <!--//courses-->
<!-- footer Start Here -->
<?php include('includes/footer.php');?>
<!-- footer End Here -->
