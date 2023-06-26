<?= $this->extend('template/template_user/base'); ?>
<?= $this->section('content'); ?>
<!--Listing-->
<section class="listing-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="result-sorting-wrapper">
                    <div class="sorting-count">
                        <p><span>3 Mobil</span></p>
                    </div>
                </div>
                <?php foreach ($data as $row) { ?>
                    <div class="product-listing-m gray-bg">
                        <div class="product-listing-img"><img src="<?= base_url('foto_mobil/' . $row->gambar); ?>" class="img-responsive" alt="Image" /> </a>
                        </div>
                        <div class="product-listing-content">
                            <h5><a href="vehical-details.php?vhid=10"><?= $row->nama_merk ?> , <?= $row->nama_mobil ?></a></h5>
                            <p class="list-price">Rp.<?= number_format($row->harga, 0, ",", ".") ?> / Hari</p>
                            <ul>
                                <li><i class="fa fa-user" aria-hidden="true"></i><?= $row->jumlah_kursi ?> Seats</li>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i><?= $row->tahun_beli ?> </li>
                                <li><i class="fa fa-car" aria-hidden="true"></i>Bensin</li>
                            </ul>
                            <a href="<?= base_url('user/detail/' . $row->id_mobil); ?>" class="btn">Lihat Detail <i class="bi bi-arrow-right-circle"></i></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!--Side-Bar-->
            <aside class="col-md-3 col-md-pull-9">
                <div class="sidebar_widget">
                    <div class="widget_heading">
                        <h5><i class="fa fa-filter" aria-hidden="true"></i>Cari Mobil</h5>
                    </div>
                    <div class="sidebar_filter" <form action="search-carresult.php" method="post">
                        <div class="form-group select">
                            <select class="form-control" name="brand" required>
                                <option value="" selected>Pilih Merek</option>
                                <option value="14">Honda</option>
                                <option value="15">MercedesBenz</option>
                            </select>
                        </div>
                        <div class="form-group select">
                            <select class="form-control" name="fueltype" required>
                                <option value="">Jenis Bahan Bakar</option>
                                <option value="Bensin">Bensin</option>
                                <option value="Diesel">Diesel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i>Cari</button>
                        </div>
                        </form>
                    </div>
                </div>

                <!-- <div class="sidebar_widget">
                    <div class="widget_heading">
                        <h5><i class="fa fa-car" aria-hidden="true"></i>Mobil Terbaru</h5>
                    </div>
                    <div class="recent_addedcars">
                        <ul>
                            <li class="gray-bg">
                                <div class="recent_post_img"> <a href="vehical-details.php?vhid=12"><img src="<?= base_url(); ?>home/img/Merci-Cclass-service1.jpg" alt="image"></a> </div>
                                <div class="recent_post_title"> <a href="vehical-details.php?vhid=12">MercedesBenz , MercedesBenzC</a>
                                    <p class="widget_price">Rp. 1.850.000 / Hari</p>
                                </div>
                            </li>
                            <li class="gray-bg">
                                <div class="recent_post_img"> <a href="vehical-details.php?vhid=10"><img src="<?= base_url(); ?>home/img/Honda-Freed-front.jpg" alt="image"></a> </div>
                                <div class="recent_post_title"> <a href="vehical-details.php?vhid=10">Honda , hondafreed</a>
                                    <p class="widget_price">Rp. 450.000 / Hari</p>
                                </div>
                            </li>
                            <li class="gray-bg">
                                <div class="recent_post_img"> <a href="vehical-details.php?vhid=11"><img src="<?= base_url(); ?>home/img/Honda-CRV-2011-Front.jpg" alt="image"></a> </div>
                                <div class="recent_post_title"> <a href="vehical-details.php?vhid=11">Honda , HondaCrv</a>
                                    <p class="widget_price">Rp. 1.000.000 / Hari</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </aside>
            <!--/Side-Bar-->
        </div>
    </div>
</section>
<?= $this->endSection(); ?>