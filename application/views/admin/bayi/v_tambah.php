

<div class="container">
	<h3>
		<?php echo $judul; ?>
		<hr>
	</h3>

	<!-- buat tag form -->
	<div class="row">
		<div class="col-md-6">
	<form action="<?= site_url('admin/databayi/proses_tambah') ?>" method="post">
		<div class="form-group">
			<label> Nama </label>
			<input type="text" required name="nama" class="form-control">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" required name="tgl_lahir" class="form-control">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select required name="jenis_kelamin" class="form-control" >
				 <option>Laki-Laki</option>
				 <option>Perempuan</option>
				</select>
		</div>
		<div class="form-group">
			<label>Berat Lahir</label>
			<input type="text" required name="berat_lahir" class="form-control">
		</div>
		<div class="form-group">
			<label>Panjang Lahir</label>
			<input type="text" required name="panjang_lahir" class="form-control">
		</div>
		<div class="form-group">
			<label>Nama Ibu</label>
			<input type="text" required name="nama_ibu" class="form-control">
		</div>
		<div class="form-group">
			<label>Nama Ayah</label>
			<input type="text" required name="nama_ayah" class="form-control">
		</div>
		<div class="form-group">
			<label>Anak Ke</label>
			<input type="text" required name="anak_ke" class="form-control">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" required name="alamat" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('admin/databayi'); ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
		</div>
	</div>
</div>
</body>
</html>