<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800">Ubah Mobil</h1>
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

                    <form method="POST" action="<?= base_url('tambahdatamobil/ubahdata/' . $mobil['id_mobil']) ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Merk</label>
                            <input type="text" value="<?= $mobil['nama_merk']; ?>" name="merk" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Mobil</label>
                            <input type="text" value="<?= $mobil['nama_mobil']; ?>" name="nama" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="warna">Warna Mobil</label>
                                <input type="text" value="<?= $mobil['warna_mobil']; ?>" name="warna" id="warna" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label for="jumlah_kursi">Jumlah Kursi</label>
                                <input type="number" value="<?= $mobil['jumlah_kursi']; ?>" name="jumlah_kursi" id="jumlah_kursi" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="no_polisi">No Polisi</label>
                                <input type="text" value="<?= $mobil['no_polisi']; ?>" name="no_polisi" id="no_polisi" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label for="tahun_beli">Tahun Beli</label>
                                <input type="number" value="<?= $mobil['tahun_beli']; ?>" name="tahun_beli" id="tahun_beli" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Harga</label>
                            <input type="number" name="harga" id="gambar" value="<?= $mobil['harga']; ?>" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Mobil</label>
                            <input type="file" name="foto" id="gambar" placeholder="ketik" autocomplete="off" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-pen"></i> Ubah</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
                            <a href="<?= base_url('mobil') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
</div>

<?= $this->endSection(); ?>