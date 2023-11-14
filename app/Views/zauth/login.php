 <?= $this->include('partials/main') ?>

 <head>
     <?php
        #$title = "Apotek Sari Husada";
        #include 'partials/title-meta.php'; 
        ?>

     <?= $this->include('partials/title-meta') ?>



     <?php #include 'partials/head-css.php'; 
        ?>
     <?= $this->include('partials/head-css') ?>
 </head>

 <body class="authentication-bg position-relative">
     <div class="account-pages pt-2 pt-sm-3 pb-4 pb-sm-5 position-relative">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-sm-5">
                     <div class="card overflow-hidden">
                         <div class="row g-0">
                             <!-- <div class="col-lg-6"> -->
                             <div class="d-flex flex-column h-100">
                                 <div class="auth-brand p-4">
                                     <a href="index.php" class="logo-light">
                                         <img src="assets/images/logo.png" alt="logo" height="22">
                                     </a>
                                     <a href="index.php" class="logo-dark">
                                         <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
                                     </a>
                                 </div>
                                 <div class="p-4 pt-0 my-auto">
                                     <h4 class="fs-20">Sign In</h4>
                                     <p class="text-muted mb-3">Enter your email address and password to access
                                         account.
                                     </p>

                                     <!-- form -->
                                     <form method="POST">
                                         <div class="mb-3">
                                             <label for="email" class="form-label">Email</label>
                                             <input class="form-control" type="email" id="email" placeholder="Enter email" value="">
                                             <span class="text-danger"></span>
                                         </div>
                                         <div class="mb-3">
                                             <a href="#" class="text-muted float-end"><small>Forgot
                                                     your
                                                     password?</small></a>
                                             <label for="password" class="form-label">Password</label>
                                             <input class="form-control" type="password" id="password" placeholder="Enter password">
                                         </div>
                                         <div class="mb-3">
                                             <div class="form-check">
                                                 <input type="checkbox" class="form-check-input" id="signin">
                                                 <label class="form-check-label" for="checkbox-signin">Remember
                                                     me</label>
                                             </div>
                                         </div>
                                         <div class="mb-0 text-start">
                                             <button class="btn btn-success w-100" type="submit"><i class="ri-login-circle-fill me-1"></i> <span class="fw-bold">Log
                                                     In</span> </button>
                                         </div>


                                     </form>
                                     <!-- end form-->
                                 </div>
                             </div>
                             <!-- </div>  -->
                         </div>
                     </div>
                 </div>
                 <!-- end row -->
             </div>
             <div class="row">
                 <div class="col-12 text-center">
                     <!-- <p class="text-dark-emphasis">Don't have an account? <a href="auth-register.php" class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Sign up</b></a>
                     </p> -->
                 </div> <!-- end col -->
             </div>
             <!-- end row -->
         </div>
         <!-- end container -->
     </div>

     <footer class="footer footer-alt fw-medium">
         <span class="text-dark">
             <script>
                 document.write(new Date().getFullYear())
             </script> © PT. Demak Sarana Sehat (Perseroda)<b> &#10084;</b>
         </span>
     </footer>


     <?= $this->include('partials/footer-scripts') ?>

     <!-- App js -->
     <script src="<?= base_url('assets/js/app.min.js'); ?>"></script>

 </body>