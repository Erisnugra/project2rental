<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800">Ubah Pesanan</h1>
                </div>
                <!-- <div class="float-right">
								<a href="" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
							</div> -->
            </div>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">

        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('t_datapesanan/ubahdata/' . $data->id_pesanan) ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Customer</label>
                            <input type="text" value="<?= $data->nama; ?>" name="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="Mobil">Nama Mobil</label>
                            <input type="text" value="<?= $data->nama_mobil; ?>" name="mobil" required="required" placeholder="ketik" autocomplete="off" class="form-control" readonly>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_pinjam">Tanggal Pinjam</label>
                                    <input type="text" value="<?= $data->tanggal_pinjam; ?>" name="tanggal_pinjam" required="required" placeholder="ketik" autocomplete="off" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_kembali">Tanggal Kembali</label>
                                    <input type="text" value="<?= $data->tanggal_kembali; ?>" name="tanggal_kembali" required="required" placeholder="ketik" autocomplete="off" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="total_harga">Status Pemesanan</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="Melakukan Pembayaran" <?= $data->status == 'Melakukan Pembayaran' ? 'selected' : '' ?>>Melakukan Pembayaran</option>
                                        <option value="Disetujui" <?= $data->status == 'Disetujui' ? 'selected' : '' ?>>Disetujui</option>
                                        <option value="Pembayaran Ditolak" <?= $data->status == 'Pembayaran Ditolak' ? 'selected' : '' ?>>Pembayaran Ditolak</option>
                                        <option value="Selesai" <?= $data->status == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="total_harga">Total Harga</label>
                                    <input type="text" value="<?= $data->total_harga; ?>" name="total_harga" required="required" placeholder="ketik" autocomplete="off" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_bayar">Jenis Bayar</label>
                                    <input type="text" value="<?= $data->jenis_bayar; ?>" name="jenis_bayar" required="required" placeholder="ketik" autocomplete="off" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success" name="ubah"><i class="fa fa-pen"></i> Ubah</button>
                            <a href="<?= base_url('pesanan') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>