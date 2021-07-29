

<div class="container-fluid">
	<h3>
		<?php echo $judul; ?>
	</h3>

	<!-- buat tag form -->
	<form action="<?= site_url('admin/datapeserta/proses_edit') ?>" method="post">
		<input type="hidden" name="id" value="<?= $datapeserta->id ?>">
		<div class="form-group">
			<label>Tanggal Daftar</label>
			<input type="date" name="tgl_daftar" class="form-control"
			value="<?= $datapeserta->tgl_daftar ?>">
		</div>
		<div class="form-group">
			<label>Nama Ibu</label>
			<input type="text" name="nama_ibu" class="form-control" value="<?= $datapeserta->nama_ibu ?>">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" name="tgl_lahir" class="form-control" value="<?= $datapeserta->tgl_lahir ?>">
		</div>
		<div class="form-group">
			<label>Umur</label>
			<input type="text" name="umur" class="form-control" value="<?= $datapeserta->umur ?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" value="<?= $datapeserta->alamat ?>">
		</div>
		<div class="form-group">
			<label>No Tlpn</label>
			<input type="text" name="no_tlpn" class="form-control" value="<?= $datapeserta->no_tlpn ?>">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/datapeserta') ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
</div>
</body>
</html>