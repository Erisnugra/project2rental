<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="clearfix">
						<div class="float-left">
							<h1 class="h3 mb-4 text-gray-800">Detail Mobil</h1>
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
				<div class="col-sm-8">
					<div class="card shadow">
						<div class="card-header">
							<h6 class="m-0 font-weight-bold text-primary">Detail Mobil - Suzuki All New Ertiga</h6>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<img src="https://rentalmobil.digitalkoding.com/uploads/suzuki-all-new-ertiga-1579279546.png" alt="Suzuki All New Ertiga" class="img-thumbnail mb-4">
								</div>
								<div class="col-md-6">
									<table class="table table-borderless">
										<tr>
											<td>Nama</td>
											<td>:</td>
											<td><b>Suzuki All New Ertiga</b></td>
										</tr>
										<tr>
											<td>Merk</td>
											<td>:</td>
											<td><b>Suzuki</b></td>
										</tr>
										<tr>
											<td>Nomer Polisi</td>
											<td>:</td>
											<td><b>R 1739 KN</b></td>
										</tr>
										<tr>
											<td>Jumlah Kursi</td>
											<td>:</td>
											<td><b>8 Kursi</b></td>
										</tr>
										<tr>
											<td>Tahun Beli</td>
											<td>:</td>
											<td><b>Tahun 2018</b></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<a href="" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
									<a href="" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
									<a href="" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?= $this->endSection(); ?>