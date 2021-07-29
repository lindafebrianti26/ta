

<div class="container">
	<h3>
		<?php echo $judul; ?>
		<hr>
	</h3>

	<!-- buat tag form -->
	<div class="row">
		<div class="col-md-6">
	<form action="<?= site_url('admin/datakb/proses_tambah') ?>" method="post">
		<div class="form-group">
			<label> Nama </label>
			<input type="text" required name="nama" class="form-control">
		</div>
		<div class="form-group">
			<label>Nama Suami</label>
			<input type="text" required name="nama_suami" class="form-control">
		</div>
		<div class="form-group">
			<label>Jumlah Anak</label>
			<input type="text" required name="jumlah_anak" class="form-control">
		</div>
		<div class="form-group">
			<label>Jenis Kontrasepsi</label>
			<input type="text" required name="jenis_kontrasepsi" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/datakb'); ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
		</div>
	</div>
</div>
</body>
</html>