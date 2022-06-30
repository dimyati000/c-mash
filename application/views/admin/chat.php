<title>Kirim Pesan</title>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<div class="main-content">
	<div class="container">
		<div class="card shadow-lg border-0 rounded-lg mt-5">
			<section class="section">
				<div class="section-header">
					<h1>Kirim Pesan</h1>
				</div>
				<div class="section-body">
					<div class="container-fluid">
						<!-- Form Chat -->
						<form method="post" autocomplete="off">
							<div class="form-group">
								<label>Nama Pengguna</label>
								<input type="text" id="namaPengguna" name="namaPengguna" class="form-control">
							</div>
							<div class="form-group">
								<label>No Whatsapp</label>
								<input type="text" id="noTelp" name="noTelp" class="form-control">
							</div>
							<div class="form-group">
								<label>Isi Pesan</label>
								<input type="text" id="pesan" name="pesan" class="form-control">
							</div>
							<button type="button" onclick="send()" class="btn btn-primary btn-sm">Kirim Pesan</button>
							<div id="n"></div>
							<br>
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

<!-- Kirim Chat WA -->
<script>
	function send() {
		var namaPengguna = document.getElementById('namaPengguna').value;
		var noTelp = document.getElementById('noTelp').value;
		var pesan = document.getElementById('pesan').value;
		if (pesan.length != 0) {
			var pesanEncode = encodeURI(pesan);
			var penggunaEncode = encodeURI(namaPengguna);
			var link = document.createElement('a');
			fixed = noTelp - 0;
			link.id = 'link'; //give it an ID!
			link.href = 'https://wa.me/62' + fixed + '?text=Hai%20' + penggunaEncode + '%0A' + pesanEncode; // Your URL
			console.log(link)
			document.getElementById("n").appendChild(link);
			document.getElementById('link').click();

		} else {
			alert('harap lengkapi formulir !');
		}
	}
</script>
