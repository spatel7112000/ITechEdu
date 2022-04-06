


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Collective Admin Panel a Flat Bootstrap Responsive Website Template | Signup :: W3Layouts</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty.css">
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">

<?php include('includes/config.php');
    

    $UID = intval($_GET['UID']);
    $selectquery = "select * from tbluser where UID=$UID";
    $query = mysqli_query($conn,$selectquery);
    $arrdata = mysqli_fetch_array($query);


    if(isset($_POST['login'])) {
        
        $UserID = mysqli_real_escape_string($conn, $_POST['UserID']);
        $EmailID = mysqli_real_escape_string($conn, $_POST['EmailID']);
        $Password = mysqli_real_escape_string($conn, $_POST['Password']);

        $pass = password_hash($Password, PASSWORD_BCRYPT);
        
        $updatequery = "UPDATE tbluser SET UID='$UID',UserID='$UserID',EmailID='$EmailID',Password='$pass' WHERE UID='$UID' ";       
        $res = mysqli_query($conn,$updatequery);



        if($res){
            ?>
            <script>alert("Data Updated Successfully")</script>
            <?php  
        }else{
            ?>
            <script>alert("Failed To Data Updated")</script>
            <?php
        }

    }

?>
<script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
    }
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
  // format, zoneKey, segment:value, options
  _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
    }
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='/js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="/assests/css/font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>
<div class="pull-right toggle-right-sidebar">
<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
</div>

<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

    <div id="w3lDemoBar" class="w3l-demo-bar">
        <div class="demo-btns">
        <a href="https://w3layouts.com/?p=42007">
            <span class="w3l-icon -back">
                <span class="fa fa-arrow-left"></span>
            </span>
            <span class="w3l-text">Back</span>
        </a>
        <a href="https://w3layouts.com/?p=42007">
            <span class="w3l-icon -download">
                <span class="fa fa-download"></span>
            </span>
            <span class="w3l-text">Download</span>
        </a>
        <a href="https://w3layouts.com/checkout/?add-to-cart=42007" class="no-margin-bottom-mobile">
            <span class="w3l-icon -buy">
                <span class="fa fa-shopping-cart"></span>
            </span>
            <span class="w3l-text">Buy</span>
        </a>
    </div>
        <!---<div class="responsive-icons">
            <a href="#url" class="desktop-mode">
                <span class="w3l-icon -desktop">
                    <span class="fa fa-desktop"></span>
                </span>
            </a>
            <a href="#url" class="tablet-mode">
                <span class="w3l-icon -tablet">
                    <span class="fa fa-tablet"></span>
                </span>
            </a>
            <a href="#url" class="mobile-mode no-margin-bottom">
                <span class="w3l-icon -mobile">
                    <span class="fa fa-mobile"></span>
                </span>
            </a>
        </div>-->
    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>

  <section>

    <!-- content -->
    <div class="">
        <!-- Register form -->
        <section class="register-form py-md-5 py-3">
            <div class="card card_border p-md-4">
                <div class="card-body">
                    <!-- form -->
                    <form action="#" method="POST">
                        <div class="register__header text-center mb-lg-5 mb-4">
                            <h3 class="register__title mb-2">Update User Profile</h3>
                            <p>Update your account here, and continue </p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName" class="input__label">User Name</label>
                            <input type="text" class="form-control login_text_field_bg input-style"
                                id="exampleInputName" name="UserID" value="<?php echo $arrdata['UserID']; ?>" aria-describedby="emailHelp" disabled autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Email address</label>
                            <input type="email" class="form-control login_text_field_bg input-style"
                                id="exampleInputEmail1" name="EmailID" value="<?php echo $arrdata['EmailID']; ?>" aria-describedby="emailHelp" disabled><small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">Password</label>
                            <input type="password" class="form-control login_text_field_bg input-style"
                                id="exampleInputPassword1" name="Password" value="<?php echo $arrdata['Password']; ?>" minlength="4" maxlength="16" required>
                        </div>
                        <div class="form-check check-remember check-me-out">
                            <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1" required>
                            <label class="form-check-label checkmark" for="exampleCheck1">I agree to the
                                <a href="#terms">Terms of service</a> and <a href="#privacy">Privacy policy</a> </label>
                        </div>
                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                            <button type="submit" class="btn btn-primary btn-style mt-4" name="create">Update Account</button>
                           
                        </div>
                    </form>
                    <!-- //form -->
                    <p class="backtohome mt-4"><a href="../Admin/manageuser.php" class="back"><i class="fa fa-chevron-left"
                                aria-hidden="true"></i>Back to Admin Panel </a></p>
                </div>
            </div>
        </section>

    </div>
    <!-- //content -->

</section>




<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '//a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
  </body>

</html>
