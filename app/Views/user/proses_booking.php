<?= $this->extend('template/template_user/base'); ?>
<?= $this->section('content'); ?>
<section class="user_profile inner_pages">
    <div class="container">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-warning" role="alert">
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
                <form action="<?= base_url('user/pesan/' . $data->id_mobil) ?>" method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br />
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki &nbsp;
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control" placeholder="Masukan Alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kota Asal</label>
                        <input type="text" class="form-control" name="kota_asal" placeholder="Masukan Kota Asal" required>
                    </div>
                    <div class="form-group">
                        <label>Kota Tujuan</label>
                        <input type="text" class="form-control" name="kota_tujuan" placeholder="Masukan Kota Tujuan" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tanggal_pinjam" value="<?= $tgl['tanggal_pinjam'] ?>" placeholder="From Date(dd/mm/yyyy)" required readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tanggal_kembali" value="<?= $tgl['tanggal_kembali'] ?>" placeholder="To Date(dd/mm/yyyy)" required readonly>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Hari</label>
                        <input type="text" class="form-control" name="jumlah_hari" value="<?= $waktu ?>" placeholder="Masukan Kota Tujuan" required readonly>
                    </div>
                    <div class="form-group">
                        <label>Total Harga</label>
                        <input type="text" class="form-control" name="total_harga" value="<?= $waktu * $data->harga ?>" placeholder="Masukan Kota Tujuan" required readonly>
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