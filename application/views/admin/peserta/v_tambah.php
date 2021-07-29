

<div class="container">
	<h3>
		<?php echo $judul; ?>
		<hr>
	</h3>

	<!-- buat tag form -->
	<div class="row">
		<div class="col-md-6">
	<form action="<?= site_url('admin/datapeserta/proses_tambah') ?>" method="post">
		<div class="form-group">
			<label> Tanggal Daftar</label>
			<input type="date" required name="tgl_daftar" class="form-control">
		</div>
		<div class="form-group">
			<label>Nama Ibu</label>
			<input type="text" required name="nama_ibu" class="form-control">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" required name="tgl_lahir" class="form-control">
		</div>
		<div class="form-group">
			<label>Umur</label>
			<input type="text" required name="umur" class="form-control">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" required name="alamat" class="form-control">
		</div>
		<div class="form-group">
			<label>No Tlpn</label>
			<input type="text" required name="no_tlpn" class="form-control">
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/datapeserta'); ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
		</div>
	</div>
</div>
</body>
</html>