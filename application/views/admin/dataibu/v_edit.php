

<div class="container-fluid">
	<h3>
		<?php echo $judul; ?>
	</h3>

	<!-- buat tag form -->
	<form action="<?= site_url('admin/dataibu/proses_edit') ?>" method="post">
		<input type="hidden" name="id" value="<?= $dataibu->id ?>">
		<div class="form-group">
			<label>Nama Ibu</label>
			<input type="text" name="nama_ibu" class="form-control"
			value="<?= $dataibu->nama_ibu ?>">
		</div>
		<div class="form-group">
			<label>Nama Suami</label>
			<input type="text" name="nama_suami" class="form-control" value="<?= $dataibu->nama_suami ?>">
		</div>
		<div class="form-group">
			<label>Umur</label>
			<input type="text" name="umur" class="form-control" value="<?= $dataibu->umur ?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" value="<?= $dataibu->alamat ?>">
		</div>
		<div class="form-group">
			<label>Cara Persalinan</label>
			<input type="text" name="cara_persalinan" class="form-control" value="<?= $dataibu->cara_persalinan ?>">
		</div>
		<div class="form-group">
			<label>Kondisi Ibu</label>
			<input type="text" name="kondisi_ibu" class="form-control" value="<?= $dataibu->kondisi_ibu ?>">
		</div>
		<div class="form-group">
			<label>Berat Bayi</label>
			<input type="text" name="berat_bayi" class="form-control" value="<?= $dataibu->berat_bayi ?>">
		</div>
		<div class="form-group">
			<label>Panjang Bayi</label>
			<input type="text" name="panjang_bayi" class="form-control" value="<?= $dataibu->panjang_bayi ?>">
		</div>
		<div class="form-group">
			<label>Kondisi Bayi</label>
			<input type="text" name="kondisi_bayi" class="form-control" value="<?= $dataibu->kondisi_bayi ?>">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/dataibu') ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
</div>
</body>
</html>