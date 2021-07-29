

<div class="container-fluid">
	<h3>
		<?php echo $judul; ?>
	</h3>

	<!-- buat tag form -->
	<form action="<?= site_url('admin/databidan/proses_edit') ?>" method="post">
		<input type="hidden" name="id" value="<?= $databidan->id ?>">
		<div class="form-group">
			<label>Nama Bidan</label>
			<input type="text" name="nama_bidan" class="form-control"
			value="<?= $databidan->nama_bidan ?>">
		</div>
		<div class="form-group">
			<label>Jadwal Praktek</label>
			<input type="text" name="jadwal_praktek" class="form-control" value="<?= $databidan->jadwal_praktek ?>">
		</div>
		<div class="form-group">
			<label>No Telpn</label>
			<input type="number" name="no_tlpn" class="form-control" value="<?= $databidan->no_tlpn ?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" value="<?= $databidan->alamat ?>">
		</div>	
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/databidan') ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
</div>
</body>
</html>