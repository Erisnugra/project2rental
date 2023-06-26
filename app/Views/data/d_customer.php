<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800">Data customer</h1>
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
                    <form method="POST" action="<?php echo base_url('t_datacustomer/tambah'); ?>">
                        <div class="form-group">
                            <label for="nama">Nama Pemesan</label>
                            <input type="text" name="nama" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="L">Laki laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat Pemesan</label>
                            <textarea name="alamat" id="alamat" rows="3" class="form-control" placeholder="ketik"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto Pemesan</label>
                            <input type="file" name="foto" id="foto" required="required" placeholder="ketik" autocomplete="off" class="form-control-file">
                            ukuran foto wajib 200px X 200px
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
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Pemesan</h6>
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
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data_customer as $m) : ?>
                                <tr>
                                    <td><?= $m->id_customer; ?></td>
                                    <td><?= $m->nama; ?></td>
                                    <td><?= $m->jenis_kelamin; ?></td>
                                    <td><?= $m->alamat; ?></td>
                                    <td>
                                        <a href="t_datacustomer/ubah/<?= $m->id_customer; ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
                                        <a href="data/detailcustomer" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i> Detail</a>
                                        <a href="t_datacustomer/hapus/<?= $m->id_customer; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
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

<!-- /.container-fluid -->


<?= $this->endSection(); ?>