<?= $this->extend('temadmin/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="clearfix">
                    <div class="float-left">
                        <h1 class="h3 mb-4 text-gray-800">Daftar Rental Mobil</h1>
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

            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
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
                                    <th>Nama Rental</th>
                                    <th>Nama Pemilik</th>
                                    <th>Nama Mobil</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $row) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->username ?></td>
                                        <td><?= $row->name ?></td>
                                        <td><?= $row->nama_mobil ?></td>
                                        <td><?= $row->harga ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/detailrental/' . $row->id_mobil) ?>" class="btn btn-sm btn-warning mb-2"><i class="fa fa-eye"></i> Detail</a><br>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>