<!-- DBConnect Start Here -->
<?php include('includes/config.php');?>
<!-- DBConnect End Here -->


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ITechEdu an Education Category Bootstrap Responsive Website Template - Contact : W3Layouts</title>
    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

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
            <li class="nav-item">
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
        <!-- //toggle switch for light and dark theme -->
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
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Profile</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- about page about section -->