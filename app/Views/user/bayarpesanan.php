<?= $this->extend('template/template_user/base'); ?>
<?= $this->section('content'); ?>
<section class="user_profile inner_pages">
    <center>
        <h3>Detail Sewa</h3>
    </center>
    <div class="container">
        <div class="user_profile_info">
            <div class="col-md-12 col-sm-10">
                <form method="post" action="<?= base_url('user/uploadbukti/' . $data->id_pesanan) ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nomor Rekening</label>
                        <input type="text" class="form-control" name="mobil" value="<?= $data->no_rek ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Upload Bukti Pembayaran</label><br />
                        <input type="file" class="form-control" name="bukti_pembayaran" required>
                    </div>
                    <br />
                    <div class="form-group">
                        <a href="<?= base_url('user/riwayat') ?>" class="btn btn-primary btn-xs">Kembali</a>
                        <button type="submit" class="btn btn-xs btn-success" style="background-color: green;">Bayar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>