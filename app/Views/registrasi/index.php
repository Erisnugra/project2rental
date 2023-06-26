<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registrasi</title>
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

                            </div>
                            <h3>Register Form</h3>
                            <h6 class="fw-light">Silahkan Daftarkan Identitas Anda</h6>

                            <?php
                            $errors = session()->getFlashdata('errors');
                            if (!empty($errors)) { ?>

                                <?php foreach ($errors as $key => $value) { ?>
                                    <?= esc($value); ?>
                                <?php } ?>
                            <?php } ?>
                            <form method="post" action="<?= base_url('registrasi/cek_register'); ?>">
                                <form class="pt-3">

                                    <div class="form-group">
                                        <span>masukan username</span>
                                        <input type="text" class="form-control form-control-lg" id="username" placeholder="username" name="username">
                                    </div>

                                    <div class="form-group">
                                        <span>masukan password</span>
                                        <input type="password" class="form-control form-control-lg" id="password" placeholder="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <span>masukan name</span>
                                        <input type="text" class="form-control form-control-lg" id="name" placeholder="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <span>role</span>
                                        <select name="role" id="role" class="form-select form-control-lg">
                                            <option value="">~ Pilih ~</option>
                                            <option value="Penyedia Jasa">Penyedia Jasa</option>
                                            <option value="Penyewa">Penyewa</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Register</button>
                                    </div>
                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                                <input type="checkbox" class="form-check-input">
                                                signed in
                                            </label>
                                        </div>

                                    </div>
                                    <div class="mb-2">

                                    </div>
                                    <div class="text-center mt-4 fw-light">

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