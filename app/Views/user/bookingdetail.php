<?= $this->extend('template/template_user/base'); ?>
<?= $this->section('content'); ?>
<section class="user_profile inner_pages">
    <center>
        <h3>Detail Sewa</h3>
    </center>
    <div class="container">
        <div class="user_profile_info">
            <div class="col-md-12 col-sm-10">
                <form method="post" name="sewa" onSubmit="return valid();">
                    <div class="form-group">
                        <label>Mobil</label>
                        <input type="text" class="form-control" name="mobil" value="<?= $data->nama_merk . ', ' . $data->nama_mobil ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" value="<?= $data->tanggal_pinjam ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" value="<?= $data->tanggal_kembali ?>" readonly>
                    </div>
                    <?php
                    $startTimestamp = strtotime($data->tanggal_pinjam);
                    $endTimestamp = strtotime($data->tanggal_kembali);

                    // Menghitung selisih waktu dalam detik
                    $timeDiff = abs($endTimestamp - $startTimestamp);

                    // Menghitung jarak dalam hari
                    $dayDiff = floor($timeDiff / (60 * 60 * 24)); ?>
                    <div class="form-group">
                        <label>Durasi</label>
                        <input type="text" class="form-control" name="durasi" value="<?= $dayDiff; ?> Hari" readonly>
                    </div>
                    <div class="form-group">
                        <label>Biaya Mobil (<?= $dayDiff; ?> Hari)</label><br />
                        <input type="text" class="form-control" name="biayamobil" value="<?= number_format($data->harga, 0, ",", ".") ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Total Biaya Sewa (<?= $dayDiff; ?> Hari)</label><br />
                        <input type="text" class="form-control" name="total" value="<?= $data->total_harga ?>" readonly>
                    </div>
                    </b>
                    <br /><br />
                    <div class="form-group">
                        <a href="<?= base_url('user/riwayat') ?>" class="btn btn-primary btn-xs">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>