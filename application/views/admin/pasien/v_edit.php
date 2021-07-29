

<div class="container-fluid">
	<h3>
		<?php echo $judul; ?>
	</h3>

	<!-- buat tag form -->
	<form action="<?= site_url('admin/datapasien/proses_edit') ?>" method="post">
		<input type="hidden" name="id" value="<?= $datapasien->id ?>">
		<div class="form-group">
			<div class="form-group">
			<label>Tanggal Periksa</label>
			<input type="date" name="tgl_periksa" class="form-control" value="<?= $datapasien->tgl_periksa ?>">
		</div>
			<label>Nama Lengkap</label>
			<input type="text" name="nama_lengkap" class="form-control"
			value="<?= $datapasien->nama_lengkap ?>">
		</div>
		<div class="form-group">
			<label>Nama Suami</label>
			<input type="text" name="nama_suami" class="form-control" value="<?= $datapasien->nama_suami ?>">
		</div>
		<div class="form-group">
			<label>Umur</label>
			<input type="number" name="umur" class="form-control" value="<?= $datapasien->umur ?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" value="<?= $datapasien->alamat ?>">
		</div>	
			<div class="form-group">
			<label>Usia Kehamilan</label>
			<input type="text" name="usia_kehamilan" class="form-control" value="<?= $datapasien->usia_kehamilan ?>">
		</div>
			<div class="form-group">
			<label>Taksiran Persalinan</label>
			<input type="date" name="taksiran_persalinan" class="form-control" value="<?= $datapasien->taksiran_persalinan ?>">
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
</body>
</html>