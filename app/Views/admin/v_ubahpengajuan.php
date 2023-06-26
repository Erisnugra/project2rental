<?= $this->extend('temadmin/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800">Ubah pengajuan</h1>
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
                    <form method="POST" action="<?= base_url('admin/prosesubah/' . $data->id_mobil) ?>">
                        <div class="form-group">
                            <label for="nama">Nama Rental</label>
                            <input type="text" name="nama" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->username ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Nama Pemilik </label>
                            <input type="text" name="nama" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->name ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Nama Mobil </label>
                            <input type="text" name="nama" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->nama_mobil ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Harga </label>
                            <input type="text" name="nama" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control" value="<?= $data->harga ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="" <?= $data->status == null ? 'selected' : '' ?>>Belum Disetujui</option>
                                <option value="Disetujui" <?= $data->status == 'Disetujui' ? 'selected' : '' ?>>Disetujui</option>
                                <option value="Ditolak" <?= $data->status == 'Ditolak' ? 'selected' : '' ?>>Ditolak</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success" name="ubah"><i class="fa fa-pen"></i> Ubah</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
                            <a href="<?= base_url('admin/pengajuan') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>