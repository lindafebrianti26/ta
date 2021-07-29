

<div class="container-fluid">
	<h3>
		<?php echo $judul; ?>
	</h3>

	<!-- buat tag form -->
	<form action="<?= site_url('admin/databayi/proses_edit') ?>" method="post">
		<input type="hidden" name="id" value="<?= $databayi->id ?>">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-control"
			value="<?= $databayi->nama ?>">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" name="tgl_lahir" class="form-control" value="<?= $databayi->tgl_lahir ?>">
		</div>
		<div class="form-group">
			<select name="jenis_kelamin" class="form-control" >
				 <option>Laki-Laki</option>
				 <option>Perempuan</option>
				</select>
			</div>
		
		<div class="form-group">
			<label>Berat Lahir (KG)</label>
			<input type="text" name="berat_lahir" class="form-control" value="<?= $databayi->berat_lahir ?>">
		</div>
		<div class="form-group">
			<label>Panjang Lahir (CM)</label>
			<input type="text" name="panjang_lahir" class="form-control" value="<?= $databayi->panjang_lahir ?>">
		</div>
		<div class="form-group">
			<label>Nama Ibu</label>
			<input type="text" name="nama_ibu" class="form-control" value="<?= $databayi->nama_ibu ?>">
		</div>
		<div class="form-group">
			<label>Nama Ayah</label>
			<input type="text" name="nama_ayah" class="form-control" value="<?= $databayi->nama_ayah?>">
		</div>
		<div class="form-group">
			<label>Anak Ke</label>
			<input type="text" name="anak_ke" class="form-control" value="<?= $databayi->anak_ke ?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" value="<?= $databayi->alamat ?>">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/databayi') ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
</div>
</body>
</html>