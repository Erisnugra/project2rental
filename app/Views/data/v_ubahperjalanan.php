<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800">Ubah Perjalanan</h1>
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
                    <form method="POST" action="/project2/public/t_dataperjalanan/ubahdata/<?= $mobil['id_perjalanan']; ?>">
                        <div class="form-group">
                            <label for="asal">Kota Asal</label>
                            <input type="text" value="<?= $mobil['kota_asal']; ?>" class="form-control" name="asal_kota" id="asal" autocomplete="off" required="required" placeholder="ketik">
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Kota Tujuan</label>
                            <input type="text" value="<?= $mobil['kota_tujuan']; ?>" class="form-control" name="kota_tujuan" id="tujuan" autocomplete="off" required="required" placeholder="ketik">
                        </div>
                        <div class="form-group">
                            <label for="jarak">Jarak (dalam KM)</label>
                            <input type="number" value="jarak_tempuh" class="form-control" name="jarak_tempuh" id="jarak" autocomplete="off" required="required" placeholder="ketik">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success" name="ubah"><i class="fa fa-pen"></i> Ubah</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
                            <a href="<?= base_url('perjalanan') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>