<!-- Start Switcher -->
<div class="switcher-wrapper">
    <div class="demo_changer">
        <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
        <div class="form_holder">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="predefined_styles">
                        <div class="skin-theme-switcher">
                            <h4>Color</h4>
                            <a href="#" data-switchcolor="red" class="styleswitch" style="background-color:#de302f;"> </a>
                            <a href="#" data-switchcolor="orange" class="styleswitch" style="background-color:#f76d2b;"> </a>
                            <a href="#" data-switchcolor="blue" class="styleswitch" style="background-color:#228dcb;"> </a>
                            <a href="#" data-switchcolor="pink" class="styleswitch" style="background-color:#FF2761;"> </a>
                            <a href="#" data-switchcolor="green" class="styleswitch" style="background-color:#2dcc70;"> </a>
                            <a href="#" data-switchcolor="purple" class="styleswitch" style="background-color:#6054c2;"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /Switcher -->

<!--Header-->

<header>
    <div class="default-header">
        <div class="container">
            <div class="row d-flex">
                <div class="col-sm-3 col-md-2 d-flex">
                    <div class="logo">
                        <a href="index.php"><img src="<?= base_url('assets/images/logo11.png') ?>" alt="image" /></a>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 ">
                    <!-- <?= session()->get('username') ? '<p>Wellcome!</p>' : '' ?> -->

                </div>
                <div class="col-sm-7 col-md-10">
                    <div class="header_info">
                        <div class="header_widgets">
                            <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                            <p class="uppercase_text">For Support Mail us : </p>
                            <a href="mailto:info@example.com">rentalmobil@gmail.com</a>
                        </div>
                        <div class="header_widgets">
                            <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                            <p class="uppercase_text">For Services Call Us: </p>
                            <a href="tel:61-1234-5678-09">+62-877-8643-1331</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="header_wrap">
                <div class="user_login">
                    <ul>
                        <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                <?= session()->get('name') ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
                                <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Update Password</a></li>
                                <li><a href="<?= base_url('user/riwayat') ?>" data-toggle="modal" data-dismiss="modal">Riwayat Sewa</a></li>
                                <li><a href="<?= base_url('login/logout') ?>" data-toggle="modal" data-dismiss="modal">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url('user') ?>">Home</a></li>
                    <li><a href="page.php?type=aboutus">Tentang Kami</a></li>
                    <li><a href="<?= base_url('user/daftar'); ?>">Daftar Mobil</a>
                    <li><a href="page.php?type=faqs">FAQs</a></li>
                    <li><a href="contact-us.php">Hubungi Kami</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->

</header><!-- /Header -->