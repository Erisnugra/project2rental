<?= $this->extend('template/template_user/base'); ?>
<?= $this->section('content'); ?>
<section class="user_profile inner_pages">
    <center>
        <h3>Riwayat Sewa</h3>
    </center>
    <div class="container">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="23" align="center">No</th>
                    <th width="132">Nama Mobil</th>
                    <th width="80">Tgl. Mulai</th>
                    <th width="100">Tgl. Selesai</th>
                    <th width="100">Biaya Mobil</th>
                    <th width="100">Total Biaya</th>
                    <th width="100">Status</th>
                    <th class="text-center" width="50">Opsi</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($data as $row) {
            ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= $row->nama_mobil ?></td>
                    <td><?= $row->tanggal_pinjam ?></td>
                    <td><?= $row->tanggal_kembali ?></td>
                    <td><?= $row->harga ?></td>
                    <td><?= $row->total_harga ?></td>
                    <td><?= $row->status ?></td>
                    <td class="text-center">
                        <a href="<?= base_url('user/detail_booking/' . $row->id_pesanan) ?>" class="badge bagde-success">Detail</a>
                        <?php if ($row->status == 'Melakukan Pembayaran') { ?>
                            <a href="<?= base_url('user/batal_pesanan/' . $row->id_pesanan) ?>" class="badge " style="background-color: red;" onclick="return confirm('Yakin ingin membatalkan?')">Batalkan</a>
                        <?php } ?>
                    </td>
                </tr>

            <?php
            } ?>
        </table>
    </div>
</section>
<?= $this->endSection(); ?>