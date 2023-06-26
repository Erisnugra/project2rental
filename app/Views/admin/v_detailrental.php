<?= $this->extend('temadmin/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800">Detail Rental</h1>
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
                    <h6 class="m-0 font-weight-bold text-primary">Detail Data</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama">Nama Rental</label>
                            <input type="text" name="nama" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->username ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Nama Pemilik </label>
                            <input type="text" name="nama" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->name ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Nama Merk </label>
                            <input type="text" name="alamat" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->nama_merk ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Nama Mobil </label>
                            <input type="text" name="alamat" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->nama_mobil ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Warna Mobil </label>
                            <input type="text" name="alamat" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->nama_merk ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Jumlah Kursi </label>
                            <input type="text" name="alamat" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->jumlah_kursi ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Nomor Polisi </label>
                            <input type="text" name="alamat" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->no_polisi ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Tahun Beli </label>
                            <input type="text" name="alamat" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->tahun_beli ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Harga </label>
                            <input type="text" name="alamat" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->harga ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Status </label>
                            <input type="text" name="alamat" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->status ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Gambar </label>
                            <img src="<?= base_url('foto_mobil/' . $data->gambar) ?>" alt="" class="w-100">
                        </div>


                        <div class="form-group">
                            <a href="<?= base_url('admin/rental') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>