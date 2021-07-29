

<div class="container">
	<h3>
		<?php echo $judul; ?>
		<hr>
	</h3>

	<!-- buat tag form -->
	<div class="row">
		<div class="col-md-6">
	<form action="<?= site_url('admin/datapasien/proses_tambah') ?>" method="post">
		<div class="form-group">
			<div class="form-group">
			<label>Tanggal Periksa</label>
			<input type="date" required name="tgl_periksa" class="form-control">
		</div>
			<label>Nama lengkap</label>
			<input type="text" required name="nama_lengkap" class="form-control">
		</div>
		<div class="form-group">
			<label>Nama suami</label>
			<input type="text" required name="nama_suami" class="form-control">
		</div>
		<div class="form-group">
			<label>Umur</label>
			<input type="number" required name="umur" class="form-control">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" required name="alamat" class="form-control">
		</div>
		<div class="form-group">
			<label>Usia Kehamilan</label>
			<input type="text" required name="usia_kehamilan" class="form-control">
		</div>
		<div class="form-group">
			<label>Taksiran Persalinan</label>
			<input type="date" required name="taksiran_persalinan" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/datapasien') ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
		</div>
	</div>
</div>
</body>
</html>