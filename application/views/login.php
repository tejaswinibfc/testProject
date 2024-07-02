<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/veltrix-codeIgniter/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 06:55:34 GMT -->

<head>

  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
  <meta content="Themesbrand" name="author">
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
  <!-- App Css-->
  <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

</head>

<body>

  <div class="account-pages my-5 pt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-4">
          <div class="card overflow-hidden">
            <div class="bg-primary">
              <div class="text-primary text-center p-4">
                <h5 class="text-white font-size-20">Welcome Back !</h5>
                <!-- <p class="text-white-50">Sign in to continue to Veltrix.</p> -->
                <a href="index.html" class="logo logo-admin">
                  <img src="assets/images/logo-sm.png" height="24" alt="logo">
                </a>
              </div>
            </div>
           
            <div class="card-body p-4">
              <div class="p-3">
                <form method="post" action="<?= base_url() ?>Login/user_login">

                  <div class="mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" class="form-control" name="email" id="username" placeholder="Enter username" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="userpassword">Password</label>
                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                  </div>

                  <div class="mb-3 row">
                    <div class="col-sm-6">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="customControlInline">
                        <label class="form-check-label" for="customControlInline">Remember me</label>
                      </div>
                    </div>
                    <div class="col-sm-6 text-end">
                      <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                    </div>
                  </div>

                  <!-- <div class="mt-2 mb-0 row">
                                        <div class="col-12 mt-4">
                                            <a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </div> -->

                </form>

              </div>
            </div>

          </div>

          <!-- <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="pages-register.html" class="fw-medium text-primary"> Signup now </a> </p>
                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a></p>
                    </div> -->


        </div>
      </div>
    </div>
  </div>

  <!-- JAVASCRIPT -->
  <script src="assets/libs/jquery/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/metismenu/metisMenu.min.js"></script>
  <script src="assets/libs/simplebar/simplebar.min.js"></script>
  <script src="assets/libs/node-waves/waves.min.js"></script>

  <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesdesign.in/veltrix-codeIgniter/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 06:55:34 GMT -->

</html>