<title>Edit Service</title>
<div class="main-content">
	<div class="container">
		<div class="card shadow-lg border-0 rounded-lg mt-5">
			<section class="section">
				<div class="section-header">
					<h1>Edit Service</h1>
				</div>
				<div class="section-body">
					<div class="container-fluid">
						<!-- Form Edit Layanan -->
						<?php foreach ($pelayanan as $layanan) : ?>
							<form action="<?php echo base_url() . 'Service/update' ?>" method="post" autocomplete="off">
								<div class="form-group">
									<label>Nama Pelanggan</label>
									<input type="text" name="namaPelanggan" class="form-control" value="<?php echo $layanan->namaPelanggan ?>">
								</div>
								<div class="form-group">
									<label>Tipe Kendaraan</label>
									<input type="text" name="tipeKendaraan" class="form-control" value="<?php echo $layanan->tipeKendaraan ?>">
								</div>
								<div class="form-group">
									<label>Merk</label>
									<input type="text" name="merk" class="form-control" value="<?php echo $layanan->merk ?>">
									<input type="hidden" name="idLayanan" class="form-control" value="<?php echo $layanan->idLayanan ?>">
								</div>
								<div class="form-group">
									<label>Seri</label>
									<input type="text" name="seri" class="form-control" value="<?php echo $layanan->seri ?>">
								</div>
								<div class="form-group">
									<label>Warna</label>
									<input type="text" name="warna" class="form-control" value="<?php echo $layanan->warna ?>">
								</div>
								<div class="form-group">
									<label>Jenis Transmisi</label>
									<input type="text" name="transmisi" class="form-control" value="<?php echo $layanan->transmisi ?>">
								</div>
								<div class="form-group">
									<label>Jenis Bensin</label>
									<input type="text" name="jenisBensin" class="form-control" value="<?php echo $layanan->jenisBensin ?>">
								</div>
								<div class="form-group">
									<label>Plat Nomor</label>
									<input type="text" name="platNomor" class="form-control" value="<?php echo $layanan->platNomor ?>">
								</div>
								<button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
								<br>
								<br>
								<br>
							</form>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
