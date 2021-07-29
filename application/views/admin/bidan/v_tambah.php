
<div class="container">
	<h3>
		<?php echo $judul; ?>
		<hr>
	</h3>

	<!-- buat tag form -->
	<div class="row">
		<div class="col-md-6">
	<form action="<?= site_url('admin/databidan/proses_tambah') ?>" method="post">
		<div class="form-group">
			<label> Nama Bidan</label>
			<input type="text" required name="nama_bidan" class="form-control">
		</div>
		<div class="form-group">
			<label>Jadwal Praktek</label>
			<input type="text" required name="jadwal_praktek" class="form-control">
		</div>
		<div class="form-group">
			<label>No Tlpn</label>
			<input type="number"  required name="no_tlpn" class="form-control">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" required name="alamat" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/databidan'); ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
		</div>
	</div>
</div>
</body>
</html>