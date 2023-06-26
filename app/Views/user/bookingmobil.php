<?= $this->extend('template/template_user/base'); ?>
<?= $this->section('content'); ?>
<section class="user_profile inner_pages">
    <div class="container">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="col-md-6 col-sm-8">
            <div class="product-listing-img"><img src="<?= base_url('foto_mobil/' . $data->gambar) ?>" class="img-responsive" alt="Image" /> </a> </div>
            <div class="product-listing-content">
                <h5><?= $data->nama_merk ?> , <?= $data->nama_mobil ?></a></h5>
                <p class="list-price"><?= number_format($data->harga, 0, ",", ".") ?> / Hari</p>
                <ul>
                    <li><i class="fa fa-user" aria-hidden="true"></i><?= $data->jumlah_kursi ?> Seats</li>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?= $data->tahun_beli ?> </li>
                    <li><i class="fa fa-car" aria-hidden="true"></i>Bensin</li>
                </ul>
            </div>
        </div>

        <div class="user_profile_info">
            <div class="col-md-12 col-sm-10">
                <form action="<?= base_url('user/proses_booking/' . $data->id_mobil) ?>" method="post">
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tanggal_pinjam" placeholder="From Date(dd/mm/yyyy)" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tanggal_kembali" placeholder="To Date(dd/mm/yyyy)" required>
                    </div>
                    <br />
                    <div class="form-group">
                        <input type="submit" name="submit" value="Cek Ketersediaan" class="btn btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>