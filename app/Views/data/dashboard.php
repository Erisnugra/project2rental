<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang Admin Jasa</h1>

</div>
<?php
foreach ($data_mobil as $key => $value) {
    $dm = $value['jumlah'];
}
foreach ($data_customer as $key => $value) {
    $dc = $value['jumlah'];
}
foreach ($data_pesanan as $key => $value) {
    $dp = $value['jumlah'];
}
foreach ($data_pembayaran as $key => $value) {
    $db = $value['jumlah'];
}

?>
<!-- /.container-fluid -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Mobil</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo json_decode($dm); ?> Mobil</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-car fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Customer</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo json_decode($dc); ?> Customer</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Pesanan</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo json_decode($dp); ?> Pesanan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-receipt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Pembayaran</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo json_decode($db); ?> Pembayaran</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-receipt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <strong>Akun yang sedang login</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://rentalmobil.digitalkoding.com/uploads/administrator-1579273408.png" alt="<br />
                                        <b>Notice</b>:  Undefined property: mysqli_result::$nama in <b>/home/digita56/rentalmobil.digitalkoding.com/views/dashboard.php</b> on line <b>98</b><br />
                                        " class="img-thumbnail mb-4">
                        </div>
                        <div class="col-md-9">
                            <table class="table table-borderless">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><b>Administrator</b></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><b>admin</b></td>
                                </tr>
                                <tr>
                                    <td>Tanggal & Jam Login</td>
                                    <td>:</td>
                                    <td><b>24 May 2023 18:53:24</b></td>
                                </tr>
                                <tr>
                                    <td>Server</td>
                                    <td>:</td>
                                    <td><b>localhost</b></td>
                                </tr>
                            </table>
                        </div> -->

</div>


<!-- End of Main Content -->




<?= $this->endSection(); ?>