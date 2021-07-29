

<div class="container">
	<h3>
		<?php echo $judul; ?>
		<hr>
	</h3>

	<!-- buat tag form -->
	<div class="row">
		<div class="col-md-6">
	<form action="<?= site_url('admin/dataibu/proses_tambah') ?>" method="post">
		<div class="form-group">
			<label> Nama Ibu</label>
			<input type="text" required name="nama_ibu" class="form-control">
		</div>
		<div class="form-group">
			<label>Nama Suami</label>
			<input type="text" required name="nama_suami" class="form-control">
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
			<label>Cara Persalinan</label>
			<input type="text" required name="cara_persalinan" class="form-control">
		</div>
		<div class="form-group">
			<label>Kondisi Ibu</label>
			<input type="text" required name="kondisi_ibu" class="form-control">
		</div>
		<div class="form-group">
			<label>Berat Bayi</label>
			<input type="text" required name="berat_bayi" class="form-control">
		</div>
		<div class="form-group">
			<label>Panjang Bayi</label>
			<input type="text" required name="panjang_bayi" class="form-control">
		</div>
		<div class="form-group">
			<label>Kondisi Bayi</label>
			<input type="text" required name="kondisi_bayi" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/dataibu'); ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
		</div>
	</div>
</div>
</body>
</html>