<head>
    <title>Service Dibengkel</title>
</head>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Service Dibengkel</h4>
        </div>
        <div class="card-body">
			<!-- Form Pelayanan Di bengkel -->
            <form action="<?php echo base_url() . 'Pelayanan/tambahLayanan'?>" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <label>Nama Pelanggan</label>
                <input type="text" name="namaPelanggan"  value="<?= $user['namaUser'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Service</label>
                <select name="jenisService" class="form-control">
					<option>Berat</option>
					<option>Ringan</option>
				</select>
            </div>
            <div class="form-group">
                <label>Tipe Kendaraan</label>
                <input type="text" name="tipeKendaraan" class="form-control"  value="<?= $user['type_motor'] ?>">
            </div>
            <div class="form-group">
                <label>Merk Kendaraan</label>
                <input type="text" name="merk" class="form-control" value="<?= $user['merk_motor'] ?>">
            </div>
            <div class="form-group">
                <label>Kilometer Kendaraan</label>
                <input type="text" name="kilometer" class="form-control">
            </div>
            <div class="form-group">
                <label>Seri</label>
                <input type="text" name="seri" class="form-control">
            </div>
            <div class="form-group">
                <label>Warna Kendaraan</label>
                <div class="row gutters-xs">
                    <div class="col-auto">
                        <label class="colorinput">
                            <input name="warna" type="radio" class="colorinput-input" value="Biru" />
                            <span class="colorinput-color bg-primary"></span>
                            <p>Biru</p>
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="colorinput">
                            <input name="warna" type="radio" class="colorinput-input" value="Abu-abu"/>
                            <span class="colorinput-color bg-secondary"></span>
                            <p>Abu</p>
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="colorinput">
                            <input name="warna" type="radio" class="colorinput-input" value="Merah" />
                            <span class="colorinput-color bg-danger"></span>
                            <p>Merah</p>
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="colorinput">
                            <input name="warna" type="radio" class="colorinput-input" value="Kuning"/>
                            <span class="colorinput-color bg-warning"></span>
                            <p>Kuning</p>
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="colorinput">
                            <input name="warna" type="radio" class="colorinput-input" value="Hijau" />
                            <span class="colorinput-color bg-success"></span>
                            <p>Hijau</p>
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="colorinput">
                            <input name="warna" type="radio" class="colorinput-input" value="Putih"/>
                            <span class="colorinput-color bg-light"></span>
                            <p>Putih</p>
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="colorinput">
                            <input name="warna" type="radio" class="colorinput-input" value="Hitam" />
                            <span class="colorinput-color bg-dark"></span>
                        </label>
                        <p>Hitam</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Jenis Transmisi</label>
                <input type="text" name="transmisi" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Bensin</label>
                <input type="text" name="bensin" class="form-control">
            </div>
			<div class="form-group">
                    <label>Jadwal Service</label>
                    <input type="date" name="jadwalBooking" class="form-control">
                </div>
            <div class="form-group">
                <label>Plat Nomor</label>
                <input type="text" name="platNomor" class="form-control" value="<?= $user['plat_nomor'] ?>">
            </div>
			<div class="form-group">
				<label>Jenis Keluhan</label>
				<input type="text" name="jenisKendala" value=" " class="form-control">
			</div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">
                    Kirim
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
