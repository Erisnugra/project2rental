<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Rental Mobil</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.transitions.css" type="text/css">
    <link href="<?= base_url(); ?>assets/css/slick.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/bootstrap-slider.min.css " rel="stylesheet">
    <link rel="stylesheet" id="switcher-css" type="text/css" href="<?= base_url(); ?>assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url(); ?>assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url(); ?>assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url(); ?>assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url(); ?>assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url(); ?>assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?= base_url(); ?>assets/switcher/css/purple.css" title="purple" media="all" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url(); ?>assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon-icon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>



    <?= $this->include('template/template_user/nav')  ?>

    <?= $this->renderSection('content'); ?>
    <!--Footer -->

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <h6>Tentang Kami</h6>
                        <ul>


                            <li><a href="page.php?type=aboutus">Tentang Kami</a></li>
                            <li><a href="page.php?type=faqs">FAQs</a></li>
                            <li><a href="page.php?type=privacy">Privacy</a></li>
                            <li><a href="page.php?type=terms">Terms of use</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-6 text-right">
                        <div class="footer_widget">

                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <p class="copy-right">Copyright &copy; 2019 Rental Mobil. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- /Footer-->

    <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!--/Back to top-->




    <!-- Scripts -->
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/interface.js"></script>
    <!--Switcher-->
    <script src="<?= base_url(); ?>assets/switcher/js/switcher.js"></script>
    <!--bootstrap-slider-JS-->
    <script src="<?= base_url(); ?>assets/js/bootstrap-slider.min.js"></script>
    <!--Slider-JS-->
    <script src="<?= base_url(); ?>assets/js/slick.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>

    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(1500, 0).slideUp(1500, function() {
                $(this).remove();
            });
        }, 3000);
    </script>
</body>

</html>