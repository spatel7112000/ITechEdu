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
                <h1><a class="navbar-brand" href="index.php">
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
                        <li class="nav-item active">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
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
                            <button style="background: #f35b04;color: white; border-radius: 10px 30px;"><a class="nav-link" href="logout.php"><?php echo $_SESSION['EmailID']; ?></a></button>
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
    <section class="w3l-breadcrumb text-left">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Blog</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- about page about section -->

   <!--/blog-post-->
    <section class="w3l-blogpost-content py-5">
        <div class="container py-md-5">
            <div class="header-title mb-md-5 mt-4">
                <span class="sub-title">Latest Posts</span>
                <h3 class="hny-title text-left">Our Blog Posts</h3>
            </div>
            <div class="row">
              <?php          
                    $selectquery = "select * from tblblog order by rand()";
                    $query = mysqli_query($conn,$selectquery);
                    $nums = mysqli_num_rows($query);
                while ($res = mysqli_fetch_array($query)){
                ?>
                
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="blogpage.php?No=<?php echo $res['No']; ?>">
                                <img class="card-img-bottom d-block radius-image-full" src="Admin/Images/Blog_Thumbnail/<?php echo $res['Thumb']; ?>" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <a href="blogpage.php" class="blog-desc"><?php echo $res['BName']; ?></a>
                            <div class="author align-items-center">
                                <img src="Admin/Images/Author/<?php echo $res['Author']; ?>" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <li>
                                        <a href="#"><?php echo $res['AName']; ?></a> 
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"><span class="fa fa-clock-o"></span> <?php echo $res['Date']; ?> </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
                
                </div>
            </div>
        </div>
    </section>
    <!--//blog-posts-->
<!-- footer Start Here -->
<?php include('includes/footer.php');?>
<!-- footer End Here -->
