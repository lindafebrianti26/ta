

<div class="container-fluid">
	<h3>
		<?php echo $judul; ?>
	</h3>

	<!-- buat tag form -->
	<form action="<?= site_url('admin/datakb/proses_edit') ?>" method="post">
		<input type="hidden" name="id" value="<?= $datakb->id ?>">
		<div class="form-group">
			<label>Nama </label>
			<input type="text" name="nama" class="form-control"
			value="<?= $datakb->nama?>">
		</div>
		<div class="form-group">
			<label>Nama Suami</label>
			<input type="text" name="nama_suami" class="form-control" value="<?= $datakb->nama_suami ?>">
		</div>
		<div class="form-group">
			<label>Jumlah Anak</label>
			<input type="text" name="jumlah_anak" class="form-control" value="<?= $datakb->jumlah_anak ?>">
		</div>
		<div class="form-group">
			<label>Jenis Kontrasepsi</label>
			<input type="text" name="jenis_kontrasepsi" class="form-control" value="<?= $datakb->jenis_kontrasepsi ?>">
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/datakb') ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
</div>
</body>
</html>