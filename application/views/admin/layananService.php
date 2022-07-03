<title>Data Layanan Service</title>
<div class="main-content">
	<div class="container">
		<div class="row justify-content-center">
			<div class="card shadow-lg border-0 rounded-lg mt-5">
				<section class="section">
					<div class="section-header">
						<h1>Data Layanan Service</h1>
					</div>
					<div class="section-body">
						<div class="container-fluid">
							<div class="card-body">
								<div class="table-responsive">
									<!-- Tabel Layanan Service -->
									<table class="table table-bordered">
										<tr>
											<th>No</th>
											<th>Nama Pelanggan</th>
											<th>Jenis Bensin</th>
											<th>Plat Nomor</th>
											<th>Tipe Kendaraan</th>
											<th>Transmisi</th>
											<th colspan="3">Aksi</th>
										</tr>
										<?php
										$no = 1;
										foreach ($pelayanan as $layanan) : ?>
											<tr>
												<td><?php echo $no++ ?></td>
												<td><?php echo $layanan->namaPelanggan ?></td>
												<td><?php echo $layanan->jenisBensin ?></td>
												<td><?php echo $layanan->platNomor ?></td>
												<td><?php echo $layanan->tipeKendaraan ?></td>
												<td><?php echo $layanan->transmisi ?></td>
												<td><?php echo anchor('Service/edit/' . $layanan->idLayanan, ' <div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?>
												</td>
												<td><?php echo anchor('Service/delete/' . $layanan->idLayanan, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
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
