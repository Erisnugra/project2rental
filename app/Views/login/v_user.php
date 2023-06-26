<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>templet/template/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url(); ?>templet/template/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>templet/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>templet/template/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>templet/template/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>templet/template/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>templet/template/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url(); ?>templet/template/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <?php if (session()->getFlashdata('error')) { ?>
                                    <div class="alert bg-warning">
                                        <?= session()->getFlashdata('error'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <h4>Login Rental Mobil</h4>
                            <h6 class="fw-light">Sign in to continue.</h6>
                            <form class="pt-3" action="login/process1" method="post">
                                <div class="form-group">
                                    <span>masukan username</span>
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name='username'>
                                </div>
                                <div class="form-group">
                                    <span>masukan password</span>
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name='password'>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Sign IN</button>
                                </div>
                            </form>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        Keep me signed in
                                    </label>
                                </div>
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div>
                            <div class="mb-2">

                            </div>
                            <div class="text-center mt-4 fw-light">
                                Don't have an account? <a href="register.html" class="text-primary">Create</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url(); ?>templet/template/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url(); ?>templet/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>templet/template/js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>templet/template/js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>templet/template/js/template.js"></script>
    <script src="<?= base_url(); ?>templet/template/js/settings.js"></script>
    <script src="<?= base_url(); ?>templet/template/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>