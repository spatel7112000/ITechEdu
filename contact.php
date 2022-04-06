<!-- DBConnect Start Here -->
<?php include('includes/config.php');
session_regenerate_id(true);
?>
<!-- DBConnect End Here -->

<?php 


    if(isset($_POST['Enquiry'])) {
        
        $FName = mysqli_real_escape_string($conn, $_POST['FName']);
        $EmailID = mysqli_real_escape_string($conn, $_POST['EmailID']);
        $Mobile = mysqli_real_escape_string($conn, $_POST['Mobile']);
        $Subject = mysqli_real_escape_string($conn, $_POST['Subject']);
        $Message = mysqli_real_escape_string($conn, $_POST['Message']);

        $insertquery = "insert into tblenquiry(FName,EmailID,Mobile,Subject,Message) values('$FName','$EmailID','$Mobile','$Subject','$Message')";
        $res = mysqli_query($conn,$insertquery);

        if($res){
            ?>
            <script>alert("Enquiry Successfully Submitted")</script>
            <?php  
            
        }else{
            ?>
            <script>alert("Failed To Send a Enquiry")</script>
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
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Courses</a>
                        </li>
                        <li class="nav-item active">
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
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- about page about section -->
    <!-- contact1 -->
    <section class="w3l-contact-1 py-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="d-grid contact-view mb-5 pb-lg-5">
                    <div class="cont-details">
                        <div class="contactct-fm-text text-left mb-md-5 mb-4">
                            <div class="header-title mb-md-5 mt-4">
                                <span class="sub-title">Find Us</span>
                                <h3 class="hny-title text-left">Additional information </h3>
                            </div>
                            <p class="mb-sm-5 mb-4">Start working with Us that can provide everything you need to
                                generate awareness,
                                drive traffic,
                                connect. <br> We guarantee that you’ll be able to have any issue resolved within 24
                                hours.</p>

                        </div>
                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Phone number</h6>
                                <p><a href="tel:+(21) 255 088 4943">+(21) 255 088 4943</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Send Email</h6>
                                <p><a href="mailto:ITechedu@mail.com" class="mail">ITechedu@mail.com</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Office Address</h6>
                                <p class="pr-lg-5">Address here, 434 Trainer Honey street, London, UK - 62617.</p>
                            </div>
                        </div>
                    </div>
                    <div class="map-content-9">
                        <div class="contactct-fm map-content-9 pl-lg-4">
                            <div class="contactct-fm-text text-left">
                                <div class="header-title mb-md-5 mt-4">
                                    <span class="sub-title">Contact Us</span>
                                    <h3 class="hny-title text-left">Fill out the form.</h3>
                                </div>
                                <p class="mb-sm-5 mb-4">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                    consectetur adipisicing.</p>
                            </div>
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                                <div class="twice">
                                <input type="text" class="form-control" name="FName" id="w3lName"
                                        placeholder="Name" required="">
                                    </div>
                                <div class="twice-two">
                                    <input type="email" class="form-control" name="EmailID" id="w3lSender"
                                        placeholder="Email" required="">
                                        <input type="text" class="form-control" name="Mobile" id="w3lSender"
                                        placeholder="Mobile" required="">
                                </div>
                                <div class="twice">
                                    <input type="text" class="form-control" name="Subject" id="w3lSubject"
                                        placeholder="Subject" required="">
                                </div>
                                <textarea class="form-control" name="Message" id="Message" placeholder="Message"
                                    required=""></textarea>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-style mt-4" name="Enquiry">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="map-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
                        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
                </div>

            </div>
    </section>
    <!-- /contact1 -->

<!-- footer Start Here -->
<?php include('includes/footer.php');?>
<!-- footer End Here -->
