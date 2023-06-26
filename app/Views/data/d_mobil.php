<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <br>
    <h1>Data Mobil</h1>
    <br>


    <?php if (session()->getFlashdata('success')) { ?>
        <div class="alert bg-success text-white" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-sm-4">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </div>
                <div class="card-body">
                    <?php
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)) { ?>
                        <div class="alert bg-danger text-white" role="alert">
                            <ul>
                                <?php foreach ($errors as $key => $value) { ?>
                                    <li><?= esc($value); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php  } ?>

                    <form action="<?php echo base_url('tambahdatamobil/tambah'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="merk">Nama Merk</label>
                            <select name="nama_merk" id="merk" class="form-control">
                                <option value="Toyota">Toyota</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Mitsubishi">Mitsubishi</option>
                                <option value="Yamaha">Yamaha</option>
                                <option value="Avanza">Avanza</option>
                                <option value="Sedan">Sedan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Mobil</label>
                            <input type="text" name="nama_mobil" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="warna">Warna Mobil</label>
                                <input type="text" name="warna_mobil" id="warna" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label for="jumlah_kursi">Jumlah Kursi</label>
                                <input type="number" name="jumlah_kursi" id="jumlah_kursi" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="no_polisi">No Polisi</label>
                                <input type="text" name="no_polisi" id="no_polisi" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label for="tahun_beli">Tahun Beli</label>
                                <input type="number" name="tahun_beli" id="tahun_beli" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Harga</label>
                            <input type="number" name="harga" id="gambar" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Mobil</label>
                            <input type="file" name="foto" id="gambar" required="required" placeholder="ketik" autocomplete="off" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Mobil</h6>
                </div>
                <div class="card-body">

                    <table class="table table-bordered" id="data" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk</th>
                                <th>Mobil</th>
                                <th>Status</th>
                                <th>Aksi</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data_mobil as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $m->nama_merk; ?></td>
                                    <td><?= $m->nama_mobil; ?></td>
                                    <td><?= $m->status ? $m->status : 'Belum Disetujui'; ?></td>

                                    <td>

                                        <a href="tambahdatamobil/ubah/<?= $m->id_mobil; ?>" class="btn btn-sm btn-success"><i class="fa fa-pen"></i> Ubah</a>
                                        <a href="data/detailmobil/<?= $m->id_mobil; ?>" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i> Detail</a>
                                        <a href="tambahdatamobil/hapus/<?= $m->id_mobil; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>