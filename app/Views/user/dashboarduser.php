<?= $this->extend('template/template_user/base'); ?>
<?= $this->section('content'); ?>
<!-- Banners -->
<section id="banner" class="banner-section">
    <div class="container">
        <div class="div_zindex">
            <div class="row">
                <div class="col-md-5 col-md-push-7">
                    <div class="banner_content">
                        <h1>Cari Mobil untuk kenyamanan anda.</h1>
                        <p>Kami Punya beberapa pilihan untuk anda. </p>
                        <a href="car-listing.php" class="btn">Selengkapnya <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Banners -->


<!-- Resent Cat-->
<section class="section-padding gray-bg">
    <div class="container">
        <div class="row">

            <!-- Nav tabs -->
            <div class="recent-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Mobil Untuk Anda</a></li>
                </ul>
            </div>
            <br>


            <!-- Recently Listed New Cars -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="resentnewcar">



                    <div class="col-list-3">
                        <div class="recent-car-list">
                            <div class="car-info-box"> <a href="vehical-details.php?vhid=10"><img src="<?= base_url(); ?>home/img/Honda-Freed-front.jpg" class="img-responsive" alt="image"></a>
                                <ul>
                                    <li><i class="fa fa-car" aria-hidden="true"></i>Bensin</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>2012 Model</li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i>6 Seats</li>
                                </ul>
                            </div>
                            <div class="car-title-m">
                                <h6><a href="vehical-details.php?vhid=10">Honda , hondafreed</a></h6>
                                <span class="price">Rp. 450.000 /Hari</span>
                            </div>
                            <div class="inventory_info_m">
                                <p>Honda Freed 1500 cc transmision automatic seating capacity 6</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-list-3">
                        <div class="recent-car-list">
                            <div class="car-info-box"> <a href="vehical-details.php?vhid=11"><img src="<?= base_url(); ?>home/img/Honda-CRV-2011-Front.jpg" class="img-responsive" alt="image"></a>
                                <ul>
                                    <li><i class="fa fa-car" aria-hidden="true"></i>Bensin</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>2011 Model</li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i>5 Seats</li>
                                </ul>
                            </div>
                            <div class="car-title-m">
                                <h6><a href="vehical-details.php?vhid=11">Honda , HondaCrv</a></h6>
                                <span class="price">Rp. 1.000.000 /Hari</span>
                            </div>
                            <div class="inventory_info_m">
                                <p>Honda CRV Tahun 2011</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-list-3">
                        <div class="recent-car-list">
                            <div class="car-info-box"> <a href="vehical-details.php?vhid=12"><img src="<?= base_url(); ?>home/img/Merci-Cclass-service1.jpg" class="img-responsive" alt="image"></a>
                                <ul>
                                    <li><i class="fa fa-car" aria-hidden="true"></i>Bensin</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>2012 Model</li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i>5 Seats</li>
                                </ul>
                            </div>
                            <div class="car-title-m">
                                <h6><a href="vehical-details.php?vhid=12">MercedesBenz , MercedesBenzC</a></h6>
                                <span class="price">Rp. 1.850.000 /Hari</span>
                            </div>
                            <div class="inventory_info_m">
                                <p>Mercedes Benz C Class 1800 CC</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>
<!-- /Resent Cat -->
<?= $this->endSection(); ?>