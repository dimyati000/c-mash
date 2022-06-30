<title>Data Laporan</title>
<div class="main-content">
	<div class="container">
		<div class="row justify-content-center">
			<div class="card shadow-lg border-0 rounded-lg mt-5">
				<section class="section">
					<div class="section-header">
						<h1>Laporan</h1>
					</div>
					<div class="section-body">
						<div class="container-fluid">
							<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahBarang"><i class="fas fa-plus fa-sm"> Tambah Data</i></button>
							<div class="card-body">
								<div class="table-responsive">
									<!-- Tabel Laporan -->
									<table class="table table-bordered">
										<tr>
											<th>No</th>
											<th>Nama Pemesan</th>
											<th>Jenis Laporan</th>
											<th>Barang Dibeli / Diganti</th>
											<th>Total Harga</th>
											<th>Keterangan</th>
											<th>Tanggal Pemesanan</th>
											<th colspan="3">Aksi</th>
										</tr>
										<?php
										$no = 1;
										foreach ($laporan as $lpr) : ?>
											<tr>
												<td><?php echo $no++ ?></td>
												<td><?php echo $lpr->namaPemesan ?></td>
												<td><?php echo $lpr->jenisLaporan ?></td>
												<td><?php echo $lpr->barangTerbeli ?></td>
												<td><?php echo $lpr->totalHarga ?></td>
												<td><?php echo $lpr->keterangan ?></td>
												<td><?php echo $lpr->tanggalPemesanan ?></td>
												<td><?php echo anchor('Laporan/edit/' . $lpr->idLaporan, ' <div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?>
												</td>
												<td><?php echo anchor('Laporan/delete/' . $lpr->idLaporan, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>

												</td>
											</tr>
										<?php endforeach; ?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>





<!-- Tambah Data Laporan -->
<div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Laporan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo base_url() . 'Laporan/tambahData'; ?>" enctype="multipart/form-data" autocomplete="off">
					<div class="form-group">
						<label>Nama Pemesan</label>
						<input type="text" name="namaPemesan" class="form-control">
					</div>
					<div class="form-group">
						<label>Jenis Laporan</label>
						<select name="jenisLaporan" class="form-control">
							<option>Service Booking</option>
							<option>Service Ditempat</option>
							<option>Pembelian Barang</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Barang Dibeli / Diganti</label>
						<input type="text" name="barangTerbeli" class="form-control">
					</div>
					<div class="form-group">
						<label>Total Harga</label>
						<input type="text" name="totalHarga" class="form-control">
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<input type="text" name="keterangan" class="form-control">
					</div>
					<div class="form-group">
						<label>Tanggal Pemesanan</label>
						<input type="date" name="tanggalPemesanan" class="form-control">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>
		</div>
	</div>
</div>
