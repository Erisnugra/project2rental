<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->

<div class="container-fluid">



    <!-- Page Heading -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="clearfix">
                    <div class="float-left">
                        <h1 class="h3 mb-4 text-gray-800">Data Perjalanan</h1>
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
            <div class="col-sm-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('t_dataperjalanan/tambah'); ?>">
                            <div class="form-group">
                                <label for="asal">Kota Asal</label>
                                <input type="text" class="form-control" name="kota_asal" id="asal" autocomplete="off" required="required" placeholder="ketik">
                            </div>
                            <div class="form-group">
                                <label for="tujuan">Kota Tujuan</label>
                                <input type="text" class="form-control" name="kota_tujuan" id="tujuan" autocomplete="off" required="required" placeholder="ketik">
                            </div>
                            <div class="form-group">
                                <label for="jarak">Jarak (dalam KM)</label>
                                <input type="number" class="form-control" name="jarak_tempuh" id="jarak" autocomplete="off" required="required" placeholder="ketik">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-success" name="tambah"><i class="fa fa-plus"></i> Tambah</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Perjalanan</h6>
                    </div>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">

                        <table class="table table-bordered" id="data" width="" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kota Asal</th>
                                    <th>Kota Tujuan</th>

                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data_perjalanan as $m) : ?>
                                    <tr>
                                        <td><?= $m->id_perjalanan; ?></td>
                                        <td><?= $m->kota_asal; ?></td>
                                        <td><?= $m->kota_tujuan; ?></td>

                                        <td>
                                            <a href="t_dataperjalanan/ubah/<?= $m->id_perjalanan; ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
                                            <a href="t_dataperjalanan/hapus/<?= $m->id_perjalanan; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>