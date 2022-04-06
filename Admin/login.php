<!-- footer Start Here -->
<?php include('includes/login.php');?>
<!-- footer End Here -->



  <section>

    <!-- content -->
    <div class="">
        <!-- login form -->
        <section class="login-form py-md-5 py-3">
            <div class="card card_border p-md-4">
                <div class="card-body">
                    <!-- form -->
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="login__header text-center mb-lg-5 mb-4">
                            <h3 class="login__title mb-2"> Login</h3>
                            <p>Welcome back, login to continue</p>
                        </div>
                       <div class="form-group">
                            <label for="exampleInputName" class="input__label">Admin Name</label>
                            <input type="text" class="form-control login_text_field_bg input-style"
                                id="exampleInputName" name="AdminID" aria-describedby="emailHelp" placeholder="" required="" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">Password</label>
                            <input type="password" class="form-control login_text_field_bg input-style"
                                id="exampleInputPassword1" name="Password" minlength="4" maxlength="16" placeholder="" required>
                        </div>
                        <div class="form-check check-remember check-me-out">
                            <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1" required>
                            <label class="form-check-label checkmark" for="exampleCheck1">Remember
                                me</label>
                        </div>
                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                            <button type="submit" class="btn btn-primary btn-style mt-4" name="login">Login now</button>
                            <p class="signup mt-4">Don’t have an account? <a href="register.php"
                                    class="signuplink">Sign
                                    up</a></p>
                        </div>
                    </form>
                    <!-- //form -->
                    <p class="backtohome mt-4"><a href="../index.php" class="back"><i class="fa fa-chevron-left"
                                aria-hidden="true"></i>Back to Home </a></p>
                </div>
            </div>
        </section>

    </div>
    <!-- //content -->

</section>




<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '//a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>

</html>