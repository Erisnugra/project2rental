<?= $this->extend('template/template_user/base'); ?>
<?= $this->section('content'); ?>
<!-- <section id="listing_img_slider"> -->
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center text-center">
            <img src="<?= base_url('foto_mobil/' . $data->gambar); ?>" class=" text-center" alt="image" width="700">
        </div>
    </div>
</div>

<!-- <div><img src="admin/img/vehicleimages/" class="img-responsive" alt="image" width="900" height="560"></div> -->

<!-- </section> -->
<!--/Listing-Image-Slider-->


<!--Listing-detail-->
<section class="listing-detail">
    <div class="container">
        <div class="listing_detail_head row">
            <div class="col-md-9">
                <h2><?= $data->nama_merk ?></h2>
            </div>
            <div class="col-md-3">
                <div class="price_info">
                    <p>Rp.<?= number_format($data->harga, 0, ",", ".") ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="main_features">
                    <ul>

                        <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                            <h5><?= $data->tahun_beli ?></h5>
                            <p>Tahun Registrasi</p>
                        </li>
                        <li> <i class="fa fa-cogs" aria-hidden="true"></i>
                            <h5>Bensin</h5>
                            <p>Tipe Bahan Bakar</p>
                        </li>

                        <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <h5><?= $data->jumlah_kursi ?></h5>
                            <p>Seats</p>
                        </li>
                    </ul>
                </div>
                <div class="listing_more_info">
                    <div class="listing_detail_wrap">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs gray-bg" role="tablist">
                            <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Deskripisi Kendaraan</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- vehicle-overview -->
                            <div role="tabpanel" class="tab-pane active" id="vehicle-overview">

                                <h4><?= $data->nama_mobil ?></h4>
                                <p><?= $data->warna_mobil ?></p>
                            </div>


                        </div>
                    </div>

                </div>



            </div>

            <!--Side-Bar-->
            <aside class="col-md-3">

                <div class="share_vehicle">
                    <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
                </div>
                <div class="sidebar_widget">
                    <div class="widget_heading">
                        <h5><i class="fa fa-envelope" aria-hidden="true"></i>Sewa Sekarang</h5>
                    </div>
                    <form method="get" action=" <?= base_url('user/booking/' . $data->id_mobil); ?>">
                        <!-- <input type="hidden" class="form-control" name="vid" value="" required <!-- <div class="form-group">
                                <input type="date" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
                        </div>-->

                        <div class="form-group" align="center">
                            <button class="btn" type="submit" align="center">Sewa Sekarang</button>
                        </div>

                        <!-- <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login Untuk Menyewa</a> -->


                    </form>
                </div>
            </aside>
            <!--/Side-Bar-->
        </div>

        <div class="space-20"></div>
        <div class="divider"></div>

        <!--Similar-Cars-->
        <div class="similar_cars">
            <h3>Mobil Sejenis</h3>
            <div class="row">



                <!-- <div class="col-md-3 grid_listing">
                        <div class="product-listing-m gray-bg">
                            <div class="product-listing-img"> <a href="vehical-details.php?vhid"><img src="admin/img/vehicleimages/" class="img-responsive" alt="image" /> </a>
                            </div>
                            <div class="product-listing-content">
                                <h5><a href="vehical-details.php?vhid</a></h5>
                                                <p class=list-price><</p>

                                                <ul class=" features_list">

                                        <li><i class="fa fa-user" aria-hidden="true"></i> seats</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></li>
                                        <li><i class="fa fa-car" aria-hidden="true"></li>
                                        </ul>
                            </div>
                        </div>
                    </div> -->

            </div>
        </div>
    </div>
    </div>
    <!--/Similar-Cars-->
    <?= $this->endSection(); ?>