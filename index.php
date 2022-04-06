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
                        <li class="nav-item active">
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

    <!-- main-slider -->
    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>A Great Place for Learning</h5>
                                        <p class="mt-4 pr-lg-4">Choose from over 100,000 online video courses with new
                                            additions published every month</p>
                                        <a class="btn btn-style btn-primary mt-xl-5 mt-4 mr-2" href="about.php"> Get
                                            Started <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                        <a class="btn btn-style btn-white mt-xl-5 mt-4" href="services.php"> View
                                            Courses <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>Learning to Love, Loving to Learn</h5>
                                        <p class="mt-4 pr-lg-4">Choose from over 100,000 online video courses with new
                                            additions published every month</p>
                                        <a class="btn btn-style btn-primary mt-xl-5 mt-4 mr-2" href="about.php"> Get
                                            Started <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                        <a class="btn btn-style btn-white mt-xl-5 mt-4" href="services.php"> View
                                            Courses <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top2 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>A Great Place for Learning</h5>
                                        <p class="mt-4 pr-lg-4">Choose from over 100,000 online video courses with new
                                            additions published every month </p>
                                        <a class="btn btn-style btn-primary mt-xl-5 mt-4 mr-2" href="about.php"> Get
                                            Started <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                        <a class="btn btn-style btn-white mt-xl-5 mt-4" href="services.php"> View
                                            Courses <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top3 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>Learning to Love, Loving to Learn</h5>
                                        <p class="mt-4 pr-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Velit
                                            quisquam, doloremque placeat aut numquam ipsam. </p>
                                        <a class="btn btn-style btn-primary mt-xl-5 mt-4 mr-2" href="about.php"> Get
                                            Started <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                        <a class="btn btn-style btn-white mt-xl-5 mt-4" href="services.php"> View
                                            Courses <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
            <div class="w3l-banner-grids">
                <div class="bangrids-inn">
                    <div class="banhny-grid-1">
                        <div class="banhny-grid-icon">
                            <span class="fa fa-laptop"></span>
                        </div>
                        <div class="banhny-grid-right-info">
                            <h6><a href="#url">100,000 online courses</a></h6>
                            <p>Focus is having the unwavering attention.</p>
                        </div>
                    </div>
                    <div class="banhny-grid-1">
                        <div class="banhny-grid-icon">

                            <span class="fa fa-users"></span>

                        </div>
                        <div class="banhny-grid-right-info">
                            <h6><a href="#url">Lifetime entrance</a></h6>
                            <p>New skills online the best way is to develop and follow.</p>
                        </div>
                    </div>
                    <div class="banhny-grid-1">
                        <div class="banhny-grid-icon">
                            <span class="fa fa-book"></span>
                        </div>
                        <div class="banhny-grid-right-info">
                            <h6><a href="#url">Live learning</a></h6>
                            <p>Start with your goals in mind and then work.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /main-slider -->
    <!-- //banner section -->
    <!-- /content-1-->
    <div class="content-1 py-5">
        <div class="container py-md-5">
            <div class="row content-1-grids">
                <div class="col-lg-4 content-1-left forms-25-info">
                    <div class="header-title">
                        <span class="sub-title">About Us</span>
                        <h3 class="hny-title">Learn at Your Own Place</h3>
                     
                    </div>
                </div>
                <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4">
                    <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
                        elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
                        dolor sit, amet elit. Dolor ipsum non velit.
                    </p>
                </div>
                <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4">
                    <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
                        elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
                        dolor sit, amet elit. Dolor ipsum non velit.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //content-1-->
   
<!-- course Start Here -->


<section class="hero-section1">
  <div class="card-grid1">

         <?php          
         $selectquery = "select * from tblcourse order by rand() LIMIT 4";
               $query = mysqli_query($conn,$selectquery);
               $nums = mysqli_num_rows($query);
                while ($res = mysqli_fetch_array($query)){
         ?>

    <div class="card1" href="">
      <div class="card__background1" style="background-image: url(Admin/Images/Course_Thumbnail/<?php echo $res['Thumb']; ?>)"></div>
      <div class="card__content1">
        <p class="card__category1"><?php echo $res['Topic']; ?></p>
        <h3 class="card__heading1"><?php echo $res['Course']; ?></h3>
        <p class="card__category1"><?php echo $res['Lesson']; ?></p>
        <br><br><br><br><br><br>
        <a type="button" class="btn btn-primary btn-style1" style="color: white;" href="Admin/Course/<?php echo $res['DLink']; ?>" Download><i class="fa fa-download"></i> Download</a>
      </div>
    </div>

     <?php } ?> 

     <!--
     <div class="course-button mt-lg-4 text-center">
      <a href="contact.html" class="btn btn-style btn-primary pt-lg-3 mt-sm-5 mt-4">Start Today <span
          class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
        </div>
  -->
  <div>
</section>
<!-- course End Here -->



    <section class="w3l-bottom-grids-6 py-5" id="features">
        <div class="container py-lg-5 py-md-4">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <!-- /feature-left-->
                <div class="col-md-6 grids-feature mt-4">
                    <div class="area-box">
                        <div class="row">
                            <div class="col-sm-2 icon">
                                <span class="fa fa-video-camera"></span>
                            </div>
                            <div class="col-sm-10 area-box-info">
                                <h4><a href="#feature" class="title-head">Become a instructor on ITechEdu</a></h4>
                                <p class="mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet.</p>
                                <a class="btn btn-primary btn-style mt-4" href="about.html">Start today <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grids-feature mt-4">
                    <div class="area-box">
                        <div class="row">
                            <div class="col-sm-2 icon">
                                <span class="fa fa-tasks"></span>
                            </div>
                            <div class="col-sm-10 area-box-info">
                                <h4><a href="#feature" class="title-head">ITechEdu for business & Community</a></h4>
                                <p class="mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet..</p>
                                <a class="btn btn-primary btn-style mt-4" href="about.html">Start today <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->

    <!-- middle -->
    <div class="middle py-5">
        <div class="container pt-lg-2 pb-lg-4 py-4">
            <div class="welcome-left text-center py-lg-4">
                <h3 class="hny-title">Educating Champions of a Just and Sustainable World.</h3>
                <div class="middle-buttons pb-5">
                    <a href="about.html" class="btn btn-style btn-white mt-sm-5 mt-4 mr-2">Read More <span
                            class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                    <a href="contact.html" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us <span
                            class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- //middle -->
    <!-- stats -->
    <section class="w3_stats py-lg-0 py-5" id="stats">
        <div class="container">
            <div class="w3-stats">
                <div class="row">
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-clone"></span>
                            <div class="timer count-title count-number mt-3" data-to="15100" data-speed="1500"></div>
                            <p class="count-text">Successfully Trained</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-video-camera"></span>
                            <div class="timer count-title count-number mt-3" data-to="19256" data-speed="1500"></div>
                            <p class="count-text ">We Proudly Received</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-smile-o"></span>
                            <div class="timer count-title count-number mt-3" data-to="12100" data-speed="1500"></div>
                            <p class="count-text">Getting Featured On</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-users"></span>
                            <div class="timer count-title count-number mt-3" data-to="2560" data-speed="1500"></div>
                            <p class="count-text">Firmly Eastablished</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- home page video popup section -->
<section class="w3l-videohny" id="video">
    <div class="new-block py-5">
        <div class="container py-lg-5">
                <div class="history-info position-relative">
                        <!--//video-->
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center pl-3">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>

                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/18212142" frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                        <!--//video-->
                    </div>

                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                    <iframe src="https://player.vimeo.com/video/18212142" frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
    </div>
</section>
<!-- //home page video popup section -->
    <!--/blog-post-->
    <section class="w3l-blogpost-content py-5">
        <div class="container py-md-5">
            <div class="header-title mb-md-5 mt-4">
                <span class="sub-title">Latest Posts</span>
                <h3 class="hny-title text-left">Our Blog Posts</h3>
            </div>
            <div class="row">
                <?php          
                    $selectquery = "select * from tblblog order by rand() LIMIT 3";
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
                            <a href="blogpage.php?No=<?php echo $res['No']; ?>"" class="blog-desc"><?php echo $res['BName']; ?></a>
                            <div class="author align-items-center">
                                <img src="Admin/Images/Author/<?php echo $res['Author']; ?>" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <li>
                                        <a href="blogpage.php?No=<?php echo $res['No']; ?>""><?php echo $res['AName']; ?></a> 
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> <?php echo $res['Date']; ?> </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
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
    <!--/w3l-newsletter-->
    <section class="w3l-newsletter">
        <!-- /form-25-section -->
        <div class="form-25-main py-5">
            <div class="container py-lg-5">
                <div class="forms-25-info">

                    <div class="header-title mb-md-5 mt-4">
                        <span class="sub-title">Subscribe to our Newsletter</span>
                        <h3 class="hny-title text-left">Join our Community of Students</h3>
                    </div>
                    <form action="#" method="post" class="signin-form mt-4 mb-2">
                        <div class="forms-gds">
                            <input type="text" name="" placeholder="Name" required />
                            <input type="email" name="" placeholder="Email" required />
                            <button class="btn btn-style btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-newsletter-->
    <!-- testimonials -->
    <section class="w3l-clients-1" id="testimonials">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="header-title mb-md-5 mb-4">
                    <span class="sub-title">Testimonials</span>
                    <h3 class="hny-title text-left">What People Say</h3>
                </div>
                <!-- /grids -->
                <div class="testimonial-row">
                    <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                            laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                            facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                            voluptate rem ullam dolore nisi est quasi, doloribus tempora.</q>
                                    </blockquote>
                                </div>
                                <div class="testi-des">
                                    <div class="test-img">
                                        <img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h4>Gloria Parker</h4>
                                        <p class="indentity">Student </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                            laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                            facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                            voluptate rem ullam dolore nisi est quasi, doloribus tempora.</q>
                                    </blockquote>
                                </div>
                                <div class="testi-des">
                                    <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid"
                                        alt="client-img">
                                </div>
                                    <div class="peopl align-self">
                                        <h4>Tommy sakura</h4>
                                        <p class="indentity">Student </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                   
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                            laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                            facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                            voluptate rem ullam dolore nisi est quasi, doloribus tempora.</q>
                                    </blockquote>
                                   
                                </div>
                                <div class="testi-des">
                                    <div class="test-img"><img src="assets/images/team3.jpg" class="img-fluid"
                                        alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h4>Bruce Bailey </h4>
                                        <p class="indentity">Student </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                            laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                            facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                            voluptate rem ullam dolore nisi est quasi, doloribus tempora.</q>
                                    </blockquote>
                                  
                                </div>
                                <div class="testi-des">
                                    <div class="test-img"><img src="assets/images/team3.jpg" class="img-fluid"
                                        alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h4>Ruth Edwards</h4>
                                        <p class="indentity">Student </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                            laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                            facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                            voluptate rem ullam dolore nisi est quasi, doloribus tempora.</q>
                                    </blockquote>
                                </div>
                                <div class="testi-des">
                                    <div class="test-img">
                                        <img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h4>Gloria Parker</h4>
                                        <p class="indentity">Student </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                            laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                            facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                            voluptate rem ullam dolore nisi est quasi, doloribus tempora.</q>
                                    </blockquote>
                                </div>
                                <div class="testi-des">
                                    <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid"
                                        alt="client-img">
                                </div>
                                    <div class="peopl align-self">
                                        <h4>Tommy sakura</h4>
                                        <p class="indentity">Student </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
    <!-- //testimonials -->

<!-- footer Start Here -->
<?php include('includes/footer.php');?>
<!-- footer End Here -->
