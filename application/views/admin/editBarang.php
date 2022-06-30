<title>Edit Barang</title>
<div class="main-content">
	<div class="container">
		<div class="card shadow-lg border-0 rounded-lg mt-5">
			<section class="section">
				<div class="section-header">
					<h1>Edit Barang</h1>
				</div>
				<div class="section-body">
					<div class="container-fluid">
						<!-- Form Edit Barang -->
						<?php foreach ($barang as $brg) : ?>
							<form action="<?php echo base_url() . 'DataBarang/update' ?>" method="post" autocomplete="off">
								<div class="form-group">
									<label>Nama Barang</label>
									<input type="text" name="namaBarang" class="form-control" value="<?php echo $brg->namaBarang ?>">
								</div>
								<div class="form-group">
									<label>Kategori</label>
									<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
									<input type="hidden" name="idBarang" class="form-control" value="<?php echo $brg->idBarang ?>">
								</div>
								<div class="form-group">
									<label>Harga</label>
									<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
								</div>
								<div class="form-group">
									<label>Keterangan</label>
									<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
								</div>
								<div class="form-group">
									<label>Stok</label>
									<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
								</div>
								<button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
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
