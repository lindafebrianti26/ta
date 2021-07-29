

	
	<div class="container-fluid">

        <!-- Page Heading -->
         <?php if ($this->session->flashdata('info')){ ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('info'); ?>
            </div>
         <?php } ?>

			<h3 class="h5 mb-6 text-gray-800">Halaman <?= $judul; ?> 		<a href="<?= site_url('admin/databayi/tambah') ?>" class="btn btn-outline-primary btn-sm float-right">
			<span class="fa fa-plus"></span> Tambah Data
		</a></h3> <hr>
		

	<table class="table table-bordered table-hover">
		<thead>
		<tr style="background-color: #4e73df; color: white; font-weight: bold;">
			<th>No</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Berat Lahir (KG)</th>
			<th>Panjang Lahir (CM)</th>
			<th>Nama Ibu</th>
			<th>Nama Ayah</th>
			<th>Anak Ke</th>
			<th>Alamat</th>
			<th class="text-center">Aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php $no = 1; ?>
		<?php foreach ($data as $key): ?>
			<tr>
				
				<td><?= $no++; ?></td>
				<td><?= $key->nama?></td>
				<td><?= $key->tgl_lahir ?></td>
				<td><?= $key->jenis_kelamin ?></td>
				<td><?= $key->berat_lahir?></td>
				<td><?= $key->panjang_lahir?></td>
				<td><?= $key->nama_ibu?></td>
				<td><?= $key->nama_ayah?></td>
				<td><?= $key->anak_ke?></td>
				<td><?= $key->alamat?></td>
				<td class="text-center">
					
					<a href="<?= site_url('admin/databayi/edit/'.$key->id) ?>" class="btn btn-outline-info btn-sm">
						<span class="fa fa-edit"></span> Edit
					</a>
					<a href="<?= site_url('admin/databayi/hapus/'.$key->id) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data ini ? ')">
						<span class="fa fa-trash"></span> Hapus
					</a>
				</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
</div>

    </div>



